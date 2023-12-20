 





 @extends('backend.layouts.app')
 @section('title',trans('create Users'))
 @section('content')






 <div class="page-wrapper">
     <div class="page-content">
         <div class="card radius-10">
             <div class="card-body">
                 
                 <div class="d-lg-flex align-items-center mb-4 gap-3">
                     
                     <div class="ms-auto"><a href="{{route('role.create')}}"
                             class="btn btn-primary radius-30 mt-2 mt-lg-0"><i class="bx bxs-plus-square"></i>Add New
                             User</a></div>
                 </div>
                 <hr />
                 <div class="table-responsive">
                     <table id="example" class="table table-striped table-bordered" style="width:100%">
                         <thead class="text-white bg-primary">
                        <tr>
                            <th scope="col">{{__('#SL')}}</th>
                            <th scope="col">{{__('Name')}}</th>
                            <th scope="col">{{__('Identity')}}</th>
                            <th class="white-space-nowrap">{{__('Action') }}</th>
                        </tr>
                    </thead>
                        <tbody>
                        @forelse($data as $p)
                        <tr>
                            <th scope="row">{{ ++$loop->index }}</th>
                            <td>{{$p->name}}</td>
                            <td>{{$p->identity}}</td>
                            <td class="white-space-nowrap">
                                <a href="{{route('role.edit',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('permission.list',encryptor('encrypt',$p->id))}}">
                                    <i class="fa fa-unlock"></i>
                                </a>
                                <a href="javascript:void()" onclick="$('#form{{$p->id}}').submit()">
                                    <i class="fa fa-trash"></i>
                                </a>
                                <form id="form{{$p->id}}" action="{{route('role.destroy',encryptor('encrypt',$p->id))}}" method="post">
                                    @csrf
                                    @method('delete')
                                </form>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <th colspan="8" class="text-center">No Pruduct Found</th>
                        </tr>
                        @endforelse
                    </tbody>
                     </table>
                 </div>
             </div>
         </div>
     </div>
 </div>
 @endsection