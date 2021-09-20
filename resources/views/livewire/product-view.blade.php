

<div>
    <header class="breadcrumbs scecomm-container">
        Home > Collections > Product View > {{ $product->title }}
    </header>
    
    <section class="product-view scecomm-container" x-data="{displayPhoto: @entangle('displayPhoto')}">
        
        <div class="product-images">
           
    
            <img src="{{ $displayPhoto}}" alt="Product Image">
        </div>
    
        <div class="detail-snaps">
            <aside class="product-details">

                <div class="info">
                    <h1>{{ $product->title }}</h1>
    
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
                       <span>{{ number_format( $product->price , 0, '.', ',') }}</span>
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
    
                    <button>Add To Cart</button>
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
