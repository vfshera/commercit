<div class="brand-name-search">
    <span>E-Comm Store</span>
    <form  wire:submit.prevent="search">

        <input type="text" wire:model.debounce.150ms="search" placeholder="Search Items ...">

        <select name="" id="" wire:model.debounce.150ms="category">
            <option value="">All Categories</option>

            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach

        </select>
        <div class="search-results-wrapper">
            <div class="search-results">
                

                
                @foreach($searchedProducts as $product)
                    <p>{{ $product->title }}</p>
                @endforeach
                
                
            </div>
            
        </div>

        <button><i class="ti-search"></i></button>

    </form>



  </div>
