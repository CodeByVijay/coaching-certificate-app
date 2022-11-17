@extends('admin.partials.app')
@section('title','Not Issue Certificate')
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
              <li class="breadcrumb-item active">Not Issue Certificate </li>
            </ul>
          </div>
          <section class="tables">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-close">
                      <div class="dropdown">
                        <button type="button" id="closeCard1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard1" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>

                    <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Not Issue Certificate </h3>
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
                                    <th>Register At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                @forelse ($notIssuedCertificate as $row)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->email }}</td>
                                        <td>{{ $row->mobile }}</td>
                                        <td>{{ $row->address }}</td>
                                        <td>{{ $row->course }}</td>
                                        <td>{{ $row->duration }}</td>
                                        <td>{{ $row->created_at->diffForHumans() }}</td>
                                        <td><a href="{{route('StudentDelete',['id'=>$row->id])}}" class="btn btn-danger"><i
                                                    class="fa fa-trash-o"></i></a></td>
                                    </tr>
                                    @empty
                                    <td colspan="9"><p class="text-center">No Data Found.</p></td>
                                @endforelse
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>

          </section>
@endsection
