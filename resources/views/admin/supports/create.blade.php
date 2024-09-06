@extends('admin.layouts.app')
@section('title', 'Suporte')

@section('nav')
    @include('admin.supports.partials.nav')
@endsection

@section('content')
    @include('admin.supports.partials.create')
@endsection

@section('content-footer')
    @include('admin.supports.partials.footer')
@endsection
