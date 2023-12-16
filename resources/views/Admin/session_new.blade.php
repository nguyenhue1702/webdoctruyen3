@extends('layout/admin_layout')
@section('session_new')
<div class="row ">
    <div class="col-3"></div>

    <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                    <h3>Thêm Chương</h3>

            </div>
        <form action="{{ route('add_session') }}" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="mb-3 ">
                <label for="">Chương Số:</label>
                <input type="text" name="session" value="{{ old('session') }}" placeholder="Nhập chương số" class="form-control"
                   >
                   @error('session')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <input type="text" class="form-control" name="title_session"  placeholder="Nhập tên chương"  id="slug" onkeyup="ChangeToSlug()">
            </div>
            @error('title_session')
            <p class="validation-thongbao">{{ $message }}</p>
        @enderror
            <div class="mb-3 ">
                <input spellcheck="false" type="text" name="slug_session" class="form-control" placeholder="Nhập Slug"
                    id="convert_slug" >
                    @error('slug_session')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-3">
                <label for="">Thuộc Truyện</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_product">
                    @foreach ($truyens as $item)
                        <option value="{{ $item->id }}">{{ $item->name_product }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">Trạng thái:</label>
                <select name="kichhoat" id="" required class="form-select form-select-sm"
                    aria-label=".form-select-sm example">
                    <option value="0">Kích Hoạt</option>
                    <option value="1">Không Kích Hoạt</option>
                </select>
            </div>

            <div class="mb-3 ">
                <label class="form-label">Tóm Tắt :</label>
                <textarea   id="noidungtruyen1" name="tomtat_session" id="" cols="60" rows="10"></textarea>
                @error('tomtat_session')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-3 ">
                <label class="form-label">Nội dung :</label>
                <textarea id="noidungtruyen" name="content_session" id="" >{{ old('content_session') }}</textarea>
                @error('content_session')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Xác Nhận</button>
            </div>
        </form>
    </div>

    <div class="col-3"></div>
</div>
<script src="{{ asset('js/img_show.min.js') }}"></script>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection
