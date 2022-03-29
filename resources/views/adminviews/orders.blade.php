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
             
               <section class="">
                 <h4 class="bg-warning">
                   YOUR ORDERS
                 </h4>
            <table class="table border border-warning">
      
              <thead>
                <tr  class="bg-warning">
                <th scope="col"  class=" border border-warning">Order Id</th>
                  <th scope="col" class=" border border-warning">Car Id</th>
                  <th scope="col"  class=" border border-warning">contact</th>
                  <th scope="col"  class=" border border-warning">Time Booked</th>
                  <th scope="col"  class=" border border-warning">Status</th>
                </tr>
              </thead>
              <tbody> 
                @foreach ($orders as $order)     
                <tr >
                  <td  class=" border border-warning">{{$order->id}}</td>
                  <td  class=" border border-warning">{{$order->carId}} </td>
                  <td  class=" border border-warning">{{$order->contact}}</td>
                  <td  class=" border border-warning">{{$order->order_date}}</td>
                 <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#myModal1">
                   Attended
                    </button>
                    
                  </td>
                </tr> 
                @endforeach
              </tbody>
            </table>  
          </section>
               
            </div>
        </div>
    </div>

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
    <script src="/asset/js/demo/chart-area-demo.js"></script>
    <script src="/asset/js/demo/chart-pie-demo.js"></script>

</body>

</html>