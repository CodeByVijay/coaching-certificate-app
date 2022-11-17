@extends('admin.partials.app')
@section('title', 'Student Message')
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
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Student Message</li>
            </ul>
        </div>


        @if (session()->has('success'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
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
                                <h3 class="h4">Student Massege </h3>
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
                                                <th>Message</th>
                                                <th>Message At</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $i = 1; ?>
                                            @forelse ($messages as $row)
                                                <tr>
                                                    <th scope="row">{{ $i++ }}</th>
                                                    <td>{{ $row->name }}</td>
                                                    <td>{{ $row->email }}</td>
                                                    <td>{{ $row->mobile }}</td>
                                                    <td>{{ $row->msg }}</td>
                                                    <td>{{ $row->created_at->diffForHumans() }}</td>
                                                    <td><a href="{{ route('StudentMessageDelete', ['id' => $row->id]) }}"
                                                            class="btn btn-danger"><i class="fa fa-trash-o"></i></a></td>
                                                </tr>
                                            @empty
                                                <td colspan="8">
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
