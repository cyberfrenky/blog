@props(['tagsCsv'])

@php
    $tags = explode(',' , $tagsCsv);
@endphp


<ul class="list">
    @foreach ($tags as $tag)
        <li class="list-item">
            <a href="/?tag={{$tag}}" class="list-item-link">{{$tag}}</a>
        </li>
    @endforeach
    
</ul>