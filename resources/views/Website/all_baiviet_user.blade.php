@extends('layout/website_layout')
@section('all_baiviet_user')

<div class="container" >
    @php
    $count = count($baiviet);
@endphp
@if ($count == 0)
<div class="content-list">
    <div class="thongbao-sai mt-5">
        Hiện tại chưa có truyện !
    </div>
    
</div>
 
@else
@if(  $count == 1)
<div class="row  mt-5 ">
    <h3 class="lb-user">Tất cả truyện của độc giả</h3>
    @foreach($baiviet as $item)
    <div class="list-group mt-3 pd-5 ">
        <a href="{{route('view_truyen_user',[$item->id,$item->slug])}}" class="list-group-item list-group-item-action tieu-de-truyen">
            <div class="d-flex w-100 justify-content-between de-truyen">
                <h4>{{$item->title}}</h4>
                <small >{{$item->created_at}}</small>
                <small class="name-docgia">{{$item->User_baiviet->name}}</small>
              
            </div>        
            <div class="small-content">  <p >{!! $item->content !!}</p></div>   
           
        </a>
    </div>
    
    
    @endforeach
    <div class="mt-3">
        {{$baiviet->links()}}
    </div>
</div>
<div class="count-1">
</div>

@else
@if(  $count == 2)
<div class="row  mt-5 ">
    <h3 class="lb-user">Tất cả truyện của độc giả</h3>
    @foreach($baiviet as $item)
    <div class="list-group mt-3 pd-5 ">
        <a href="{{route('view_truyen_user',[$item->id,$item->slug])}}" class="list-group-item list-group-item-action tieu-de-truyen">
            <div class="d-flex w-100 justify-content-between de-truyen">
                <h4>{{$item->title}}</h4>
                <small>{{$item->created_at}}</small> |
                <small class="name-docgia">{{$item->User_baiviet->name}}</small>
              
            </div>   
            <div class="small-content">  <p >{!! $item->content !!}</p></div>     
        
           
        </a>
    </div>
    
    
    @endforeach
    <div class="mt-3">
        {{$baiviet->links()}}
    </div>
</div>
<div class="count-2">
</div>
@else
<div class="row  mt-5">
    <h3 class="lb-user">Tất cả truyện của độc giả</h3>
    @foreach($baiviet as $item)
    <div class="list-group mt-3 pd-5 ">
        <a href="{{route('view_truyen_user',[$item->id,$item->slug])}}" class="list-group-item list-group-item-action tieu-de-truyen">
            <div class="d-flex w-100 justify-content-between de-truyen">
                <h4>{{$item->title}}</h4>
                <small>{{$item->created_at}}</small>
                <small class="name-docgia">{{$item->User_baiviet->name}}</small>
              
            </div>        
            <div class="small-content">  <p >{!! $item->content !!}</p></div>   
           
        </a>
    </div>
    
    
    @endforeach
    <div class="mt-3">
        {{$baiviet->links()}}
    </div>
</div>
@endif
@endif
 @endif   
</div>
@endsection