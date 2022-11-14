@extends('layout/website_layout')
@section('edit_bv_user_web')
<div class="container" >

    <div class="row dangtruyen mb-5" >
        <h3 class="mt-5 lb-user" >Edit Comic User </h3>
        <form action="{{route('update_bv_user_web',$baiviet->id)}}" method="post">
            @csrf
            @method('PUT')
        <div class="mt-5 mb-3">
            <label class="mb-2 lb-user">Title Comic</label>
            <input type="text" name="title" value="{{$baiviet->title}}" class="form-control" placeholder="Title Comic" id="slug" onkeyup="ChangeToSlug()">
        </div>
        <div class="mb-3">
            <label class="mb-2 lb-user">Slug</label>
            <input id="convert_slug"  value="{{$baiviet->slug}}" type="text" name="slug" class="form-control" placeholder="slug Comic" >
        </div>
        <div class="mb-5">
            <label class="mb-2 lb-user">Conntent</label>
            <textarea name="content"  id="truyenngan" cols="30" rows="10" >{{$baiviet->content}}</textarea>
        <input type="hidden" name="user_id" value=  {{ Session::get('id') }}>
        <input type="hidden" name="apply">
    </div>
    <div class="mb-5 submit-user">
        <button class="btn btn-primary btn-xs" type="submit" name="submit" >Submit</button>
    </div>
</form>
</div>
<script src="{{ asset('js/slug.min.js') }}"></script>
@endsection