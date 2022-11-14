@extends('layout/admin_layout')
@section('Publishing')
    <div class="text codinh">List Publishing</div>
    <div class="form-danhsach">
        <div class="table-list">

            <table id="dataTables-example">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Nhà Xuất Bản</td>
                        <td>Hình Ảnh</td>
                        <td>Địa Chỉ</td>
                        <td>Thao Tác</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($publishings as $publishing)
                        <tr>
                            <th>{{ $publishing->id }}</th>
                            <th>{{ $publishing->name_publishing }}</th>
                            <th class="pd-10">
                                <img src="/uploads/img_publishing/{{ $publishing->img_publishing }}" alt="" srcset="">
                            </th>
                            <th>{{ $publishing->address }}</th>

                            <th>
                                <div class="thaotac">
                                    <button><a href="{{ route('edit_publishing', $publishing->id) }}"
                                            class="btn-sua"><i class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                    <form action="{{ route('delete_publishing', $publishing->id) }}" method="post"
                                        class="dele">
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                                            type="submit"><i class="fa-solid fa-trash-can"></i></button>
                                    </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>

            </table>
        </div>
    </div>
    <div class="Add movie author-move">
        <button>
            <a href="{{ route('create_publishing') }}" style="display: flex;"><i class='bx bxs-file-plus'
                    style="font-size:30px; line-height:40px"></i>ADD New</a>
        </button>
    </div>
@endsection
