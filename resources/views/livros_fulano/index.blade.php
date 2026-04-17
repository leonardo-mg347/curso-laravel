@extends ('mainFulano')

@section('content')
    <h2>Aqui estão todos os livros cadastrados</h2>
@forelse($livros_fulano as $livro)
    <ul>
        <li>{{ $livro->titulo ?? 'nada' }}</li>
    </ul>
@empty
NÃO TEM NENHUM LIVRO CADASTRADO
@endforelse
@endsection


@section('copy')
@include('livros_fulano.partials.copyright')
@endsection
