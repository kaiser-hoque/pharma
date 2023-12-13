@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Tables</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Purchase Data Table</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <div class="ms-auto"><a href="{{ route('purchase.create') }}"
                                    class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 text-uppercase">Purchase</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('SL') }}</th>
                                        <th class="text-center">{{ __('Supplier Name') }} </th>
                                        <th class="text-center">{{ __('Purchase date') }} </th>
                                        <th class="text-center">{{ __('Total Quantity') }} </th>
                                        <th class="text-center">{{ __('Sub Amount') }} </th>
                                        <th class="text-center">{{ __('Grand Total') }} </th>
                                        <th class="text-center">{{ __('Reference No') }} </th>
                                        <th class="text-center">{{ __('Discount') }}</th>
                                        <th class="text-center">{{ __('Other Charge') }} </th>
                                        <th class="text-center">{{ __('Round Of') }} </th>
                                        <th class="text-center">{{ __('payment status') }} </th>
                                        <th class="text-center">{{ __('status') }}
                                        <th>{{ __('Tax') }}</th>
                                        <th>{{ __('note') }}</th>
                                        <th class="white-space-nowrap">{{ __('Action') }}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($purchase as $value)
                                    <tr>
                                        <td>{{++$loop->index}}</td>
                                        <td>{{$value->supplier?->name}}</td>
                                        <td>{{$value->purchase_date}}</td>
                                        <td>{{$value->total_quantity}}</td>
                                        <td>{{$value->sub_amount}}</td>
                                        <td>{{$value->grand_total}}</td>
                                        <td>{{$value->reference_no}}</td>
                                        <td>{{$value->discount}}</td>
                                        <td>{{$value->other_charge}}</td>
                                        <td>{{$value->round_of}}</td>
                                        <td>{{$value->payment_status}}</td>
                                        <td>{{ __($value->status == 1 ? 'pharches' :
                                            ($value->status == 2 ? 'return' :
                                            ($value->status == 3 ? 'partial_return' : 'cancel'))) }}</td>
                                        <td>{{$value->tax}}</td>
                                        <td>{{$value->note}}</td>
                                        <td class="action-buttons">
                                            <div class="button-container">
                                                {{-- <a href="{{route('purchase.edit',encryptor('encrypt', $value->id))}}">
                                                    <i class="fa fa-edit"></i>
                                                </a>  --}}
                                                <a href="{{route('purchase.show',encryptor('encrypt',$value->id))}}"><i class="fa-solid fa-eye"></i></a>
                                                <form id="" action="{{ route('purchase.destroy', $value->id)}}" method="post">
                                                    @csrf
                                                    @method('delete')
                                                    <button style="background: none; border: none;" type="submit">
                                                        <i class="fa fa-trash text-danger"></i>
                                                    </button>
                                                </form>

                                            </div>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <th colspan="12" class="text-center">No Product Found</th>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            {{-- ================ --}}
            <style>
                .action-buttons {
                    width: 1%;
                    white-space: nowrap;
                }

                .button-container {
                    display: flex;
                    gap: 10px;
                }
            </style>

        </div>
        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>

    </div>

@endsection
