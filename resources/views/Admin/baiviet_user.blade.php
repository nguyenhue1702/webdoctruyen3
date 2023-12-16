@extends('layout/admin_layout')
@section('baiviet_user')
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">

        <hr class="hr">
        <div class="mb-3 phanloai">

            <h3>Danh sách bài đăng của người dùng</h3>

        </div>
        <div class="mb-3">
            <table class="table table-sm " id="dataTables-example">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Title</th>
                        <th scope="col">Content</th>
                        <th scope="col">Status</th>
                        <th scope="col">User</th>
                        <th scope="col">Control</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td>
                            <textarea name="" id="" cols="30" rows="3">{!! $item->content !!}</textarea>
                        </td>
                        <td>
                            <input type="checkbox" class="toggle-baivietuser" data-id="{{ $item->id }}" data-toggle="toggle" data-style="slow" data-on="Success" data-off="Waiting" {{ $item->apply == true ? 'checked' : '' }}>

                        </td>

                        <td>{{ $item->user_baiviet->name }}</td>

                        <td>
                            <div class="thaotac">
                                <button><a href="{{ route('edit_bv_user', $item->id) }}" class="btn-sua"><i class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;

                                <form action="{{ route('delete_bv_user', $item->id) }}" method="post" class="dele">
                                    @csrf
                                    @method('DELETE')
                                    <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')" type="submit"><i class="fa-solid fa-trash-can"></i></button>
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