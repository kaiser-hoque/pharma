@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')

<style>
    .color3 {
        background-color: rgba(238, 227, 227, 0.452) !important;
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
                            <div class="ms-auto"><a href="{{ route('purchase.create') }}"
                                    class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <h6 class="mb-0 text-uppercase">Purchase</h6>
                <hr />
                <div class="card col-md-8 mx-auto my-auto">
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
                        <div class="overflow-auto" id="printable-content">
                            <div style="min-width: 600px" class="text-center">
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
                                    <span style="font-size: 16px; font-weight:bold">Pharma</span><br>
                                    <span>455 Foggy Heights, AZ 85004, BD</span><br>
                                    <span>(123) 456-789</span><br>
                                    <span>pharma@gmail.com</span><br>
                                    <span><h4>Cash Memo</h4></span><br>
                                </div>
                                    <table border="1" width="665" style="border-collapse: collapse;">
                                        <thead>
                                            <tr>
                                                <td colspan="4">
                                                    <span>INVOICE TO:{{ $purchase->supplier->name }}</span><br>
                                                    <span>Reference No: {{ $purchase->reference_no }}</span><br>
                                                    <span>Purchase Date: {{ $purchase->purchase_date }}</span>
                                                </td>
                                                <td></td>
                                                <td colspan="3">
                                                    <span>Date of Invoice: {{ date('d/m/Y') }}</span><br>
                                                    <span>Due Date: 30/10/2018</span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">#SL</td>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">Product</td>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">Quantity</td>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">Unit Price</td>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">V.A.T</td>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">Discount</td>
                                                <td class="text-center" style="font-size: 13px; font-weight:bold">Amount</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($purchaseDetails as $pd)
                                                <tr class="color3">
                                                    <td>{{++$loop->index}}</td>
                                                    <td>{{ $pd->medicine->bname }}</td>
                                                    <td>{{ $pd->quantity }}</td>
                                                    <td>{{ $pd->unit_price }}</td>
                                                    <td>{{ $pd->tax }}%</td>
                                                    <td>{{ $pd->discount }} {{ $pd->discount_type == 0 ? '%' : 'BDT' }}</td>
                                                    <td>{{ $pd->quantity * $pd->unit_price }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2"class="text-end">Sub Total:</td>
                                                <td> ${{ $purchase->sub_amount }}</td>
                                            </tr>

                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2" class="text-end">Less Discount:</td>
                                                <td>{{ $purchase->discount}}%</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2" class="text-end">Net Payable</td>
                                                <td>{{ $purchase->grand_total }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4"></td>
                                                <td colspan="2" class="text-end">Amount Recevied</td>
                                                <td>{{ $purchase->grand_total }}</td>
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

@endsection
