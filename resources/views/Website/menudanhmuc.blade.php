<div class=" tuannn">
    <div class="side-bar-right">
     {{--@ Truyện Mới --}}
        <div class="khung">
            <div class="title style-lottie">
               <div>Truyện Mới</div><div> <lottie-player src="https://assets9.lottiefiles.com/packages/lf20_sxpoxpks.json"  speed="0.4" class="lottie-player"    autoplay></lottie-player></div>
            </div>
            <div class="menulist bgnew">
                <ul>
                 
                    
                    @foreach ($truyennew as $item)
                        <li> <a href="{{ route('trangtruyen', [$item->id, $item->slug_product]) }}"><img
                                    src="/uploads/img_truyen/{{ $item->img_product }}" alt="" width="50px"
                                    height="50px">&nbsp;&nbsp;&nbsp;{{ $item->name_product }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
    {{--@ Danh mục --}}
        <div class="khung">
            <div class="title">
                <p><i class="bi bi-list-task"></i>&nbsp;&nbsp;Danh Mục</p>
            </div>
            <div class="content bgnew">
                <ul>
                    @foreach ($tendms as $tendm)
                        <a href="{{ route('xemtheodanhmuc', [$tendm->id, $tendm->slugdm]) }}">
                            <li style="display: flex;">
                                &nbsp;&nbsp;<i class="bi bi-caret-right-fill"></i>&nbsp;&nbsp;
                                {{ $tendm->danhmuc }}
                            </li>
                        </a>
                    @endforeach
                </ul>
            </div>
        </div>
        @php 
        $coun_yt = count($listfavourite);
        @endphp
        @if($coun_yt == 0)
        @else
        <div class="khung">
            <div class="title style-lottie">
               <div>Truyện Yêu Thích</div>
            </div>
            <div class="menulist bgnew">
                <ul>
                 
                    
                    @foreach ($listfavourite as $item)
                    @if($item->Favourite_product->kichhoat == 0)
                        <li> <a href="{{ route('trangtruyen', [$item->Favourite_product->id, $item->Favourite_product->slug_product]) }}"><img
                                    src="/uploads/img_truyen/{{ $item->Favourite_product->img_product }}" alt="" width="30px"
                                    height="30px">&nbsp;&nbsp;&nbsp;{{ $item->Favourite_product->name_product }}</a></li>
                                 
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        {{-- <div class="khung">
            <div class="title">
                <p><i class="bi bi-journals"></i>&nbsp;&nbsp; Truyện Ngắn Độc Giả</p>
            </div>
            <div class="content">
                <ul>

              
                    <a href="">
                        <li style="display: flex;">
                &nbsp;&nbsp;<i class="bi bi-filter-left"></i>&nbsp;&nbsp;
                {{$tendm->tendm}}
                </li>
                    </a>
                   
                </ul>
            </div>
        </div> --}}
    </div>
</div>
