<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <style>
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 50px;
            border: 1px solid white;
        }

        .center th {
            background-color: skyblue;
            padding: 10px;
        }

        .center tr {
            border: 1px solid white;
            padding: 10px;
        }
    </style>
</head>

<body>
    <header class="header">
        @include('admin.header')
        <style>
            .div_center {
                text-align: center;
                margin: auto;
            }

            .cat_lable {
                font-size: 30px;
                font-weight: bold;
                padding: 30px;
                color: white
            }
        </style>
    </header>
    <div class="d-flex align-items-stretch">

        @include('admin.sidebar')
        <div class="page-content">
            <div class="page-header">
                <div class="container-fluid">
                    <div class="div_center">
                        <div>
                            @if(session()->has('message'))
                                <div class="alert alert-success">
                                    {{session()->get('message')}}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>

                            @endif
                        </div>
                        <h1 class="cat_label">Add Category</h1>
                        <form action="{{url('add_category')}}" method="post">
                            @csrf
                            <span style="padding-right:15px;">
                                <label for="">Category Name</label>
                                <input type="text" name="category" require>
                            </span>

                            <input type="submit" class="btn btn-outline-primary" value="Add Category">
                        </form>

                        <div>
                            <table class="center">
                                <tr>
                                    <th>Category Name</th>
                                    <th>Action</th>
                                </tr>
                                @foreach ($data as $data)
                                    <tr>
                                        <td>{{$data->cat_title}}</td>
                                        <td><a onclick="confirmation(event)" href="{{url('cat_delete', $data->id)}}"
                                                class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('admin.footer')
    </div>

    <!-- JavaScript files-->
    <script type="text/javaScript">
        function confirmation(ev) { 
                ev.preventDefault(); 
                var urlToRedirect = ev.currentTarget.getAttribute('href'); 
                console.log(urlToRedirect); 
                swal({ 
                title: "Are you sure to Delete this", 
                text: "You will not be able to revert this!", 
                icon: "warning",
                buttons: true, 
                dangerMode: true, 
                })
            .then((willCancel) => { 
                if (willCancel) { 
                window.location.href= urlToRedirect; 
                }
            });
            }
     </script>
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