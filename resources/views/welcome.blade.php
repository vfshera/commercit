@extends('layouts.base')

@section('body')
<section class="showcase scecomm-container" style="background: url('{{ asset('storage/images/showcase.webp')}}') no-repeat  center;">
    <div class="showcase-content">
        <h2>Office & School Stationery, IT & Furniture</h2>
        <p>Everything you need to operate seamlessly</p>
        <button>BROWSE</button>
    </div>

</section>


<section class="featured products-view scecomm-container">

    <div class="title-action">
        <h3>Featured Products</h3>
        <a href="{{ route('collections.featured') }}">View All  
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>

    <div class="product-list">

        <div class="product">
            <img src="storage/images/products/product6.webp" alt="Automated Soap Dispenser">
            <div class="product-info">
                <h4>DOLPHIN</h4>
                <h3>Automated Soap Dispenser</h3>
                <p>Ksh.4,100</p>
            </div>
        </div>

        

        <div class="product">
            <img src="storage/images/products/product5.webp" alt="2-Ring Ring Binder Green Texet 2">
            <div class="product-info">
                <h4>TEXET</h4>
                <h3>2-Ring Ring Binder Green Texet 2</h3>
                <p>Ksh.200</p>
            </div>
        </div>


        <div class="product">
            <img src="storage/images/products/product4.webp" alt="Heavy Duty Project File With Pocket Blue Texet A4">
            <div class="product-info">
                <h4>TEXET</h4>
                <h3>Heavy Duty Project File With Pocket Blue Texet A4</h3>
                <p>Ksh.70</p>
            </div>
        </div>


        <div class="product">
            <img src="storage/images/products/product3.webp" alt="2-Ring Ring Binder Blue Globe 1" A4">
            <div class="product-info">
                <h4>GLOBE</h4>
                <h3>2-Ring Ring Binder Blue Globe 1" A4</h3>
                <p>Ksh.250</p>
            </div>
        </div>


        <div class="product">
            <img src="storage/images/products/product2.webp" alt="USB Wired Keyboard HP">
            <div class="product-info">
                <h4>HP</h4>
                <h3>USB Wired Keyboard HP</h3>
                <p>Ksh.4500</p>
            </div>
        </div>


        <div class="product">
            <img src="storage/images/products/product1.webp" alt="All-in-One DeskJet Printer HP">
            <div class="product-info">
                <h4>HP</h4>
                <h3>All-in-One DeskJet Printer HP</h3>
                <p>Ksh.5,100</p>
            </div>
        </div>



    </div>
</section>


<section class="shop-by-category scecomm-container">
    
    <div class="title-action">
        <h3>Shop by Category</h3>
        <a href="{{ route('collections.categories') }}">View All 
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path></svg>
        </a>
    </div>

    <div class="category-list">

        
        <div class="category">
            <img src="storage/images/categories/copypaper_300x.webp" alt="Printer & Copier Paper">
           
                <h3>Printer & Copier Paper</h3>
                
        </div>



        <div class="category">
            <img src="storage/images/categories/binders_300x.webp" alt="Files & Folders">
        
                <h3>Files & Folders</h3>
                
        </div>

        

        <div class="category">
            <img src="storage/images/categories/hp-ink_300x.webp" alt="Toners & Catriges">
            
                <h3>Toners & Catriges</h3>
                
        </div>


        <div class="category">
            <img src="storage/images/categories/officechair_300x.webp" alt="Chairs">
            
                <h3>Chairs</h3>
               
        </div>


        <div class="category">
            <img src="storage/images/categories/Pen_300x.webp" alt="Pens & Ink">
           
                <h3>Pens & Ink</h3>
               
        </div>


        <div class="category">
            <img src="storage/images/categories/School_Supplies_300x.webp" alt="Its Back to SChool 2021...">
            
                <h3>Its Back to SChool 2021...</h3>
              
        </div>

    </div>

</section>




<section class="our-assurances scecomm-container">

    <div class="assurance">
        <i class="ti-credit-card"></i>
        <div class="claim">
            <h3>Secure Payments</h3>
            <p>M-Pesa or Cash on Pickup</p>
        </div>
    </div>

    <div class="assurance">
        <i class="ti-medall"></i>
        <div class="claim">
            <h3>100% Authentic</h3>
            <p>Guaranteed high quality with genuine brands</p>
        </div>
    </div>

    <div class="assurance">
        <i class="ti-headphone-alt"></i>
        <div class="claim">
            <h3>Top-Notch Support</h3>
            <p>Over 27 years of excellent customer satisfaction</p>
        </div>
    </div>

    <div class="assurance">
        <i class="ti-package"></i>
        <div class="claim">
            <h3>Reliable delivery</h3>
            <p>Fast and on-time deliveries to keep you going</p>
        </div>
    </div>

</section>


<section class="divider-section scecomm-container">
    <hr>
</section>








@endsection
