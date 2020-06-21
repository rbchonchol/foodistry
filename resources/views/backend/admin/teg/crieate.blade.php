@extends('backend/admin/layouts/master')
@section('title','Add Teg')
@section('content')
<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="card-body">
                <h4 class="ml-2">ADD NEW CATEGORI</h4>
                <hr>
                <form action="{{route('admin.teg.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group form-float col-12">
                        <div class="form-line">
                            <label for="name">Teg Name</label>
                            <input type="text" id="name" name="name" class="form-control" required placeholder="Teg name">
                        </div>
                    </div>
                    <div class="form-group form-float col-12">
                         <a href="{{route('admin.teg.index')}}" class="btn btn-danger m-t-15 waves-effect">
                        <i class="fas fa-backward mr-1"></i>
                            <span>BACK</span>
                        </a>
                    <button type="submit" class="btn btn-primary m-t-15 waves-effect">
                        <i class="fas fa-plus mr-1"></i>
                        <span>ADD</span>
                    </button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
    {{-- <script src="{{asset('ui/backend')}}/libs/footable/footable.all.min.js"></script>

<!-- Init js -->
<script src="{{asset('ui/backend')}}/js/pages/foo-tables.init.js"></script> --}}
@endpush


