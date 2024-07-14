<!DOCTYPE html>
<html>

<head>
    @include('admin.css')
    <style>
        .div_center {
            text-align: center;
            margin: auto;
        }

        .title_deg {
            color: white;
            font-size: 30px;
            padding: 35px;
            font-weight: bold;
        }

        .div_center label {
            display: inline-block;
            width: 200px;
        }

        .div_center div {
            padding: 15px 0;
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
                    <div class="div_center">
                        <h1 class="title_deg">Add Book</h1>
                        <form action="{{url('store_book')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div>
                                <label for="">Book Title</label>
                                <input type="text" name="book_name">
                            </div>
                            <div>
                                <label for="">Auther Name</label>
                                <input type="text" name="auther_name">
                            </div>
                            <div>
                                <label for="">Book Price</label>
                                <input type="text" name="price">
                            </div>
                            <div>
                                <label for="">Quantity</label>
                                <input type="number" name="quantity">
                            </div>
                            <div>
                                <label for="">Book Description</label>
                                <textarea name="description" id=""></textarea>
                            </div>
                            <div>
                                <label for="">Category</label>
                                <select name="category" required>
                                    <option>Select a Category</option>
                                    @foreach ($data as $data)
                                        <option value="{{$data->id}}">{{$data->cat_title}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label for="">Book Image</label>
                                <input type="file" name="book_img">
                            </div>
                            <div>
                                <label for="">Auther Image</label>
                                <input type="file" name="auther_img">
                            </div>

                            <div>
                                <input type="submit" class="btn btn-outline-info" value="Add Book">
                            </div>


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