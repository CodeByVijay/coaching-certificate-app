@extends('admin.partials.app')
@section('title', 'Student Registration')
@section('main-containt')

    <div class="content-inner">
        <!-- Page Header-->
        <header class="page-header">
            <div class="container-fluid">
                <h2 class="no-margin-bottom">Student Registration </h2>
            </div>
        </header>
        <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Student Registration</li>
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
                                <form class="form-horizontal" action="{{ route('StudentRegistrationPost') }}"
                                    method="POST">
                                    @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Student Name </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" class="form-control" value="{{old('name')}}" required>
                                            @error('name')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Email Id :</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" class="form-control" value="{{old('email')}}" required>
                                            @error('email')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Mobile Number </label>
                                        <div class="col-sm-9">
                                            <input type="text" name="mobile" value="{{old('mobile')}}" class="form-control" required minlength="10" maxlength="10" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');">
                                            @error('mobile')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" value="{{old('address')}}" class="form-control" required>
                                            @error('address')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>
                                    <div class="line"></div>


                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Courses</label>
                                        <div class="col-sm-9">
                                            <select name="course" class="form-control mb-3" required>
                                                <option value="" selected disabled>Select Any Course</option>
                                                <option value="Web Development">Web Development </option>
                                                <option value="Android Apps Development">Android Apps Development </option>
                                                <option value="Digital Marketing">Digital Marketing</option>
                                                <option value="Machine Learning">Machine Learning </option>
                                                <option value="Blockchain Technology">Blockchain Technology </option>
                                                <option value="Cloude Computing">Cloude Computing </option>

                                            </select>
                                            @error('course')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Duration </label>
                                        <div class="col-sm-9">
                                            <select name="duration" class="form-control mb-3" required>
                                                <option value="" selected disabled>Select Duration</option>
                                                <option value="1 Month">1 Month </option>
                                                <option value="2 Month">2 Month </option>
                                                <option value="3 Month">3 Month </option>
                                                <option value="4 Month">4 Month </option>
                                                <option value="6 Month">6 Month </option>

                                            </select>
                                            @error('duration')
                                                <span class="text-danger">{{ $message }}</span>
                                            @enderror
                                        </div>

                                    </div>

                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-4 offset-sm-3">
                                            <button type="reset" class="btn btn-secondary">Reset</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
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
