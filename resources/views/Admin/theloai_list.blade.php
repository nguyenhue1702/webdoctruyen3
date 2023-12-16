@extends('layout/admin_layout')
@section('theloai_list')
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Thêm Thể Loại</h3>

            </div>
            <form action="{{ route('add_tl') }}" method="POST">
                @csrf
                @if ($errors->any())
                    <div class="alert alert-danger ">
                        <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
                    </div>
                @endif
                <div class="mb-3 ">
                    <input type="text" name="theloai" value="{{ old('name_theloai') }}"class="form-control"
                        placeholder="Nhập thể loại" id="slug" onkeyup="ChangeToSlug()">
                </div>
                @error('name_theloai')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror

                <div class="mb-3 ">
                    <input spellcheck="false" type="text" name="slugtl" class="form-control" placeholder="Nhập Slug"
                        id="convert_slug" value="{{ old('slugtl') }}">
                </div>
                @error('slugtl')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Xác Nhận</button>
                </div>
            </form>
            <hr class="hr">
            <div class="mb-3 phanloai">

                <h3>Danh Sách</h3>

            </div>
            <div class="mb-3">
                <table class="table table-sm " id="dataTables-example">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên thể loại</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Hành động</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($all_theloai as $tl)
                            <tr>
                                <td>{{ $tl->id }}</td>
                                <td>{{ $tl->theloai }}</td>
                                <td>{{ $tl->slugtl }}</td>
                                <td>
                                    <div class="thaotac">
                                        <button><a href="{{ route('edit_tl', $tl->id) }}" class="btn-sua"><i
                                                    class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                        <form action="{{ route('delete_tl', $tl->id) }}" method="post" class="dele">
                                            @csrf
                                            @method('DELETE')
                                            <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                                                type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                        </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        </div>

        <div class="col-3"></div>
    </div>
    <script src="{{ asset('js/slug.min.js') }}"></script>
@endsection
