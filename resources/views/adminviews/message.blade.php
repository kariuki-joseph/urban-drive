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
               <table class="table">
             <thead >
                 <tr>
                     <th>User name</th>
                     <th>Subject</th>
                     <th>Message</th>
                     <th>status</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($messages as $message)
                 <tr>   
                     <td>{{$message->username}}</td>
                     <td>{{$message->subject}}</td>
                     <td><textarea name="" id="" cols="50" rows="4">{{$message->message}}
                     </textarea>
                    </td>
                    <td>
                    <button type="button" class="bg-danger btn text-white">
                      unread
                    </button>
                
                    </td>
                 </tr>
                 @endforeach
                 
                 </tr>
             </tbody>
           </table>
            
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