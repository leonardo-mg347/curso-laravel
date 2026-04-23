<div>
    <ul>
        <li>{{ $livro->titulo ?? 'nada'}}</li>
        <li>{{ $livro->autor ?? 'nada'}}</li>
        <li>{{ $livro->isbn ?? 'nada'}}</li>
        <li><a href="/livros/{{ $livro->id }}/edit">Editar</a></li>
        <li>
        <form method="post" action="/livrosleo/{{ $livro->id }}">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Você tem certeza que quer excluir esse livro dos regitros?');">Apagar</button>
    </form>
        </li>
    </ul>
</div>  