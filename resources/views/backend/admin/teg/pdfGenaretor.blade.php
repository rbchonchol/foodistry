
<div class="row">
    <div class="col-12">
        <div class="card-box">
            <h4 class="header-title">Categori-List</h4>
           <hr>

            <div class="">
                <table id="demo-foo-filtering" class="table toggle-circle mb-0 table-striped " data-page-size="7">
                    <tr>
                        <th >Id</th>
                        <th>Title</th>
                        <th >Description</th>
                        <th >Status</th>
                    </tr>
                        @foreach ($categoris as $key=>$categori)
                    <tr>
                        <td>{{$key+1}}</td>
                        <td>{{$categori->title}}</td>
                        <td>{{$categori->description}}</td>
                        <td>
                            @if ($categori->status == 1)
                                {{ "Active" }}
                            @else
                                {{"Not-Active"}}
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </table>

            </div> <!-- end .table-responsive-->
        </div> <!-- end card-box -->
    </div> <!-- end col -->
</div>



