@extends('admin.layouts.app')
@section('title', 'Suporte')

@section('nav')
    @include('admin.supports.partials.nav', compact('supports'))
@endsection

@section('content')
    @include('admin.supports.partials.content')
@endsection

@section('content-footer')
    @include('admin.supports.partials.footer')
@endsection
