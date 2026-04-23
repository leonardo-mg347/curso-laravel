@extends('laravel-usp-theme::master')
@section('styles')
    <style>
        input{
            display:block;
        }
    </style>
@endsection
@section('javascripts_bottom')
<script type="text/javascript" src="{{ asset('js/livro.js') }}"></script>
@endsection