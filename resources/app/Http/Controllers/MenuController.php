<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use App\Services\MenuService;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    protected MenuService $menuService;

    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    public function index(){
        $menus = Menu::with('subMenus')->latest()->paginate();
        return view('dashboard.page.settings.menu')->with('menus', $menus);
    }

    public function createMenu(Request $request){
        $this->menuService->save($request);
        return redirect()->back()->with('success', 'Menu berhasil ditambahkan');
    }

    public function updateMenu(Request $request, $id){
        $this->menuService->update($request, $id);
        return redirect()->back()->with('success', 'Menu berhasil di ubah');
    }
    public function deleteMenu($id){
        $this->menuService->delete( $id);
        return redirect()->back()->with('success', 'Menu berhasil di hapus');
    }

    public function createSubMenu(Request $request, $id){
        $this->menuService->createSubMenu($request, $id);
        return redirect()->back()->with('success', 'Sub Menu berhasil ditambahkan');
    }

    public function updateSubMenu(Request $request, $id){
        $this->menuService->updateSubMenu($request, $id);
        return redirect()->back()->with('success', 'Sub Menu berhasil di ubah');
    }

    public function deleteSubMenu($id){
        $this->menuService->deleteSubMenu($id);
        return redirect()->back()->with('success', 'Sub Menu berhasil di hapus');
    }
}
