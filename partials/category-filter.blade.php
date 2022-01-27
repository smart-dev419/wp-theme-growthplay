<?php
    $category_filter = get_field('category_filter'); //ID of parent resource type category ("Sales Insights or Professional Services Insights")
    $category_id = isset($_GET['category'])? $_GET['category']:'';
?>
@if($category_filter)
    <?php $all_cats = get_terms( 'resource_categories', array(
                    'child_of' => $category_filter,
                    'orderby' => 'name',
                    'hide_empty' => false)
    ); ?>
    @if(!empty($all_cats))
        <select class="cat-filter">
            <option value="">All</option>
            @foreach($all_cats as $category)
                <option
                        value="{{ $category->term_id }}"
                        {{$category->term_id == $category_id ? 'selected':''}}
                        >{{ $category->name }}</option>
            @endforeach
        </select>
    @endif
@endif