@extends('master')
@section('title')
    Create Article
@endsection
@section('css')
@endsection
@section('main')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">New Article</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">create article</li>
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
                    <form method="post" action="{{ route('articles.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Article title</label>
                            <input type="text" name="title" class="form-control" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Article photograpy</label>
                            <input type="file" name="image" class="form-control" required>
                        </div>
                        <hr>
                        <div class="form-group">
                            <label>Content</label>
                            <textarea id="editor" name="content"></textarea>
                        </div>
                        <hr>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Create</button>
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
