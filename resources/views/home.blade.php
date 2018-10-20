@extends('layouts.app')
@section('content')

    <!-- ============================================================== -->
    <!-- Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <div class="row page-titles">
        <div class="col-md-9 align-self-center text-right">

                @if(session('update_success'))
                <div class="alert alert-success alert-dismissible">
                    <h4 >{{session('update_success')}}</h4>
                </div>
                @endif

        </div>
        <div class="col-md-3 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Bread crumb and right sidebar toggle -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Info box -->
    <!-- ============================================================== -->
    <div class="row">
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <a href="#" class="text-warning">
                    <div class="card-body">
                        <div class="stats-row m-t-5 m-b-5">
                            <div class="stat-item">
                                <h4>All Messages</h4>
                            </div>
                            <div class="float-right" style="font-size: 30px;">
                                <i class="ti  ti-comments "></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <a href="#" class="text-success">
                    <div class="card-body">
                        <div class="stats-row m-t-5 m-b-5">
                            <div class="stat-item">
                                <h4>Processed Messages</h4>
                            </div>
                            <div class="float-right" style="font-size: 30px;">
                                <i class="ti ti-check-box  "></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <a href="#" class="text-success">
                    <div class="card-body">
                        <div class="stats-row m-t-5 m-b-5">
                            <div class="stat-item">
                                <h4>Unprocessed Messages</h4>
                            </div>
                            <div class="float-right" style="font-size: 30px;">
                                <i class="ti ti-comment-alt "></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <!-- Column -->

        <div class="col-lg-3">
            <div class="card">
                <a href="#" class="text-danger">
                    <div class="card-body">
                        <div class="stats-row m-t-5 m-b-5">
                            <div class="stat-item">
                                <h4>Archived Messages</h4>
                            </div>
                            <div class="float-right" style="font-size: 30px;">
                                <i class="ti ti-server "></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">All Messages</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stats-row m-t-10 m-b-10">
                                <div class="stat-item">
                                    <h1>80.40%</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site A Traffic</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stats-row m-t-10 m-b-10">
                                <div class="stat-item">
                                    <h1>80.40%</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site A Traffic</h5>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="stats-row m-t-10 m-b-10">
                                <div class="stat-item">
                                    <h1>80.40%</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->

        <div class="col-lg-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Site A Traffic</h5>
                    <div class="stats-row m-t-20 m-b-20">
                        <div class="stat-item">
                            <h6>Growth</h6> <b>80.40%</b></div>
                        <div class="stat-item">
                            <h6>Montly</h6> <b>20.40%</b></div>
                        <div class="stat-item">
                            <h6>Daily</h6> <b>5.40%</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Info box -->

    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Projects of the Month -->
    <!-- ============================================================== -->
    <div class="row">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">BROWSER STATS</h5>
                    <table class="table browser m-t-30 no-border">
                        <tbody>
                        <tr>
                            <td style="width:40px"><img src="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/browser/chrome-logo.png" alt="logo"></td>
                            <td>Google Chrome</td>
                            <td align="right"><span class="badge badge-pill badge-info">23%</span></td>
                        </tr>
                        <tr>
                            <td><img src="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/browser/firefox-logo.png" alt="logo"></td>
                            <td>Mozila Firefox</td>
                            <td align="right"><span class="badge badge-pill badge-success">15%</span></td>
                        </tr>
                        <tr>
                            <td><img src="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/browser/safari-logo.png" alt="logo"></td>
                            <td>Apple Safari</td>
                            <td align="right"><span class="badge badge-pill badge-primary">07%</span></td>
                        </tr>
                        <tr>
                            <td><img src="http://eliteadmin.themedesigner.in/demos/bt4/assets/images/browser/internet-logo.png" alt="logo"></td>
                            <td>Internet Explorer</td>
                            <td align="right"><span class="badge badge-pill badge-warning">09%</span></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- Real chart -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">CPU LOAD</h5>
                    <div class="stats-row m-t-20 m-b-20">
                        <div class="stat-item">
                            <h6>Usage</h6> <b>60GB</b></div>
                        <div class="stat-item">
                            <h6>Space</h6> <b>320 GB</b></div>
                        <div class="stat-item">
                            <h6>CPU</h6> <b>50%</b></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Recent Unprocessed Messages</h4>
                    <h6 class="card-subtitle">Most recent unprocessed messages</h6>
                    <div class="table-responsive m-t-40">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @for($i=0; $i<=50; $i++)
                                <tr>
                                    <td>Tiger Nixon</td>
                                    <td>System Architect</td>
                                    <td>Edinburgh</td>
                                    <td>61</td>
                                    <td>2011/04/25</td>
                                    <td>$320,800</td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Projects of the Month -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- End Page Content -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- Right sidebar -->
    <!-- ============================================================== -->

@endsection