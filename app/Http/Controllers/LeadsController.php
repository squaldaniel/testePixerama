<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LeadsRequest;
use App\Models\LeadsModel;

class LeadsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leads = \DB::table('leads')->simplePaginate(7);
        // LeadsModel::get()->perPage();
        return view('bootstrap.online.leads')->with([
                'title'=> 'Leads',
                'leads'=>$leads
                ]);
        dd(get_class_methods($leads));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LeadsRequest $request)
    {
        // dd($request->all());

        try {
            LeadsModel::create($request->all());
        } catch (\Throwable $th) {
            if($th->getCode() == '23000'){
                return redirect()->back()->with('error', 'Esse email já está cadastrado. aguarde o contato');
            }
        }
        return redirect()->back()->with('success', 'Sua mensagem foi enviada com sucesso.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
