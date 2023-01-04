@extends('master')
@section('title')
    Articles
@endsection
@section('css')
@endsection
@section('main')

    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Articles</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="#"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Articles</li>
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
                    <div class="row row-0">
                        <div class="col-3">
                          <img src="{{asset($article->image)}}" class="w-100 h-100 object-cover" alt="Card side image">
                        </div>
                        <div class="col">
                          <div class="card-body">
                            <h3 class="card-title">{{$article->title}}</h3>
                            <p>{!!$article->content!!}</p>
                          </div>
                        </div>
                      </div>
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
