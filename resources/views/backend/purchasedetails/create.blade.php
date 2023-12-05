
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
					<div class="breadcrumb-title pe-3">Purchase Details</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Purchase Details Create</li>
							</ol>
						</nav>
					</div>

				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-10 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">Purchase Details Create</h5>
							</div>
							<div class="card-body p-4">
								<form method="post" enctype="multipart/form-data" action="{{route('purchasedetails.store')}}" class="row g-3 needs-validation" novalidate>
                                    @csrf
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>purchase_id</b></label>
										<input type="text" class="form-control rounded-5"
										name="pur" id="pur" placeholder="  pur" >

                                        @if($errors->has('pur'))
                                        <span class="text-danger"> {{ $errors->first('pur') }}</span>
                                    @endif
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>medicine_id</b></label>
										<input type="text" class="form-control rounded-5"
										name="medicine_id" id="medicine_id" placeholder="  medicine_id" >

                                        @if($errors->has('medicine_id'))
                                        <span class="text-danger"> {{ $errors->first('medicine_id') }}</span>
                                    @endif
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>quantity</b></label>
										<input type="text" class="form-control rounded-5"
										name="qty" id="qty" placeholder="  qty" >

                                        @if($errors->has('qty'))
                                        <span class="text-danger"> {{ $errors->first('qty') }}</span>
                                    @endif
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>unit_price</b></label>
										<input type="text" class="form-control rounded-5"
										name="price" id="price" placeholder=" price" >

                                        @if($errors->has('price'))
                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                    @endif
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>sub_amount</b></label>
										<input type="text" class="form-control rounded-5"
										name="unit_cost" id="unit_cost" placeholder="unit_cost" >

                                        @if($errors->has('unit_cost'))
                                        <span class="text-danger"> {{ $errors->first('unit_cost') }}</span>
                                    @endif
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>tax</b></label>
										<input type="text" class="form-control rounded-5"
										name="tax" id="tax" placeholder="tax" >

                                        @if($errors->has('tax'))
                                        <span class="text-danger"> {{ $errors->first('tax') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status"><b>discount_type<span class="text-danger">*</span></b></label>
                                            <select id="discount_type" class="form-control" name="discount_type">
                                                <option value="1" @if(old('discount_type')==1) selected @endif>percent</option>
                                                <option value="0" @if(old('discount_type')==0) selected @endif>amount</option>
                                            </select>

                                            @if($errors->has('discount_type'))
                                                <span class="text-danger"> {{ $errors->first('discount_type') }}</span>
                                            @endif
                                        </div>
                                    </div>
								 
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>discount</b></label>
										<input type="text" class="form-control rounded-5"
										name="discount" id="discount" placeholder="discount	" >

                                        @if($errors->has('discount'))
                                        <span class="text-danger"> {{ $errors->first('discount') }}</span>
                                    @endif
									</div>
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>total_amount</b></label>
										<input type="text" class="form-control rounded-5"
										name="subtotal" id="subtotal" placeholder="subtotal	" >

                                        @if($errors->has('subtotal'))
                                        <span class="text-danger"> {{ $errors->first('subtotal') }}</span>
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

@endsection



