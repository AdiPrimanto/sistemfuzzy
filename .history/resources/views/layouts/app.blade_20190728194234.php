<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Kinerja Akademik Dosen</title>
    <link rel="icon" href="frontend/img/akakom.png">
    <!-- Bootstrap core CSS-->
    <link href="{{asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    {{-- <link href="{{secure_asset('backend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"> --}}
    <!-- Custom fonts for this template-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="{{secure_asset('backend/vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="{{secure_asset('backend/css/sb-admin.css')}}" rel="stylesheet">
</head>

<body class="fixed-nav sticky-footer bg-dark" id="page-top">
    @include('layouts.partial.navbar')
    <div class="content-wrapper">
        @yield('content')
        <!-- /.container-fluid-->
        @include('layouts.partial.footer')
        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fa fa-angle-up"></i>
        </a>


        @include('layouts.partial.header')


        <!-- Bootstrap core JavaScript-->
        <script src="{{secure_asset('backend/vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{secure_asset('backend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
        <!-- Core plugin JavaScript-->
        <script src="{{secure_asset('backend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
        <!-- Page level plugin JavaScript-->
        <script src="{{secure_asset('backend/vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{secure_asset('backend/vendor/datatables/jquery.dataTables.js')}}"></script>
        <script src="{{secure_asset('backend/vendor/datatables/dataTables.bootstrap4.js')}}"></script>
        <!-- Custom scripts for all pages-->
        <script src="{{secure_asset('backend/js/sb-admin.min.js')}}"></script>
        <!-- Custom scripts for this page-->
        <script src="{{secure_asset('backend/js/sb-admin-datatables.min.js')}}"></script>
        <script src="{{secure_asset('backend/js/sb-admin-charts.min.js')}}"></script>
    </div>
</body>

</html>
