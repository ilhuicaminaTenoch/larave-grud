@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h2>
            Nuevo producto
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listador</a>
        </h2>
        @include('products.fragmentos.error')
        {!! Form::open(['route' => 'products.store']) !!}
            @include('products.fragmentos.form')
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('products.fragmentos.aside')
    </div>
@endsection