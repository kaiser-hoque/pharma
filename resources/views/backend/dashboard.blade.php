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
						<p class="mb-0 text-secondary">Today Purchase</p>
						<h4 class="my-1">{{ $dailyPurchase }}</h4>
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

<!--recent sale-->
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
				<thead class="  text-white bg-primary">
					<tr>
						<th>#SL</th>
						<th>Medicine</th>
						<th>Customer</th>
						<th>Sale Date</th>
						<th>Price</th>
						<th class="text-center">⬇</th>
					</tr>
				</thead>
				<tbody>
					  @foreach($recentSale as $rs)
					<tr onclick="redirectToSaleIndex()"> {{--"When I click on any row, it goes to sale.index.--}}

                            <td>{{++$loop->index}}</td>
						<td>
							<div class="d-flex align-items-center">
								 {{--<div class="recent-product-img">
									<img src="{{asset('public/assets/images/icons/chair.png')}}" alt="">
								</div>--}}
								<div class="ms-2">
									<h6 class="mb-1 font-14">{{$rs->medicine->bname}} <br><span class="text-muted">{{$rs->medicine->product_code}}</span> </h6>
								</div>
							</div>
						</td>
						<td>{{$rs->sale->customer->name}}</td>

                        <td>{{\Carbon\Carbon::parse($rs->sale->sale_date)->format('j F y') }}</td>

						<td>{{$rs->medicine->price}}</td>
						<td>
							<div class="btn-group">
                                <button type="button" class="btn btn-primary">Explore</button>
                                <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                    <a class="dropdown-item" href="{{ route('sale.create') }}">Add Sale</a>
                                    <a class="dropdown-item" href="{{route('purchase.create')}}">Add Purchase</a>
                                </div>
                            </div>
						</td>
					</tr>
					 @endforeach
				</tbody>
			</table>
		</div>
	</div>
</div>
</div>
</div>
{{--"When I click on any row, it goes to sale.index.--}}
<script>
    function redirectToSaleIndex() {
        window.location.href = "{{ route('sale.index')}}"
    }
</script>

<div class="overlay toggle-icon"></div>
<a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
@endsection
