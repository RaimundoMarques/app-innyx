<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Produto;
use Illuminate\Support\Facades\DB;

class ProdutosEvent extends Controller
{

    public function produtos()
    {
        // Prefixo da URL API
        $urlApi = 'http://localhost:3333/api';

        // Variável de busca na página
        $search = request('search');

        if ($search) {

            $produto = Produto::where([
                ['name', 'like', '%' . $search . '%']
            ])->get();
        } else {

            //$produto = DB::select('SELECT * FROM produtos');
            $produto = Produto::find(1);
            
            //$produto = Produto::where(['id', '=', '2'])->get();
            $produto = Produto::all();
            //dd($produto);

            // BLOCO PARA EXTRAIR DADOS DA API
            // $response = Http::get("$urlApi/produtos")->json();
            // $data = array_reverse($response['data']);

            // foreach ($data as $item => $key) {

            //     extract($key);

            //     $produto[] = [
            //         'id'            => $key['id'],
            //         'name'          => $key['name'],
            //         'description'   => $key['description'],
            //         'price'         => $key['price'],
            //         'date_valid'    => $key['date_valid'],
            //         'image'         => $key['image']
            //     ];
            // }
        }

        return view('produtos', [
            'produto' => $produto,
            'search' => $search
        ]);
    }






    public function showCreate()
    {
        return view('events.createProduto');
    }
    public function store(Request $request)
    {

        $produto = new Produto();

        $produto->name          = $request->name;
        $produto->description   = $request->description;
        $produto->price         = $request->price;
        $produto->date_valid    = $request->date_valid;

        if($request->hasFile('image') && $request->file('image')->isValid()){

            $requestImage = $request->image;

            $extesion = $requestImage->extension();

            $imageName = md5($requestImage->image->getClientOriginalName() . strtotime("now")) . "." . $extesion;

            $requestImage->image->move(public_path('img/img-products'), $imageName);

            $produto->image = $imageName;
        }

        $user = auth()->user();
        $produto->user_id = $user->id;

        $produto->save();
        return redirect('/produtos')->with('msg', 'Produto cadastrado!');
    }



    public function showDelete($id)
    {
        $produto = Produto::findOrFail($id);
        //dd($paciente);
        return view('events.deleteProduto', [
            'produto' => $produto
        ]);
    }

    public function destroy($id)
    {
        Produto::findOrFail($id)->delete();
        return redirect('/produtos')->with('msg', 'Produto deletado!');
    }


    public function showEdit($id)
    {
        $produto = Produto::findOrFail($id);
        return view('/events.editProduto', [
            'produto' => $produto
        ]);
    }

    public function update(Request $request)
    {
        Produto::findOrFail($request->id)->update($request->all());
        return redirect('/produtos')->with('msg', 'Produto atualizado!');
    }
}
