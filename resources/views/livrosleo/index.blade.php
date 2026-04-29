@extends ('mainLeo')

@section('content')
    <!-- Vazia -->
@forelse($livros as $livro)
    @include('livrosleo.partials.fields')
@empty
NÃO TEM NENHUM LIVRO CADASTRADO
@endforelse
@endsection