@extends('layout/admin_layout')
@section('product_list')
<style>
     .expandable-cell .content {
  max-height: 160px; /* Đặt chiều cao tối đa để thu gọn */
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
    <div class="row ps-5 py-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i class="bi bi-house-door-fill"></i>&nbsp;Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách Truyện</li>
            </ol>
        </nav>
    </div>
    <div class="row px-5 py-3">
        <div class="phanloai">
            <div>
                <h3>Danh Sách Truyện</h3>
            </div>
            <div>
                <a href="{{ route('create_product') }}" style="display: flex;"><button type="button"
                        class="btn btn-primary">Thêm truyện</button></a>
            </div>
        </div>
    </div>
    <div class="row px-5">
        <table class="table table-sm " id="dataTables-example">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Tên truyện</th>
                    <th scope="col">Hình ảnh</th>
                    <th scope="col">Slug</th>
                    <th scope="col">HOT</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Tác giả</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Đăng truyện</th>
                    <th scope="col">Hành động</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($list_truyen as $truyen)
                    <tr>
                        <td>{{ $truyen->id }}</td>
                        <td>{{ $truyen->name_product }}</td>
                        <td><img src="/uploads/img_truyen/{{ $truyen->img_product }}" alt="" srcset=""
                                width="70px" height="85px"></td>
                        <td>{{ $truyen->slug_product }}</td>
                        <td>
                            @if (Session::get('roleUser') == 2)
                            <input  type="checkbox" class="toggle-hot" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="ON"
                                data-off="OFF"{{ $truyen->hot == false ? 'checked' : '' }}>
                            @else
                                <input disabled type="checkbox" class="toggle-hot" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="ON"
                                data-off="OFF"{{ $truyen->hot == false ? 'checked' : '' }}>
                            @endif
                        </td>

                        <td class="expandable-cell">
                            <div class="content">
                                <p>{!! $truyen->content_product !!}</p>
                            </div>
                            <button class="toggle-button" onclick="toggleContent(this)">Xem thêm</button>
                        </td>

                        <td>{{ $truyen->Author->name_author }}</td>
                        <td>
                            <input
                                @if (Session::get('id') !== $truyen->id_author)
                                    disabled
                                @endif
                                type="checkbox" class="toggle-tinhtrang" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="Full"
                                data-off="Updating"{{ $truyen->tinhtrang == true ? 'checked' : '' }}>
                        </td>
                        <td>
                            @if (Session::get('roleUser') == 2)
                                <input  type="checkbox" class="toggle-edit toggle-product" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="Enabled"
                                data-off="Disabled"{{ $truyen->kichhoat == false ? 'checked' : '' }}>
                            @else
                                <input disabled type="checkbox" class="toggle-edit toggle-product" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="Enabled"
                                data-off="Disabled"{{ $truyen->kichhoat == false ? 'checked' : '' }}>
                            @endif

                        </td>
                        <td>
                            <div class="thaotac">
                                <button><a href="{{ route('edit_product', $truyen->id) }}" class="btn-sua"><i
                                            class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                <form action="{{ route('delete_truyen', $truyen->id) }}" method="post" class="dele">
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
@endsection
