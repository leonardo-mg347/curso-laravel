@extends('main')

@section('content')
<div>
    <form method="post" action="/livros">
    @csrf
    @include('livros.partials.form')
    </form>
</div>
@endsection
