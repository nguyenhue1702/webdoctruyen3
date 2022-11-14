<div class="slide-nen">
    <div class="">
        <div class="image-container">
            @foreach ($banners as $banner)
                <div class="image image1 ">

                    <img src="/uploads/img_banner/{{ $banner->img_banner }}" alt="img_banner">
                    <h3 class="image-tittle">{{ $banner->title_banner }}</h3>

                </div>
            @endforeach
            <div class="image image3 active ">
                <img src="/img/slide1.png" alt="sea">
                <h3 class="image-tittle">Books</h3>
            </div>
        </div>
    </div>
</div>
