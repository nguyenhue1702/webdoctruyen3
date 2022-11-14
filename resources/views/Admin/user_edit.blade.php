@extends('layout/admin_layout')
@section('user_edit')
<div class="row px-5 py-3">
    <div class="col-3"></div>

    <div class="col-6 style-input">
        <div class="mb-3 phanloai">

            <h3>Edit User    <h3><span class="edit-user">{{$user->email}}</Span></h3></h3>

        </div>
        <form action="{{ route('update_user', $user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <input type="hidden" name="name" value="{{ $user->name }}">
            </div>
            <div class="mb-3">
                <input type="hidden" name="email" value="{{ $user->email }}">
            </div>
            <div class="mb-3">
                <input type="hidden" name="password" value="{{ $user->password }}">
            </div>
            <div class="mb-3">
              
            </div>
            <div class="mb-3 ">
                <label for="" class="mb-2">Select Role</label>
             
                <select name="role" id="" class="select-user">
                    {{-- <option value="0" style="color: rgb(2, 160, 165)">User</option>
                    <option value="1" style="color:rgb(17, 167, 3)">Personnel</option>
                    <option value="2" style="color:rgb(255, 0, 0)">Admin</option> --}}
                   
                @if ($user->role == 2)
                    <option value="0" style="color: rgb(2, 160, 165)" >User</option>
                    <option value="1" style="color:rgb(17, 167, 3)">Personnel</option>
                    <option value="2" selected style="color:rgb(255, 0, 0)">Admin</option>
                @else
                @if($user->role == 1)
                <option value="0" style="color: rgb(2, 160, 165)" >User</option>
                <option value="1" selected style="color:rgb(17, 167, 3)">Personnel</option>
                <option value="2"  style="color:rgb(255, 0, 0)">Admin</option>

                @else
                <option value="0" selected  style="color: rgb(2, 160, 165)" >User</option>
                <option value="1" style="color:rgb(17, 167, 3)">Personnel</option>
                <option value="2"  style="color:rgb(255, 0, 0)">Admin</option>
                @endif
                @endif
                </select>
            </div>       
            <div class="mb-3">
                <button type="submit" class="btn btn-success">Update</button>
            </div>
        </form>
    </div>
</div>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection