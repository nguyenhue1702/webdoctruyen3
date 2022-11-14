@extends('layout/website_layout')
@section('user_article')
<div class="container" >

    <div class="row dangtruyen mb-5" >
        <h3 class="mt-5 lb-user" >Đăng Truyện Ngắn</h3>
        <form action="{{route('sb_article')}}" method="post">
            @csrf
        <div class="mt-5 mb-3">
            <label class="mb-2 lb-user">Title Comic</label>
            <input type="text" name="tilte" class="form-control" placeholder="Title Comic" id="slug" onkeyup="ChangeToSlug()">
        </div>
        <div class="mb-3">
            <label class="mb-2 lb-user">Slug</label>
            <input id="convert_slug" type="text" name="slug" class="form-control" placeholder="slug Comic" >
        </div>
        <div class="mb-5">
            <label class="mb-2 lb-user">Conntent</label>
            <textarea name="content" id="truyenngan" cols="30" rows="10" ></textarea>
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