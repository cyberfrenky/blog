@extends('layout')

@section('content')
    <x-card>
        @unless (count($posts)==0)
            @foreach ($posts as $post)
            
                <x-c-body :post="$post"/> 
                
            @endforeach
        @else
            no posts
        @endunless
    </x-card>
@endsection

