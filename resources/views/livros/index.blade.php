@extends('main')
@section('content')
@parent
@forelse($livros_catalogados as $livro)
@include('livros.partials.fields')
<br>
@empty
NÃO TEM NADA REGISTRADO NESSE SISTEMINHA
@endforelse
@endsection