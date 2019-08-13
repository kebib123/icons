@if($category->subCategory->isNotEmpty())
    @foreach($category->subCategory as $child)
        <li class="select-kit-row category-row is-highlighted ">
            <div class="category-status">
                @if(isset($parent) && $parent != '')
                    <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span value="aa" class="category-name">{{$parent->name}}</span>

                                </span>
                            </span>
                @endif
                            <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span value="aa" class="category-name">{{$category->name}}</span>

                                </span>
                            </span>
                <span class="badge-wrapper box">
                                <span class="badge-category-bg" style="background-color: #AB9364;"></span>
                                <span style="color: #FFFFFF;" class="badge-category ">
                                    <span value="aa" class="category-name">{{$child->name}}</span>

                                </span>
                            </span>
                <span class="topic-count">× 4</span>
            </div>

            <div class="category-desc">
                Topics that don't need a category, or don't fit into any other existing category.
            </div>
        </li>
        @include('icons.forum.Category.multi_cat',['category'=>$child, 'parent' => $category])
    @endforeach
@endif