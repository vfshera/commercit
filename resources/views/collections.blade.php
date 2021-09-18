@extends('layouts.base')

@section('body')
<main class="collections-wrapper">

    <header class="breadcrumbs scecomm-container">
        Home > Collections
    </header>

    <div class="collections scecomm-container">

        <aside class="collections-filters">
            @livewire('collection-filter')            
        </aside>
    
    
        <section class="collections-products">
    
        </section>
    </div>


</main>
@endsection