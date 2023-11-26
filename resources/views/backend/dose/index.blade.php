@extends('backend.layouts.app')
@section('title',trans('create Users'))
@section('content')



<!--wrapper-->
<div class="wrapper">

    <!--start page wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Tables</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Data Table</li>
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <div class="btn-group">
                        <div class="ms-auto"><a href="{{route('dose.create')}}"
                                class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                            </a></div>

                    </div>
                </div>
            </div>

            <h6 class="mb-0 text-uppercase">Medicin Dose</h6>
            <hr />
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                                <tr>
                                    <th>{{__('SL')}}</th>
                                    <th>{{__('Dose Description')}}</th>
                                    <th class="white-space-nowrap">{{__('Action')}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($dose as $value)
                                <tr>
                                    <td>{{++$loop->index}}</td>
                                    <td class="text-center">{{$value->dose_description}}</td>
                                    <td class="action-buttons">
                                        <div class="button-container">
                                            <a href="{{route('dose.edit', 		encryptor('encrypt', $value->id))}}">
                                                <i class="fa fa-edit">
                                                </i>
                                            </a>
                                            <form id="" action="{{ route('category.destroy', encrypt($value->id))}}"
                                                method="post">
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
                                    <th colspan="8" class="text-center">No Dose Found</th>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

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
    <!--end page wrapper -->
    <!--start overlay-->
    <div class="overlay toggle-icon"></div>
    <!--end overlay-->
    <!--Start Back To Top Button--> <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
    <!--End Back To Top Button-->
    <footer class="page-footer">
        <p class="mb-0">Copyright © 2023. All right reserved.</p>
    </footer>
</div>
<!--end wrapper-->

<!-- search modal -->


</div>

<!-- Bootstrap JS -->

@push('scripts');
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



<!-- Mirrored from codervent.com/syndron/demo/vertical/table-datatable.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2023 03:58:38 GMT -->

</html>

@endsection
