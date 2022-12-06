@extends('template.layout')
@section('title', 'Cadastrar Ingrediente')
@section('body')
<div class="container mt-3 w-50" >
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible" role="alert">
            {{ session()->get('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"> <span aria-hidden="true">&times;</span></button>
        </div>
    @endif
    <form action="{{ route('tipo_ingredientes.store') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label for="nome">Tipo de ingrediente</label>
            <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </form>
</div>
@endsection