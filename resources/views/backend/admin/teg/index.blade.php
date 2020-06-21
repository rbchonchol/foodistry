@extends('backend/admin/layouts/master')
@section('title','Teg-list')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Teg-List</h4>
           <hr>
            <div class="mb-2">
                <div class="row">
                    <div class="col-8 text-sm-center form-inline">
                        <a href="#" type="button" class="btn btn-secondary mr-1">
                            <i class="fas fa-download"></i>
                            <span>PDF</span>
                        </a>
                        <a href="#" type="button" class="btn btn-secondary">
                            <i class="fas fa-download"></i>
                            <span>EXEL</span>
                        </a>
                    </div>
                    <div class=" col-4 ">
                        <a href="{{route('admin.teg.create')}}" type="button" class="btn btn-outline-info">
                            <i class="fas fa-plus"></i>
                            <span>ADD NEW teg</span>
                        </a>
                        <a href="#" type="button" class="btn btn-outline-danger">
                            <i class="fas fa-trash"></i>
                            <span>TRASH LIST</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="">
                <table id="demo-foo-filtering" class="table toggle-circle mb-0 table-striped " data-page-size="7">
                    <tr>
                        <th >Id</th>
                        <th>name</th>
                        <th >Action</th>
                    </tr>
                        @foreach ($tegs as $key=>$teg)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$teg->name}}</td>
                        <td class="d-flex">
                            <span>
                            <a href="{{route('admin.teg.show',$teg->id)}}" type="button" class="btn btn-outline-primary mr-1">
                                <i class="fas fa-eye"></i>
                                </a>
                            </span>
                            <span>
                                <a href="{{route('admin.teg.edit',$teg->id)}}" type="button" class="btn btn-outline-success mr-1 ">
                                <i class="fas fa-edit"></i>
                                </a>
                            </span>
                            <span>
                                <form action="{{route('admin.teg.destroy',$teg->id)}}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-outline-danger" type="submit" onclick="return confirm('Are you sure you want to delete this item?');">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </table>

            </div> <!-- end .table-responsive-->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>
@endsection

@push('js')
    <script src="{{asset('ui/backend')}}/libs/footable/footable.all.min.js"></script>

<!-- Init js -->
<script src="{{asset('ui/backend')}}/js/pages/foo-tables.init.js"></script>
@endpush


