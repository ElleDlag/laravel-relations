{{-- <div class="testForm">
    {!! Form::open(array('route' => 'post.store')) !!}
    {!! Form::label('MyInput', 'Mia Label') !!}
    {!! Form::text('MyInput', 'pippo') !!}
    {!! Form::close() !!}
</div>  --}}

<form action="{{ route ('post.store') }}" method="post">
    @csrf
    @foreach ($tags as $tag)
        <div>
            <label for="{{ $tag['title'] }}">{{ $tag['title'] }}</label>
            <input type="checkbox" name="title" id="{{ $tag['title'] }}">
        </div>
    @endforeach
    <label for="inputTag">Input TAG</label>
    <input type="text" id='inputTag' name='title'>
    <button type="submit">insert tag</button>
</form>
 