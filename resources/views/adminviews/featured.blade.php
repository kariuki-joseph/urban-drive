die(offers)
<!DOCTYPE html>
<html lang="en">

<head>

@include('adminviews.header')

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
             <h3 class="bg-warning">
                 FEATURED CARS
             </h3>

         <div class="container">
      <div class="row">
            <section class="col-8 border border-warning">
            <table class="table">
      
              <thead class="bg-warning">
                <tr>
                <th scope="col">Car Id</th>
                  <th scope="col">Car model</th>
                  <th scope="col">Car Name</th>
                  <th scope="col">Image</th>
                  <th scope="col">price</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>      
        @foreach ($offers as $offer)
        <tr>
        <td>{{$offer->model}}</td>
        <td>{{$offer->name}} </td>
        <td>{{$offer->price}}</td>
        <td><img src="/assets/image/vehicle-5.png" heigth="200px" width="100px" alt=""></td>
        <td>xc</td>
        <td>
          <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
            Edit
       </button>          
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal1">
            Delete
          </button>
        </td>
      </tr>
      @endforeach
                  
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header bg-warning" style="postion:relative">
                            <h1 >EDIT CAR INFORMATION</h1>
                        </div>
                         <div class="modal-body">
                         <form action="" method="#" class="border border-warning">
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
                         <button type="submit" class="btn btn-warning" name="save">Edit Car</button>
                         <button type="submit" class="btn btn-secondary">Reset</button>      
                         </div>
                       </div>
                     </div>
                   </div>
                   
              </tbody>
            </table>  
          </section>
         <section class="col-4 border border-warning">
         <form action="{{url('/featured/add')}}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="mb-3">
                <label class="text-gray form-label">Car id</label>
                <input type="text" name="id" class="form-control" id="carId" placeholder="Enter Car id">
              <div class="mb-3">
                <label class="text-gray form-label">Car Model</label>
                <input type="text" name="model" class="form-control" id="carModel" placeholder="Enter Car Model">
              </div>
              <div class="mb-3">
                <label  class="text-gray form-label">Car Name</label>
                <input type="text" name="name" class="form-control" id="carName" placeholder="Enter car name">
              </div>
              
              <div class="mb-3">
                <label class="text-gray form-label">Image</label>
                <input type="file" name="image" class="form-control" name="image" id="image" placeholder="select image car">
              </div>
              <div class="mb-3">
                <label  class="text-gray form-label">Type</label>
                <input type="text" name="type" class="form-control" id="type" placeholder="Enter your type">
              </div>
              <div class="mb-3">
                <label class="text-gray form-label">Color</label>
                <input type="text" name="color" class="form-control" name="color" id="color" placeholder="select car color">
              </div>
              <div class="mb-3">
                <label  class="text-gray form-label">price</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter the price ">
              </div>
              <div class="mb-3">
                <label  class="text-gray form-label">Description</label>
                <textarea name="descripton" id="description" cols="20" rows="5" class="form-control " placeholder="Add your car description  here...." ></textarea>
              </div>
                            
              <button type="submit" class="btn btn-warning" name="save">Submit</button>
              <button type="submit" class="btn btn-secondary">Reset</button>
            </form>
         </section>
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
                     </div>
    <!-- End of Page Wrapper -->

   

    <!-- Bootstrap core JavaScript-->
    <script src="/asset/vendor/jquery/jquery.min.js"></script>
    <script src="/asset/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="/asset/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="/asset/js/sb-admin-2.min.js"></script>
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>

<script src="/assets/js/script.js"></script>

    
</body>

</html>