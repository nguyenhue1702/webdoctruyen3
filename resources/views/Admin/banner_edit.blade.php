@extends('layout/admin_layout')
@section('banner_edit')
<div class="row ">
    <div class="col-3"></div>

    <div class="col-6 style-input">
            <div class="mb-3 phanloai">
                
                    <h3>EDIT BANNER</h3>
                
            </div>
        <form action="{{ route('update_banner',$banners->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 ">
                <label for="">Title Banner :</label>
                <input type="text" name="title_banner" placeholder=" Enter Title Banner" class="form-control" value="{{ $banners ->title_banner }}"
                   >
                   @error('title_banner')
                   <p class="validation-thongbao">{{ $message }}</p>
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Trạng thái:</label>
                @if('show'== $banners ->show_banner)
                <select name="show_banner" id="" required class="form-select form-select-sm"
                    aria-label=".form-select-sm example">
                    <option selected value="show">Kích Hoạt</option>
                    <option value="hidden">Không Kích Hoạt</option>
                </select>
                @else
                <select name="show_banner" id="" required class="form-select form-select-sm"
                aria-label=".form-select-sm example">
                <option value="show">Kích Hoạt</option>
                <option selected  value="hidden">Không Kích Hoạt</option>
            </select>
                @endif
            </div>
            <div class="mb-3">
                <img type src="/uploads/img_banner/{{$banners->img_banner}}" alt="" style="width:870px; height:350px" id="image" style="background-size:cover;">
            </div>
            <div class="mb-3">
                <label for="formFileSm" class="form-label">Img Comics</label>
                <input class="form-control form-control-sm" type="file" name="img_banner" id="imageFile"
                    onchange="chooseFile(this)">

            </div>
            @error('img_banner')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <button type="submit" class="btn btn-success">UPDATE</button>
            </div>
        </form>
    </div>

    <div class="col-3"></div>
</div>
<script src="{{ asset('js/img_show.min.js') }}"></script>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection
