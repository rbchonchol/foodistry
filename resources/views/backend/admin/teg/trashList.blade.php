@extends('backend/layouts/master')
@section('title','categori-Trash')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Categori-Trash</h4>
           <hr>
            <div class="mb-2">
                <div class="row">
                    <div class="col-9 text-sm-center form-inline">
                        <div class="form-group mr-2">
                            <select id="demo-foo-filter-status" class="custom-select custom-select-sm">
                                <option value="">Show all</option>
                                <option value="active">Active</option>
                                <option value="disabled">Disabled</option>
                                <option value="suspended">Suspended</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <input id="demo-foo-search" type="text" placeholder="Search" class="form-control form-control-sm" autocomplete="on">
                        </div>
                    </div>
                    <div class="col-3 float-left">
                        <a href="{{route('categori.index')}}" type="button" class="btn btn-outline-primary">
                            <i class="fas fa-plus"></i>
                            <span>CATEGORY-LIST</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="">
                <table id="demo-foo-filtering" class="table toggle-circle mb-0 table-striped " data-page-size="7">
                    <tr>
                        <th >Id</th>
                        <th>Title</th>
                        <th >Description</th>
                        <th class="d-flex justify-content-center" >Action</th>
                    </tr>
                        @foreach ($trashs as $key=>$trash)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$trash->title}}</td>
                        <td>{{ Str::limit($trash->description, 50) }}</td>
                        <td class="d-flex">
                            <span class="mr-1">
                            <form action="{{route('cetagori.trashRestore',$trash->id)}}" method="post">
                                    @csrf
                                    @method('PUT')
                                    <button class="btn btn-outline-success" type="submit" onclick="return confirm('Are you sure you want to Restore this item?');">
                                        <i class="fas fa-trash-restore-alt"></i>
                                    </button>
                                </form>
                            </span>
                            <span>
                            <form action="{{route('cetagori.trashDelete',$trash->id)}}" method="post">
                                    @csrf
                                    @method('Delete')
                                    <button class="btn btn-outline-danger " type="submit" onclick="return confirm('Are you sure you want to parmanent delete this item?');">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </form>
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </table>
                {{-- {{$categoris->links()}} --}}
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


