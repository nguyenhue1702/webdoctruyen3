<div class=" tuannn">
    <div class="side-bar-right">
        {{-- @Danh mục Truyện --}}
        <div class="khung wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">
            <div class="title ">
                <p><i class="bi bi-list-task"></i>&nbsp;&nbsp; Danh mục Truyện</p>
            </div>
            <div class="content bgnew py-2">
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
        {{-- @ Top Truyện Xem Nhiều --}}
        <div class="khung mt-3 wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">
            <div class="title style-lottie">
               <div>Truyện Xem Nhiều</div>
            </div>
            <div class="menulist bgnew">
                <ul>
                 
                    
                    @foreach ($truyenhay as $item)
                        <li> <a href="{{ route('trangtruyen', [$item->id, $item->slug_product]) }}"><img
                                    src="/uploads/img_truyen/{{ $item->img_product }}" alt="" width="30px"
                                    height="30px">&nbsp;&nbsp;&nbsp;{{ $item->name_product }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        {{-- @ Thể Loại --}}
        <div class="khung pb-2  wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="1s">

            <div class="title">
                <p><i class="bi bi-tag"></i> &nbsp;&nbsp; Thể Loại</p>
            </div>
            <div class="content-theloai row py-2">
               
                @foreach($theloai as $item)
                <div class="menu-theloai px-2 col-6">
                    <ul>
                     
                        <li>
                            <a href="{{ route('xemtheotheloai', [$item->id, $item->slugtl]) }}"><i class="bi bi-tag"></i>&nbsp;&nbsp;{{$item->theloai}}     </a>
                        </li>
               
    
                    </ul>
                </div>
                @endforeach
          
             
            
            </div>
        </div>
        @php
        $sll = count($listfavourite);
        @endphp
        @if (Session::has('name'))
        {{-- @ Truyện yêu thích--}}
        @if($sll ==0)
        @else
        <div class="khung">
            <div class="title style-lottie">
               <div>Truyện Yêu Thích</div>
            </div>
            <div class="menulist bgnew">
                <ul>
                 
                    
                    @foreach ($listfavourite as $item)
                        <li> <a href="{{ route('trangtruyen', [$item->Favourite_product->id, $item->Favourite_product->slug_product]) }}"><img
                                    src="/uploads/img_truyen/{{ $item->Favourite_product->img_product }}" alt="" width="30px"
                                    height="30px">&nbsp;&nbsp;&nbsp;{{ $item->Favourite_product->name_product }}</a></li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @else
        @endif
    </div>
</div>
