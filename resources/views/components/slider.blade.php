<div class="slider">
    @foreach($images as $image)
        <div class="slide">
            <img src="{{ $image }}" alt="Slide Image">
        </div>
    @endforeach
</div>
