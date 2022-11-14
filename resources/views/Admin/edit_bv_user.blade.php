@extends('layout/admin_layout')
@section('bv_user')
    <div class="row px-5 py-3">
        <div class="col-3"></div>

        <div class="col-6 style-input">
            <div class="mb-3 phanloai">

                <h3>Edit Bài Viết</h3>

            </div>
            <form action="{{route('update_bv_user',$bv_user->id)}}" method="POST">
                @csrf
                @method('PUT')
               
                {{-- <div class="mb-3 ">
                   
                    <input type="hidden" name="tilte" value="{{ $bv_user->title }}" class="form-control"
                        placeholder="Enter Category" id="slug" onkeyup="ChangeToSlug()">
                </div>
                <div class="mb-3 ">
                    <input spellcheck="false" type="hidden" name="slug" class="form-control" placeholder="Enter Slug"
                        id="convert_slug" value="{{ $bv_user->slug }}">
                </div>
                <div class="mb-3 ">
                    <input spellcheck="false" type="hidden" name="slug" class="form-control" placeholder="Enter Slug"
                        id="convert_slug" value="{{ $bv_user->content }}">
                </div>
                <div class="mb-3 ">
                    <input spellcheck="false" type="hidden" name="slug" class="form-control" placeholder="Enter Slug"
                        id="convert_slug" value="{{ $bv_user->user_id }}">
                </div> --}}
                <div class="mb-3 ">
                    <select name="apply" id="">
                        @if( $bv_user->apply==  1 )
                        <option value="1" selected>Duyệt</option>
                        <option value="0">Chờ xác Nhận</option>
                        @else
                        <option value="1">Duyệt</option>
                        <option value="0" selected>Chờ xác Nhận</option>
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
