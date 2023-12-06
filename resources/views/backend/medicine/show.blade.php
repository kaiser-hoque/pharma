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
								<li class="breadcrumb-item active" aria-current="page">Medicine Details</li>
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
					  <div class="col-md-4 border-end">
						<img src="assets/images/products/13.png" class="img-fluid" alt="...">
						<div class="row mb-3 row-cols-auto g-2 justify-content-center mt-3">
							<div class="col"><img src="assets/images/products/12.png" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="assets/images/products/11.png" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="assets/images/products/14.png" width="70" class="border rounded cursor-pointer" alt=""></div>
							<div class="col"><img src="assets/images/products/15.png" width="70" class="border rounded cursor-pointer" alt=""></div>
						</div>
					  </div>
					  <div class="col-md-8">
						<div class="card-body">
						  <h4 class="card-title">{{$medicine->bname}}</h4>
						  
						  <div class="mb-3"> 
							 
						</div>
						   
						  <dl class="row">
							<dt class="col-sm-3">Model#</dt>
							<dd class="col-sm-9">Odsy-1000</dd>
						  
							<dt class="col-sm-3">Dose Name:</dt>
							<dd class="col-sm-9">{{$medicine->dose?->dose_description}}</dd>
						  
							<dt class="col-sm-3">Delivery</dt>
							<dd class="col-sm-9">Russia, USA, and Europe </dd>
						  </dl>
						  
						   
						 
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
										<div class="tab-title"> Product Description </div>
									</div>
								</a>
							</li>
							 
							 
						</ul>
						<div class="tab-content pt-3">
							<div class="tab-pane fade show active" id="primaryhome" role="tabpanel">
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
								<p>Raw denim you probably haven't heard of them jean shorts Austin. Nesciunt tofu stumptown aliqua, retro synth master cleanse. Mustache cliche tempor, williamsburg carles vegan helvetica. Reprehenderit butcher retro keffiyeh dreamcatcher synth. Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi.</p>
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
