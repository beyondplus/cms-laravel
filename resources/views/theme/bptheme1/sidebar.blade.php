<h4>{{ ucfirst(__('general.categories'))}}<hr></h4>     
<ul>
    @foreach(bp_tax() as $category)

    @if(App::getLocale() == 'mm')
        @if(isset($category->translate))
            @php $category = $category->translate; @endphp
        @endif
    @endif
    <a href="{{url('/cat/'.$category->tax_link) }}"><li class="list-group-item">{{ $category->tax_name }} </li></a>
    @endforeach
</ul>