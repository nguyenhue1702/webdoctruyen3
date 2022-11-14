@extends('layout/admin_layout')
@section('author_list')
<div class="row ps-5 py-3">
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
           <h3>List Author</h3>
       </div>
       <div>
        <a href="{{ route('createauthor') }}" style="display: flex;"><button type="button" class="btn btn-primary">ADD</button></a>
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
            <th scope="col">Year</th>
            <th scope="col">Country</th>
            <th scope="col">Setting</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($authors as $author)
          <tr>
            <td>{{ $author->id }}</td>
            <td>{{ $author->name_author }}</td>
            <td><img src="/uploads/img_author/{{ $author->img_author}}" alt="" srcset="" width="70px" height="85px"></td>
            <td>{{ $author->date_author }}</td>
            <td>{{ $author->country_author }}</td>
            <td>
                <div class="thaotac">
                    <button><a href="{{ route('edit_author', $author->id) }}" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                    <form action="{{ route('delete_author', $author->id) }}" method="post"
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
