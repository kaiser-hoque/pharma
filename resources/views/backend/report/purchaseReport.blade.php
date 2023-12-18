@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')
    <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">Purchase Report</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">purchase Data Table</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <div class="ms-auto"><a href="{{ route('medicine.create') }}"
                                    class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>purchase list
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 text-uppercase">Purchase Report</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <form action="" method="get">
                            <div class="d-flex flex-wrap align-items-center     justify-content-between">
                                <div class="col-md-4"> 
                                    <label for="from_date" class="col-auto">From Date:</label>
                                    <input class="form-control" type="date" name="from_date" value="{{ $fromDate ?? '' }}" required placeholder="start date">
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
                                <thead>
                                    <tr>
                                        <th class="text-center">{{__('No.')}}</th>
                                        <th class="text-center">{{__('Supplier Name')}}</th>
                                        <th class="text-center">{{__('Date')}}</th>
                                        <th class="text-center">{{__('Quentity')}}</th>
                                        <th class="text-center">{{__('Sub Amount')}}</th>
                                        <th class="text-center">{{__('Discount')}}</th>
                                        <th class="text-center">{{__('Tex')}}</th>
                                        <th class="text-center">{{__('Total Amount')}}</th>
                                    </tr>
                                </thead>
                                
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>


            
        </div>


        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">Copyright © 2023. All right reserved.</p>
        </footer>
    </div>

    </div>
    

    
@endsection
