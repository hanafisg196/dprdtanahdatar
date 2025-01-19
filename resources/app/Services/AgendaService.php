<?php
namespace App\Services;

use Illuminate\Http\Request;

interface AgendaService
{
    public function getAgendaByUser();
    public function getAgendaById($id);
    public function createAgenda(Request $request);
    public function updateAgenda(Request $request,$id);
    public function deleteAgenda($id);
}
