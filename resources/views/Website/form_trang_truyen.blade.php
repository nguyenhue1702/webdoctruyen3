@extends('layout/website_layout')
@section('trangtruyen')



    {{-- //khung noi dung truyen --}}
    <div class="col-9  reponsive-col9 " id="story-detail">
        {{-- //khung breadcurm --}}
        <div class="row nav-bread reponsive-col9">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $truyen->name_product }}</li>
                </ol>
            </nav>
        </div>
        {{-- ////noji dung --}}
        <div class="row reponsive-col9 formnen">
            <div class="col-3 img_trangtruyen">
                <div class="book">
                    <img src="/uploads/img_truyen/{{ $truyen->img_product }}" alt="">
                </div>
                <div>
                    <ul>
                        <li><i class="bi bi-person-fill"></i><a
                                href="">&nbsp;&nbsp;{{ $truyen->Author->name_author }}</a>
                        </li>
                        <div class="style-dm">
                            <div><i class="bi bi-folder2-open"></i> </div>
                            @foreach ($truyen->thuocnhieudanhmuctruyen as $danhmucs)
                                <div class="mini-dm"><a
                                        href="{{ route('xemtheodanhmuc', [$danhmucs->id, $danhmucs->slugdm]) }}">{{ $danhmucs->danhmuc }}
                                    </a></div>
                            @endforeach
                        </div>
                        <div class="style-dm">
                            <div><i class="bi bi-tag"></i> </div>
                            @foreach ($truyen->thuocnhieutheloaitruyen as $theloais)
                                <div class="mini-tl"><a
                                        href="{{ route('xemtheotheloai', [$theloais->id, $theloais->slugtl]) }}"
                                        class="tag">{{ $theloais->theloai }}
                                    </a></div>
                            @endforeach
                        </div>
                        <li><i class="bi bi-list-ol"></i><span>&nbsp;&nbsp;Tổng Số
                                Chapter:&nbsp;&nbsp;{{ $sl_session }}</span></li>
                        <li><i class="bi bi-eye"></i><span>&nbsp;&nbsp;{{ $truyen->view_product }}</span></li>
                    </ul>
                </div>

            </div>
            <div class="col-9 trangtruyen repon700">
                <div class="mgin">
                    <div class="ten-truyen">
                        <h2>{{ $truyen->name_product }}</h2>
                    </div>
                    <div>
                        <button type="button" class="btn btn-primary"><i class="bi bi-list-ol"></i><a id="clickchuong"
                                href="#danhsachchuong">&nbsp;&nbsp;Các Chương</a></button>
                                @php
               
                
            @endphp
                                @if($count == 0)
                        <form action="{{route('add_favourite')}}" method="post">
                            @csrf
                            <input type="hidden" name = "user_id" value={{ Session::get('id')}}>
                            <input type="hidden" name = "product_id" value="{{$truyen->id}}">
                            <button type="submit" class="btn btn-danger wow tada" data-wow-iteration="99999999"
                                data-wow-duration="3s"><i class="bi bi-heart"></i>
                              &nbsp;&nbsp;Yêu thích
                            </button>
                        </form>
                        @else
                        {{-- //lấy id của yêu thích để xoá --}}
                   @foreach($favourite as $key => $idfavourite)
                        <form action="{{route('remove_favourite',$idfavourite->id)}}" method="post">
                            @endforeach
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger " data-wow-iteration="99999999"
                                data-wow-duration="3s"><i class="bi bi-heart"></i>
                              &nbsp;&nbsp;Un favourite
                            </button>
                        </form>
                       @endif
                    </div>
                    <div class="doctruyen">
                        @if ($session_dau)
                            <button type="button" class="btn btn-success"><i class="fa-brands fa-readme"></i>&nbsp;&nbsp;<a
                                    href="{{ route('doctruyen', [$session_dau->id, $session_dau->Product->slug_product, $session_dau->slug_session]) }}">Đọc
                                    Truyện</a></button>
                        @else
                            <button type="button" class="btn btn-danger"><i
                                    class="bi bi-exclamation-diamond"></i>&nbsp;&nbsp;<a href="">Chưa Có
                                    Chương</a></button>
                        @endif
                    </div>
                    <div class="description  " itemprop="description" data-wow-duration="10s">
                        {!! $truyen->content_product !!}
                    </div>
                </div>
            </div>
        </div>
        {{-- 5chuong moi --}}
        @php
        $sl_session = count($session);
        @endphp
        @if($sl_session == 0)
        @else
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>CHƯƠNG MỚI RA</h3>
            </div>
            <div class="owl-carousel owl-theme" data-wow-delay="0.8s" data-wow-duration="2s">
                @foreach ($session as $item)
                    <a href="{{ route('session_view', [$item->id, $item->slug_session]) }}">
                        <div class="item">
                            <img src="/uploads/img_truyen/{{ $item->Product->img_product }}" alt="">
                            <div class="owl-nd">
                                <p><i class="bi bi-eye"></i>&nbsp;{{$item->view_session}}</p>
                                <p id="danhsachchuong">Tập {{ $item->session }}: {{ $item->title_session }}</p>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
        @endif
        {{-- ----danh sach chuong------ --}}
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>DANH SÁCH CHƯƠNG</h3>
            </div>
            <div class="danhsachchuong">
                @if ($sl_session > 0)
                    <ul>
                        @foreach ($session as $item)
                            <li><a href="{{ route('session_view', [$item->id, $item->slug_session]) }}"><img
                                        src="/uploads/img_truyen/{{ $truyen->img_product }}" alt="" width="50px"
                                        height="50px">&nbsp;&nbsp;&nbsp; Tập {{ $item->session }} :
                                    {{ $item->title_session }}</a></li>
                        @endforeach
                    </ul>
                @else
                    <div class="thongbao wow fadeOut  " data-wow-delay="0.5s" data-wow-duration="1.5s"
                        data-wow-iteration="99999999"><i class="bi bi-info-circle"></i>&nbsp;&nbsp;Hiện tại Chưa Có Chương,
                        Mời Bạn Quay Lại Sau !</div>
                        @endif
            </div>
            
            <div>{{ $session->links() }}</div>
           
        </div>
        {{-- ----phan nhan xet------ --}}

        {{-- ------Truyen cung loai--------- --}}
        <div class="row  reponsive-col9  formnen">
            <div class="styleh3">
                <h3>TRUYỆN HAY</h3>
            </div>
            <div class="owl-carousel owl-theme wow fadeInLeft" data-wow-delay="0.8s" data-wow-duration="2s">
                @foreach ($truyenhay as $item)
                    <a href="{{ route('trangtruyen', [$item->id, $item->slug_product]) }}">
                        <div class="item">
                            <img src="/uploads/img_truyen/{{ $item->img_product }}" alt="">
                            <div class="owl-nd">
                                <p><i class="bi bi-eye"></i>&nbsp;{{$item->view_product}}</p>
                                <p>{{ $item->name_product }}</p>

                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
    {{-- -------------- --}}

    {{-- ----MENU DOC--- --}}
    <div class="col-3 col3tt">
        @include('Website/menudanhmuc')
    </div>
    {{-- ------------------ --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>


@endsection
