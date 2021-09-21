

<div>
    <header class="breadcrumbs scecomm-container">
        Home > Collections > Product View > {{ ucwords( $product->title ) }}
    </header>
    
    <section class="product-view scecomm-container" x-data="{displayPhoto: @entangle('displayPhoto')}">
        
        <div class="product-images">
           
    
            <img src="{{ $displayPhoto}}" alt="Product Image">
        </div>
    
        <div class="detail-snaps">
            <aside class="product-details">

                <div class="info">
                    <h1>{{ ucwords($product->title) }}</h1>

                    <div class="product-tags">             
                        @foreach($product->productTags as $productTag)
                            <span class="tag">{{  "#".strtolower($productTag->tag->name) }}</span>
                        @endforeach
                    </div>
    
                    <div class="share-brand">
                        <div class="brand">
                            {{ $product->brand->name }}
                        </div>
    
                        <div class="share">
                            <i class="ti-share"></i>
                        </div>
                    </div>

                   

                </div>
    
                <div class="price-purchase">
    
                    <div class="price">
                       <label >Price: </label> 
                       <span>Ksh.{{ number_format( $product->price , 0, '.', ',') }}</span>
                    </div>
    
                    <div class="quantity">
                        <label>Quantity:</label>
                        <select name="quantity" id="quantity">
                            <option value="1">1</option>
    
                            @foreach(range(1,10) as $quant)
                            <option value="{{ $quant }}">{{ $quant }}</option>
                            @endforeach
                        </select>
                    </div>
    
                    <button>Add To Cart
                        <span>
                            <svg class="cart-icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                   
                        </span>
                    </button>
                </div>
    
            </aside>
    
            <div class="snapshots">
                @foreach($photos as $photo)
                    <img src="{{ $photo }}" @click.prevent="displayPhoto = '{{ $photo }}' " alt="{{ $product->slug."-photo" }}">
                @endforeach
    
            </div>
        </div>
    </section>
</div>
