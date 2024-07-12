<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
  </head>
  <body>
    <header class="header">   
        @include('admin.header')
        <style>
            .div_center{
                text-align: center;
                margin: auto;
            }
            .cat_lable{
                font-size: 30px ;
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
        <h1 class="cat_label">Add Category</h1>
          <form action="{{url('add_category')}}" method="post">
        @csrf
          <span style="padding-right:15px;">
            <label for="">Category Name</label>
            <input type="text" name= "category" require>
            </span>

            <input type="submit" class="btn btn-outline-primary" value="Add Category">
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