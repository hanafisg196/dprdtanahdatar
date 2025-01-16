<?php

namespace App\Services\Impl;

use App\Models\Menu;
use App\Models\SubMenu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuServiceImpl implements MenuService
{
    private function validation($request)
    {
        return $request->validate([
            'nama' => 'required|string|regex:/^[A-Z]/|max:50',
            'tipe' => 'required|numeric',
            'link' => ['required','string',
                function ($attribute, $value, $fail) {
                    if ($value === '#') {
                        return;
                    }
                    if (!filter_var($value, FILTER_VALIDATE_URL)) {
                        $fail('' . $attribute . ' url tidak valid.');
                    }
                },
             ],
            ]);
    }

    private function validationSubMenu($request){
      return  $request->validate([
            'subnama' => 'required|string|regex:/^[A-Z]/|max:50',
            'sublink' => 'required|url',
        ]);
    }

    public function getAllMenu()
    {
       return  Menu::with('subMenus')->latest()->paginate(2);
    }

    public function save(Request $request)
    {
        $validated = $this->validation($request);
        Menu::create([
            'name' => $validated['nama'],
            'type' => $validated['tipe'],
            'link' => $validated['link'],
        ]);
    }
    public function update(Request $request, $id)
    {
        $menu = Menu::find($id);
        $validated = $this->validation($request);
        $menu->update([
            'name' => $validated['nama'],
            'type' => $validated['tipe'],
            'link' => $validated['link'],
        ]);
    }
    public function delete($id)
    {
        $menu = Menu::find($id);
        $menu->subMenus()->delete();
        $menu->delete();
    }

    public function createSubMenu(Request $request, $id)
    {
        $validated = $this->validationSubMenu($request);
        SubMenu::create([
            'sub_name' => $validated['subnama'],
            'sub_link' => $validated['sublink'],
            'menu_id' => $id,
        ]);
    }
    public function updateSubMenu(Request $request, $id)
    {
        $validated = $this->validationSubMenu($request);
        $subMenu = SubMenu::find($id);
        $subMenu->update([
            'sub_name' => $validated['subnama'],
            'sub_link' => $validated['sublink']
        ]);
    }
    public function deleteSubMenu($id)
    {
        $submenu = SubMenu::find($id);
        $submenu->delete();
    }
}
