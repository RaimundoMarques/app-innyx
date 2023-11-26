<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Cliente;

class ClientesEvents extends Controller
{
    public function dashboard()
    {
        return view('/dashboard');
    }






    public function clientes()
    {
        $search = request('search');

        if ($search) {

            $cliente = Cliente::where([
                ['nome', 'like', '%' . $search . '%']
            ])->get();
        } else {

            $cliente = Cliente::all();
        }

        return view('clientes', [
            'cliente' => $cliente,
            'search' => $search
        ]);
    }





    public function showDelete($id)
    {
        $cliente = Cliente::findOrFail($id);
        //dd($cliente);

        $namePage = "Deletar usuário";

        return view('events.deleteCliente', [
            'cliente' => $cliente,
            'namePage' => $namePage
        ]);
    }
    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect('/clientes')->with('msg', 'Usuário deletado com sucesso!');
    }





    public function showEdit($id)
    {
        $cliente = Cliente::findOrFail($id);
        return view('/events.editCliente', [
            'cliente' => $cliente
        ]);
    }
    public function update(Request $request)
    {
        Cliente::findOrFail($request->id)->update($request->all());
        
        return redirect('/clientes')->with('msg', 'Usuário editado com sucesso!');
    }




    public function showCreate()
    {
        return view('events.createCliente');
    }
    public function store(Request $request)
    {

        $cliente = new Cliente;

        $cliente->nome     = $request->nome;
        $cliente->cpf      = $request->cpf;
        $cliente->telefone = $request->telefone;
        $cliente->cidade   = $request->cidade;
        $cliente->tipo     = $request->tipo;

        $user = auth()->user();
        $cliente->user_id = $user->id;

        $cliente->save();
        return redirect('/clientes')->with('msg', 'Cliente cadastrado com sucesso!');
    }
}
