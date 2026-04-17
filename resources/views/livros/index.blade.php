@extends('main')

@section('content')

@forelse($livros_catalogados as $livro_escolhido)
@include('livros.partials.fields')
<br>
@empty
NÃO TEM NADA REGISTRADO NESSE SISTEMINHA
@endforelse
@endsection