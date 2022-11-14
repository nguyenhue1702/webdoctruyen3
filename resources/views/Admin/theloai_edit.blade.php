@extends('layout/admin_layout')
@section('edit_tl')
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">
        <div class="mb-3 phanloai">

            <h3>Edit Thể Loại</h3>

        </div>
        <form action="{{ route('updatetl', $theloai->id) }}" method="POST">
            @csrf
            @method('PUT')
            @if ($errors->any())
                <div class="alert alert-danger ">
                    <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
                </div>
            @endif
            <div class="mb-3 ">
                <label for="">Danh Mục :</label>
                <input type="text" name="name_theloai" value="{{ $theloai->theloai }}" class="form-control"
                    placeholder="Enter Category" id="slug" onkeyup="ChangeToSlug()">
            </div>
            @error('dmtruyen')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror

            <div class="mb-3 ">
                <label for="">Slug Danh Mục:</label>
                <input spellcheck="false" type="text" name="slugtl" class="form-control" placeholder="Enter Slug"
                    id="convert_slug" value="{{ $theloai->slugtl }}">
            </div>
            @error('slugtl')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection