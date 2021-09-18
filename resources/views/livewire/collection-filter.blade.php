<div>
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
                @foreach($filtersList as $filter)
                    <div class="filter">
                        <input type="radio" name="{{ $filterGroup }}" id="{{ $filterGroup }}">
                        <label for="{{ $filterGroup }}">{{ $filter }}</label>
                    </div>
                @endforeach
            </div>
            
        </div>
    @endforeach

</div>
