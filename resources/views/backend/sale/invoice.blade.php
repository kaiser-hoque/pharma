@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')

<style>
    .color3 {
        background-color: rgba(238, 227, 227, 0.452) !important;
    }
    .bottomborder{
        font-size:13px;
        font-weight:bold;
        border-bottom: 1px solid rgb(70, 67, 67)!important;
        border-top: 1px solid rgb(70, 67, 67)!important;
        padding-top: 4px!important;
    }
</style>
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
                                <li class="breadcrumb-item active" aria-current="page">invoice</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="ms-auto">
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">sale</button>
                            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown">	<span class="visually-hidden">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end">
                                <a class="dropdown-item" href="{{route('sale.create')}}">Add Sale</a>
                                <a class="dropdown-item" href="{{route('sale.index')}}">Sale list</a>

                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 text-uppercase">Sale</h6>
                <hr />
                <div class="card col-md-11 mx-auto my-auto">
                    <div class="card-body">
                        <div id="invoice">
                            <div class="toolbar hidden-print">
                                <div class="text-end">
                                    <button type="button" onclick="printInvoice()" class="btn btn-dark"><i
                                            class="fa fa-print"></i> Print</button>

                                    <button type="button" onclick="exportAsPDF()" class="btn btn-danger"><i
                                            class="fa fa-file-pdf-o"></i> Export as PDF</button>
                                </div>
                            </div>
                            <hr />
                        </div>
                        <div class="overflow-auto"  id="printable-content">
                            <div class="text-center">
                                            {{-- <table>
                                                <tr>
                                                    <td>
                                                        <span>Pharma</span><br>
                                                        <span>455 Foggy Heights, AZ 85004, BD</span><br>
                                                        <span>(123) 456-789</span><br>
                                                        <span>pharma@gmail.com</span><br>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <span>INVOICE TO:{{ $purchase->supplier->name }}</span><br>
                                                        <span>Reference No: {{ $purchase->reference_no }}</span><br>
                                                        <span>Purchase Date: {{ $purchase->purchase_date }}</span>
                                                    </td>
                                                    <td>
                                                        <span  >Date of Invoice: {{ date('d/m/Y') }}</span>
                                                        <span  >Due Date: 30/10/2018</span>
                                                    </td>
                                                </tr>
                                            </table> --}}
                                    </div>
                                    <div class="text-center mx-auto">
                                    <span >Pharma</span><br>
                                    <span>455 Foggy Heights, AZ 85004, BD</span><br>
                                    <span>(123) 456-789</span><br>
                                    <span>pharma@gmail.com</span><br>
                                    <span><h4>Cash Memo</h4></span><br>
                                </div>
                                    <table width="665" class="table table-bordered table-responsive">
                                        <thead>
                                            <tr>
                                                <td colspan="4">
                                                    <span>INVOICE TO:{{ $sale->supplier->name  ?? 'N/A' }}</span><br>
                                                    <span>Reference No:{{$sale->reference_no }}</span><br>
                                                    <span>Sale Date: {{ $sale->purchase_date }}</span>
                                                </td>
                                                <td></td>
                                                <td colspan="3">
                                                    <span>Date of Invoice: {{ date('d/m/Y') }}</span><br>
                                                    <span>Due Date: 30/10/2018</span>
                                                </td>
                                            </tr>
                                            <tr class="text-center bottomborder pt-5">
                                                <td>#SL</td>
                                                <td>Product</td>
                                                <td>Quantity</td>
                                                <td>Unit Price</td>
                                                <td>V.A.T</td>
                                                <td>Discount</td>
                                                <td>Amount</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($saleDetails as $sd)
                                                <tr class="color3 text-center">
                                                    <td>{{++$loop->index}}</td>
                                                    <td>{{ $sd->medicine->bname ?? 'N/A' }}</td>
                                                    <td>{{ $sd->quantity }}</td>
                                                    <td>{{ $sd->unit_price }}</td>
                                                    <td>{{ $sd->tax }} {{ $sd->discount_type==0?"%":"BDT"}}</td>
                                                    <td>{{ $sd->discount }} {{ $sd->discount_type == 0 ? '%' : 'BDT' }}</td>
                                                    <td>{{ $sd->quantity * $sd->unit_price }}</td>
                                                </trs
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2"class="text-end">Sub Total:</td>
                                                <td> ${{ $sale->sub_amount }}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2" class="text-end">Less Discount:</td>
                                                <td>{{ $sale->discount}}%</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2" class="text-end">Net Payable</td>
                                                <td>{{ $sale->grand_total }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2" class="text-end">Amount Recevied</td>
                                                <td>{{ $sale->grand_total }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"> </td>
                                                <td colspan="4"> </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="text-center">Thank you!</div>
                                </main>
                                <footer class="text-center">
                                    Invoice was created on a computer and is valid without the signature and seal.
                                </footer>
                            </div>
                            <!-- DO NOT DELETE THIS div. IT is responsible for showing the footer always at the bottom -->
                            <div></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- ================ --}}
        <style>
            @media print {
                body * {
                    visibility: hidden;
                }
                #printable-content,
                #printable-content * {
                    visibility: visible;
                }

                #printable-content {
                    position: absolute;
                    left: 0;
                    top: 0;
                }
            }
        </style>
        <script>
            function printInvoice() {
                window.print();
            }
        </script>
    </div>
    <div class="overlay toggle-icon"></div>
    <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
    </div>
    </div>
