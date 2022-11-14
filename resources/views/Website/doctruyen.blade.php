@extends('layout/website_layout')
@section('doctruyen')
    <div class="container">
        <div class="nav-bread reponsive-col9 repon">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('Home') }}"><i
                                class="bi bi-house-door-fill"></i>&nbsp;Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $view_session->Product->name_product }}</li>
                    <li class="breadcrumb-item active" aria-current="page">{{ $view_session->session }}</li>
                </ol>
            </nav>
        </div>
        <div class="reponsive-col9 formnen view-truyen repon">
            <h4>{{ $view_session->updated_at }}</h4>
            <h2><strong>{{ $view_session->Product->name_product }}</strong></h2>
            <h3><strong>Tập {{ $view_session->session }}</strong> : <i>{{ $view_session->title_session }}</i></h3>
            <h5><i class="bi bi-person-fill"></i><i>{{ $view_session->Product->Author->name_author }}</i></h5>

            <div class="controller">
                <div class="chonchuong">
                     
                    <select class="form-select" id="dynamic_select1">
                        @foreach ($all_session as $item)
                            <option value="{{ url('view', [$item->id,$item->Product->slug_product,$item->slug_session]) }}">Tập {{ $item->session }}:
                                {{ $item->title_session }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="ctr-right">
                
                    <button class="btn btn-primary trcsau {{ $view_session->id == $min_id->id ? 'isDisable' : '' }}"><a
                            href="{{ url('view',  [ $pre_session,$view_session->Product->slug_product,$pre_slug ] ) }}"><i class="bi bi-chevron-left"></i>
                            Tập Trước</a></button>
                            
                   
                    <button class="btn btn-primary trcsau {{ $view_session->id == $max_id->id ? 'isDisable' : '' }} "><a
                            href="{{ url('view', [$next_session,$view_session->Product->slug_product,$next_slug]) }}"> Tập Sau <i
                                class="bi bi-chevron-right"></i></a></button>
                              
                </div>
            </div>
        </div>
        <div class="reponsive-col9 formnen view-truyen repon">
            {!! $view_session->content_session !!}
        </div>
        <div class="reponsive-col9 formnen view-truyen repon">
            <div class="controller">
                <div class="chonchuong">
                    <select class="form-select" aria-label="Default select example" id="dynamic_select">
                        @foreach ($all_session as $item)
                            <option value="{{ route('doctruyen', [$item->id,$item->Product->slug_product, $item->slug_session]) }}">Tập {{ $item->session }}:
                                {{ $item->title_session }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="ctr-right">
                    <button class="btn btn-primary trcsau {{ $view_session->id == $min_id->id ? 'isDisable' : '' }}">
                        <a href="{{ url('view', [ $pre_session,$view_session->Product->slug_product,$pre_slug]) }}"><i class="bi bi-chevron-left"></i>
                            Tập Trước</a>
                    </button>
                    <button class="btn btn-primary trcsau {{ $view_session->id == $max_id->id ? 'isDisable' : '' }} ">
                        <a href="{{ url('view', [$next_session,$view_session->Product->slug_product,$next_slug]) }}"> Tập Sau <i
                                class="bi bi-chevron-right"></i></a>
                    </button>
                </div>
            </div>
        </div>

       
    
     
    
        <div class="  reponsive-col9  formnen repon ">
            <div class="styleh3">
                <h3 class="style-lai">&nbsp;&nbsp;NHẬN XÉT </h3>
            </div>
            <form action="{{route('insert_comment')}}" method="post">
                @csrf
            <input type="hidden" name="user_id" value={{ Session::get('id') }}>
            <input type="hidden" name="session_id" value="{{$view_session->id}}">
            <div class="nhanxet">
                <textarea name="comment" id="" cols="30" rows="10" placeholder="Enter Comment....."></textarea>
            </div>
          
            <div class="binhluan">
                <button type="submit" class="btn btn-sm btn-success"><i class="bi bi-send"></i>&nbsp;&nbsp;Send</button>
            </div>
            </form>
            @foreach($comment as $item)
            <div class="showcm">
                <div class="info_user">
                    <div>
                        <img src="/uploads/img_truyen/77.jpg" alt="" width="50px" height="50px">
                    </div>
                    <div>
                        {{$item->Comment_user->name}}
                    </div>
                    <div class="ngaythang-comment">
                       <small >{{$item->created_at}}</small>
                    </div>
                </div>
                <div class="ndcm">
                    {{ $item->comment}}
                </div>
            </div>
            @endforeach
           
            <div class="mt-3 ">
                {{ $comment->links() }}
            </div>
            
        </div>
      
    </div>
@endsection
