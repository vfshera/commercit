<main class="collections-wrapper">

    <header class="breadcrumbs scecomm-container">
        Home > Collections
    </header>

    <div class="collections scecomm-container">

        <aside class="collections-filters">
            
                <h1>Filters</h1>
            
                @foreach($filterGroups as $filterGroup => $filtersList)
                    <div class="filter-group" x-data="{open: false}">
                        <h3 class="title" @click.prevent="open = !open">{{ ucfirst($filterGroup) }} <i class="ti-angle-down"></i></h3>   
            
                        <div class="filter-list" 
                        x-show="open"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 transform "
                        x-transition:enter-end="opacity-100 transform "
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 transform "
                        x-transition:leave-end="opacity-0 transform "
                        >
            
                            <div class="filter">
                                <input type="radio" name="{{ strtolower($filterGroup)."-filter" }}"  value="" id="{{ strtolower($filterGroup)."-filter" }}" checked>
                                <label for="{{ strtolower($filterGroup)."-filter" }}">Any</label>
                            </div>
            
                            @foreach($filtersList as $filter)
                                <div class="filter">
                                    <input type="radio" name="{{ strtolower($filterGroup)."-filter" }}" value="{{ strtolower($filter) }}" id="{{ strtolower($filterGroup)."-filter" }}">
                                    <label for="{{ strtolower($filterGroup)."-filter" }}">{{ ucfirst($filter) }}</label>
                                </div>
                            @endforeach
            
                            
            
                        </div>
                        
                    </div>
                @endforeach          
        </aside>
    
    
        <section class="collections-products">
            
<section class="filterable products-view ">

    <header class="product-actions">

        <h3>Featured Products</h3>

        <div class="sorting">
            <span class="products-shown">Showing 1-10 of 20 Products</span>
           
            <div class="per-page-group">

                <label for="per-page-select">Display: </label>
                <select name="per-page-select" class="per-page-select" defaultValue="10">
                    <option value="10">10 per page</option>
                    <option value="20">20 per page</option>
                </select>
            </div>
            
            <div class="sort-group">
                <label for="sort-by-select">Sort By: </label>
                <select name="sort-by-select" class="sort-by-select" defaultValue="brand-a-z">
                    <option value="brand-a-z">Brand [A-Z]</option>
                    <option value="title-a-z">Title [A-Z]</option>
                </select>
            </div>

            <div class="product-view-style" x-data="{ layout: 1}">
                View 
                <i class="ti-layout-grid3-alt" @click.prevent="layout = 1" :class=" layout == 1 && 'active'" ></i> 
                <i class="ti-menu-alt" @click.prevent="layout = 2"  :class=" layout == 2 && 'active' "></i>
            </div>
        </div>

    </header>

    <div class="product-list">

        

        @foreach($products as $product)
        
            <div class="product" wire:click="viewProduct({{ $product }})">
                <img src="{{ $photos[rand(0,5)] }}" alt="{{ $product->title." Image" }}">
                <div class="product-info">
                    <h4>{{ $product->brand->name }}</h4>
                    <h3>{{ $product->title }}</h3>
                    <p>Ksh.{{ $product->price }}</p>
                </div>
            </div>
            
        @endforeach




    </div>
</section>
    
        </section>
    </div>


</main>
