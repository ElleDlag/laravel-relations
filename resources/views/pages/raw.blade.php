@extends('layouts.app')

@section('raw')
<div class="col-12">
    <h1>Posts - Tags</h1>
</div>
@include('components.nav-button')



<div class="col-8 d-flex justify-content-center flex-wrap" style="margin:auto; margin-top:20px;">
        <div class="w-100 d-flex flex-nowrap" style="padding:10px 0;">
        <div class="w-50 d-flex flex-nowrap sorting">
            
                <div class="sortIdAsc d-flex">
                    {{-- sort by title --}}
                    <span style="display:inline-block; border:1px solid grey; padding:8px 20px; border-radius:5px">ID</span>
                    @if (Route::current() ->getName() == 'pages.raw' || Route::current() ->getName() == 'post-id.asc')
                    <a class="btn btn-primary" href={{ route('post-id.desc') }}><i class="fas fa-sort-numeric-down"></i></a>
                    @else
                    <a class="btn btn-primary" href={{ route('post-id.asc') }}><i class="fas fa-sort-numeric-up-alt"></i></a>
                    @endif
                    
                    {{-- sort by title --}}
                    <span style="display:inline-block; border:1px solid grey; padding:8px 20px; border-radius:5px">TITLE</span>
                    @if (Route::current() ->getName() == 'pages.raw')
                    <a class="btn btn-primary" href={{ route('post-title.asc') }}><i class="fas fa-sort-alpha-down"></i></a>
                    @elseif (Route::current() ->getName() == 'post-title.desc')
                    <a class="btn btn-primary active" href={{ route('post-title.asc') }}><i class="fas fa-sort-alpha-up"></i></a>
                    @else
                    <a class="btn btn-primary active" href={{ route('post-title.desc') }}><i class="fas fa-sort-alpha-down"></i></a>
                    @endif
                </div>
        </div>
 
        <form class="w-50 d-flex flex-nowrap justify-content-end align-items-center" action="{{ route('create.post') }}" method="post">
            @csrf
            @method('post')
            <div>
                <label for="search">search per title</label>
                <input type="text" name="title" id="search" placeholder="post title">
                <input type="submit" value="query">
            </div>
        </form>

        </div>

        <div class="w-100" style='box-sizing: border-box;'>
            @foreach ($posts as $post)
            <ul class="d-flex flex-wrap justify-content-center" style="list-style-type:none; margin:0; padding:0"> 
                <li class="d-flex flex-nowrap align-items-center justify-content-end" style="flex-basis:50%; border:1px solid #5f8ae8; padding:0 15px">(<b>{{ $post['id'] }}</b>) {{ $post['title'] }} </li>
                <ul style="flex-basis:50%; border:1px solid blue; list-style-type:none; margin:0; padding:15px 0">
                    @foreach ($post['tags'] as $tag)
                    <li style= "padding:0 15px">[{{ $tag['id'] }}] - {{ $tag['title'] }}</li>
                    @endforeach
                </ul>
            </ul>
            @endforeach
        </div>
</div>
@endsection