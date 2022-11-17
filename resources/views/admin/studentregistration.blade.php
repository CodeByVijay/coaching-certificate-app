

          <?php include('header.php')?>

<?php include('sidebar.php')?>



<div class="content-inner">
          <!-- Page Header-->
          <header class="page-header">
            <div class="container-fluid">
              <h2 class="no-margin-bottom">Student Message </h2>
            </div>
          </header>
          <div class="breadcrumb-holder container-fluid">
            <ul class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">Student Message</li>
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
                        <button type="button" id="closeCard5" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
                        <div aria-labelledby="closeCard5" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
                      </div>
                    </div>
                   <div class="card-header d-flex align-items-center">
                      <h3 class="h4">Student Registration </h3>
                    </div>
                    <div class="card-body">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Student Name </label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Email Id :</label>
                          <div class="col-sm-9">
                            <input type="email" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Mobile Number </label>
                          <div class="col-sm-9">
                            <input type="number" name="number" class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Address</label>
                          <div class="col-sm-9">
                            <input type="text"  class="form-control">
                          </div>
                        </div>
                        <div class="line"></div>
                        

                        
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Courses</label>
                          <div class="col-sm-9">
                            <select name="account" class="form-control mb-3" >
                              <option>Web Development </option>
                              <option>Android Apps Development </option>
                              <option>Digital Marketing</option>
                              <option>Machine Learning </option>
                              <option>Blockchain Technology </option>
                              <option>Cloude Computing  </option>

                            </select>
                          </div>
                          
                        </div>





                        <div class="line"></div>
                        <div class="form-group row">
                          <label class="col-sm-3 form-control-label">Deveration </label>
                          <div class="col-sm-9">
                            <select name="account" class="form-control mb-3" >
                              <option>1 Month  </option>
                              <option>2 Month  </option>
                              <option>3 Month </option>
                              <option>4 Month </option>
                              <option>6 Month  </option>
                            
                            </select>
                          </div>
                          
                        </div>
                       
                        <div class="line"></div>
                        <div class="form-group row">
                          <div class="col-sm-4 offset-sm-3">
                            <button type="submit" class="btn btn-secondary">Cancel</button>
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


<?php include('footer.php')?>