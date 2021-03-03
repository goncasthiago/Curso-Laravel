@extends('admin.layouts.app')

@section('title', 'Cadastrar novo Produto')

@section('content')
<h1>Cadastrar Novo Produto</h1>

@if($errors->any())
    @foreach ($errors->all() as $error)
        <li> {{ $error }} </li> 
             
    @endforeach
    <br>
@endif

<form action="{{route('products.store')}}" method="post" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" placeholder="Nome: " value="{{ old('name') }}">
    <input type="text" name="description" placeholder="Descrição" value="{{ old('description') }}">
    <input type="file" name="photo">
    <button type="submit">Enviar</button>
</form>
    
@endsection