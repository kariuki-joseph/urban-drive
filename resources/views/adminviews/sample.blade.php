<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Urban Drive admin</title>

    <!-- Custom fonts for this template-->
    <link href="/asset/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="/asset/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

       @include('adminviews.sidebar')

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
            @include('adminviews.topbar')
            

         <div class="container">
      <div class="row">
            <section class="col-7">
            <table class="table">
      
              <thead class="thread-light">
                <tr>
                <th scope="col">id</th>
                  <th scope="col">Car model</th>
                  <th scope="col">Car Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>      
                <tr>
                  <td> Car ID</td>
                  <td>Toyota </td>
                  <td>mazda 2020</td>
                  <td><img src="/assets/image/vehicle-5.png" heigth="200px" width="100px" alt=""></td>
                  <td>800,000ksh</td>
                  <td>
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal1">
                      Edit
                    </button>
                    <button type="button" class="btn btn-info" data-bs-toggle="modal" data-bs-target="#myModal2">
                      Show
                    </button>          
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal3">
                      Delete
                    </button>
                  </td>
                </tr>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header" style="postion:relative">
                            <h1>EDIT CAR INFORMATION</h1>
                        </div>
                         <div class="modal-body">
                         <form action="" method="#">
                             <div class="mb-3">
                                <label class="form-label">Car id</label>
                                <input type="text" name="carID" class="form-control" id="carId" placeholder="Enter Car id">
                              <div class="mb-3">
                                <label class="form-label">Car Model</label>
                                <input type="text" name="carModel" class="form-control" id="carModel" placeholder="Enter Car Model">
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Car Name</label>
                                <input type="text" name="carName" class="form-control" id="carName" placeholder="Enter car name">
                              </div>              
                              <div class="mb-3">
                                 <label class="form-label">Image</label>
                                <input type="file" name="age" class="form-control" name="age" id="age" placeholder="Enter Your Age">
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Speciality</label>
                                <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Enter your speciality">
                              </div>
                            </form>
                         </div>
                         <div class="modal-footer">
                         <button type="submit" class="btn btn-warning" name="save">Add Car</button>
                         <button type="submit" class="btn btn-secondary">Reset</button>      
                         </div>
                       </div>
                     </div>
                   </div>
                   <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header" style="postion:relative">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute; right:10px; top:5px">
                             <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                         <div class="modal-body">
                            <span class="text-dark">
                           Are sure you want to  delete this car?
                         </span>
                         </div>
                         <div class="modal-footer">
                          <a class=" btn btn-danger"  href="">Yes</a>        
                          <a href="" class=" btn btn-primary" >No</a>        
                         </div>
                       </div>
                     </div>
                   </div>
                <div class="modal fade" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModal3" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header" style="postion:relative">
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute; right:10px; top:5px">
                             <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                         <div class="modal-body">
                            <span class="text-dark">
                           Are sure you want to  delete this car?
                         </span>
                         </div>
                         <div class="modal-footer">
                          <a class=" btn btn-danger"  href="">Yes</a>        
                          <a href="" class=" btn btn-primary" >No</a>        
                         </div>
                       </div>
                     </div>
                   </div>
  
              </tbody>
            </table>  
          </section>
         <section class="col-5">
           <form action="" method="#">
              
              <div class="mb-3">
                <label class="form-label">Car id</label>
                <input type="text" name="carID" class="form-control" id="carId" placeholder="Enter Car id">
              <div class="mb-3">
                <label class="form-label">Car Model</label>
                <input type="text" name="carModel" class="form-control" id="carModel" placeholder="Enter Car Model">
              </div>
              <div class="mb-3">
                <label  class="form-label">Car Name</label>
                <input type="text" name="carName" class="form-control" id="carName" placeholder="Enter car name">
              </div>
              
              <div class="mb-3">
                <label class="form-label">Image</label>
                <input type="file" name="age" class="form-control" name="age" id="age" placeholder="Enter Your Age">
              </div>
              <div class="mb-3">
                <label  class="form-label">Speciality</label>
                <input type="text" name="speciality" class="form-control" id="speciality" placeholder="Enter your speciality">
              </div>
                            
              <button type="submit" class="btn btn-primary" name="save">Submit</button>
              <button type="submit" class="btn btn-secondary">Reset</button>
            </form>
         </section>
    </div>
  
      </div>
                
    </div>
    <!-- End of Page Wrapper -->

   

    <!-- Bootstrap core JavaScript-->
    <script src="/asset/vendor/jquery/jquery.min.js"></script>
    <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/asset/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="/asset/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="/asset/s/demo/chart-area-demo.js"></script>
    <script src="/asset/js/demo/chart-pie-demo.js"></script>

</body>


</html>