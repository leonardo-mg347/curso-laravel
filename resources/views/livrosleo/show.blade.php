@extends('mainFulano')
@section('content')
<div>
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
    <div>
        <section>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi obcaecati est consectetur deleniti ex enim, sapiente eveniet dicta vero sint dignissimos possimus tempora magni eos libero sed molestiae maxime saepe!</p>
        </section>
    </div>
</div>
@endsection
@section('copy')
@include('livros_fulano.partials.copyright')
@endsection