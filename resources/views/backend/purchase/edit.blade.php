  
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
					<div class="breadcrumb-title pe-3">Purchase Edit</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Purchase Edit</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary"><a class="text-white" href="{{route('purchase.index')}}">Purchase list</a></button>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-11 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Purchase Create </h5>
							</div>
							<div class="card-body p-4">
								<form method="post" enctype="multipart/form-data" action="{{route('purchase.store')}}" class="row g-3 needs-validation" novalidate>
                                    @csrf
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Supplier Name<span class="text-danger">*</span></b></label> <br>
                                        <select class="form-control" name="companie_id" id="companie_id">
                                        </select>
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Purchase date</b><span class="text-danger">*</span></label>
										<input type="date" class="form-control rounded-5"
										name="expiredate" id="expiredate" placeholder=" expiredate" >

                                        @if($errors->has('expiredate'))
                                        <span class="text-danger"> {{ $errors->first('expiredate') }}</span>
                                    @endif
									</div>

									
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Total Quantity</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Sub Amount</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Grand Total</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>status</b><span class="text-danger">*</span></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Reference No</b></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Tax</b></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Discount Type</b> </label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Discount</b> </label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Other Charge</b></label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Round Of</b> </label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>

									
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>note</b> </label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>payment_status</b> </label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
									</div>
									
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>status note</b> </label>
										<input type="text" class="form-control rounded-5"
										name="strength" id="strength" placeholder=" expiredate" >

                                        @if($errors->has('strength'))
                                        <span class="text-danger"> {{ $errors->first('strength') }}</span>
                                    @endif
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
	</div>

@endsection



