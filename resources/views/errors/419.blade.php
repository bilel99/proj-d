@extends('errors::layout')

@section('title', __('Page Expired'))
@section('code', '419')
@section('message', __('Page Expired'))
@section('btn')
    <a href="{{ app('router')->has('front.home') ? route('front.home') : url('/') }}" class="boxed-btn3">
        Retour à l'accueil
    </a>
@endsection

