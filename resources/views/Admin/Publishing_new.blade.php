@extends('layout/admin_layout')
@section('Publishing_new')
    <div class="text codinh">New Publishing</div>
    <form action="{{ route('new_publishing') }}" enctype="multipart/form-data" method="POST">
        @csrf
        <div class="form-create ">

            <div class="tuan-input">
                <input type="text" spellcheck="false" required name="name_publishing">
                <label for="">Name Publishing</label>
            </div>
            <div class="tuan-input moveip">
                <input type="text" spellcheck="false" required name="address">
                <label for="">Enter Address</label>
            </div>
            <div class="movehinh">
                <input type="file" spellcheck="false" required name="img_publishing" id="imageFile"
                    onchange="chooseFile(this)" required="true">
            </div>

            <div class="img-show"><img src="" alt="" style="width:200px; height:280px" id="image"></div>

            <div class="submit">
                <button>Submit</button>
            </div>




        </div>

    </form>
    <script src="{{ asset('js/img_show.min.js') }}"></script>
@endsection
