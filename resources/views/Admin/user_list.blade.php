@extends('layout/admin_layout')
@section('user_list')
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">
        
        <hr class="hr">
        <div class="mb-3 phanloai">

            <h3>Danh Sách User</h3>

        </div>
        <div class="mb-3">
            <table class="table table-sm " id="dataTables-example">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Control</th>

                    </tr>
                </thead>
                <tbody>
                   @foreach ($users as $item)
                       <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                        <td>
                            @if ('2' == $item->role)
                            <p style="color: rgb(255, 0, 0)">Admin</p>
                        @else
                        @if('1' == $item->role)
                            <p style="color: rgb(21, 255, 0)">Personnel</p>
                            @else
                            <p style="color:rgb(0, 247, 255)">User</p>
                            @endif
                        @endif
                        
                    </td>
                        <td>
                            <div class="thaotac">
                                <button><a href="{{route('edit_user',$item->id)}}" class="btn-sua"><i
                                            class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                            
                                <form action="{{route('delete_user',$item->id)}}" method="post" class="dele">
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

    </div>

    <div class="col-3"></div>
</div>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection