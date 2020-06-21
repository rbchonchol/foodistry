@extends('backend/admin/layouts/master')
@section('title',Auth::user()->name)
@section('content')
                    <!-- Start Content-->
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box">
                                    <div class="page-title-right">
                                        <ol class="breadcrumb m-0">
                                            <li class="breadcrumb-item"><a href="javascript: void(0);">E-Commerce</a></li>
                                        <li class="breadcrumb-item active">{{Auth::user()->name}}</li>
                                        </ol>
                                    </div>
                                    <h4 class="page-title">Profile</h4>
                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-4 col-xl-4">
                                <div class="card-box text-center">
                                    <img src="{{asset('ui/backend')}}/images/rongon.png" alt="user-image" class="rounded-circle" height="150px" width="150px">

                                <h4 class="mb-0">{{Auth::user()->name}}</h4>
                                    <p class="text-muted">Admin</p>

                                    <button type="button" class="btn btn-success btn-xs waves-effect mb-2 waves-light">Follow</button>
                                    <button type="button" class="btn btn-danger btn-xs waves-effect mb-2 waves-light">Message</button>

                                    <div class="text-left mt-3">
                                        <h4 class="font-13 text-uppercase">About Me :</h4>
                                        <p class="text-muted font-13 mb-3">
                                        </p>
                                    {{-- <p class="text-muted mb-2 font-13"><strong>Full Name :</strong> <span class="ml-2">{{Auth::user()->name}}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2">{{Auth::user()->->phone}}</span></p>

                                    <p class="text-muted mb-2 font-13"><strong>Email :</strong> <span class="ml-2 ">{{Auth::user()->email}}</span></p>

                                    <p class="text-muted mb-1 font-13"><strong>Location :</strong> <span class="ml-2">{{Auth::user()->address}}</span></p> --}}
                                    </div>

                                    <ul class="social-list list-inline mt-3 mb-0">
                                        <li class="list-inline-item">
                                        <a href="#" class="social-list-item border-purple text-purple"><i
                                                    class="mdi mdi-facebook"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="javascript: void(0);" class="social-list-item border-danger text-danger"><i
                                                    class="mdi mdi-google"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="social-list-item border-info text-info"><i
                                                    class="mdi mdi-twitter"></i></a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a href="#" class="social-list-item border-secondary text-secondary"><i
                                                    class="mdi mdi-github-circle"></i></a>
                                        </li>
                                    </ul>
                                </div> <!-- end card-box -->



                            </div> <!-- end col-->

                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                    <ul class="nav nav-pills navtab-bg">
                                        <li class="nav-item">
                                            <a href="#about-me" data-toggle="tab" aria-expanded="true" class="nav-link active ml-0">
                                                <i class="mdi mdi-face-profile mr-1"></i>About Me
                                            </a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="#settings" data-toggle="tab" aria-expanded="false" class="nav-link">
                                                <i class="mdi mdi-settings-outline mr-1"></i>Settings
                                            </a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">

                                        <div class="tab-pane show active" id="about-me">

                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-briefcase mr-1"></i>
                                                Experience</h5>

                                            <ul class="list-unstyled timeline-sm">
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2015 - 19</span>
                                                    <h5 class="mt-0 mb-1">Lead designer / Developer</h5>
                                                    <p>websitename.com</p>
                                                    <p class="text-muted mt-2">Everyone realizes why a new common language
                                                        would be desirable: one could refuse to pay expensive translators.
                                                        To achieve this, it would be necessary to have uniform grammar,
                                                        pronunciation and more common words.</p>

                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2012 - 15</span>
                                                    <h5 class="mt-0 mb-1">Senior Graphic Designer</h5>
                                                    <p>Software Inc.</p>
                                                    <p class="text-muted mt-2">If several languages coalesce, the grammar
                                                        of the resulting language is more simple and regular than that of
                                                        the individual languages. The new common language will be more
                                                        simple and regular than the existing European languages.</p>
                                                </li>
                                                <li class="timeline-sm-item">
                                                    <span class="timeline-sm-date">2010 - 12</span>
                                                    <h5 class="mt-0 mb-1">Graphic Designer</h5>
                                                    <p>Coderthemes LLP</p>
                                                    <p class="text-muted mt-2 mb-0">The European languages are members of
                                                        the same family. Their separate existence is a myth. For science
                                                        music sport etc, Europe uses the same vocabulary. The languages
                                                        only differ in their grammar their pronunciation.</p>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- end timeline content-->

                                        <div class="tab-pane" id="settings">
                                        {{-- <form action="{{route('update_profile')}}" method="POST"> --}}
                                            @csrf
                                            @method('PUT')
                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-account-circle mr-1"></i> Personal Info</h5>

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="firstname">First Name</label>
                                                        <input type="text" class="form-control" id="firstname" name="name" value="{{Auth::user()->name}}">
                                                        </div>
                                                    </div>
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <label for="userbio">Bio</label>
                                                        {{-- <textarea class="form-control" id="userbio" name="bio" rows="4" >{{Auth::user()->profile->bio}}</textarea> --}}
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="useremail">Email Address</label>
                                                        <input type="email" class="form-control" id="useremail" name="email"  value="{{Auth::user()->email}}">

                                                        </div>
                                                    </div>

                                                </div> <!-- end row -->

                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-office-building mr-1"></i> Company Info</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="companyname">Company Name</label>
                                                            <input type="text" class="form-control" id="companyname" placeholder="Enter company name">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="cwebsite">Website</label>
                                                            <input type="text" class="form-control" id="cwebsite" placeholder="Enter website url">
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <h5 class="mb-3 text-uppercase bg-light p-2"><i class="mdi mdi-earth mr-1"></i> Social</h5>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-fb">Facebook</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-facebook-square"></i></span>
                                                                </div>
                                                            {{-- <input type="text" class="form-control" name="facebook_url" id="social-fb" value="{{Auth::user()->profile->facebook_url}}"> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-tw">Twitter</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                                                </div>
                                                            {{-- <input type="text" class="form-control" name="teitter_url" id="social-tw" value="{{Auth::user()->profile->teitter_url}}"> --}}
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-gh">Github</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-github"></i></span>
                                                                </div>
                                                            {{-- <input type="text" class="form-control"      name="github_url" id="social-gh" value="{{Auth::user()->profile->github_url}}"> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="social-lin">Linkedin</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <span class="input-group-text"><i class="fab fa-linkedin"></i></span>
                                                                </div>
                                                                {{-- <input type="text"name="linke_in_url" class="form-control" id="social-lin"{{Auth::user()->profile->linked_in_url}}> --}}
                                                            </div>
                                                        </div>
                                                    </div> <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="row">

                                                     <!-- end col -->
                                                </div> <!-- end row -->

                                                <div class="text-right">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Update</button>
                                                </div>
                                            </form>
                                        </div>
                                        <!-- end settings content-->

                                    </div> <!-- end tab-content -->
                                </div> <!-- end card-box-->

                            </div> <!-- end col -->
                        </div>
                        <!-- end row-->

                    </div> <!-- container -->
@endsection
