@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Purchase</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Purchase Information</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-primary">Purchase</button>
                        <button type="button"
                            class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                            data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
                        </button>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                                href="{{ route('purchase.create') }}">Purchase Add</a>
                            <a class="dropdown-item" href="{{ route('purchase.index') }}">Purchase List</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="card col-md-10 mx-auto">
                <div class="row g-0">
                            <dl class="row text-start" style="font-size: 15px">
                                <h3 class="text-center text-muted col-md-12 mt-3">Purchase Information <hr></h3>
                                <dt class="col-sm-3 text-primary">Supplier Name</dt><br>
                                <dd class="col-sm-3 text-muted text-warning">  {{$purchase->suppplier?->name}}</dd>
                                <dt class="col-sm-3">Purchase Date:</dt>
                                <dd class="col-sm-3">{{ $purchase->purchase_date }}</dd>
                                <dt class="col-sm-3">Reference No:</dt>
                                <dd class="col-sm-3 {{ $purchase->reference_no === null ? 'badge bg-danger' : '' }}">
                                    {{$purchase->reference_no ?? 'Nothing' }}
                                </dd>
                                <dt class="col-sm-3">Total Quantity:</dt>
                                <dd class="col-sm-3">{{ $purchase->total_quantity}}</dd>
                                <dt class="col-sm-3">Sub Amount:</dt>
                                <dd class="col-sm-3">{{ $purchase->sub_amount }}</dd>
                                <dt class="col-sm-3">Tax:</dt>
                                <dd class="col-sm-3">{{ $purchase->tax }}</dd>
                                <dt class="col-sm-3">Discount Type:</dt>
                                <dd class="col-sm-3
                                    @if($purchase->discount_type === 1) badge bg-info @elseif($purchase->discount_type === 0) badge bg-success @endif">
                                    {{ $purchase->discount_type === 1 ? 'Percent' : 'Amount' }}
                                </dd>
                                <dt class="col-sm-3">Discount:</dt>
                                <dd class="col-sm-3">{{ $purchase->discount }}</dd>
                                <dt class="col-sm-3">Round Of:</dt>
                                <dd class="col-sm-3">{{ $purchase->round_of}}</dd>
                                <dt class="col-sm-3">Grand Total:</dt>
                                <dd class="col-sm-3">{{ $purchase->grand_total}}</dd>
                                <dt class="col-sm-3">Payment Status:</dt>
                                <dd class="col-sm-3
                                    @if($purchase->payment_status === 0) badge bg-info
                                    @elseif($purchase->payment_status === 1) badge bg-success
                                    @elseif($purchase->payment_status === 2) badge bg-warning
                                    @endif">
                                    {{ $purchase->payment_status === 0 ? 'Unpaid' : ($purchase->payment_status === 1 ? 'Paid' : 'Partial Paid') }}
                                </dd>
                                <dt class="col-sm-3">Status:</dt>
                                <dd class="col-sm-3
                                    @if($purchase->status === 1) badge bg-primary
                                    @elseif($purchase->status === 2) badge bg-danger
                                    @elseif($purchase->status === 3) badge bg-warning
                                    @elseif($purchase->status === 4) badge bg-secondary
                                    @endif">
                                    {{ $purchase->status === 1 ? 'Purchase' : ($purchase->status === 2 ? 'Return' : ($purchase->status === 3 ? 'Partial Return' : 'Cancel')) }}
                                </dd>
                                <dt class="col-sm-3">Status Note:</dt>
                                <dd class="col-sm-3 {{ $purchase->status_note === null ? 'badge bg-danger' : '' }}">
                                    {{$purchase->status_note ?? 'Nothing' }}
                                </dd>
                                <dt class="col-sm-3">Other Charge:</dt>
                                <dd class="col-sm-3 {{ $purchase->other_charge === null ? 'badge bg-danger' : '' }}">
                                    {{$purchase->other_charge ?? 'Nothing' }}
                                </dd>
                            </dl>
                </div>
            </div>
            <hr />
            <div class="card-body">
                <ul class="nav nav-tabs nav-primary mb-0" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#primaryhome" role="tab"
                            aria-selected="true">
                            <div class="d-flex align-items-center">
                                <div class="tab-icon"><i class='bx bx-comment-detail font-18 me-1'></i>
                                </div>
                                <div class="tab-title text-center ">
                                    <h4 class="text-primary ">Purchase Description </h4>
                                </div>
                            </div>
                        </a>
                    </li>


                </ul>
                <div class="tab-content pt-3">
                    <div class="tab-pane fade show active " id="primaryhome" role="tabpanel">
                        <div class="text-center border border-5   p-5  ">
                            <h2 class="text-muted"> {{ $purchase->note }}</h2>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    <!-- @push('scripts')
        ;
                <script>
                    $(document).ready(function() {
                        $('#example').DataTable();
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        var table = $('#example2').DataTable({
                            lengthChange: false,
                            buttons: ['copy', 'excel', 'pdf', 'print']
                        });

                        table.buttons().container()
                            .appendTo('#example2_wrapper .col-md-6:eq(0)');
                    });
                </script>
    @endpush -->

    <!--app JS-->

@endsection
