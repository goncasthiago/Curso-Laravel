<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $products = ['Product 01', 'Product 02', 'Product 03'];
        return $products;
    }

    public function show($id){
        return "Exibindo o Produto do id: {$id}";
    }

    public function create(){
        return "Formulário de Criação de novo produto";
    }

    public function edit($id){
        return "Edição do Produto id: {$id}";
    }

    public function store(){
        return "Produto Cadastrado!";
    }

    public function update($id){
        return "Editando o produto: {$id}";
    }

    public function destroy($id){
        return "Apagando o produto: {$id}";
    }
}

