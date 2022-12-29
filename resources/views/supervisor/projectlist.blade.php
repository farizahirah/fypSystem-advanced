<x-app-layout>

</x-app-layout>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    @include("supervisor.supervisorcss") 
   <style>
    table{
        border-spacing: 10px !important; 
    }
   th, td {
    padding:0.5rem !important;
    padding-left: 10px !important;
    padding-right: 10px !important;
   }
   </style>
</head>

<body>
        <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-navbarbg="skin6" data-theme="light" data-layout="vertical" data-sidebartype="full"
        data-boxed-layout="full">
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include("supervisor.navbar")
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-5 align-self-center">
                        <h4 class="page-title">Project List</h4>
                    </div>

                </div>
            </div>
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <div class="row">
                    <!-- column -->
                    <div class="col-12">
                        <div class="card">
                            <!-- <div class="card-body">
                                <h4 class="card-title">Latest Sales</h4>
                            </div> -->
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th class="border-top-0">Project Type</th>
                                            <th class="border-top-0">Title</th>
                                            <th class="border-top-0">Student</th>
                                            <th class="border-top-0">Supervisor</th>
                                            <th class="border-top-0">Examiner</th>
                                            <th class="border-top-0">Examiner</th>
                                            <th class="border-top-0">Start Date</th>
                                            <th class="border-top-0">End Date</th>
                                            <th class="border-top-0">Duration</th>
                                            <th class="border-top-0">Progress</th>
                                            <!-- <th class="border-top-0">Status</th> -->
                                            <th class="border-top-0">Operations</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($list as $x)
                                        <tr>
                                            <td class="txt-oflo">{{$x['projecttype']}}</td>
                                            <td class="txt-oflo">{{$x['title']}}</td>
                                            <td class="txt-oflo">{{$x['student']}}</td>
                                            <td class="txt-oflo">{{$x['supervisor']}}</td>
                                            <td class="txt-oflo">{{$x['examiner1']}}</td>
                                            <td class="txt-oflo">{{$x['examiner2']}}</td>
                                            <td class="txt-oflo">{{$x['startdate']}}</td>
                                            <td class="txt-oflo">{{$x['enddate']}}</td>
                                            <td class="txt-oflo">{{$x['duration']}} month</td>
                                            <td class="txt-oflo">{{$x['progress']}}</td>
                                            <!-- <td class="txt-oflo">{{$x['status']}}</td> -->
                                            <td><a href={{"upd/".$x['id']}}>Update</a></href>
                                            <!-- <td><span class="label label-success label-rounded"></span></td> -->
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
             
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <footer class="footer text-center">
                All Rights Reserved by Nice admin. Designed and Developed by
                <a href="https://www.wrappixel.com">WrapPixel</a>.
            </footer>
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="../../assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../../assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="../../dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="../../dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../../dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <!--chartis chart-->
    <script src="../../assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="../../assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="../../dist/js/pages/dashboards/dashboard1.js"></script>
</body>
</html>