@extends('layout/admin_layout')
@section('session_list')
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
    <div class="row px-5 py-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                            class="bi bi-house-door-fill"></i>&nbsp;Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">Danh Sách Chương</li>
            </ol>
        </nav>
    </div>
        <div class="row px-5 py-3">
           <div class="phanloai">
           <div>
               <h3>Danh Sách Chương</h3>
           </div>
           <div>
            <a href="{{ route('create_session') }}" style="display: flex;"><button type="button" class="btn btn-primary">Thêm Mới</button></a>
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
                    <th scope="col">Chương</th>
                    <th scope="col">Tên chương</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tóm Tắt</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Trạng thái</th>
                    <th scope="col">Hành động</th>

                  </tr>
                </thead>
                <tbody>
                    @foreach ($chapter as $item)
                  <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->Product->name_product }}</td>
                    <td><img src="/uploads/img_truyen/{{ $item->Product->img_product }}" alt="" srcset="" width="70px" height="85px"></td>
                    <td>Tập {{ $item->session }}</td>
                    <td>{{ $item->title_session}}</td>
                    <td>{{ $item->slug_session}}</td>

                    <td class="expandable-cell">
                        <div class="content">
                            <p>{!! $item->tomtat_session !!}</p>
                        </div>
                        <button class="toggle-button" onclick="toggleContent(this)">Xem thêm</button>
                    </td>
                    <td class="expandable-cell">
                        <div class="content">
                            <p>{!! $item->content_session !!}</p>
                        </div>
                        <button class="toggle-button" onclick="toggleContent(this)">Xem thêm</button>
                    </td>

                    <td >
                        @if ('0' == $item->kichhoat)
                        <p style="color: rgb(3, 180, 3)">ON</p>
                    @else
                        <p style="color: red">OFF</p>
                    @endif
                    </td>
                    <td>
                        <div class="thaotac">
                            <button><a href="{{ route('edit_session', $item->id) }}" class="btn-sua"><i
                                        class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                            <form action="{{ route('delete_session', $item->id) }}" method="post"
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
