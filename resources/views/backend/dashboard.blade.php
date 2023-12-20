@extends('backend.layouts.app')
@section('content')
<!--start page wrapper -->
<div class="page-wrapper"> <div class="page-content"> <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
	<div class="col">
	<div class="card radius-10">
		<div class="card-body">
			<div class="d-flex align-items-center">
				<div>
					<p class="mb-0 text-secondary">Total Sale</p>
					<h4 class="my-1"> {{ $totalSales }}</h4>

				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="col">
		<div class="card radius-10">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Total Purchase</p>
						<h4 class="my-1">{{$totalPurchase}}</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card radius-10">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Total Stock</p>
						<h4 class="my-1"><a href="{{route('stock.index')}}"><i class="fa-solid fa-arrow-right"></i><span class="text-dark">{{$totalStock}}</span></a></h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card radius-10">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Todays Sale</p>
						<h4 class="my-1">{{$dailySales}}</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col">
		<div class="card radius-10">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<p class="mb-0 text-secondary">Yesterday Sales</p>
						<h4 class="my-1">{{ $yesterdaySales }}</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
		<div class="col">
			<div class="card radius-10">
				<div class="card-body">
					<div class="d-flex align-items-center">
						<div>
							<p class="mb-0 text-secondary">Total Customer</p>
							<h4 class="my-1">{{$totalCustomer}}</h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--end row-->
<div class="row row-cols-1 row-cols-xl-2">
	<div class="col d-flex">
		<div class="card radius-10 w-100">
			<div class="card-body">
				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-1">Store Metrics</h5>
						<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue
						</p>
					</div>
					<div class="dropdown ms-auto">
						<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"> <i
								class='bx bx-dots-horizontal-rounded font-22  text-option'></i>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="javascript:;">Action</a>
							</li>
							<li><a class="dropdown-item" href="javascript:;">Another action</a>
							</li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="javascript:;">Something else here</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="row row-cols-1 row-cols-sm-3 mt-4">
					<div class="col">
						<div>
							<p class="mb-0 text-secondary">Revenue</p>
							<h4 class="my-1">$4805</h4>
							<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>$1458 Since
								last month</p>
						</div>
					</div>
					<div class="col">
						<div>
							<p class="mb-0 text-secondary">Total Customers</p>
							<h4 class="my-1">8.4K</h4>
							<p class="mb-0 font-13 text-success"><i class='bx bxs-up-arrow align-middle'></i>12.3% Since
								last month</p>
						</div>
					</div>
					<div class="col">
						<div>
							<p class="mb-0 text-secondary">Store Visitors</p>
							<h4 class="my-1">59K</h4>
							<p class="mb-0 font-13 text-danger"><i class='bx bxs-down-arrow align-middle'></i>2.4% Since
								last month</p>
						</div>
					</div>
				</div>
				<div id="chart4"></div>
			</div>
		</div>
	</div>
	<div class="col d-flex">
		<div class="card radius-10 w-100">
			<div class="card-header border-bottom-0">
				<div class="d-flex align-items-center">
					<div>
						<h5 class="mb-1">Top Medicine</h5>
						<p class="mb-0 font-13 text-secondary"><i class='bx bxs-calendar'></i>in last 30 days revenue
						</p>
					</div>
					<div class="dropdown ms-auto">
						<a class="dropdown-toggle dropdown-toggle-nocaret" href="#" data-bs-toggle="dropdown"> <i
								class='bx bx-dots-horizontal-rounded font-22 text-option'></i>
						</a>
						<ul class="dropdown-menu">
							<li><a class="dropdown-item" href="javascript:;">Action</a>
							</li>
							<li><a class="dropdown-item" href="javascript:;">Another action</a>
							</li>
							<li>
								<hr class="dropdown-divider">
							</li>
							<li><a class="dropdown-item" href="javascript:;">Something else here</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="product-list p-3 mb-3">
                @foreach($medicine as $m)
				<div class="row border mx-0 mb-3 py-2 radius-10 cursor-pointer">
					<div class="col-sm-6">
						<div class="d-flex align-items-center">
							<div class="product-img">
								<img src="{{asset('public/uploads/medicine/'.$m->image)}}" alt="" />
							</div>
							<div class="ms-2">
								<h6 class="mb-1">{{$m->bname}}</h6>
								<p class="mb-0">{{$m->gname}}</p>
							</div>
						</div>
					</div>
					<div class="col-sm">
						<h6 class="mb-1">{{$m->price}}</h6>

					</div>
					<div class="col-sm">
						<div id="chart5"></div>
					</div>
				</div>
                @endforeach

			</div>
		</div>
	</div>
</div>
<!--end row-->

<!--end row-->
<div class="card radius-10">
	<div class="card-body">
		<div class="d-flex align-items-center">
			<div>
				<h5 class="mb-0">Recent Sales</h5>
			</div>
			<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
			</div>
		</div>
		<hr />
		<div class="table-responsive">
			<table class="table align-middle mb-0">
				<thead class="table-light">
					<tr>
						<th>#SL</th>
						<th>Medicine</th>
						<th>Customer</th>
						<th>Sale Date</th>
						<th>Price</th>
						<th>Status</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>#897656</td>
						<td>
							<div class="d-flex align-items-center">
								<div class="recent-product-img">
									<img src="{{asset('public/assets/images/icons/chair.png')}}" alt="">
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Light Blue Chair</h6>
								</div>
							</div>
						</td>
						<td>Brooklyn Zeo</td>
						<td>12 Jul 2020</td>
						<td>$64.00</td>
						<td>
							<div class="d-flex align-items-center text-danger"> <i
									class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
								<span>Pending</span>
							</div>
						</td>
						<td>
							<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
										class="bx bx-cog"></i></a>
								<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>#987549</td>
						<td>
							<div class="d-flex align-items-center">
								<div class="recent-product-img">
									<img src="{{asset('public/assets/images/icons/shoes.png')}}" alt="">
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Green Sport Shoes</h6>
								</div>
							</div>
						</td>
						<td>Martin Hughes</td>
						<td>14 Jul 2020</td>
						<td>$45.00</td>
						<td>
							<div class="d-flex align-items-center text-primary"> <i
									class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
								<span>Dispatched</span>
							</div>
						</td>
						<td>
							<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
										class="bx bx-cog"></i></a>
								<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
							</div>
						</td>
					</tr>
					<tr>
						<td>#685749</td>
						<td>
							<div class="d-flex align-items-center">
								<div class="recent-product-img">
									<img src="{{asset('public/assets/images/icons/headphones.png')}}" alt="">
								</div>
								<div class="ms-2">
									<h6 class="mb-1 font-14">Red Headphone 07</h6>
								</div>
							</div>
						</td>
						<td>Shoan Stephen</td>
						<td>15 Jul 2020</td>
						<td>$67.00</td>
						<td>
							<div class="d-flex align-items-center text-success"> <i
									class='bx bx-radio-circle-marked bx-burst bx-rotate-90 align-middle font-18 me-1'></i>
								<span>Completed</span>
							</div>
						</td>
						<td>
							<div class="d-flex order-actions"> <a href="javascript:;" class=""><i
										class="bx bx-cog"></i></a>
								<a href="javascript:;" class="ms-4"><i class='bx bx-down-arrow-alt'></i></a>
							</div>
						</td>
					</tr>

				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
<!--end page wrapper -->
<!--start overlay-->
<div class="overlay toggle-icon"></div>
<!--end overlay-->
<!--Start Back To Top Button-->
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
<!--End Back To Top Button-->
@endsection
