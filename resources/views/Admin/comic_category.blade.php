@extends('layout/admin_layout')
@section('comic_category')
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Add Category</h3>

            </div>
            <form action="{{ route('add_dm') }}" method="POST">
                @csrf
                @if ($errors->any())
    <div class="alert alert-danger ">
        <i class="fa-solid fa-triangle-exclamation"></i> Vui Lòng Kiểm tra Dữ liệu !
    </div>
@endif
                <div class="mb-3 ">
                    <input type="text" name="danhmuc" value="{{old('danhmuc')}}"class="form-control" placeholder="Enter Category" id="slug"
                        onkeyup="ChangeToSlug()">
                </div>
                @error('danhmuc')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                
                <div class="mb-3 ">
                    <input spellcheck="false" type="text" name="slugdm" class="form-control" placeholder="Enter Slug"
                        id="convert_slug" value="{{old('slugdm')}}">
                </div>
                @error('slugdm')
                    <p class="validation-thongbao">{{ $message }}</p>
                @enderror
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Apply</button>
                </div>
            </form>
            <hr class="hr">
            <div class="mb-3 phanloai">

                <h3>List Category</h3>
    
            </div>
            <div class="mb-3">
                <table class="table table-sm " id="dataTables-example">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Name</th>
                            <th scope="col">Slug</th>
                            <th scope="col">Setting</th>

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tendms as $tendm)
                            <tr>
                                <td>{{ $tendm->id }}</td>
                                <td>{{ $tendm->danhmuc }}</td>
                                <td>{{ $tendm->slugdm }}</td>
                                <td>
                                    <div class="thaotac">
                                        <button><a href="{{ route('editdm', $tendm->id) }}"
                                                class="btn-sua"><i
                                                    class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                        <form action="{{ route('delete_dm', $tendm->id) }}" method="post"
                                            class="dele">
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
