@extends('layout/admin_layout')
@section('product_new')
    <div class="row ps-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Add Comics</h3>

            </div>
            <form action="{{ route('add_product') }}" enctype="multipart/form-data" method="POST">
                @csrf
                <div class="mb-3 ">
                    <input type="text" name="name_product" placeholder="Name Comics" class="form-control" id="slug"
                        onkeyup="ChangeToSlug()" value="{{ old('name_product') }}">
                </div>
                @error('name_product')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3 ">
                    <input spellcheck="false" type="text" name="slug_product" class="form-control" placeholder="Slug"
                        id="convert_slug" value="{{ old('slug_product') }}">
                </div>
                @error('slug_product')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <img type src="" alt="" style="width:110px; height:140px" id="image" style="background-size:cover;">
                </div>
                <div class="mb-3">
                    <label for="formFileSm" class="form-label">Img Comics</label>
                    <input class="form-control form-control-sm" type="file" name="img_product" id="imageFile"
                        onchange="chooseFile(this)">

                </div>
                @error('img_product')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <label for=""><b>Danh Mục :</b>  </label><br>

                    @foreach ($danhmucs as $dm)
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" name="danhmuc[]" type="checkbox" id=" danhmuc_{{$dm->id}}"
                                value="{{ $dm->id }}" >
                            <label class="form-check-label" for="danhmuc_{{$dm->id}}">{{ $dm->danhmuc }}</label>

                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for=""><b>Thể Loại :</b>  </label><br>

                    @foreach ($theloais as $item)
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="checkbox" id="theloai_{{ $item->id }} " name="theloai[]"
                                value="{{ $item->id }}" >
                            <label class="form-check-label" for="theloai_{{ $item->id }}0">{{ $item->theloai }}</label>

                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for=""><b>
                        Thể Loại :<b></label>
                </div>
                <div class="mb-3">
                    <label for="">Tác giả</label>
                    <select name="id_author" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @foreach ($tacgias as $tacgia)
                            <option value="{{ $tacgia->id }}">{{ $tacgia->name_author }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Truyện Nổi Bật:</label>
                    <select name="hot" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="0">Nổi Bật</option>
                        <option value="1">Không Nổi Bật</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Trạng thái:</label>
                    <select name="tinhtrang" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="0">Đang cập nhật </option>
                        <option value="1">Hoàn Thành</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Hiển Thị :</label>
                    <select name="kichhoat" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        <option value="0">Kích Hoạt</option>
                        <option value="1">Không Kích Hoạt</option>
                    </select>
                </div>


                <div class="mb-3 ">
                    <label class="form-label">Tóm Tắt :</label>
                    <textarea id="noidungtruyen" name="content_product" id="" cols="150"
                        rows="36">{{ old('content_product') }}</textarea>
                </div>
                @error('content_product')
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
    <script src="{{ asset('js/slug.min.js') }}"></script>
@endsection
