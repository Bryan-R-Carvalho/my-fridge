@extends('template.layout')
@section('title', 'My-Fridge')
@section('body')
<div class="container">
@component('components.ingrediente', ['ingredientes' => $ingredientes, 'tipo' => $tipo])

@endcomponent
<div>
@endsection