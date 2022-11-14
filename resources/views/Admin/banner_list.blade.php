@extends('layout/admin_layout')
@section('banner_list')
<div class="row ps-5 py-3">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                        class="bi bi-house-door-fill"></i>&nbsp;Admin</a></li>
            <li class="breadcrumb-item active" aria-current="page">List Banner</li>
        </ol>
    </nav>
</div>
    <div class="row px-5 py-3">
       <div class="phanloai">
       <div>
           <h3>List Banner</h3>
       </div>
       <div>
        <a href="{{ route('create_banner') }}" style="display: flex;"><button type="button" class="btn btn-primary">ADD</button></a>
       </div>
       </div>
    </div>
<div class="row px-5">
    <table class="table table-sm " id="dataTables-example">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Title</th>
            <th scope="col">Img</th>
            <th scope="col">Status</th>
            <th scope="col">Setting</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($banners as $item)
          <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->title_banner}}</td>
            <td><img src="/uploads/img_banner/{{ $item->img_banner}}" alt="" srcset="" width="300px" height="150px"></td>
            <td>
            
                <input  type="checkbox" class="toggle-banner" data-id="{{ $item->id }}"
                data-toggle="toggle" data-style="slow" data-on="ON"
                data-off="OFF"{{ $item->show_banner == true ? 'checked' : '' }}>
            </td>
        
            <td>
                <div class="thaotac">
                    <button><a href="{{ route('edit_banner', $item->id) }}" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                    <form action="{{ route('delete_banner', $item->id) }}" method="post"
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
@endsection
