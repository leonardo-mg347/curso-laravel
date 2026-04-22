@extends('main')

@section('content')
<div>
    <form method="post" action="/livros/{{ $livro->id }}">
    @csrf
    @method('patch')
    @include('livros.partials.form')
    </form>
</div>
@endsection