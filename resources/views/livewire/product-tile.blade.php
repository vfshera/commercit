<div class="product" wire:click="view">
  <img src="{{ url('storage/images/products/product' . rand(1,6) .'.webp') }}" alt="{{ $product->title.' Image' }}">
  <div class="product-info">
    <h4>{{ $product->brand->name }}</h4>
    <h3>
      <a href="{{ route('collections.product-view',['product' => $product,'productSlug' => $product->slug]) }}">
        {{ $product->title }} </a>
    </h3>
    <p>Ksh.{{ $product->price }}</p>
  </div>
</div>