
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
					<div class="breadcrumb-title pe-3">Medicine Edit</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">Medicine Edit</li>
							</ol>
						</nav>
					</div>
					<div class="ms-auto">
						<div class="btn-group">
							<button type="button" class="btn btn-primary"><a class="text-white" href="{{route('medicine.index')}}">Medicine list</a></button>
							</div>
						</div>
					</div>
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-xl-12 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">medicine Create</h5>
							</div>
							<div class="card-body p-4">
								<form class="form" method="post" enctype="multipart/form-data" action="{{route('medicine.update',encryptor('encrypt',$medicine->id))}}">
                                @csrf
                                @method('PATCH')
									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Company Name</b></label> <br>
                                        <select class="form-control" name="companie_id" id="companie_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($company as $c )
                                            <option {{old('companie_id',$medicine->companie_id)==$c->id?'selected':''}} value="{{$c->id}}">{{$c->name}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

											    
                                        </select>
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Medicine Brand Name</b></label>
										<input type="text" class="form-control rounded-5"
										name="bname" id="bname" placeholder=" Brand Name" value="{{ old('Medicine_Brand',$medicine->bname)}}" >

                                        @if($errors->has('bname'))
                                        <span class="text-danger"> {{ $errors->first('bname') }}</span>
                                    @endif
									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Medicine Generic name</b></label>
										<input type="text" class="form-control rounded-5"
										name="gname" id="gname" placeholder=" Generic Name" value="{{ old('Generic_Name',$medicine->bname)}}"  >

                                        @if($errors->has('gname'))
                                        <span class="text-danger"> {{ $errors->first('gname') }}</span>
                                    @endif
									</div>

									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Category Name</b></label> <br>
                                        <select class="form-control" name="category_id" id="category_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($category as $c )
                                            <option {{old('category_id')==$c->id}} value="{{$c->id}}">{{$c->medicine_category}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

                                        </select>



									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Supplier Name</b></label> <br>
                                        <select class="form-control" name="supplier_id" id="supplier_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($supplier as $c )
                                            <option {{old('supplier_id',$medicine->supplier_id)==$c->id?'selected':''}} value="{{$c->id}}">{{$c->name}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse
                                        </select>
									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Medicine Image</b></label>
                                        <input type="file" id="image" class="form-control rounded-5" placeholder="Image" name="image" value="{{ old('Medicine_Image',$medicine->image)}}" >

                                        @if($errors->has('image'))
                                        <span class="text-danger"> {{ $errors->first('image') }}</span>
                                    @endif
									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Dose Name</b></label>
										<br>
                                        <select class="form-control" name="dose_id" id="dose_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($dose as $c )
                                            <option {{old('dose_id',$medicine->dose_id)==$c->id}} value="{{$c->id}}">{{$c->dose_description}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse





                                        </select>
									</div>


									<div class="col-md-4">
										<label for="bsValidation1" class="form-label"><b>Price</b></label>
										<input type="text" class="form-control rounded-5"
										name="price" id="price" placeholder=" price" value="{{ old('price',$medicine->price)}}" >

                                        @if($errors->has('price'))
                                        <span class="text-danger"> {{ $errors->first('price') }}</span>
                                    @endif
									</div>


									<div class="col-md-4">
                                        <div class="form-group">
                                            <label for="status"><b>Status</b></label>
                                            <select id="status" class="form-control" name="status">
                                                <option value="1" @if(old('status',$medicine->status)==1) selected @endif>Active</option>
                                                <option value="0" @if(old('status',$medicine->status)==0) selected @endif>Inactive</option>
                                            </select>
                                            @if($errors->has('status'))
                                                <span class="text-danger"> {{ $errors->first('status') }}</span>
                                            @endif
                                        </div>
                                    </div>


                                   

									<div class="col-md-4">
										<label for="bsValidation13" class="form-label"><b>Description</b></label>
										<textarea class="form-control rounded-5" id="description" placeholder="description ..."
										name="description"rows="3" value="{{ old('description',$medicine->description)}}" ></textarea>

                                        @if($errors->has('description'))
                                        <span class="text-danger"> {{ $errors->first('description') }}</span>
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



