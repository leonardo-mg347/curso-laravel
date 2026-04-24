@extends('mainLeo')

@section('content')
<form action="/livrosleo/{{ $livro->id }}" method="post">
    @csrf
    @method('patch')
    @include('livrosleo.partials.form')
</form>
@endsection
@section('flash')
@parent
@endsection