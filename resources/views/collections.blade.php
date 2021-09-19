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
            
<section class="filterable products-view ">

    <header class="product-actions">

        <h3>Featured Products</h3>

        <div class="sorting">
            <span>Sowing 1-10 of 20 Products</span>
           
            <div class="per-page-group">

                <label for="per-page-select">Display : </label>
                <select name="per-page-select" class="per-page-select" defaultValue="10">
                    <option value="10">10 per Page</option>
                    <option value="20">20 per Page</option>
                </select>
            </div>
            
            <div class="sort-group">
                <label for="sort-by-select">Sort By : </label>
                <select name="sort-by-select" class="sort-by-select" defaultValue="brand-a-z">
                    <option value="brand-a-z">Brand [A-Z]</option>
                    <option value="title-a-z">Title [A-Z]</option>
                </select>
            </div>

            <div class="product-view-style">
                View
            </div>
        </div>

    </header>

    <div class="product-list">

        <div class="product">
            <img src="/storage/images/products/product6.webp" alt="Automated Soap Dispenser">
            <div class="product-info">
                <h4>DOLPHIN</h4>
                <h3>Automated Soap Dispenser</h3>
                <p>Ksh.4,100</p>
            </div>
        </div>

        

        <div class="product">
            <img src="/storage/images/products/product5.webp" alt="2-Ring Ring Binder Green Texet 2">
            <div class="product-info">
                <h4>TEXET</h4>
                <h3>2-Ring Ring Binder Green Texet 2</h3>
                <p>Ksh.200</p>
            </div>
        </div>


        <div class="product">
            <img src="/storage/images/products/product4.webp" alt="Heavy Duty Project File With Pocket Blue Texet A4">
            <div class="product-info">
                <h4>TEXET</h4>
                <h3>Heavy Duty Project File With Pocket Blue Texet A4</h3>
                <p>Ksh.70</p>
            </div>
        </div>


        <div class="product">
            <img src="/storage/images/products/product3.webp" alt="2-Ring Ring Binder Blue Globe 1" A4">
            <div class="product-info">
                <h4>GLOBE</h4>
                <h3>2-Ring Ring Binder Blue Globe 1" A4</h3>
                <p>Ksh.250</p>
            </div>
        </div>


        <div class="product">
            <img src="/storage/images/products/product2.webp" alt="USB Wired Keyboard HP">
            <div class="product-info">
                <h4>HP</h4>
                <h3>USB Wired Keyboard HP</h3>
                <p>Ksh.4500</p>
            </div>
        </div>


        <div class="product">
            <img src="/storage/images/products/product1.webp" alt="All-in-One DeskJet Printer HP">
            <div class="product-info">
                <h4>HP</h4>
                <h3>All-in-One DeskJet Printer HP</h3>
                <p>Ksh.5,100</p>
            </div>
        </div>



    </div>
</section>
    
        </section>
    </div>


</main>
@endsection