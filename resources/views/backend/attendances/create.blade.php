
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
				<div class="breadcrumb-title pe-3">Emp attendances</div>
				<div class="ps-3">
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb mb-0 p-0">
							<li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
							</li>
							<li class="breadcrumb-item active" aria-current="page">Epm attendances Create</li>
						</ol>
					</nav>
				</div>
			</div>
		<!--end breadcrumb-->
			<div class="row">
				<div class="col-md-10 mx-auto">
					<div class="card">
						<div class="card-header px-4 py-3">
							<h5 class="mb-0">attendances Create</h5>
						</div>
						<div class="card-body p-4">
							<form method="post" enctype="multipart/form-data" action="{{route('attendances.store')}}" class="row g-3 needs-validation" novalidate>
									@csrf

								<div class="col-md-6">
									<label for="bsValidation4" class="form-label"><b>Attendances Date</b></label>
									<input type="date" class="form-control"
									name="attendance_date" id="attendance_date" placeholder="attendance_date" value="<?= date('Y-m-d')?>" >

									@if($errors->has('date'))
									<span class="text-danger"> {{ $errors->first('attendance_date') }}</span>
								@endif
								</div>	

								<hr>
								<div class="card-body">
									<div class="table-responsive">
										<table id="example" class="table table-striped table-bordered">
											<thead class="bg-dark text-white">
												<tr>
													<th>Employee Name</th>
													<th>Status</th>
												</tr>
											</thead>
											<tbody>
												@forelse($user as $value)
													<tr>
														<td>{{ $value->name_en }}
															<input type="hidden" name="user_id" value="{{ $value->id }}">
														</td>
														<td>
															<select name="status" class="form-control">
																<option value="1">Present</option>
																<option value="0">Absent</option>
															</select>
														</td>
													</tr>
												@empty
													<tr>
														<td colspan="3">No data Found</td>
													</tr>
												@endforelse
											</tbody>
										</table>
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



