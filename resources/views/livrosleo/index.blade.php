@extends ('mainLeo')

@section('content')
    <h2>Aqui estão todos os livros cadastrados</h2>
    <button><a href="/livrosleo/create">Cadastrar</a></button>
@forelse($livros as $livro)
    @include('livrosleo.partials.fields')
@empty
NÃO TEM NENHUM LIVRO CADASTRADO
@endforelse
@endsection