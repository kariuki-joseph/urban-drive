
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
        <td>{{$offer->id}}</td>
        <td>{{$offer->model}}</td>
        <td>{{$offer->name}} </td>
                    @foreach($offer->images as $image)
                      <td><img src="/img_offer/{{ $image->url }}" heigth="200px" width="100px" alt=""></td>
                    @endforeach
                 
        <td>{{$offer->price}}</td>
        <td>              
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#myModal1">
            Delete
          </button>
        </td>
      </tr>
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal2" aria-hidden="true">
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
                         <a href="{{ url('/offers', ['id' => $offer->id]) }}">
                          <button class="btn btn-danger">
                                   Delete
                            </button>
                           </a> 
                           <a href="" class=" btn btn-primary" >No</a>        
                         </div>
                       </div>
                     </div>
                   </div>
                     </div> 
      @endforeach
                  
              
                   
              </tbody>
            </table>  
          </section>
         <section class="col-4 border border-warning">
         <form action="{{url('/featured/add')}}" method="POST" enctype="multipart/form-data">
              @csrf
                            <div class="mb-3">
                <label class="text-gray form-label">Car Model</label>
                <select name="model" class="form-control form-control-lg"  placeholder="Model" required>
                 @foreach ($models as $model)
                  <option>{{$model->model}}</option>
                  @endforeach
                   </select>                 </div>
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
                <select name="type" class="form-control form-control-lg" placeholder="TYPE" required>
                     @foreach ($types as $type)
                    <option>{{$type->types}}</option>
                    @endforeach
                  </select>  
              </div>
              <div class="mb-3">
                <label class="text-gray form-label">Color</label>
                <select name="color" class="form-control form-control-lg"  placeholder="COLOR" required>
                    @foreach ($colors as $color)
                    <option>{{$color->colors}}</option>
                    @endforeach
                  </select>                  </div>
              <div class="mb-3">
                <label  class="text-gray form-label">price</label>
                <input type="number" name="price" class="form-control" id="price" placeholder="Enter the price ">
              </div>
              <div class="mb-3">
                <label  class="text-gray form-label">Description</label>
                <textarea name="description" id="description" cols="20" rows="5" class="form-control " placeholder="Add your car description  here...." ></textarea>
              </div>
                            
              <button type="submit" class="btn btn-warning" name="save">Submit</button>
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
    <script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>

<script src="/assets/js/script.js"></script>

    
</body>

</html>