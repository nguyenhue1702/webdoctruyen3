@extends('layout/website_layout')
@section('formdanhmuc')
    <div class="col-9  reponsive-col9">
        <div class="row nav-bread reponsive-col9">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    @foreach ($dm as $item)
                        <li class="breadcrumb-item active" aria-current="page">{{ $item->danhmuc }}</li>

                </ol>
            </nav>
        </div>
        <div class="row  reponsive-col9  formnen">
        </div>
        <div class="row  wow fadeInLeft bgnew" data-wow-delay="0.8s" data-wow-duration="2s">
            <div class="styleh3 px-3 py-2">
                <h3>{{ $item->danhmuc }}</h3>

            </div>
            @endforeach

            @php
                $count = count($truyen->nhieuTruyen);
                
            @endphp
            @if ($count == 0)
            <div class="content-list">
                <div class="thongbao-sai mt-5">
                    Hiện tại chưa có truyện !
                </div>
                
            </div>
            @else
           
                @foreach ($truyen->nhieuTruyen as $item)
                    <div class="col-md-6  py-3 ">
                        <div class="product-card d-flex flex-row align-items-center">
                            <div class="text-center">
                                <img src="/uploads/img_truyen/{{ $item->img_product }}" width="200" height="240px">
                            </div>
                            <div class="noidung">
                                <div class=" div-one px-2 py-2">
                                    <div class="style-name">
                                    <h5 class="">{{ $item->name_product }}
                                    </h5>
                                </div>
                                <div><i class="bi bi-heart-fill"></i></div>
                            </div>
                               
                                    <div class=" style-dm size-edit">
                                        @foreach ($item->thuocnhieudanhmuctruyen as $danhmucs)
                                        <div class="mini-dm py-1"><a href="{{route('xemtheodanhmuc',[$danhmucs->id,$danhmucs->slugdm])}}">{{ $danhmucs->danhmuc }}  </a></div>
                                       @endforeach
                                    </div>
                                       
                                        <div class="  style-dm size-edit">
                                            @foreach ($item->thuocnhieutheloaitruyen as $theloais)
                                            <div class="mini-tl py-1"><a href="{{route('xemtheotheloai',[$theloais->id,$theloais->slugtl])}}" class="tag-new">{{ $theloais->theloai }}  </a></div>
                                           @endforeach
                                        </div>
                                  
                                <div class="view-now px-3">
                                    <div><i class="bi bi-eye"></i>&nbsp;{{$item->view_product}}</div>
                                    <div><a href="{{route('trangtruyen',[$item->id,$item->slug_product])}}"><button class="btn btn-success btn-sm">View Now</button></a></div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                @endforeach
            @endif
            <hr>
            <div>

           
            </div>
        </div>
    </div>
    <div class="col-3 col3tt">
        @include('Website/menudoc')
    </div>
@endsection
