@extends('errors::layout')

@section('title', __('Unauthorized'))
@section('code', '401')
@section('message', __('Unauthorized'))
@section('btn')
    <a href="{{ app('router')->has('front.home') ? route('front.home') : url('/') }}"
       class="boxed-btn3"
       title="Retour à l'accueil">
        Retour à l'accueil
    </a>
@endsection

