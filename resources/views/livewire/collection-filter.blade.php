<div>
    @foreach($filterGroups as $filterGroup => $filtersList)
    <div class="filter-group">
        <h3 class="title">{{ $filterGroup }}</h3>   

        <div class="filter-list">
            @foreach($filtersList as $filter)
                <div class="filter">
                    <input type="checkbox" name="{{ $filterGroup }}" id="{{ $filterGroup }}">
                    <label for="{{ $filterGroup }}">{{ $filter }}</label>
                </div>
            @endforeach
        </div>
        
    </div>
    @endforeach

</div>
