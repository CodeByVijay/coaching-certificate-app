@extends('admin.partials.app')
@section('title', 'Dashboard')
@section('main-containt')

    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Dashboard</h2>
            </div>
        </header>
        <!-- Dashboard Counts Section-->

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ session()->get('success') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        
        <section class="dashboard-counts no-padding-bottom">
            <div class="container-fluid">
                <div class="row bg-white has-shadow">
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-violet"><i class="icon-user"></i></div>
                            <div class="title"><span>New<br>Student</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: {{ $totalNewStudent }}%; height: 4px;"
                                        aria-valuenow="{{ $totalNewStudent }}" aria-valuemin="0" aria-valuemax="100"
                                        class="progress-bar bg-violet"></div>
                                </div>
                            </div>
                            <div class="number"><strong>{{ $totalNewStudent }}</strong></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-red"><i class="icon-padnote"></i></div>
                            <div class="title"><span>Student<br>Enrolled</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: {{ $totalStudentEnroll }}%; height: 4px;"
                                        aria-valuenow="{{ $totalStudentEnroll }}" aria-valuemin="0" aria-valuemax="100"
                                        class="progress-bar bg-red"></div>
                                </div>
                            </div>
                            <div class="number"><strong>{{ $totalStudentEnroll }}</strong></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-green"><i class="icon-bill"></i></div>
                            <div class="title"><span>Get<br>Certificate</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: {{ $totalIssuedCertificate }}%; height: 4px;"
                                        aria-valuenow="{{ $totalIssuedCertificate }}" aria-valuemin="0" aria-valuemax="100"
                                        class="progress-bar bg-green"></div>
                                </div>
                            </div>
                            <div class="number"><strong>{{ $totalIssuedCertificate }}</strong></div>
                        </div>
                    </div>
                    <!-- Item -->
                    <div class="col-xl-3 col-sm-6">
                        <div class="item d-flex align-items-center">
                            <div class="icon bg-orange"><i class="icon-check"></i></div>
                            <div class="title"><span>Open<br>Query</span>
                                <div class="progress">
                                    <div role="progressbar" style="width: {{ $totalQuerys }}%; height: 4px;"
                                        aria-valuenow="{{ $totalQuerys }}" aria-valuemin="0" aria-valuemax="100"
                                        class="progress-bar bg-orange"></div>
                                </div>
                            </div>
                            <div class="number"><strong>{{ $totalQuerys }}</strong></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Dashboard Header Section    -->
    @endsection
