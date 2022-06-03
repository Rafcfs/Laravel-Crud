@extends('layout.template')

@section('titulo', 'index')

@section('top')
    <div class="title m-b-md ">
        Crud com Laravel
     </div>
@endsection

@section('content')
    <h1>Bem Vindo </h1>

    <ul>
        <li><form action="/insert" method="get">@csrf<button >Inserir</button></form></li>
        <li><form action="/read" method="post">@csrf<button >Consultar</button></form></li>
        <li><form action="/read" method="post">@csrf<button >Excluir</button></form></li>
    </ul>
@endsection