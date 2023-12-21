@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Sale Report</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Sale Data Table</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <div class="ms-auto"><a href="{{ route('medicine.create') }}"
                                    class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Sale list
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 text-uppercase">Sale Report</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="d-flex flex-wrap align-items-center     justify-content-between">
                                <div class="col-md-4"> 
                                    <label for="from_date" class="col-auto">From Date:</label>
                                    <input class="form-control" type="date" name="from_date" value="{{ $fromDate ?? '' }}" required>
                                </div>
                                <div class="col-md-4"> 
                                    <label for="to_date" class="col-auto">To Date:</label>
                                    <input class="form-control" type="date" name="to_date" value="{{ $toDate ?? '' }}" required>
                                </div>
                                <div class="col-md-3 mt-3"> 
                                <button type="submit" class="btn btn-primary text-end">Generate Report</button>
                                </div>
                            </div>
                        </form>
                        <hr>
                        <div class="table-responsive mt-5">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead class="text-white bg-primary">
                                     @php
                                        $fromDate = \Carbon\Carbon::parse($fromDate);
                                        $toDate = \Carbon\Carbon::parse($toDate);
                                    @endphp

                                    <h6 class="text-center text-primary">Purchase Report from {{ $fromDate->toDateString() }} to {{  $toDate->toDateString() }}
                                    </h6>
                                    <tr>
                                        <th class="text-center">{{__('No.')}}</th>
                                        <th class="text-center">{{__('Customer Name')}}</th>
                                        <th class="text-center">{{__('Date')}}</th>
                                        <th class="text-center">{{__('Quentity')}}</th>
                                        <th class="text-center">{{__('Sub Amount')}}</th>
                                        <th class="text-center">{{__('Total Amount')}}</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    @foreach($sale as $sd)
                                    <tr>
                                        <td>{{$sd->id}}</td>
                                        <td>{{ $sd->customer->name }}</td>
                                        <td>{{ $sd->sale_date }}</td>
                                        <td>{{ $sd->total_quantity }}</td>
                                        <td>{{ $sd->sub_amount}}</td>
                                        <td>{{ $sd->grand_total}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"></td>
                                        <td class="text-center"><b>Total: {{ $sale->sum('sub_amount') }}</b></td>    
                                        <td class="text-center"><b>Total: {{ $sale->sum('grand_total') }}</b></td>    
                                    </tr>
                                </tfoot>
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
    @push('scripts')
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
    @endpush

    <!--app JS-->
    <script src="assets/js/app.js"></script>
@endsection
