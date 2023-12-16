@extends('layout/admin_layout')
@section('session_edit')
<div class="row ">
    <div class="col-3"></div>

    <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                    <h3>Chỉnh Sửa Chương</h3>

            </div>
        <form action="{{ route('update_session',$sessions->id) }}" enctype="multipart/form-data" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 ">
                <label for="">Chương số:</label>
                <input type="text" name="session" placeholder=" Nhập chương số" class="form-control" value="{{ $sessions->session }}"
                   >
                   @error('session')
                   <p class="validation-thongbao">{{ $message }}</p>
               @enderror
            </div>
            <div class="mb-3">
                <label for="">Title session</label>
                <input type="text" class="form-control" name="title_session"  placeholder="Nhập tên chương"  id="slug" onkeyup="ChangeToSlug()" value="{{ $sessions->title_session }}">
                @error('title_session')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-3 ">
                <label for="">Slug</label>
                <input spellcheck="false" type="text" name="slug_session" class="form-control" placeholder="Nhập Slug"
                    id="convert_slug" value="{{ $sessions->slug_session }}" >
                    @error('slug_session')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="">Thuộc Truyện</label>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example" name="id_product">
                    @foreach ($truyen as $item)
                    <option {{ $item->id == $sessions->id_product ? 'selected' : '' }} value="{{ $item->id }}">
                        {{ $item->name_product }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <select name="kichhoat" id="" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    @if ($sessions->kichhoat == 0)
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
                <textarea   id="noidungtruyen1" name="tomtat_session" id="" cols="60" rows="10">{{$sessions->tomtat_session}}</textarea>
                @error('tomtat_session')
                <p class="validation-thongbao">{{ $message }}</p>
            @enderror
            </div>
            <div class="mb-3 ">
                <label class="form-label">Nội dung :</label>
                <textarea id="noidungtruyen" name="content_session" id="" >{{$sessions->content_session}}</textarea>
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
