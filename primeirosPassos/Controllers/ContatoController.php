<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Contato;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return\Illuminate\Http\Response
     */
    public function index()
    {
        // $contato = Contato::all();

        // foreach($contato as $c){
        //     echo"id: ".$c->idContato . "<br/>";
        //     echo"Nome: ".$c->nome . "<br/>";
        //     echo"Email: ".$c->email . "<br/>";
        //     echo"Assunto: ".$c->assunto . "<br/>";
        //     echo"Mensagem: ".$c->mensagem . "<br/>";
        //     echo "<br/>";
        // }

        //
    }

    /**
     * Show the form for creating a new resource.
     * @return\Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     * @param\Illuminate\Http\Request $request
     * @return\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     * @param\Illuminate\Http\Request $request
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * 
     * @param int $id
     * @return\Illuminate\Http\Response
     */
    public function destroy(string $id)
    {
        //
    }
}
