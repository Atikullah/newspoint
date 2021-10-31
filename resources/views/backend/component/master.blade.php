<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Newspoint24</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="{{asset("css/app.css")}}">
    {{--data table css--}}


{{--    <link rel="stylesheet" href="{{asset('backend/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">--}}
{{--    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">--}}

{{--     radio button css--}}
    <link rel="stylesheet" href="{{asset('backend/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('backend/plugins/jqvmap/jqvmap.min.css')}}">





</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper" id="content">

    <!-- Navbar -->
@include('backend.component.top')
@include('backend.component.side')

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">

                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
{{--                            <li class="breadcrumb-item"><a href="#">Home</a></li>--}}
{{--                            <li class="breadcrumb-item active">Dashboard v1</li>--}}
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
{{--        <div style="margin-left: 15px;"><home></home></div>--}}
        <section class="content">
          <router-view> </router-view>

        </section>
        <!-- /.content-header -->

        <!-- Main content -->



    </div>



</div>

c

{{--data pagination & search table js--}}
{{--<script src="{{asset('backend/plugins/datatables/jquery.dataTables.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>--}}
{{--<script src="{{asset('backend/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>--}}


</script>



{{--<script>--}}
{{--    $(function () {--}}
{{--        $("#example1").DataTable({--}}
{{--            "responsive": true,--}}
{{--            "autoWidth": false,--}}
{{--        });--}}
{{--        $('#example2').DataTable({--}}
{{--            "paging": true,--}}
{{--            "lengthChange": false,--}}
{{--            "searching": false,--}}
{{--            "ordering": true,--}}
{{--            "info": true,--}}
{{--            "autoWidth": false,--}}
{{--            "responsive": true,--}}
{{--        });--}}
{{--    });--}}

{{--</script>--}}


</body>
</html>
<script>
    import ExampleComponent from "../../../js/components/ExampleComponent";
    import Home from "../../../js/components/backend/home";
    export default {
        components: {Home,ExampleComponent}
    }
</script>
