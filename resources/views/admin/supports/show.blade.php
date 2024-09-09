@extends('admin.layouts.app')
@section('title', 'Chamado ID: {{ $support->id }}')

@section('nav')
    @include('admin.supports.partials.nav')
@endsection

@section('content')
    @include('admin.supports.partials.details')
@endsection
@section('content-footer')
    @include('admin.supports.partials.footer')
@endsection
