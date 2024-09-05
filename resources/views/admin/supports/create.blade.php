@extends('admin.layouts.app')
@section('title', 'Suporte')

@section('nav')
    @include('admin.supports.partials.nav')
@endsection

<div class="container">
    <h1>Nos informe no que podemos ajudar?</h1>

    <x-alert />

    <form action="{{ route('supports.store') }}" method="POST">
        @include('admin.supports.partials.form');
    </form>
    <a href="{{ route('supports.index') }}">Cancelar</a>
</div>

@section('content-footer')
    @include('admin.supports.partials.footer')
@endsection
