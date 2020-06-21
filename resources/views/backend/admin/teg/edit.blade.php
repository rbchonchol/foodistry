@extends('backend/admin/layouts/master')
@section('title','Edit Teg')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h4 class="ml-2">ADD NEW teg</h4>
                <hr>
                <form action="{{route('admin.teg.update',$teg->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group form-float col-12">

                        <div class="form-line">
                            <label for="name">Name</label>
                        <input type="text" id="name" name="name" class="form-control" required value="{{$teg->name}}">
                        </div>
                    </div>
                    <div class="form-group form-float col-12">
                         <a href="{{route('admin.teg.index')}}" class="btn btn-danger m-t-15 waves-effect">
                        <i class="fas fa-backward mr-1"></i>
                            <span>BACK</span>
                        </a>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                        <i class="fas fa-plus mr-1"></i>
                        <span>UPDATE</span>
                    </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')

@endpush


