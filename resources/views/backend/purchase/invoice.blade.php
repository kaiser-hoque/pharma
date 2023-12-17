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
                <div class="card">
                    <div class="card-body">
                        <div id="invoice">
                            <div class="toolbar hidden-print">
                                <div class="text-end">
                                    <button type="button" onclick="window.print()" class="btn btn-dark"><i class="fa fa-print"></i> Print</button>
                                    <button type="button" class="btn btn-danger"><i class="fa fa-file-pdf-o"></i>     Export as PDF
                                    </button>
                                </div>
                                <hr />
                            </div>
                            <div class="invoice overflow-auto">
                                <div style="min-width: 600px">
                                    <header>
                                        <div class="row">
                                            <div class="col">
                                                <a href="javascript:;">
                                                    <img src="assets/images/logo-icon.png" width="80" alt="" />
                                                </a>
                                            </div>
                                            <div class="col company-details">
                                                <h2 class="name">
                                                    <a target="_blank" href="javascript:;">
                                                        Pharma
                                                    </a>
                                                </h2>
                                                <div>455 Foggy Heights, AZ 85004, BD</div>
                                                <div>(123) 456-789</div>
                                                <div>pharma@gmail.com</div>
                                            </div>
                                        </div>
                                    </header>
                                    <main>
                                        <div class="row contacts">
                                            <div class="col invoice-to">
                                                <div class="text-gray-light">INVOICE TO:</div>
                                                <h5 class="to">John Doe</h5>
                                                <h5 class="to">Reference No: </h5>
                                                <div class="email"><a href="mailto:john@example.com">john@example.com</a>
                                                </div>
                                            </div>
                                            <div class="col invoice-details">
                                                <h1 class="invoice-id">INVOICE 3-2-1</h1>
                                                <div class="date">Date of Invoice: 01/10/2018</div>
                                                <div class="date">Due Date: 30/10/2018</div>
                                            </div>
                                        </div>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th class="text-left">DESCRIPTION</th>
                                                    <th class="text-right">HOUR PRICE</th>
                                                    <th class="text-right">HOURS</th>
                                                    <th class="text-right">TOTAL</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="no">04</td>
                                                    <td class="text-left">
                                                        <h3>
                                                            <a target="_blank" href="javascript:;">
                                                                Youtube channel
                                                            </a>
                                                        </h3>
                                                        <a target="_blank" href="javascript:;">
                                                            Useful videos
                                                        </a> to improve your Javascript skills. Subscribe and stay tuned :)
                                                    </td>
                                                    <td class="unit">$0.00</td>
                                                    <td class="qty">100</td>
                                                    <td class="total">$0.00</td>
                                                </tr>


                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">SUBTOTAL</td>
                                                    <td>$5,200.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">TAX 25%</td>
                                                    <td>$1,300.00</td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2"></td>
                                                    <td colspan="2">GRAND TOTAL</td>
                                                    <td>$6,500.00</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                        <div class="thanks">Thank you!</div>

                                    </main>
                                    <footer>Invoice was created on a computer and is valid without the signature and seal.
                                    </footer>
                                </div>
                                <!--DO NOT DELETE THIS div. IT is responsible for showing footer always at the bottom-->
                                <div></div>
                            </div>
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
