<!DOCTYPE html>
<html>

<head>
    @include('admin.css')

    <style>
        .dev_dg {
            margin: auto;
            text-align: center;
        }

        .title_deg {
            color: white;
            padding: 40px;
            font-size: 30px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <header class="header">
        @include('admin.header')
    </header>
    <div class="d-flex align-items-stretch">

        @include('admin.sidebar')

        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="dev_dg">
                        <h2 class="title_deg">Update Category</h2>
                        <form action="{{url('update_category', $data->id)}}" method="POST" class="form">
                            @csrf
                            <label for="">Category Name</label>
                            <input type="text" name="cat_name" value="{{$data->cat_title}}">

                            <input type="submit" class="btn btn-outline-info" value="Update">
                        </form>
                    </div>
                </div>
            </div>
        </div>




        @include('admin.footer')
    </div>

    <!-- JavaScript files-->
    <script src="{{asset('admin/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/vendor/popper.js/umd/popper.min.js')}}"></script>
    <script src="{{asset('admin/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery.cookie/jquery.cookie.js')}}"></script>
    <script src="{{asset('admin/vendor/chart.js/Chart.min.js')}}"></script>
    <script src="{{asset('admin/vendor/jquery-validation/jquery.validate.min.js')}}"></script>
    <script src="{{asset('admin/js/charts-home.js')}}"></script>
    <script src="{{asset('admin/js/front.js')}}"></script>
</body>

</html>