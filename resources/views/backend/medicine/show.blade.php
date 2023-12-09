@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')




    <div class="page-wrapper">
			<div class="page-content">

				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Medicine</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Medicine Information</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary">Settings</button>
							<button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
							</button>
							<div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">	<a class="dropdown-item" href="javascript:;">Action</a>
								<a class="dropdown-item" href="javascript:;">Another action</a>
								<a class="dropdown-item" href="javascript:;">Something else here</a>
								<div class="dropdown-divider"></div>	<a class="dropdown-item" href="javascript:;">Separated link</a>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->

				 <div class="card">
					<div class="row g-0">
                        <h3 class="text-center text-muted mt-2">Medicine-Details</h3>
                         <div class="col-md-4 border-end">
						<img src="{{ asset('public/uploads/medicine/'.$medicine->image) }}" style="width: 250px; height: 200px; align" class="img-fluid mt-5 rounded  d-block mx-auto " alt="...">
						<div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
 						 
						</div>
					  </div>
 
					  <div class="col-md-8">
						<div class="card-body">
						  <div class="mb-3"> 
							 
						</div>

						  <dl class="row">
							<dt class="col-sm-3">Medicin Name</dt><br>
							<dd class="col-sm-9 text-muted ">{{$medicine->bname}}</dd>
							<dt class="col-sm-3">Generic Name:</dt>
							<dd class="col-sm-9">{{$medicine->bname}}</dd>
							<dt class="col-sm-3">Product Code:</dt>
							<dd class="col-sm-9">{{$medicine->product_code}}</dd>
							<dt class="col-sm-3">Dose Name:</dt>
							<dd class="col-sm-9">{{$medicine->dose?->dose_description}}</dd>
							<dt class="col-sm-3">Manufacture Date:</dt>
							<dd class="col-sm-9">{{$medicine->manufacturedate}}</dd>
							<dt class="col-sm-3">Expire Date:</dt>
							<dd class="col-sm-9">{{$medicine->expiredate}}</dd>
							<dt class="col-sm-3">Strength:</dt>
							<dd class="col-sm-9">{{$medicine->strength}}</dd>
							<dt class="col-sm-3">Price:</dt>
							<dd class="col-sm-9">{{$medicine->price}}</dd>
							<dt class="col-sm-3">Status:</dt>
							<dd class="col-sm-9">{{$medicine->status}}</dd>
	  
						  </dl>
						</div>
					  </div>
					</div>
            </div>
                    <hr/>
					<div class="card-body">
						<ul class="nav nav-tabs nav-primary mb-0" role="tablist">
							<li class="nav-item" role="presentation">
								<a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab" aria-selected="true">
									<div class="d-flex align-items-center">
										<div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
										</div>
										<div class="tab-title text-center "> <h4 class="text-primary ">Medicin Description </h4>  </div>
									</div>
								</a>
							</li>
							 
							 
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active " 				id="primaryhome" 		role="tabpanel">
								<div class="text-center bg-primary p-5 opacity-25"> 
									<h2 class="text-white"> {{$medicine->description}}</h2>
								</div>
							</div>
							 
						</div>
					</div>
				  </div>			  
			</div>
		</div>



    </div>
    <!-- @push('scripts')
        ;
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
        </script>
        <script>
            $(document).ready(function() {
                var table = $('#example2').DataTable({
                    lengthChange: false,
                    buttons: ['copy', 'excel', 'pdf', 'print']
                });

                table.buttons().container()
                    .appendTo('#example2_wrapper .col-md-6:eq(0)');
            });
        </script>
    @endpush -->

    <!--app JS-->
    
@endsection
