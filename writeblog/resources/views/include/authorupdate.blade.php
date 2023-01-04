  @extends('master')
  @section('title')
      Author Update
  @endsection
  @section('css')
  @endsection
  @section('main')
      <div class="page-wrapper">
          <div class="page-content">
              <!--breadcrumb-->
              <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                  <div class="breadcrumb-title pe-3">Author Update</div>
                  <div class="ps-3">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mb-0 p-0">
                              <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Author Update</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              <!--end breadcrumb-->
              <div class="row">
                  <div class="col">
                  @if ($errors->any())
                  @foreach ($errors->all() as $error)
                  <div class="alert alert-danger">{{$error}}</div>
                  @endforeach
                  @endif
                  @if (session('success'))
                  <div class="alert alert-success">{{session('success')}}</div> 
                  @endif
                  <form action="{{route('author-update-post', $authorinfo->id)}}" method="post">
                  @csrf
                      <div class="card">
                          <div class="card-body">
                              <h6 class="mb-0 text-uppercase">Author Update</h6>
                              <hr />
                              <input class="form-control form-control-lg mb-3" type="text" name="namesurname" placeholder="Writer Name" value="{{$authorinfo->namesurname}}"
                                  aria-label=".form-control-lg example">
                                  <input class="form-control form-control-lg mb-3" type="email" name="mail" placeholder="E-posta" value="{{$authorinfo ->mail}}"
                                  aria-label=".form-control-lg example">
                                  <input class="form-control form-control-lg mb-3" type="text" name="phone" placeholder="Phone Number" value="{{$authorinfo->phone}}"
                                  aria-label=".form-control-lg example">
                                  <input class="btn btn-success mb-3" type="submit" name="redirect" value="UPDATE"
                                  aria-label=".form-control-lg example">
                          </div>
                      </div>
                      </form>
                  </div>
              </div>
              <!--end row-->
          </div>
      </div>
  @endsection
  @section('js')
  @endsection
