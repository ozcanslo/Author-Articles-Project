@extends('master')
@section('title')
    Update Article
@endsection
@section('css')
@endsection
@section('main')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Article Update</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Article Update</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </div>
                    @endif
                    <form method="post" action="{{ route('articles.update',$paragraphy->id)}}" enctype="multipart/form-data">
                    @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label><h5>Article title</h5></label>
                            <input type="text" name="title" class="form-control" value="{{$paragraphy->title}}" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><h5>Article photograpy</h5></label><br>
                            <img src="{{asset($paragraphy->image)}}" width="150" class="img-thumbnail rounded"/>
                            <input type="file" name="image" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group">
                            <label><h5>Content</h5></label>
                            <textarea id="editor" name="content">{{!!$paragraphy->content!!}}</textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    @endsection
    @section('js')
        <script>
            @if (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
            @if (Session::has('errors'))
                toastr.error('Something went wrong..');
            @endif
        </script>
        <script>
            ClassicEditor
                .create(document.querySelector('#editor'))
                .then(editor => {
                    console.log(editor);
                })
                .catch(error => {
                    console.error(error);
                });
        </script>
    @endsection
