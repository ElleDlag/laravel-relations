<div class="d-flex flex-wrap input-group tag-group w-50">
    @foreach ($tags as $tag)
        <div class="single-tag">
            <input type="checkbox" id="{{ $tag['title'] }}" name="tags[]"  value="{{ $tag['id'] }}">
            <label for="{{ $tag['title'] }}">[{{ $tag['id'] }}] - {{ $tag['title'] }}</label>
        </div>
    @endforeach
</div>