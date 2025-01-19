<?php

namespace App\Livewire;

use App\Services\CategoryService;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;

class CategoryArticleLive extends Component
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
    public function render()
    {
        $data = $this->categoryService->getCategoryArticle()->paginate(10);
        return view('livewire.category-article-live')->with('data', $data);
    }
    private function resetForm() {
        $this->nama = '';
        $this->editNama = '';

    }
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

    public function add(){
        $request = new Request([
            'nama' => $this->nama
        ]);
        $this->categoryService->createCategoryArticle($request);
        $this->resetForm();
        $this->toastSuccess('Kategori berhasil di tambahkan');
    }

    public function edit($id) {
        $categoryArticle = $this->categoryService->getCategoryArticleById($id);
        $this->categoryId = $categoryArticle->id;
        $this->editNama = $categoryArticle->nama;

    }

    public function update() {
        $request = new Request([
            'nama' => $this->editNama
        ]);
        $this->categoryService->updateCategoryArticle($request, $this->categoryId);
        $this->resetForm();
        $this->toastSuccess('Kategori berhasil diubah');

    }
    public function delete($id) {
        try {
            $this->categoryService->deleteCategoryArticle($id);
            $this->toastSuccess("Kategori berhasil dihapus");
        } catch(\Exception $e) {
            $this->toastError("Gagal menghapus kategori");

        }
    }
    public function placeholder()
    {
        return view('placeholder.component.circle-loading-center');
    }


}
