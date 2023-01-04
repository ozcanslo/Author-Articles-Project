@extends('master')
@section('title')
    articles
@endsection
@section('css')
    <link href="{{ asset('/') }}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
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
                            <li class="breadcrumb-item active" aria-current="page">All Articles</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <h9 class="mb-0 text-uppercase"><strong>{{ $articles->count() }}</strong> article found. </h9>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Photography</th>
                                    <th>Article Title</th>
                                    <th>Views</th>
                                    <th>Creation Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($articles as $article)
                                    <tr>
                                        <td>
                                            <img src="{{ $article->image }}" width="200">
                                        </td>
                                        <td>{{ $article->title }}</td>
                                        <td>{{ $article->hit }}</td>
                                        <td>{{ $article->created_at->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{route('articles.show',$article->id)}}" class="btn btn-sm btn-success"><i class="fa fa-eye"></i> View </a>
                                            <a href="{{route('articles.edit',$article->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-pen"></i> Edit </a>
                                            <a href="{{route('delete-article',$article->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-times"></i> Delete </a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        @endsection
        @section('js')
            <script src="{{ asset('/') }}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
            <script src="{{ asset('/') }}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>

                    <script>
            @if (Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
            @endif
            @if (Session::has('errors'))
                toastr.error('Something went wrong..');
            @endif
        </script>
            <script>
                $(document).ready(function() {
                    $('#example').DataTable();
                });
            </script>
        @endsection
