@extends('layout/website_layout')
@section('banner')
    @include('Website/banner')
@endsection
@section('home')
    <div class="col-9 reponsive-col9">
        <div class="main-content ">
            {{--@ TRUYỆN MỚI --}}
            <div class="title_spnew ">
                <h3>&nbsp;Truyện Mới</h3>
            </div>
            <div class="owl-carousel owl-theme" data-wow-delay="0.8s" data-wow-duration="2s">
                @foreach ($truyen as $item)
                
                    <a href="{{ route('trangtruyen', [$item->id, $item->slug_product]) }}">
                        <div class="item">
                            <img src="/uploads/img_truyen/{{ $item->img_product }}" alt="">
                            <div class="owl-nd">
                                <div class="content-product py-2">
                                    <div><i class="bi bi-eye"></i>&nbsp;{{$item->view_product}}</div>
                                    <div class="time-create">{{$item->created_at}}</div>
                                </div>
                               
                             
                                <p>{{ $item->name_product }}</p>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>

            {{--@ TRUYỆN HOT --}}
            <div class="title_spnew fadeInLeft wow " data-wow-duration="2s">
                <h3>&nbsp;Truyện HOT</h3>
            </div>
            <div class="row  wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                <div class="owl-carousel owl-theme wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                    @foreach ($truyenhot as $item)
                        <a href="{{ route('trangtruyen', [$item->id, $item->slug_product]) }}">
                            <div class="item">
                                <img src="/uploads/img_truyen/{{ $item->img_product }}" alt="">
                                <div class="owl-nd">
                                    <div class="content-product py-2">
                                    <div><i class="bi bi-eye"></i>&nbsp;{{$item->view_product}}</div>
                                    <div class="time-create">{{$item->created_at}}</div>
                                </div>
                                <p>{{ $item->name_product }}</p>
                                </div>
                            </div>
                        </a>
                    @endforeach
                </div>

            </div>
           {{--@ TRUYỆN HAY NÊN ĐỌC --}}
           <div class="title_spnew wow fadeInLeft " data-wow-duration="2s">
            <h3>&nbsp;Truyện Hay Nên Đọc</h3>
        </div>
        <div class="owl-carousel owl-theme wow fadeInLeft mb-3" data-wow-delay="0.8s" data-wow-duration="2s">
          
            @foreach ($truyenhay as $item)
           
                <a href="{{route('trangtruyen',[$item->id,$item->slug_product])}}">
                <div class="item">
                    <img src="/uploads/img_truyen/{{ $item->img_product }}" alt="">
                    <div class="owl-nd">
                        <div class="content-product px-2">
                        <div><i class="bi bi-eye"></i>&nbsp;{{$item->view_product}}</div>
                            <div class="time-create">{{$item->created_at}}</div>
                        </div>
                        <p>{{ $item->name_product }}</p>
                    </div>
                </div>
                </a>
             
            @endforeach
           
        </div>
            {{--@ CHƯƠNG MỚI RA --}}
            <div class="title_spnew wow fadeInLeft " data-wow-duration="2s">
                <h3>&nbsp;Chương Mới Ra</h3>
            </div>
            <div class="owl-carousel owl-theme wow fadeInLeft mb-3" data-wow-delay="0.8s" data-wow-duration="2s">
              
                @foreach ($session_new as $item)
                @if($item->Product->kichhoat == 0)
                    <a href="{{route('session_view',[$item->id,$item->slug_session])}}">
                    <div class="item">
                        <img src="/uploads/img_truyen/{{ $item->Product->img_product }}" alt="">
                        <div class="owl-nd">
                            <div class="content-product px-2">
                            <div><i class="bi bi-eye"></i>&nbsp;{{$item->view_session}}</div>
                                <div class="time-create">{{$item->created_at}}</div>
                            </div>
                            <p>Tập {{ $item->session }}: {{ $item->title_session }}</p>

                        </div>
                    </div>
                    </a>
                    @endif
                @endforeach
               
            </div>
            {{-- -----truyen khong doc luc nua dem--------------- --}}
            {{-- <div class="title_spnew wow fadeInLeft  " data-wow-duration="2s">
                <h3>&nbsp;Truyện Không Đọc Nửa Đêm</h3>
            </div>
            <div class="owl-carousel owl-theme mb-3" data-wow-delay="0.8s" data-wow-duration="2s">
                @foreach ($session_new as $item)
                    <a href="{{route('trangtruyen',[$item->id,$item->slug_product])}}">
                    <div class="item">
                        <img src="/uploads/img_truyen/{{ $item->Product->img_product }}" alt="">
                        <div class="owl-nd">
                            <p><i class="bi bi-eye"></i>&nbsp;125,23</p>
                            <p>{{ $item->session }}:{{ $item->title_session }}</p>

                        </div>
                    </div>
                    </a>
                @endforeach
            </div> --}}

        </div>
    </div>
    <div class="col-3">
        @include('Website.menudoc')
    </div>
@endsection
