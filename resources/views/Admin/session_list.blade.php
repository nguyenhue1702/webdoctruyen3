@extends('layout/admin_layout')
@section('session_list')
   
    <div class="row px-5 py-3">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                            class="bi bi-house-door-fill"></i>&nbsp;Admin</a></li>
                <li class="breadcrumb-item active" aria-current="page">List Comics</li>
            </ol>
        </nav>
    </div>
        <div class="row px-5 py-3">
           <div class="phanloai">
           <div>
               <h3>List Session</h3>
           </div>
           <div>
            <a href="{{ route('create_session') }}" style="display: flex;"><button type="button" class="btn btn-primary">ADD</button></a>
           </div>
           </div>
        </div>
        <div class="row px-5">
            <table class="table table-sm " id="dataTables-example">
                <thead>
                  <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Name Comics</th>
                    <th scope="col">Img</th>
                    <th scope="col">Session</th>
                    <th scope="col">Title</th>
                    <th scope="col">Slug</th>
                    <th scope="col">Tóm Tắt</th>
                    <th scope="col">Content</th>
                    <th scope="col">Status</th>
                    <th scope="col">Setting</th>
        
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
                    <td><textarea name="" id="" cols="20" rows="3" disabled>{{$item->tomtat_session}}</textarea></td>
                    <td><textarea name="" id="" cols="20" rows="3" disabled>{{$item->content_session}}</textarea></td>
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
@endsection
