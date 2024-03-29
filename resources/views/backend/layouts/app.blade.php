<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="{{ asset('public/assets/images/favicon-32x32.png') }}" type="image/png" />
    <!--plugins-->
    <link href="{{ asset('public/assets/plugins/vectormap/jquery-jvectormap-2.0.2.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/simplebar/css/simplebar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/metismenu/css/metisMenu.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('public/assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
    <!-- loader-->
    <link href="{{ asset('public/assets/css/pace.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('public/assets/js/pace.min.js') }}"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/bootstrap-extended.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&amp;display=swap" rel="stylesheet">
    <link href="{{ asset('public/assets/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('public/assets/css/icons.css') }}" rel="stylesheet">
    <!-- Theme Style CSS -->

    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/dark-theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/semi-dark.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/assets/css/header-colors.css') }}" />

    <!-- toastr -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/toastr.js/latest/css/toastr.min.css">

    <!-- font asswm -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- font asswm -->

    <title>@yield('title', env('APP_NAME'))</title>
</head>

<body>
    <!--wrapper-->
<div class="wrapper bg-primary">
    <!--sidebar wrapper -->
    <div class="sidebar-wrapper" data-simplebar="true">
        <div class="sidebar-header">
            <div>
                <img src="{{ asset('public/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
            </div>
            <div>
                <h4 class="logo-text"> <a href="{{ route('dashboard') }}"> PHARMA </a> </h4>
            </div>
            <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
            </div>
        </div>
        <!--navigation-->
        <ul class="metismenu" id="menu" class="bg-">
            <li>
                <a href="{{ route('dashboard') }}" class="has-arrow">
                    <div class="parent-icon"><i class='bx bx-home-alt'></i>
                    </div>
                    <div class="menu-title">Dashboard</div>
                </a>
            </li>
            <li class="menu-label text-primary">UI Elements</li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-user"></i>
                    </div>
                    <div class="menu-title">User</div>
                </a>
                <ul>
                    <li> <a href="{{ route('user.create') }}"><i class="fa-solid fa-arrow-right"></i></i>Add User</a>
                    </li>
                    <li> <a href="{{ route('user.index') }}"><i class="fa-solid fa-arrow-right"></i>User List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fab fa-critical-role"></i>
                    </div>
                    <div class="menu-title">Role</div>
                </a>
                <ul>
                    <li> <a href="{{ route('role.create') }}"><i class="fa-solid fa-arrow-right"></i>Add Role</a>
                    </li>


                    <li> <a href="{{ route('role.index') }}"><i class="fa-solid fa-arrow-right"></i>Role List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa fa-list-alt" aria-hidden="true"></i>
                    </div>
                    <div class="menu-title">Medicine Category</div>
                </a>
                <ul>
                    <li> <a href="{{route('category.create')}}"><i class="fa-solid fa-arrow-right"></i>Add category</a>
                    </li>
                    <li> <a href="{{route('category.index')}}"><i class="fa-solid fa-arrow-right"></i>Category List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-droplet"></i>
                    </div>
                    <div class="menu-title">Medicine Dose</div>
                </a>
                <ul>
                    <li> <a href="{{route('dose.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Dose</a>
                    </li>

                    <li> <a href="{{route('dose.index')}}"><i class="fa-solid fa-arrow-right"></i>Dose List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-users"></i>
                    </div>
                    <div class="menu-title">Customer</div>
                </a>
                <ul>
                    <li> <a href="{{route('customer.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Customer</a>
                    </li>
                    <li> <a href="{{route('customer.index')}}"><i class="fa-solid fa-arrow-right"></i>Customer List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"> <i class="fa-solid fa-city"></i>
                    </div>
                    <div class="menu-title">Manufacturer </div>
                </a>
                <ul>
                    <li> <a href="{{route('companies.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Manufacturer</a>
                    </li>
                    <li> <a href="{{route('companies.index')}}"><i class="fa-solid fa-arrow-right"></i>Manufacturer List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fas fa-industry"></i>
                    </div>
                    <div class="menu-title">Supplier</div>
                </a>
                <ul>
                    <li> <a href="{{route('supplier.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Supplier</a>
                    </li>

                    <li> <a href="{{route('supplier.index')}}"><i class="fa-solid fa-arrow-right"></i>Supplier List</a>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-capsules"></i>
                    </div>
                    <div class="menu-title">Medicine</div>
                </a>
                <ul>
                    <li> <a href="{{route('medicine.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Medicine</a>
                    </li>

                    <li> <a href="{{route('medicine.index')}}"><i class="fa-solid fa-arrow-right"></i>Medicine List</a>
                    </li>
                    <li>
                    </li>

                </ul>
            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </div>
                    <div class="menu-title">Phurchase</div>
                </a>
                <ul>
                    <li> <a href="{{route('purchase.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Phurchase</a>
                    </li>


                    <li> <a href="{{route('purchase.index')}}"><i class="fa-solid fa-arrow-right"></i> Purchase List</a>
                    </li>
                    <!-- <li> <a href="{{route('purchasedetails.index')}}"><i class="fa-solid fa-arrow-right"></i> Purchase List</a>
                    </li> -->




                </ul>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-tag"></i>
                    </div>
                    <div class="menu-title">Sale</div>
                </a>
                <ul>
                    <li> <a href="{{route('sale.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Sale</a>
                    </li>


                    <li> <a href="{{route('sale.index')}}"><i class="fa-solid fa-arrow-right"></i> Sale List</a>
                    </li>


                    <!-- <li> <a href="{{route('saledetails')}}"><i class="fa-solid fa-arrow-right"></i>Sale Details list</a>
                    </li> -->

                </ul>

            </li>
            {{--<li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa fa-info-circle" aria-hidden="true"></i>
                    </div>
                    <div class="menu-title">Purchase Details</div>
                </a>
                <ul>


                </ul>

            </li>--}}

            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-file"></i>
                    </div>
                    <div class="menu-title">Report</div>
                </a>
                <ul>
                    <li> <a href="{{route('phurchasereport')}}"><i class="fa-solid fa-arrow-right"></i>Purchase Report</a>
                    </li>


                    <li> <a href="{{route('salereport')}}"><i class="fa-solid fa-arrow-right"></i> Sale Report</a>
                    </li>


                    <li> <a href="{{route('stock.index')}}"><i class="fa-solid fa-arrow-right"></i>Medicine Stock</a>
                    </li>

                </ul>

            </li>
            {{-- <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa fa-file" aria-hidden="true"></i></i>
                    </div>
                    <div class="menu-title">Stock</div>
                </a>
                <ul>
                    <li> <a href="{{route('stock.index')}}"><i class="fa-solid fa-arrow-right"></i>Medicine Stock</a>
                    </li>
                </ul>

            </li> --}}
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-coins"></i>
                    </div>
                    <div class="menu-title">Finance</div>
                </a>
                <ul>
                    <li> <a href=" #"><i class="fa-solid fa-arrow-right"></i>Income</a>
                    </li>


                    <li> <a href="#"><i class="fa-solid fa-arrow-right"></i> Expence</a>
                    </li>



                </ul>

            </li>

            {{-- upcoming --}}

            {{-- <li class="menu-label"><span class="text-primary">EMP Management</span> </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fa-solid fa-people-roof"></i>
                    </div>
                    <div class="menu-title">Employee</div>
                </a>
                 <ul>
                    <li> <a href="{{route('employee.create')}}"><i class="fa-solid fa-arrow-right"></i>Add Employee</a>
                    </li>
                    <li> <a href="{{route('employee.index')}}"><i class="fa-solid fa-arrow-right"></i>Employee List</a>
                    </li>

                </ul>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fas fa-arrows"></i>
                    </div>
                    <div class="menu-title">Emp Attendances</div>
                </a>
                 <ul>
                    <li> <a href="{{route('employee.create')}}"><i class="fa-solid fa-arrow-right"></i></i>Add Attendances</a>
                    </li>
                    <li> <a href="{{route('employee.index')}}"><i class="fa-solid fa-arrow-right"></i></i>  Attendances List</a>
                    </li>

                </ul>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fas fa-arrows"></i>
                    </div>
                    <div class="menu-title">Advanced Salary</div>
                </a>
                 <ul>
                    <li> <a href="{{route('advancedsalary.create')}}"><i class="fa-solid fa-arrow-right"></i></i>Add Advanced Salary</a>
                    </li>
                    <li> <a href="{{route('advancedsalary.index')}}"><i class="fa-solid fa-arrow-right"></i></i> Advanced Salary List</a>
                    </li>
                    <li> <a href="{{route('advancedsalary.index')}}"><i class="fa-solid fa-arrow-right"></i></i> All Salary List</a>
                    </li>

                </ul>

            </li>
            <li>
                <a href="javascript:;" class="has-arrow">
                    <div class="parent-icon"><i class="fas fa-arrows"></i>
                    </div>
                    <div class="menu-title">Salary</div>
                </a>
                 <ul>
                    <li> <a href="{{route('salary.create')}}"><i class="fa-solid fa-arrow-right"></i></i>Add Salary</a>
                    </li>
                    <li> <a href="{{route('salary.index')}}"><i class="fa-solid fa-arrow-right"></i></i>  Salary List</a>
                    </li>

                </ul>

            </li> --}}
        </ul>
        <!--end navigation-->
    </div>
    <!--end navigation-->
    </div>


    <!--start header -->
    <header >
        <div class="topbar d-flex align-items-center">
            <nav class="navbar navbar-expand gap-3">
                <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                </div>

                <div class="position-relative search-bar d-lg-block d-none" data-bs-toggle="modal"
                    data-bs-target="#SearchModal">
                    <input class="form-control px-5" disabled type="search" placeholder="Search">
                    <span
                        class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-5"><i
                            class='bx bx-search'></i></span>
                </div>


                <div class="top-menu ms-auto">
                    <ul class="navbar-nav align-items-center gap-1">
                        <li class="nav-item mobile-search-icon d-flex d-lg-none" data-bs-toggle="modal"
                            data-bs-target="#SearchModal">
                            <a class="nav-link" href="avascript:;"><i class='bx bx-search'></i>
                            </a>
                        </li>

                        <li class="nav-item dark-mode d-none d-sm-flex">
                            <a class="nav-link dark-mode-icon" href="javascript:;"><i class='bx bx-moon'></i>
                            </a>
                        </li>

                        <li class="nav-item dropdown dropdown-app">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown"
                                href="javascript:;"><i class='bx bx-grid-alt'></i></a>
                            <div class="dropdown-menu dropdown-menu-end p-0">
                                <div class="app-container p-2 my-2">
                                    <div class="row gx-0 gy-2 row-cols-3 justify-content-center p-2">


                                    </div><!--end row-->

                                </div>
                            </div>
                        </li>

                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                href="#" data-bs-toggle="dropdown"><span class="alert-count">7</span>
                                <i class='bx bx-bell'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">Notifications</p>
                                        <p class="msg-header-badge">8 New</p>
                                    </div>
                                </a>
                                <div class="header-notifications-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{ asset('public/assets/images/avatars/avatar-1.png') }}"
                                                    class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Daisy Anderson<span
                                                        class="msg-time float-end">5 sec
                                                        ago</span></h6>
                                                <p class="msg-info">The standard chunk of lorem</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-danger text-danger">dc
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Orders <span class="msg-time float-end">2
                                                        min
                                                        ago</span></h6>
                                                <p class="msg-info">You have recived new orders</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{ asset('public/assets/images/avatars/avatar-2.png') }}"
                                                    class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Althea Cabardo <span
                                                        class="msg-time float-end">14
                                                        sec ago</span></h6>
                                                <p class="msg-info">Many desktop publishing packages</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success">
                                                <img src="{{ asset('public/assets/images/app/outlook.png') }}"
                                                    width="25" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Account Created<span
                                                        class="msg-time float-end">28 min
                                                        ago</span></h6>
                                                <p class="msg-info">Successfully created new email</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-info text-info">Ss
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New Product Approved <span
                                                        class="msg-time float-end">2 hrs ago</span></h6>
                                                <p class="msg-info">Your new product has approved</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{ asset('public/assets/images/avatars/avatar-4.png') }}"
                                                    class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Katherine Pechon <span
                                                        class="msg-time float-end">15
                                                        min ago</span></h6>
                                                <p class="msg-info">Making this the first true generator</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-success text-success"><i
                                                    class='bx bx-check-square'></i>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Your item is shipped <span
                                                        class="msg-time float-end">5 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">Successfully shipped your item</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="notify bg-light-primary">
                                                <img src="{{ asset('public/assets/images/app/github.png') }}"
                                                    width="25" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">New 24 authors<span
                                                        class="msg-time float-end">1 day
                                                        ago</span></h6>
                                                <p class="msg-info">24 new authors joined last week</p>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center">
                                            <div class="user-online">
                                                <img src="{{ asset('public/assets/images/avatars/avatar-8.png') }}"
                                                    class="msg-avatar" alt="user avatar">
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="msg-name">Peter Costanzo <span
                                                        class="msg-time float-end">6 hrs
                                                        ago</span></h6>
                                                <p class="msg-info">It was popularised in the 1960s</p>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">
                                        <button class="btn btn-primary w-100">View All Notifications</button>
                                    </div>
                                </a>
                            </div>
                        </li>
                        <li class="nav-item dropdown dropdown-large">
                            <a class="nav-link dropdown-toggle dropdown-toggle-nocaret position-relative"
                                href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="alert-count">8</span>
                                <i class='bx bx-shopping-bag'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end">
                                <a href="javascript:;">
                                    <div class="msg-header">
                                        <p class="msg-header-title">My Cart</p>
                                        <p class="msg-header-badge">10 Items</p>
                                    </div>
                                </a>
                                <div class="header-message-list">
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/11.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/02.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/03.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/04.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/05.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/06.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/07.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/08.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item" href="javascript:;">
                                        <div class="d-flex align-items-center gap-3">
                                            <div class="position-relative">
                                                <div class="cart-product rounded-circle bg-light">
                                                    <img src="{{ asset('public/assets/images/products/09.png') }}"
                                                        class="" alt="product image">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="cart-product-title mb-0">Men White T-Shirt</h6>
                                                <p class="cart-product-price mb-0">1 X $29.00</p>
                                            </div>
                                            <div class="">
                                                <p class="cart-price mb-0">$250</p>
                                            </div>
                                            <div class="cart-product-cancel"><i class="bx bx-x"></i>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <a href="javascript:;">
                                    <div class="text-center msg-footer">
                                        <div class="d-flex align-items-center justify-content-between mb-3">
                                            <h5 class="mb-0">Total</h5>
                                            <h5 class="mb-0 ms-auto">$489.00</h5>
                                        </div>
                                        <button class="btn btn-primary w-100">Checkout</button>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="user-box dropdown px-3">
                    <a class="d-flex align-items-center nav-link dropdown-toggle gap-3 dropdown-toggle-nocaret"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('public/uploads/users/' .request()->session()->get('image')) }}"
                            class="user-img" alt="user avatar">
                        <div class="user-info">
                            <p class="user-name mb-0">
                                {{ encryptor('decrypt',request()->session()->get('username')) }}</p>
                            <p class="user-name mb-0">
                                {{encryptor('decrypt',request()->session()->get('role')) }}</p>

                        </div>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end">
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-user fs-5"></i><span>Profile</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-cog fs-5"></i><span>Settings</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-home-circle fs-5"></i><span>Dashboard</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-dollar-circle fs-5"></i><span>Earnings</span></a>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="javascript:;"><i
                                    class="bx bx-download fs-5"></i><span>Downloads</span></a>
                        </li>
                        <li>
                            <div class="dropdown-divider mb-0"></div>
                        </li>
                        <li><a class="dropdown-item d-flex align-items-center" href="{{ route('logOut') }}"><i
                                    class="bx bx-log-out-circle"></i><span>Logout</span></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    @yield('content')


    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->


<!-- search modal -->
<div class="modal" id="SearchModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-fullscreen-md-down">
        <div class="modal-content">
            <div class="modal-header gap-2">
                <div class="position-relative popup-search w-100">
                    <input class="form-control form-control-lg ps-5 border border-3 border-primary" type="search"
                        placeholder="Search">
                    <span
                        class="position-absolute top-50 search-show ms-3 translate-middle-y start-0 top-50 fs-4"><i
                            class='bx bx-search'></i></span>
                </div>
                <button type="button" class="btn-close d-md-none" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="search-list">
                    <p class="mb-1">Html Templates</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action active align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-angular fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-vuejs fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-magento fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-shopify fs-4'></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Web Designe Company</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-windows fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-dropbox fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-opera fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-wordpress fs-4'></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Software Development</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-mailchimp fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-zoom fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-sass fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-vk fs-4'></i>eCommerce Html Templates</a>
                    </div>
                    <p class="mb-1 mt-3">Online Shoping Portals</p>
                    <div class="list-group">
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-slack fs-4'></i>Best Html Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-skype fs-4'></i>Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-twitter fs-4'></i>Responsive Html5 Templates</a>
                        <a href="javascript:;"
                            class="list-group-item list-group-item-action align-items-center d-flex gap-2 py-1"><i
                                class='bx bxl-vimeo fs-4'></i>eCommerce Html Templates</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- end search modal -->

    <div class="switcher-wrapper">
		<div class="switcher-btn"> <i class='bx bx-cog bx-spin'></i>
		</div>
		<div class="switcher-body">
			<div class="d-flex align-items-center">
				<h5 class="mb-0 text-uppercase">Theme Customizer</h5>
				<button type="button" class="btn-close ms-auto close-switcher" aria-label="Close"></button>
			</div>
			<hr/>
			<h6 class="mb-0">Theme Styles</h6>
			<hr/>
			<div class="d-flex align-items-center justify-content-between">
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="lightmode" checked>
					<label class="form-check-label" for="lightmode">Light</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="darkmode">
					<label class="form-check-label" for="darkmode">Dark</label>
				</div>
				<div class="form-check">
					<input class="form-check-input" type="radio" name="flexRadioDefault" id="semidark">
					<label class="form-check-label" for="semidark">Semi Dark</label>
				</div>
			</div>
			<hr/>
			<div class="form-check">
				<input class="form-check-input" type="radio" id="minimaltheme" name="flexRadioDefault">
				<label class="form-check-label" for="minimaltheme">Minimal Theme</label>
			</div>
			<hr/>
			<h6 class="mb-0">Header Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator headercolor1" id="headercolor1"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor2" id="headercolor2"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor3" id="headercolor3"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor4" id="headercolor4"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor5" id="headercolor5"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor6" id="headercolor6"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor7" id="headercolor7"></div>
					</div>
					<div class="col">
						<div class="indigator headercolor8" id="headercolor8"></div>
					</div>
				</div>
			</div>
			<hr/>
			<h6 class="mb-0">Sidebar Colors</h6>
			<hr/>
			<div class="header-colors-indigators">
				<div class="row row-cols-auto g-3">
					<div class="col">
						<div class="indigator sidebarcolor1" id="sidebarcolor1"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor2" id="sidebarcolor2"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor3" id="sidebarcolor3"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor4" id="sidebarcolor4"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor5" id="sidebarcolor5"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor6" id="sidebarcolor6"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor7" id="sidebarcolor7"></div>
					</div>
					<div class="col">
						<div class="indigator sidebarcolor8" id="sidebarcolor8"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-- Bootstrap JS -->
    <script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
    <!--plugins-->
    <script src="{{ asset('public/assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/metismenu/js/metisMenu.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/apexcharts-bundle/js/apexcharts.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



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
    <script>
        // toastr.options = {
        //     "closeButton": true,
        //     "progressBar": true,
        // }
        //  toastr.info("kaiser");
        // @if (Session::has('error'))
        //     toastr.success("{{ session('error') }}");
        // @endif
        @if(Session::has('message'))
        toastr.success("{{ session('message') }}", { closeButton: true, progressBar: true });
    @endif

    @if(Session::has('error'))
        toastr.error("{{ session('error') }}", { closeButton: true, progressBar: true });
    @endif

    @if(Session::has('info'))
        toastr.info("{{ session('info') }}", { closeButton: true, progressBar: true });
    @endif

    @if(Session::has('warning'))
        toastr.warning("{{ session('warning') }}", { closeButton: true, progressBar: true });
    @endif
    </script>


    <script src="{{ asset('public/assets/js/index.js') }}"></script>
    <!--app JS-->
    <script src="{{ asset('public/assets/js/app.js') }}"></script>
<script src="{{ asset('assets/plugins/perfect-scrollbar/js/perfect-scrollbar.js')}}"></script>
	{{-- <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
	<script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script> --}}
    @stack('scripts');
        <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
        {!! Toastr::message() !!}
</body>


<!-- Mirrored from codervent.com/syndron/demo/vertical/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:55:08 GMT -->

</html>
