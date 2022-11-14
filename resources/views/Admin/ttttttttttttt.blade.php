<div class="text codinh">Edit Banner</div>
<form action="{{ route('update_banner', $banners->id) }}" enctype="multipart/form-data" method="POST">
    @csrf
    @method('PUT')
    <div class="form-create ">
        <div class="tuan-input">
            <input type="text" spellcheck="false" required name="title_banner" value="{{ $banners->title_banner }}">
            <label for="">Title Banner</label>
        </div>
        <div class="tuan-input moveip">


            <select name="show_banner" id="" style="width:100%;height:35px">
                @if ('show' == $banners->show_banner)
                    {
                    <option selected value="show">Hiện</option>
                    <option value="hidden">Ẩn</option>
                    }
                @else{
                    <option value="show">Hiện</option>
                    <option selected value="hidden">Ẩn</option>
                    }
                @endif
            </select>
        </div>
        <div class="movehinh">
            <input type="file" spellcheck="false" name="img_banner" id="imageFile" onchange="chooseFile(this)"
                style="width:100%;height:50px">
        </div>

        <div class="banner-show"><img src="/uploads/img_banner/{{ $banners->img_banner }}" alt=""
                style="width:900px; height:450px" id="image"></div>

        <div class="submit">
            <button style="width:100%">Update</button>
        </div>
    </div>

</form>
<script src="{{ asset('js/img_show.min.js') }}"></script>