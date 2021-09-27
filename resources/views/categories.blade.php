@extends('layouts.base')

@section('body')
<div class="categories-wrapper scecomm-container">
    <header class="breadcrumbs ">
        Home > Collections > Categories
    </header>
    <section class="categories ">

        @foreach($categories as $category)
            <div class="category" style="background: url({{ $cimages[rand(0,5)] }}) no-repeat">
                <div class="category-cloak">
                    <span>{{ $category->name }}</span>
                </div>
                
            </div>
        @endforeach
    </section>
</div>
@endsection