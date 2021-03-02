@extends('admin.layouts.app')

@section('title', 'Produtos')

@section('content')

    <h1> Página de Produtos </h1>

    @component('admin.components.card')
        @slot('title')
            <h2>Título do Card</h2>
        @endslot

    Um card de exemplo
        
    @endcomponent
    <hr>
    <a href="{{ route('products.create')}}">Cadastrar</a>
    <hr>

    @include('admin.alerts.alerts',['content' => 'Mensagem de Alerta' ])

    <hr>

    @isset($products)
        @foreach ($products as $product)
        
        <p class="@if ($loop->first) last @endif">{{$product}}</p>
            
        @endforeach
    @endisset
    <hr>
        @forelse ($products as $product)
        <p class="@if ($loop->last) last @endif">{{$product}}</p>
        @empty
            <p>Não existem produtos cadastrados.</p>
        @endforelse

    <hr>
    @if ($teste === '123')
        É string 
    @elseif ($teste === 123)
        É número
    @else
        É diferente
    @endif

    @unless ($teste === 123)
        <p>Teste não retornou o nome</p>
        
    @endunless
    
    @isset($teste)
        <p>Valor recebido</p>
    @endisset

    @auth
        <p> Autenticado </p>

        @else
        <p> Não Autenticado</p>
    @endauth

    @guest
        <p>Não Autenticado</p>
    @endguest

    @switch($teste)
        @case(1)
            <p>Valor igual a 1</p>
            @break
        @case(123)
        <p>Valor igual a 123</p>
            
            @break
        @default
        <p>Outro número</p>
            
    @endswitch

@endsection

@push('styles')
    
<style>
    .last {
        background: yellowgreen;
    }
</style>
@endpush