@extends('layouts.base')

@section('body')
    @livewire('product-collection', ['products' => $products])  
@endsection