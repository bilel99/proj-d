@extends('errors::layout')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found'))
@section('btn')
    <a href="{{ app('router')->has('front.home') ? route('front.home') : url('/') }}" class="boxed-btn3" title="Retour à l'accueil">
        Retour à l'accueil
    </a>
@endsection
