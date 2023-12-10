
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
					<div class="breadcrumb-title pe-3">advancedsalary</div>
					<div class="ps-3">
						<nav aria-label="breadcrumb">
							<ol class="breadcrumb mb-0 p-0">
								<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
								</li>
								<li class="breadcrumb-item active" aria-current="page">advancedsalary Create</li>
							</ol>
						</nav>
					</div>
                    advancedsalary
				</div>
				<!--end breadcrumb-->
				<div class="row">
					<div class="col-md-10 mx-auto">
						<div class="card">
							<div class="card-header px-4 py-3">
								<h5 class="mb-0">advancedsalary Create</h5>
							</div>
							<div class="card-body p-4">
								<form method="post" enctype="multipart/form-data" action="{{route('advancedsalary.store')}}" class="row g-3 needs-validation" novalidate>
                                    @csrf
									<div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>Full Name (emp)</b></label>
                                        <select class="form-control" name="emp_id" id="companie_id">
                                            <option value="">==Select Name==</option>
                                            @forelse ($employee as $c )
                                            <option {{old('emp_id')==$c->id}} value="{{$c->id}}">{{$c->name}}</option>
                                            @empty
                                            <option value="">No Company name found</option>
                                            @endforelse

                                        </select>
									</div>

                                    <div class="col-md-6">
                                        <label for="bsValidation4" class="form-label"><b>Month</b></label>
                                        <select name="month" id="" class="form-control">
                                            <option value="January">==select month==</option>
                                            <option value="January">January</option>
                                            <option value="February">February</option>
                                            <option value="March">March</option>
                                            <option value="April">April</option>
                                            <option value="May">May</option>
                                            <option value="June">June</option>
                                            <option value="July">July</option>
                                            <option value="August">August</option>
                                            <option value="September">September</option>
                                            <option value="October">October</option>
                                            <option value="November">November</option>
                                            <option value="December">December</option>
                                        </select>
                                        @if($errors->has('month'))
                                        <span class="text-danger"> {{ $errors->first('month') }}</span>
                                    @endif
                                    </div>

                                    <div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>Year</b></label>
										<input type="text" class="form-control "
										name="year" id="emp_id" placeholder="  year" >

                                        @if($errors->has('emp_id'))
                                        <span class="text-danger"> {{ $errors->first('year') }}</span>
                                    @endif
									</div>

                                    <div class="col-md-6">
										<label for="bsValidation1" class="form-label"><b>Advanced Salary</b></label>
										<input type="text" class="form-control "
										name="advanced_salary" id="advanced_salary" placeholder="  advanced_salary" >

                                        @if($errors->has('advanced_salary'))
                                        <span class="text-danger"> {{ $errors->first('advanced_salary') }}</span>
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



