@extends('layout/website_layout')
@section('view_baiviet_user')
    <div class="container">
        <div class="row bredcrumb-new mt-2">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb breadcrumb-li">
                    <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page"><a
                            href="{{route('all_baiviet_user')}}">Truyện Ngắn</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">{{$truyen->title}}</li>
                </ol>
            </nav>
        </div>
        <div class="row  title-user-new mt-2">

            <h3 class="text-center title-h3">
                {{ $truyen->title }}
            </h3>
            <br>
            <br>
            <small class="text-center tacgia-new"><i class="bi bi-person-fill"></i>
                {{ $truyen->User_baiviet->name }}</small>
            <br>
            <br>
            <small class="text-center">{{ $truyen->created_at }}</small>
        </div>
        <div class="row content-user-bàiviet mt-2 mb-2">
            {!! $truyen->content !!}
        </div>
    </div>
@endsection
