@extends('admin.partials.app')
@section('title', 'All Enroll Students')
@section('main-containt')


    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Student Message </h2>
            </div>
        </header>
        <!-- Breadcrumb-->
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">All Student Enrolled</li>
            </ul>
        </div>

        @if (session()->has('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p>{{ session()->get('success') }}</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <section class="tables">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="dropdown-toggle"><i
                                            class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow">
                                        <a href="#" class="dropdown-item remove"> <i
                                                class="fa fa-times"></i>Close</a><a href="#"
                                            class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                                    </div>
                                </div>
                            </div>

                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">All Student Enrolled </h3>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Full Name</th>
                                                <th>email</th>
                                                <th>mobile</th>
                                                <th>address</th>
                                                <th>course</th>
                                                <th>duration</th>
                                                <th>Certificate Issue</th>
                                                <th>Register At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @forelse ($allEnrollStudents as $row)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->mobile }}</td>
                                                    <td>{{ $row->address }}</td>
                                                    <td>{{ $row->course }}</td>
                                                    <td>{{ $row->duration }}</td>
                                                    <td>
                                                        @if ($row->certificate_issue != 0)
                                                            <a href="javascript:void(0)"
                                                                class="btn btn-success btn-sm disabled">Certificate
                                                                Issued</a>
                                                        @else
                                                            <a href="{{ route('certificateGenerate', ['id' => $row->id]) }}"
                                                                class="btn btn-primary btn-sm">Certificate Generate</a>
                                                        @endif
                                                    </td>

                                                    <td>{{ $row->created_at->diffForHumans() }}</td>
                                                    <td>
                                                        <a href="{{ route('viewCertificate', ['id' => $row->id]) }}"
                                                            title="View Student Certificate" class="btn btn-primary"><i
                                                                class="fa fa-eye"></i></a>

                                                        <a href="{{ route('StudentDelete', ['id' => $row->id]) }}"
                                                            title="Delete Student" class="btn btn-danger"><i
                                                                class="fa fa-trash-o"></i></a>
                                                    </td>
                                                </tr>
                                            @empty
                                                <td colspan="10">
                                                    <p class="text-center">No Data Found.</p>
                                                </td>
                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>


        </section>
    @endsection
