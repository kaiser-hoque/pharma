@extends('backend.layouts.app')
@section('title',trans('create Users'))
@section('page',trans('Create'))
@section('content')
	<div class="wrapper">
        <div class="page-wrapper">
			<div class="page-content">
				<div class="card">
					<div class="card-body">
                        <form class="form" method="post" enctype="multipart/form-data" action="{{route('dose.store')}}">
                            @csrf
						<div class="row row-cols-1 g-3 row-cols-lg-auto align-items-center">
						   <div class="col">
                            <label for="dose"> <h4>Add Dose</h4></label>
							    <input type="text" class="form-control" id="dose_description"
                                name="dose_description" placeholder="category name">

                                @if ($errors ->has ('dose_description'))
                                <span class="text-danger"
                                >{{$errors-first ('dose_description')}}</span>
                                @endif

							    <button type="submit" class="btn btn-primary mt-4">Submit</button>
						 </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="overlay toggle-icon"></div>
		<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>

		<footer class="page-footer">
			<p class="mb-0">
                Copyright © 2023. All right reserved.</p>
		</footer>
	</div>

@endsection
