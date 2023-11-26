
@extends('backend.layouts.app')
@section('title',trans('create Users'))
@section('content')
 

 
	<!--wrapper-->
	<div class="wrapper">
		<!--start page wrapper -->
		<div class="page-wrapper">
			<div class="page-content">
				<!--breadcrumb-->
				<div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
					<div class="breadcrumb-title pe-3">Customer</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Customer Create</li>
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
				<div class="row">
					<div class="col-xl-6 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Customer Create</h5>
							</div>
							<div class="card-body p-4">
								<form class="row g-3 needs-validation" novalidate>
									<div class="col-md-12">
										<label for="bsValidation1" class="form-label"><b>Full Name</b></label>
										<input type="text" class="form-control"
										name="name"
										id="bsValidation1" placeholder="First Name" value="Jhon" required>
										<div class="valid-feedback">
											Looks good!
										  </div>
									</div>
									 
									<div class="col-md-12">
										<label for="bsValidation3" class="form-label"><b>Contact Num</b></label>
										<input type="text" class="form-control" id="bsValidation3" 
										name="contact_num"placeholder="Phone" required>
										<div class="invalid-feedback">
											Please choose a username.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label"><b>Email</b></label>
										<input type="email" class="form-control" 
										name="email" id="bsValidation4" placeholder="Email" required>
										<div class="invalid-feedback">
											Please provide a valid email.
										  </div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation4" class="form-label"><b>Gender</b></label>
										<div class="d-flex align-items-center gap-3">
											<div class="form-check">
												 
												<input type="radio" class="form-check-input" id="bsValidation6" name="gender" required>
												<label class="form-check-label" for="bsValidation6">Male</label>
											  </div>
											  <div class="form-check">
												<input type="radio" class="form-check-input" id="bsValidation7" name="gender" required>
												<label class="form-check-label" for="bsValidation7">Female</label>
											  </div>
										</div>
									</div>
									 <div class="sm-col-12">
                                        <div class="form-group">
                                            <label for="status"><b>Status</b></label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="1" @if(old('status')==1) selected @endif>Active</option>
                                                <option value="0" @if(old('status')==0) selected @endif>Inactive</option>
                                            </select>
                                            @if($errors->has('status'))
                                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>

	 
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label"><b>Adress</b></label>
										<textarea class="form-control" id="bsValidation13" 
										name="address"placeholder="Address ..." rows="3" required></textarea>
										<div class="invalid-feedback">
											Please enter a valid address.
										</div>
									</div>
									<div class="col-md-12">
										<label for="bsValidation13" class="form-label"><b>Description</b></label>
										<textarea class="form-control" id="bsValidation13" placeholder="Address ..." 
										name="description"rows="3" required></textarea>
										<div class="invalid-feedback">
											Please enter a Description
										</div>
									</div>
									 
									<div class="col-md-12">
										<div class="d-md-flex d-grid align-items-center gap-3">
											<button type="submit" class="btn btn-primary px-4">Submit</button>
											<button type="reset" class="btn btn-light px-4">Reset</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			
			</div>
		</div>
		 
@endsection



