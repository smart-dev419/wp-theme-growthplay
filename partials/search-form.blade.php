{{--TODO: Reuse this search-form view across all other views--}}
<form action="{{ get_permalink() }}" class="search-form" method="get" role="search">
    <a href="#" class="search-opener"><span>{{ _e( 'Search' ) }}</span><i class="icon-search"></i></a>
    <div class="search-inner">
        <div class="search-drop">
            <input type="search" placeholder="Search" name="search_query" value="">
            <button type="submit"><i class="icon-search"></i></button>
        </div>
    </div>
</form>