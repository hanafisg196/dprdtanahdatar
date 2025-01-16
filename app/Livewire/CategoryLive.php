<?php

namespace App\Livewire;

use Livewire\Component;
use App\Services\CategoryService;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Livewire\Attributes\On;
use Livewire\WithPagination;
class CategoryLive extends Component
{
    use WithPagination;

    public $nama;
    public $editNama;
    public $categoryId;

    protected CategoryService $categoryService;

    public function boot(
        CategoryService $categoryService
    )

    {
        $this->categoryService = $categoryService;
    }
    #[On('post-update')]
    public function allert($message){
        $this->js(<<<JS
            Swal.fire({
                text: "$message",
                icon: "success"
            });
        JS);
    }
    public function toastSuccess($message){
        $this->js(<<<JS
        Swal.fire({
            toast: true,
            position: 'top-end',
            text: "$message",
            icon: "success",
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 3000
        });
    JS);
    }
    public function toastError($message){
        $this->js(<<<JS
        Swal.fire({
            toast: true,
            position: 'top-end',
            text: "$message",
            icon: "error",
            showConfirmButton: false,
            timerProgressBar: true,
            timer: 3000
        });
    JS);
    }

    public function add() {
        $request = new Request([
            'nama' => $this->nama
        ]);
        $this->categoryService->createCategory($request);
        $this->resetForm();
        $this->toastSuccess('Kategori berhasil di tambahkan');

    }
    public function edit($id) {
        $category = $this->categoryService->get($id);
        $this->categoryId = $category->id;
        $this->editNama = $category->nama;

    }

    public function update() {

        $request = new Request([
            'nama' => $this->editNama
        ]);
        $this->categoryService->updateCategory($request, $this->categoryId);
        $this->resetForm();
        $this->toastSuccess('Kategori berhasil diubah');

    }

    public function delete($id) {
        try {
            $this->categoryService->deleteCategory($id);
            $this->toastSuccess("Kategori berhasil dihapus");
        } catch(\Exception $e) {
            $this->toastError("Gagal menghapus kategori");

        }
    }


    private function resetForm() {
        $this->nama = '';
        $this->editNama = '';

    }

    public function placeholder()
    {
        return view('placeholder.component.circle-loading-center');
    }

    public function render()
    {
        $data = $this->categoryService->getCategory()->paginate(10);
        return view('livewire.category-live')->with('data', $data);
    }

}
