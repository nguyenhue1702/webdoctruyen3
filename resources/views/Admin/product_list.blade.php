@extends('layout/admin_layout')
@section('product_list')
    <div class="row ps-5 py-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i class="bi bi-house-door-fill"></i>&nbsp;Admin</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">List Comics</li>
            </ol>
        </nav>
    </div>
    <div class="row px-5 py-3">
        <div class="phanloai">
            <div>
                <h3>List Comics</h3>
            </div>
            <div>
                <a href="{{ route('create_product') }}" style="display: flex;"><button type="button"
                        class="btn btn-primary">ADD</button></a>
            </div>
        </div>
    </div>
    <div class="row px-5">
        <table class="table table-sm " id="dataTables-example">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name</th>
                    <th scope="col">Img</th>
                    <th scope="col">Slug</th>
                    <th scope="col">HOT</th>
                    <th scope="col">Content</th>
                    <th scope="col">Author</th>
                    <th scope="col">Status</th>
                    <th scope="col">Show</th>
                    <th scope="col">Setting</th>

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
                            <input  type="checkbox" class="toggle-hot" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="ON"
                                data-off="OFF"{{ $truyen->hot == false ? 'checked' : '' }}>
                        </td>

                        <td>
                            <textarea name="" id="" cols="20" rows="3" disabled>{{ $truyen->content_product }}</textarea>
                        </td>

                        <td>{{ $truyen->Author->name_author }}</td>
                        <td>
                            <input  type="checkbox" class="toggle-tinhtrang" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="Full"
                                data-off="Updating"{{ $truyen->tinhtrang == true ? 'checked' : '' }}>
                        </td>
                        <td>
                            <input  type="checkbox" class="toggle-edit toggle-product" data-id="{{ $truyen->id }}"
                                data-toggle="toggle" data-style="slow" data-on="Enabled"
                                data-off="Disabled"{{ $truyen->kichhoat == false ? 'checked' : '' }}>
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
@endsection
