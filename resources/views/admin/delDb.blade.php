@extends('layouts.admin')

@section('conteudo')
<div class="container">
    <h1 class="text-center">Excluir as últimas chamadas e Clientes?</h1>
    <a href="{{route('chamada.delAll')}}"><button class="btn btn-primary">Excluir</button></a>    
</div>
 @endsection