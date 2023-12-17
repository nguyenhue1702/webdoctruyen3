@extends('layout/admin_layout')
@section('baiviet_user')
<style>
    .expandable-cell .content {
 max-height: 160px;
 max-width: 300px;
 overflow: hidden;
 transition: max-height 0.3s ease;
}

/* CSS cho nút "Xem thêm" */
.toggle-button {
 display: block;
 margin-top: 10px;
 cursor: pointer;
 border: 0px;
 background-color: inherit;
}
</style>
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
                        <th scope="col">Tên truyện</th>
                        <th scope="col">Nội dung</th>
                        <th scope="col">Trạng thái</th>
                        <th scope="col">Tên người dùng</th>
                        <th scope="col">Hành động</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach ($list as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->title }}</td>
                        <td class="expandable-cell">
                            <div class="content">
                                <p>{!! $item->content !!}</p>
                            </div>
                            <button class="toggle-button" onclick="toggleContent(this)">Xem thêm</button>
                        </td>

                        <td>
                            @if (Session::get('roleUser') == 1)
                            <input disabled type="checkbox" class="toggle-baivietuser" data-id="{{ $item->id }}" data-toggle="toggle" data-style="slow" data-on="Success" data-off="Waiting" {{ $item->apply == true ? 'checked' : '' }}>
                            @elseif (Session::get('roleUser') == 2)
                            <input type="checkbox" class="toggle-baivietuser" data-id="{{ $item->id }}" data-toggle="toggle" data-style="slow" data-on="Success" data-off="Waiting" {{ $item->apply == true ? 'checked' : '' }}>
                            @endif
                        </td>

                        <td>{{ $item->user_baiviet->name }}</td>

                        <td>
                            <div class="thaotac">
                                {{-- <button><a href="{{ route('edit_bv_user', $item->id) }}" class="btn-sua"><i class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp; --}}

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
<script>
    function toggleContent(button) {
      var content = button.previousElementSibling; // Lấy phần tử content trước button
      if (content.style.maxHeight) {
        content.style.maxHeight = null; // Mở rộng nội dung
        button.textContent = "Xem thêm";
      } else {
        content.style.maxHeight = content.scrollHeight + "px"; // Thu gọn nội dung
        button.textContent = "Thu gọn";
      }
    }
    </script>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection
