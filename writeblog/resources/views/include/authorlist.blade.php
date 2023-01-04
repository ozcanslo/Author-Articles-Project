 @extends('master')
 @section('title')
     Author List
 @endsection
 @section('css')
 <link href="{{ asset('/') }}assets/plugins/datatable/css/dataTables.bootstrap5.min.css" rel="stylesheet" />
 @endsection
 @section('main')
     <div class="page-wrapper">
         <div class="page-content">
              <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                  <div class="breadcrumb-title pe-3">Author List</div>
                  <div class="ps-3">
                      <nav aria-label="breadcrumb">
                          <ol class="breadcrumb mb-0 p-0">
                              <li class="breadcrumb-item"><a href="{{ route('home') }}"><i class="bx bx-home-alt"></i></a>
                              </li>
                              <li class="breadcrumb-item active" aria-current="page">Author List</li>
                          </ol>
                      </nav>
                  </div>
              </div>
              <hr/>
			  @if (session('success'))
				  <div class="alert alert-success">{{session('success')}}</div>
			  @endif
				<div class="card">
					<div class="card-body">
						<div class="table-responsive">
							<table id="example" class="table table-striped table-bordered" style="width:100%">
								<thead>
									<tr>
										<th>İd</th>
										<th>Author İnformation</th>
										<th>Author E-Mail</th>
										<th>Author Phone</th>
										<th>Process</th>
									</tr>
								</thead>
								<tbody>
                                @if($bloggers)
                                @foreach ($bloggers as $blogger)
									<tr>
										<td>{{ $loop->iteration }}</td>
										<td>{{ $blogger->namesurname }}</td>
										<td>{{ $blogger->mail }}</td>
										<td>{{ $blogger->phone}}</td>
										<td>
                                        <a href="{{route('author-update',$blogger->id)}}" class="btn btn-dark btn-sm px-1"><i class="bx bx-message-square-edit"></i>Update</a>
                                        <a href="{{route('author-delete',$blogger->id)}}" class="btn btn-danger btn-sm px-1"><i class="bx bx-trash"></i>>Delete</a>
                                        </td>
									</tr>
                                    @endforeach
                                @endif
								</tbody>
								<tfoot>
									<tr>
										<th>İd</th>
										<th>Author İnformation</th>
										<th>Author E-Mail</th>
										<th>Author Phone</th>
										<th>Process</th>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>


         </div>
     </div>
 @endsection
 @section('js')
 <script src="{{ asset('/') }}assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="{{ asset('/') }}assets/plugins/datatable/js/dataTables.bootstrap5.min.js"></script>
	<script>
		$(document).ready(function() {
			$('#example').DataTable();
		  } );
	</script>
 @endsection
