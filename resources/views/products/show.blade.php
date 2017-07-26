@extends('layout')
@section('content')
    <div class="col-sm-8">
        <h2>
            {{ $productos->name }}
            <a href="{{ route('products.edit', $productos->id) }}" class="btn btn-default pull-right">Editar</a>
        </h2>
        <p>
            {{ $productos->short }}
        </p>
        {!! $productos->body !!}
    </div>
    <div class="col-sm-4">
        @include('products.fragmentos.aside')
    </div>
@endsection