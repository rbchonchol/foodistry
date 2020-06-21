@extends('backend.author.layouts.master')

@section('title','Dashboard')
@section('content')


<div class="content">

                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">Minton</a></li>
                                            <li class="breadcrumb-item active">Dashboard</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Welcome !</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#1abc9c"
                                            data-bgColor="#d1f2eb" value="58"
                                            data-skin="tron" data-angleOffset="0" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="mb-1"> 268 </h3>
                                        <p class="text-muted mb-1">New Customers</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#3bafda"
                                            data-bgColor="#d8eff8" value="80"
                                            data-skin="tron" data-angleOffset="0" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="mb-1"> 8715 </h3>
                                        <p class="text-muted mb-1">Online Orders</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#f672a7"
                                            data-bgColor="#fde3ed" value="77"
                                            data-skin="tron" data-angleOffset="0" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="mb-1"> $925.78 </h3>
                                        <p class="text-muted mb-1">Revenue</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                            <div class="col-xl-3 col-md-6">
                                <div class="card-box">
                                    <div class="float-left" dir="ltr">
                                        <input data-plugin="knob" data-width="70" data-height="70" data-fgColor="#6c757d"
                                            data-bgColor="#e2e3e5" value="35"
                                            data-skin="tron" data-angleOffset="0" data-readOnly=true
                                            data-thickness=".15"/>
                                    </div>
                                    <div class="text-right">
                                        <h3 class="mb-1"> $78.58 </h3>
                                        <p class="text-muted mb-1">Daily Average</p>
                                    </div>
                                </div>
                            </div><!-- end col -->

                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

</div>

@endsection
