@extends('backend.layouts.app')
@section('title', trans('create Users'))
@section('content')



 
     <div class="wrapper">
        <div class="page-wrapper">
            <div class="page-content">
                <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                    <div class="breadcrumb-title pe-3">{{ __('Tables') }}</div>
                    <div class="ps-3">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0 p-0">
                                <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{ __('Stock Data Table') }}</li>
                            </ol>
                        </nav>
                    </div>
                </div>

                <h6 class="mb-0 text-uppercase">{{ __('Stock Data table') }}</h6>
                <hr />
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-striped table-bordered" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>{{ __('SL') }}</th>
                                        <th>{{ __('Medicine Name') }}</th>
                                        <th>{{ __('Expire Date') }}</th>
                                        <th>{{ __('Quantity') }}</th>
                                         
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse($stock as $p)
                                        <tr>
                                            <td>{{ ++$loop->index }}</td>
                                            <td class="text-center">{{ $p->medicine?->bname }}</td>                                                                                      <td>
                                                {{ $p->medicine ? date('M-d-Y', strtotime($p->medicine->expiredate)) : null }}
                                                @if($p->medicine)
                                                    @php
                                                        $daysRemaining = now()->diffInDays($p->medicine->expiredate);
                                                    @endphp
                                                    @if($daysRemaining <= 5)
                                            <br/> <span class="text-danger">(End after {{ $daysRemaining }} {{ Str::plural('day', $daysRemaining) }})</span>
                                                    @endif
                                                @endif
                                            </td>


                                            <td class="text-center">
                                                {{ $p->quantity }}
                                                @if($p->quantity < 5)
                                                    <span class="text-danger">(Low Stock)</span>
                                                   
                                                @endif
                                            </td>
                                             
                                        </tr>
                                    @empty
                                        <tr>
                                            <th colspan="6" class="text-center">{{ __('No Dose Found') }}</th>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="overlay toggle-icon"></div>
        <a href="javaScript:;" class="back-to-top"><i class='bx bxs-up-arrow-alt'></i></a>
        <footer class="page-footer">
            <p class="mb-0">{{ __('Copyright © 2023. All right reserved.') }}</p>
        </footer>
    </div>
    </div>
<script src="assets/js/app.js"></script>
    </html>

@endsection
