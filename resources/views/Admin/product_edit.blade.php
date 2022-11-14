@extends('layout/admin_layout')
@section('product_edit')
    <div class="row">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Edit Comics</h3>

            </div>
            <form action="{{ route('update_product', $truyens->id) }}" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 ">
                    <input type="text" name="name_product" placeholder="Name Comics" class="form-control" id="slug"
                        onkeyup="ChangeToSlug()" value="{{ $truyens->name_product }}">
                </div>
                @error('name_product')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3 ">
                    <input spellcheck="false" type="text" name="slug_product" class="form-control" placeholder="Slug"
                        id="convert_slug" value="{{ $truyens->slug_product }}">
                </div>
                @error('slug_product')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <img src="/uploads/img_truyen/{{ $truyens->img_product }}" type src="" alt=""
                        style="width:110px; height:140px" id="image" style="background-size:cover;">
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
                    <label for=""><b>Danh Mục :</b> </label><br>

                    @foreach ($danhmucs as $dm)
                        <?php $checked = in_array($dm->id, $thuocdanh) ? 'checked' : '';?>

                        <div class="form-check form-check-inline">

                            <input class="form-check-input" name="danhmuc[]" type="checkbox"
                                id=" danhmuc_{{ $dm->id }}" value="{{ $dm->id }}" {{ $checked }}>
                            <label class="form-check-label" for="danhmuc_{{ $dm->id }}">{{ $dm->danhmuc }}</label>

                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for=""><b>Thể Loại :</b> </label><br>

                    @foreach ($theloais as $item)
                    <?php $checked = in_array($item->id, $thuocloai) ? 'checked' : '';?>
                        <div class="form-check form-check-inline">

                            <input class="form-check-input" type="checkbox" id="theloai_{{ $item->id }} "
                                name="theloai[]" value="{{ $item->id }} " {{ $checked }}>
                            <label class="form-check-label"
                                for="theloai_{{ $item->id }}0">{{ $item->theloai }}</label>

                        </div>
                    @endforeach
                </div>
                <div class="mb-3">
                    <label for="">Tác giả</label>
                    <select name="id_author" class="form-select form-select-sm" aria-label=".form-select-sm example"
                        required>
                        @foreach ($author as $item)
                            <option {{ $item->id == $truyens->id_author ? 'selected' : '' }}
                                value="{{ $item->id }}">
                                {{ $item->name_author }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Truyện Nổi Bật :</label>
                    <select name="hot" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @if ($truyens->hot == 0)
                            <option selected value="0">Nổi Bật</option>
                            <option value="1">Không Nổi Bật</option>
                        @else
                            <option value="0">Nổi Bật</option>
                            <option selected value="1">Không Nổi Bật</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Trạng thái:</label>
                    <select name="tinhtrang" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @if ($truyens->tinhtrang == 0)
                            <option selected value="0">Đang cập nhật</option>
                            <option value="1">Full</option>
                        @else
                            <option value="0">Đang cập nhật</option>
                            <option selected value="1">Full</option>
                        @endif
                    </select>
                </div>
                <div class="mb-3">
                    <label for="">Hiển Thị :</label>
                    <select name="kichhoat" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                        @if ($truyens->kichhoat == 0)
                            <option selected value="0">Kích Hoạt</option>
                            <option value="1">Không Kích Hoạt</option>
                        @else
                            <option value="0">Kích Hoạt</option>
                            <option selected value="1">Không Kích Hoạt</option>
                        @endif
                    </select>
                </div>

                <div class="mb-3 ">
                    <label class="form-label">Tóm Tắt :</label>
                    <textarea id="noidungtruyen" name="content_product" id="" cols="150"
                        rows="36">{{ $truyens->content_product }}</textarea>
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
