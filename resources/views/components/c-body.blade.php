@props(['post'])
    

<div class="w-90 bg-light my-5 p-2 card-body">
    <a href="/posts/{{$post->id}}">
        <h1>{{$post->title}}</h1>
    </a>
    <p class="tags">
        <x-tags :tagsCsv="$post->tags"></x-tags>
    </p>
    <p class="email">{{$post->email}}</p>
    <p class="description">{{$post->description}}</p>
</div>
