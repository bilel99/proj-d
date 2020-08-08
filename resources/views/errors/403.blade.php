@extends('errors::layout')

@section('title', __('Forbidden'))
@section('code', '403')
@section('message', __($exception->getMessage() ?: 'Forbidden'))
@section('btn')
    <a href="{{ app('router')->has('front.home') ? route('front.home') : url('/') }}" class="boxed-btn3">
        Retour à l'accueil
    </a>
@endsection

