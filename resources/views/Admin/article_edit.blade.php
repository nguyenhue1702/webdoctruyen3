@extends('layout/admin_layout')
@section('article_edit')
    <div class="text codinh "> Sửa Bài Viết</div>
    <form action="{{ route('updatebv', $baiviets->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-create">

            <div class="Admin-Create">
                <div class="nhaplieu">
                    <div>
                        <label for="">Tên Bài Viết</label>
                        <input type="text" placeholder="Nhập Tên Bài Viết" name="name_bv" value="{{ $baiviets->name_bv }}">
                    </div>
                    <br>
                    <div class="hinhanh ">
                        <label for="">Hình Ảnh</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="file" name="hinhanh_bv" id="imageFile" onchange="chooseFile(this)"
                            value="{{ $baiviets->hinhanh_bv }}">
                        <div class="img-hienthi"><img src="/uploads/img_baiviet/{{ $baiviets->hinhanh_bv }}" alt=""
                                style="width:200px; height:280px" id="image"></div>

                    </div>
                    <br>
                    <div class="Update">
                        <button>Cập Nhật</button>
                    </div>
                </div>
                <div class="noidung">
                    <label for="">Nội dung</label>
                    <textarea id="" cols="150" rows="25" placeholder="Nhập Nội Dung" name="info_bv">{{ $baiviets->info_bv }}</textarea>
                </div>

            </div>
        </div>

    </form>
    <script src="{{ asset('js/img_show.min.js') }}"></script>
@endsection
