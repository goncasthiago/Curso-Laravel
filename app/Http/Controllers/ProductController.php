<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{

    protected $request;

    public function __construct(Request $request){
        //dd($request->prm1);
        //$this->request = $request;
        $this->middleware('auth')->except(['show', 'index','create','edit','update','store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $teste = '<h1>Variavel do Controller 1</h1>'; //imprimir com {!! $teste !!}
        $teste = 123 ; //imprimir com {{ $teste}}
        $products = ['Chave de Fenda', 'Martelo', 'Furadeira', 'Alicate'];
        // primeiro formato para enviar informação para a view
        /*
        return view('teste',[
            'teste' => $teste
        ]);

        */

        //segundo formato de envitar dados
        return view('admin.layouts.products.index', compact('teste', 'products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all()); // recebe todos os campos enviados na requisiçao
        //dd($request->only(['name', 'description'])); //recebe apenas os campos mencionados
        //dd($request->name); //retorna o valor da variavel
        //dd($request->has('name')); // verifica se tem aquela variavel 
        //dd($request->input('casa', 'valor default')); // verifica se vem o nome, se vier, usa, se nao, usa o segundo campo
        //dd($request->except('_token'));// recebe todos os dados menos o _token
        //dd($request->file('photo')); //coloca o nome do campo que envia o arquivo
        //dd($request->photo->extension()); // retorna a extensao do arquivo
        //dd($request->photo->getClientOriginalName()); //Retorna o nome do arquivo
        //dd($request->photo->store('products')); // guarda o arquivo na pasta products

       if ($request->file('photo')->isValid())
       {
           $nameFile = $request->name . '.' . $request->photo->extension();
           dd($request->photo->storeAs('products', $nameFile));

       }
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
        return "Detalhes do produto: {$id}";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('admin.pages.products.edit', compact('id'));
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
       dd("Editando o produto $id");
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
