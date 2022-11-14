@extends('layout/website_layout')
@section('list_article')
    <div class="container">
        @php
            $count = count($baidang);
        @endphp
        @if ($count == 0)
            <div class="content-list">
                <div class="thongbao-sai mt-5">
                    Hiện tại chưa có truyện !
                </div>

            </div>
        @else
            @if ($count < 3)

                <div class="row  mt-5 khoangcach-test">
                    <h3 class="lb-user">CÁC BÀI VIẾT ĐÃ ĐĂNG</h3>
                    @foreach ($baidang as $item)
                        <div class="list-group mt-3 pd-5 col-11">
                            <a href="" class="list-group-item list-group-item-action tieu-de-truyen">
                                <div class="d-flex w-100 justify-content-between de-truyen">
                                    <h4>{{ $item->title }}</h4>
                                    <small>
                                        @if ($item->apply == 1)
                                            <i style="color: rgb(98, 163, 1); font-weight: bold">Đã duyệt</i>
                                        @else
                                            <i style="color: red; font-weight: bold">Chờ duyệt</i>
                                        @endif
                                    </small>

                                </div>
                                <div class="small-content">
                                <p >{!! $item->content !!}</p>
                            </div>
                                <small>{{ $item->created_at }}</small>

                            </a>
                        </div>
                        <div class="col controller-user mt-3">
                            <button><a href="{{ route('edit_bv_user_web', $item->id) }}" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                    <form action="{{ route('dele_bv_user_web', $item->id) }}" method="post"
                        class="dele">
                        @csrf
                        @method('DELETE')
                        <button class= "delete-bv-user"onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                            type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                        </div>
                    @endforeach
                    <div class="mt-3">
                        {{ $baidang->links() }}
                    </div>
                </div>
                @else
                <div class="row  mt-5 ">
                    <h3 class="lb-user">CÁC BÀI VIẾT ĐÃ ĐĂNG</h3>
                    @foreach ($baidang as $item)
                        <div class="list-group mt-3 pd-5 col-11">
                            <a href="" class="list-group-item list-group-item-action tieu-de-truyen">
                                <div class="d-flex w-100 justify-content-between de-truyen">
                                    <h4>{{ $item->title }}</h4>
                                    <small>
                                        @if ($item->apply == 1)
                                            <i style="color: rgb(98, 163, 1); font-weight: bold">Đã duyệt</i>
                                        @else
                                            <i style="color: red; font-weight: bold">Chờ duyệt</i>
                                        @endif
                                    </small>

                                </div>
                                <div class="small-content">{!! $item->content !!}</div>
                                <small>{{ $item->created_at }}</small>

                            </a>
                        </div>
                        <div class="col controller-user mt-3">
                            <button><a href="{{ route('edit_bv_user_web', $item->id) }}" class="btn-sua"><i
                                class="fa-solid fa-wrench"></i></a></button>&nbsp;&nbsp;
                                <br>
                                <br>
                    <form action="{{ route('dele_bv_user_web', $item->id) }}" method="post"
                        class="dele">
                        @csrf
                        @method('DELETE')
                        <button  class= "delete-bv-user"onclick="return confirm('Bạn Có Chắc Muốn Xoá Mục Này không ?')"
                            type="submit"><i class="fa-solid fa-trash-can"></i></button>
                    </form>
                        </div>
                    @endforeach
                    <div class="mt-3">
                        {{ $baidang->links() }}
                    </div>
                </div>
                @endif
            @endif
    </div>
@endsection
