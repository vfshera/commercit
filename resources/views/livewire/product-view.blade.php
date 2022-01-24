<div class="product-view-wrapper">

  <header class="breadcrumbs scecomm-container">
    Home > Collections > Product View > {{ ucwords( $product->title ) }}
  </header>

  <section class="product-view scecomm-container" x-data="{displayPhoto: @entangle('displayPhoto')}">

    <div class="img-desc">
      <div class="product-image">

        <img src="{{ $displayPhoto}}" alt="Product Image">

      </div>

      <div class="product-description">
        <h2>Product Description :</h2>
        <p> {{ $product->description }} </p>
      </div>
    </div>

    <div class="detail-snaps">
      <aside class="product-details">

        <div class="info">
          <h1>{{ ucwords($product->title) }}</h1>

          <div class="category-tags">
            <div class="product-categories">
              @foreach($product->productCategories as $productCategory)
              <span class="category">
                <a
                  href="{{ route('collections.category-view',['category' => $productCategory->category,'categorySlug' => $productCategory->category->slug]) }}">
                  {{  strtolower($productCategory->category->name) }}

                  {{ var_dump($productCategory->category) }}
                </a>
              </span>
              @endforeach
            </div>
            <div class="product-tags">

              @foreach($product->productTags as $productTag)
              <span class="tag">
                {{  "#".strtolower($productTag->tag->name) ?? "" }}
              </span>
              @endforeach
            </div>
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
            <label>Price: </label>
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
              <svg class="cart-icon w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                </path>
              </svg>

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

  @if(count($similarProducts) > 0 )
  <section class="similar-products scecomm-container">
    <div class="header">
      <h3>Similar Products</h3>
    </div>

    <div class="similar-products-list">


      @foreach($similarProducts as $similarProduct)
      <div class="similar-product" wire:click="viewProduct({{ $similarProduct }})">
        <img src="{{ $photos[rand(0,5)] }}" alt="{{ $similarProduct->title." Image" }}">
        <div class="product-info">
          <h6>

            @if(strlen($similarProduct->brand->name) > 17)

            {{ substr($similarProduct->brand->name, 0 ,17)."..." }}

            @else

            {{ $similarProduct->brand->name }}

            @endif

            </h4>
            <h5>

              @if(strlen($similarProduct->title) > 17)

              {{ substr($similarProduct->title, 0 , 17)."..." }}

              @else

              {{ $similarProduct->title }}

              @endif

              </h3>
              <p>Ksh.{{ $product->price }}</p>
        </div>

      </div>
      @endforeach

    </div>


  </section>

  @endif
</div>