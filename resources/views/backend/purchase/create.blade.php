@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')



    <!--wrapper-->
    <div class="wrapper">
        <!--start page wrapper -->
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
                                <li class="breadcrumb-item active" aria-current="page">Purchase Create</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary"><a class="text-white"
                                    href="{{ route('medicine.index') }}">Purchase list</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row">
                <div class="col-md-11 mx-auto">
                    <div class="match-height">
                        <div class="card">
                            <div class="card-content mt-5">
                                <div class="card-body">
                                    <form class="form" method="post" action="{{ route('purchase.store') }}">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-2 mt-2">
                                                <label for="supplierName" class="float-end">
                                                    <h6>Supplier<span class="text-danger">*</span></h6>
                                                </label>
                                            </div>
                                            <div class="col-md-4">

                                                <select required class="form-control form-select" name="supplierName"
                                                    id="supplierName">
                                                    <option value="">Select Supplier</option>

                                                </select>
                                            </div>

                                            @if ($errors->has('supplierName'))
                                                <span class="text-danger"> {{ $errors->first('supplierName') }}</span>
                                            @endif
                                            <div class="col-md-2 mt-2">
                                                <label for="date" class="float-end">
                                                    <h6>Date<span class="text-danger">*</span></h6>
                                                </label>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="date" id="datepicker" class="form-control"
                                                    value="{{ old('purchase_date') }}" name="purchase_date"
                                                    placeholder="dd/mm/yyyy" required>
                                            </div>
                                            <div class="col-md-2 mt-2">
                                                <label for="reference_no" class="float-end">
                                                    <h6>Reference Number</h6>
                                                </label>
                                            </div>
                                            <div class="col-md-4 mt-2">
                                                <input type="text" class="form-control" value="{{ old('reference_no') }}"
                                                    name="reference_no">
                                            </div>
                                        </div>
                                        <div class="row m-3">
                                            <div class="col-8 offset-2">
                                                <input type="text" name="" id="item_search"
                                                    class="form-control  ui-autocomplete-input"
                                                    placeholder="Search Product">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12 col-sm-12 col-md-12 tbl-scroll">
                                                <table class="table mb-5">
                                                    <thead>
                                                        <tr class="bg-primary text-white text-center">
                                                            <th class="p-2">Product Name</th>
                                                            <th class="p-2">Quantity</th>
                                                            <th class="p-2">Purchase Price</th>
                                                            <th class="p-2">Tax %</th>
                                                            <th class="p-2">Discount Type</th>
                                                            <th class="p-2">Discount</th>
                                                            <th class="p-2">Unit Cost</th>
                                                            <th class="p-2">Total Amount</th>
                                                            <th class="p-2">Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="details_data">

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>


                                        <div class="row mb-5">
                                            <div class="col-12 col-sm-6">
                                                <div class="row">
                                                    <div class="col-4 offset-2 mt-2 text-end pe-3">
                                                        <label for="" class="form-group">
                                                            <h6>Total Quantities</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2">
                                                        <label for="" class="form-group">
                                                            <h6 class="total_qty">0</h6>
                                                        </label>
                                                        <input type="hidden" name="total_qty" class="total_qty_p">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 offset-2 mt-2 text-end pe-3">
                                                        <label for="" class="form-group">
                                                            <h6>Other Charges</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2">
                                                        <input type="text" class="form-control form-group"
                                                            id="other_charge" name="other_charge"
                                                            onkeyup="check_change()">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 offset-2 mt-2 text-end pe-3">
                                                        <label for="" class="form-group">
                                                            <h6>Discount on</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2">
                                                        <input type="text" class="form-control form-group"
                                                            id="discount_all" name="discount_all"
                                                            onkeyup="check_change()">
                                                    </div>
                                                    <div class="col-2 mt-2">
                                                        <select onchange="check_change()" class="form-control"
                                                            id="discount_all_type" name="discount_all_type">
                                                            <option value="0">%</option>
                                                            <option value="1">Fixed</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 offset-2 mt-2 text-end pe-3">
                                                        <label for="" class="form-group">
                                                            <h6>Note</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-6 mt-2">
                                                        <textarea class="form-control" name="note" rows="2"></textarea>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-12 col-sm-6">
                                                <div class="row">
                                                    <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                                        <label for="" class="form-group">
                                                            <h6>Subtotal</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2 pe-5 text-end">
                                                        <label for="" class="form-group">
                                                            <h6 class="tsubtotal">0.00</h6>
                                                        </label>
                                                        <input type="hidden" name="tsubtotal" class="tsubtotal_p">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                                        <label for="" class="form-group">
                                                            <h6>Other Charges</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2 pe-5 text-end">
                                                        <label for="" class="form-group">
                                                            <h6 class="tother_charge">0.00</h6>
                                                        </label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                                        <label for="" class="form-group">
                                                            <h6>Discount on All</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2 pe-5 text-end">
                                                        <label for="" class="form-group">
                                                            <h6 class="tdiscount">0.00</h6>
                                                        </label>
                                                        <input type="hidden" name="tdiscount" class="tdiscount_p">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                                        <label for="" class="form-group">
                                                            <h6>Round Of</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2 pe-5 text-end">
                                                        <label for="" class="form-group">
                                                            <h6 class="troundof">0.00</h6>
                                                        </label>
                                                        <input type="hidden" name="troundof" class="troundof_p">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-4 offset-4 mt-2 pe-2 text-end">
                                                        <label for="" class="form-group">
                                                            <h6>Grand Total</h6>
                                                        </label>
                                                    </div>
                                                    <div class="col-4 mt-2 pe-5 text-end">
                                                        <label for="" class="form-group">
                                                            <h6 class="tgrandtotal">0.00</h6>
                                                        </label>
                                                        <input type="hidden" name="tgrandtotal" class="tgrandtotal_p">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-12 d-flex justify-content-end">
                                                <button type="submit" class="btn btn-primary me-1 mb-1">Save</button>

                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
