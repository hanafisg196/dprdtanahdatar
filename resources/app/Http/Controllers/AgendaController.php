<?php

namespace App\Http\Controllers;

use App\Services\AgendaService;
use App\Services\CategoryService;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    protected $categoryService;
    protected $agendaService;

    public function __construct(
        CategoryService $categoryService,
        AgendaService $agendaService

    ){
        $this->categoryService = $categoryService;
        $this->agendaService  = $agendaService;
    }
    public function index(){
        $data = $this->agendaService->getAgendaByUser();
        return view('dashboard.page.agenda.agenda-list')->with('data', $data);
    }
    public function form(){
        $category = $this->categoryService->getCategoryAgenda();
        return view('dashboard.page.agenda.agenda-form')->with([
            'category' => $category
        ]);
    }
    public function store(Request $request){
        $this->agendaService->createAgenda($request);
        return redirect()->route('dashboard.agenda.list')->with('success', 'Agenda berhasil ditambahkan');
    }

    public function update(Request $request, $id){
        $this->agendaService->updateAgenda($request, $id);
        return redirect()->back()->with('success', 'Agenda berhasil diperbarui');
    }

    public function delete($id){
        $this->agendaService->deleteAgenda($id);
        return redirect()->back()->with('success', 'Agenda berhasil dihapus');
    }
    public function show($id){
        $category = $this->categoryService->getCategoryAgenda();
        $data =  $this->agendaService->getAgendaById($id);
        return view('dashboard.page.agenda.agenda-show')->with([
            'category' => $category,
            'data' => $data
        ]);
    }
}

