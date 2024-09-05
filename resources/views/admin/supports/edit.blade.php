@extends('admin.layouts.app')
@section('title', 'Suporte')

@section('nav')
    @include('admin.supports.partials.nav')
@endsection<h1>Nos informe no que podemos ajudar?</h1>

@section('content')
    @include('admin.supports.partials.form_edit')
@endsection

@section('content-footer')
    @include('admin.supports.partials.footer')
@endsection
