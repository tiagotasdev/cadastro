<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cliente;

class ControladorCliente extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
        return view('clientes', compact('clientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('novocliente');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
             $regras = [
                'nome' => 'required|min:3|max:30',
                'idade' => 'required',
                'endereco' => 'required|min:5',
                'email' => 'required|email'
            ];
            $mensagens = [
                'required' => 'O campo :attribute não pode estar em branco',
                'nome.required' => 'O nome é requerido',
                'nome.min' => 'É necessário no minimo 3 caracteres no nome.',
                'email.required' => 'Digite um endereço de e-mail',
                'email.email' => 'Digite um endereço de e-mail valido!'
            ];
            $request->validate($regras, $mensagens);
       
/*        
        $request->validate([
            'nome' => 'required|min:3|max:30',
            'idade' => 'required',
            'endereco' => 'required|min:5',
            'email' => 'required|email'
        ]);
*/        

        $cliente = new Cliente();
        $cliente->nome = $request->input('nome');
        $cliente->idade = $request->input('idade');
        $cliente->endereco = $request->input('endereco');
        $cliente->email = $request->input('email');
        $cliente->save();
        return redirect('clientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
