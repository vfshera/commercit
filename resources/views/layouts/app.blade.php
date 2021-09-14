@extends('layouts.base')

@section('body')
    <x-navbar></x-navbar>
    @yield('content')
    <x-footer></x-footer>
    
    @isset($slot)
        {{ $slot }}
    @endisset
@endsection
