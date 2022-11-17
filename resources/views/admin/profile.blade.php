@extends('admin.partials.app')
@section('title', 'Admin Profile')
@section('main-containt')

    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Admin Profile </h2>
            </div>
        </header>
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Admin Profile</li>
            </ul>
        </div>


        <section class="forms">
            <div class="container-fluid">
                <div class="row">

                    <!-- Form Elements -->
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-close">
                                <div class="dropdown">
                                    <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false" class="dropdown-toggle"><i
                                            class="fa fa-ellipsis-v"></i></button>
                                    <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow">
                                        <a href="#" class="dropdown-item remove"> <i
                                                class="fa fa-times"></i>Close</a><a href="#"
                                            class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-header d-flex align-items-center">
                                <h3 class="h4">Student Registration </h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal" action="{{ route('profileUpdatePost') }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Name </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" value="{{$admin->name}}" required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Email Id :</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" value="{{$admin->email}}" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Mobile Number </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mobile" value="{{$admin->mobile}}" class="form-control" minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" value="{{$admin->address}}" class="form-control">
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control">
                                            @error('password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="con_password" class="form-control">
                                            @error('con_password')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="line"></div>

                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-3">
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                            <button type="submit" class="btn btn-primary">Save Changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    @endsection
