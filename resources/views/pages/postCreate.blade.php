@extends('layouts.app')

@section('create')
<form action="{{ route ('store.post') }}" method="post">
    @csrf
    @method('post')

    <h1>nuovo post</h1>
    <div>
        <label for="title">title</label>
        <input type="text" value="" id="title" name ='title'>
    </div>
    <br>
    <div>
        <label for="author">author</label>
        <input type="text" value="" id="author" name ='author'>
    </div>
    <br>
    <div>
        <label for="category">category</label>
        <select name="category" id="category">
            @foreach ($categories as $category)
                <option value="{{ $category['id'] }}">{{ $category['title'] }}</option>
            @endforeach
        </select>
    </div>
    <br>
    <div>
    <button type="submit">inserisci</button>
    <button type="submit">modifica</button>
    </div>
    
    @include('components.tag-group')
</form>


@endsection
