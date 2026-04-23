@extends('mainLeo')

@section('content')
<form action="/livrosleo" method="post">
    @csrf
    @include('livrosleo.partials.form')
</form>
@endsection