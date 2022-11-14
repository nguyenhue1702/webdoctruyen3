@extends('layout/admin_layout')
@section('article_list')
    <div class="text codinh">Danh Sách Bài Viết</div>
    <div class="form-danhsach">
        <div class="table-list">

            <table id="dataTables-example">
                <thead>
                    <tr>
                        <td>STT</td>
                        <td>Tên Bài</td>
                        <td>Hình Ảnh</td>
                        <td>Nội Dung</td>
                        <td>Thao Tác</td>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($baiviets as $baiviet)
                        <tr>
                            <th>{{ $baiviet->id }}</th>
                            <th>{{ $baiviet->name_bv }}</th>
                            <th class="pd-10">
                                <img src="/uploads/img_baiviet/{{ $baiviet->hinhanh_bv }}" alt="" srcset="">
                            </th>
                            <th>
                                <textarea class="kchon" name="" id="" cols="150" rows="7" disabled>{{ $baiviet->info_bv }}</textarea>
                            </th>
                            <th>
                                <div class="thaotac">
                                    <button><a href="{{ route('edit_baiviet', $baiviet->id) }}" class="btn-sua"><i
                                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                    <form action="{{ route('article_delete', $baiviet->id) }}" method="post"
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
    <div class="Add movie">
        <button>
            <a href="{{ route('form_create_article') }}" style="display: flex;"><i class='bx bxs-file-plus'
                    style="font-size:30px; line-height:40px"></i>ADD New</a>
        </button>
    </div>
@endsection

@if (Session::has('ok'))
    <script>
        toastr.options = {
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "closeMethod": "slideUp",
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-center ",
        }
        toastr.success("{{ session('ok') }}", "Thành Công");
    </script>
@endif

@if (Session::has('loi'))
    <script>
        toastr.options = {
            "showMethod": "slideDown",
            "hideMethod": "slideUp",
            "closeMethod": "slideUp",
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-top-center ",
        }
        toastr.error("{{ session('loi') }}", "Erro");
    </script>
@endif

@if (Session::has('info'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.info("{{ session('info') }}");
    </script>
@endif

@if (Session::has('warning'))
    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true
        }
        toastr.warning("{{ session('warning') }}");
    </script>
@endif
