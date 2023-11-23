@extends('backend.layouts.app')
@section('title',trans('create Users'))
@section('content')

 

 


	<div class="page-wrapper">
			<div class="page-content">
				<div class="card radius-10">
					<div class="card-body">
						<div class="d-flex align-items-center">
							<div>
								<h5 class="mb-0">User Name</h5>
							</div>
							<div class="font-22 ms-auto"><i class='bx bx-dots-horizontal-rounded'></i>
							</div>
						</div>
						<div class="d-lg-flex align-items-center mb-4 gap-3">
							<div class="position-relative">
								<input type="text" class="form-control ps-5 radius-30" placeholder="Search Order"> <span class="position-absolute top-50 product-show translate-middle-y"><i class="bx bx-search"></i></span>
							</div>
						  <div class="ms-auto"><a href="{{route('user.create')}}" class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New User</a></div>
						</div>
						<hr/>
						<div class="table-responsive">
							<table class="table align-middle mb-0">
								<thead class="table-light">	
									<tr>
										<th scope="col">{{__('#SL')}}</th>
										<th scope="col">{{__('Name')}}</th>
										<th scope="col">{{__('Email')}}</th>
										<th scope="col">{{__('Contact')}}</th>
										<th scope="col">{{__('Role')}}</th>
										<th scope="col">{{__('Image')}}</th>
										<th scope="col">{{__('Status')}}</th>
										<th class="white-space-nowrap">{{__('Action') }}</th>
									</tr>
								</thead>
								<tbody>
									@forelse($data as $d)
                            <tr>
                                <td>{{++$loop->index}}</td>
                                <td>{{$d->name_en}}</td>
                                <td>{{$d->email}}</td>
                                <td>{{$d->contact_no_en}}</td>
                                <td>{{$d->role?->type}}</td>
                                <td><img width="50px" src="{{asset('public/uploads/users/'.$d->image)}}" alt=""></td>
                                <td style="color: @if($d->status==1) green @else red @endif; border-radius: 5px;font-weight: bold; font-size:15px">@if($d->status==1){{__('Active')}} @else{{__('Inactive')}} @endif</td>
                                <td class="btn group">
                                    <a href="{{route('user.edit',encryptor('encrypt',$d->id))}}"><i class="fa fa-edit"></i></a>

                                    <form id="" action="{{ route('user.destroy',encrypt($d->id))}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button style="background: none; border: none;" type="submit"><i class="fa fa-trash text-danger"></i></button>

                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <th colspan="8" class="text-center">No Pruduct Found</th>
                            </tr>
                        @endforelse 	 
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
	</div>
 @endsection