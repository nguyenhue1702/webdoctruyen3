@extends('layout/admin_layout')
@section('author_create')
    <div class="row ps-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Add Author</h3>

            </div>
            @if ($errors->any())
                <div class="alert alert-danger ">
                    <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
                </div>
            @endif
            <form action="{{ route('newauthor') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3 ">
                    <input type="text" name="name_author" placeholder="Name Author" class="form-control"
                        value="{{ old('name_author') }}">
                </div>
                @error('name_author')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3 ">
                    <input spellcheck="false" type="text" name="country_author" class="form-control" placeholder="Country"
                        value="{{ old('country_author') }}">
                </div>
                @error('country_author')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <img type src="" alt="" style="width:110px; height:140px" id="image" style="background-size:cover;">
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Img Comics</label>
                    <input class="form-control form-control-sm" type="file" name="img_author" id="imageFile"
                        onchange="chooseFile(this)">

                </div>
                @error('img_author')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3 ">
                    <input type="date" name="date_author" placeholder="Name Comics" class="form-control">
                </div>
                @error('date_author')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror

                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Apply</button>
                </div>
            </form>
        </div>

        <div class="col-3"></div>
    </div>
    <script src="{{ asset('js/img_show.min.js') }}"></script>
@endsection
