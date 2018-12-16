@extends('layouts.app')

@section('content')
    <h3 class="text-center text-warning">
      文章列表
    </h3>
  @foreach ($posts as $post)
    <hr/>      
    <div class="text-center">
      {{-- <a href="{{route('posts.show',$post->id)}}"> --}}
      {{-- <a href="{{url('posts',$post->id)}}"> --}}
      <a href="{{ url('posts/'.$post->id) }}">
        {{ $post->title }}
      </a>
      <div>{{ $post->published_at->diffForHumans() }}</div>
    </div>
  @endforeach
    <div class="text-center">
      {{$posts->links()}} 
    </div>   
@endsection