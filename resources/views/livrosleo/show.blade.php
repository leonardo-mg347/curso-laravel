@extends('mainLeo')
@section('content')
<div>
    <section>
        <p>Aqui estão as informações sobre o livro que você escolheu:</p>
            <ul>
                <li>{{ $livro->titulo ?? 'nada' }}</li>
                <li>{{ $livro->autor ?? 'nada' }}</li>
                <li>{{ $livro->isbn ?? 'nada' }}</li>
            </ul>
    </section>
</div>
@endsection