<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeadsRequest;
use App\Models\LeadsModel;
use App\Models\ClientesModel;
use Illuminate\Support\Facades\DB;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = DB::table('leads')->simplePaginate(7);

        return view('bootstrap.online.leads')->with([
                'title' => 'Leads',
                'leads' => $leads
                ]);
    }

    /**
     * Convert Lead em Client
     */
    public function convert($id)
    {
        $lead = LeadsModel::find($id);
        $newClient = new ClientesModel;
        $newClient->nome = $lead->name;
        $newClient->email = $lead->email;
        $newClient->save();

        dd($newClient);
        return $lead;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LeadsRequest $request)
    {
        try {
            LeadsModel::create($request->all());
        } catch (\Throwable $th) {
            if($th->getCode() == '23000'){
                return redirect()->back()->with('error', 'Esse email já está cadastrado. aguarde o contato');
            }
        }
        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso.');
    }

}
