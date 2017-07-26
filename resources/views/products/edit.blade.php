@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h2>
            Editar producto
            <a href="{{ route('products.index') }}" class="btn btn-default pull-right">Listador</a>
        </h2>
        @include('products.fragmentos.error')
        {!! Form::model($productos, ['route' => ['products.update', $productos->id], 'method' => 'PUT']) !!}
            @include('products.fragmentos.form')
        {!! Form::close() !!}
    </div>
    <div class="col-sm-4">
        @include('products.fragmentos.aside')
    </div>
@endsection