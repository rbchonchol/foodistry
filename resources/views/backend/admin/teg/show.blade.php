@extends('backend/admin/layouts/master')
@section('title','Teg')
@section('content')
<div class="row">
    <div class=" col-12">
         <div class="card">
        <div class="card-body">
            <table id="demo-foo-filtering" class="table toggle-circle mb-0 table-striped " data-page-size="7">
                <tr>
                    <th >Name</th>
                    <td>{{$show->name}}</th>
                </tr>
                {{-- <tr>
                    <th >Description</th>
                    <td>{{$show->description}}</th>
                </tr>
                <tr> --}}
                    {{-- <th >Products</th>
                    <td>
                        <ul>
                            @foreach ($show->products as $product)
                        <li>{{$product->title}}</li>
                            @endforeach
                        </ul>
                    </td> --}}
                </tr>
            </table>
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


