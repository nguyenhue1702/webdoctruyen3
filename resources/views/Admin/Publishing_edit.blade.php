@extends('layout/admin_layout')
@section('Publishing_edit')
    <div class="text codinh ">Edit Publishing</div>
    <form action="{{ route('update_publishing', $publishings->id) }}" enctype="multipart/form-data" method="POST">
        @csrf
        @method('PUT')
        <div class="form-create ">
            <div class="tuan-input">
                <input type="text" spellcheck="false" required name="name_publishing"
                    value="{{ $publishings->name_publishing }}">
                <label for="">Name Publishing</label>
            </div>
            <div class="tuan-input moveip">
                <input type="text" spellcheck="false" required name="address" value="{{ $publishings->address }}">
                <label for="">Enter Address</label>
            </div>
            <div class="movehinh">
                <input type="file" spellcheck="false" name="img_publishing" id="imageFile" onchange="chooseFile(this)">
            </div>
            <div class="img-show"><img src="/uploads/img_publishing/{{ $publishings->img_publishing }}" alt=""
                    style="width:200px; height:280px" id="image"></div>
            <div class="submit">
                <button>Submit</button>
            </div>
        </div>
    </form>
    <script src="{{ asset('js/img_show.min.js') }}"></script>
@endsection
