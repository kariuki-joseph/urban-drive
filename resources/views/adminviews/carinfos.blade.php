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
            

         <div class="container">
      <div class="row">
            <section class="col-4 border border-warning">
            <table class="table">
      
      <thead class="bg-warning">
        <tr>
          <th scope="col">Models Available</th>
          <th scope="col">Action</th>
         </tr>              
      </thead>
      <tbody>
        @foreach ($models as $model)
      <tr>
        <td>
         {{$model->model}}
        </td>
        <td>
        <a href="/admin/carinfo/deletemodel">
                  <button class="btn btn-danger">
                           Delete
                    </button>
                </a>
        </td>
       
      </tr>
      @endforeach
       </tbody>
    </table>  
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal1">
      Add a model
    </button>
    <div class="modal fade" id="myModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-warning">
<h5 class="modal-title" id="exampleModalLabel">ADD A MODEL</h5>
<button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">close</button>
</div>
<div class="modal-body">
<form action="{{url('/admin/carinfo/addmodel')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label  class="text-gray form-label">model</label>
        <input type="text" name="model" class="form-control" id="type" placeholder="Add another MODEL"><br>
        <button type="submit" class="btn btn-warning" name="save">Save Changes</button>
      </div>                          
    </form>
</div>
</div>
</div>
</div>
          </section>
         <section class="col-4 border border-warning">
         <table class="table">
      
      <thead class="bg-warning">
        <tr>
          <th scope="col">Types Available</th>
          <th scope="col">Action</th>
         </tr>              
      </thead>
      <tbody>
        @foreach ($types as $type)
      <tr>
        <td>
         {{$type->types}}
        </td>
        <td>
        <a href="/admin/carinfo/deletetype">
                  <button class="btn btn-danger">
                           Delete
                    </button>
                </a>
        </td>
       
      </tr>
      @endforeach
       </tbody>
    </table>  
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal">
      Add a type
    </button>
    <div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-warning">
<h5 class="modal-title" id="exampleModalLabel">Add a type</h5>
<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
<form action="{{url('/admin/carinfo/addtype')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label  class="text-gray form-label">Type</label>
        <input type="text" name="types" class="form-control" id="type" placeholder="Add another type"><br>
        <button type="submit" class="btn btn-warning" name="save">Save Changes</buttomn>
      </div>                          
    </form>
</div>
</div>
</div>
</div>
         </section>
         <section class="col-4 border border-warning">
         <table class="table">
      
      <thead class="bg-warning">
        <tr>
          <th scope="col">Colors Available</th>
          <th scope="col">Action</th>
         </tr>              
      </thead>
      <tbody>
        @foreach ($colors as $color)
      <tr>
        <td>
         {{$color->colors}}
        </td>
        <td>
        <a href="/admin/carinfo/deletecolor">
                  <button class="btn btn-danger">
                           Delete
                    </button>
                </a>
        </td>
       
      </tr>
      @endforeach
       </tbody>
    </table>  
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal2">
      Add a color
    </button>
    <div class="modal fade" id="myModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header bg-warning">
<h5 class="modal-title" id="exampleModalLabel">ADD A COLOR</h5>
<button type="button" class="btn-close btn btn-danger" data-bs-dismiss="modal" aria-label="Close">close</button>
</div>
<div class="modal-body">
<form action="{{url('/admin/carinfo/addcolor')}}" method="POST" enctype="multipart/form-data">
      @csrf
      <div class="mb-3">
        <label  class="text-gray form-label">Color</label>
        <input type="text" name="color" class="form-control" id="type" placeholder="Add another color"><br>
        <button type="submit" class="btn btn-warning" name="save">Save Changes</button>
      </div>                          
    </form>
</div>
</div>
</div>
</div>
          
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
    <script src="/asset/s/demo/chart-area-demo.js"</script>
    <script src="/asset/js/demo/chart-pie-demo.js"></script>
    <script src="/assets/js/jquery-3.6.0.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
<script src="/assets/js/popper.min.js"></script>
<script src="/assets/js/swiper-bundle.min.js"></script>

<script src="/assets/js/script.js"></script>

</body>


</html>