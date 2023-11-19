<!DOCTYPE html>
<html lang="en">
  <head>
    <base href="/public">
    @include('admin.css')
    <style>
        .div_center{
            text-align: center;
            font-size: 25px;
            
        }
        .div_center h2 {
            margin: 30px;

        }
        .name {
            color: #000;
            margin: 10px auto ;
            display: block;
        }
        table{
            margin: 10px auto ;
           

        }
        .test{
            width: 400px;
            margin: 15px auto;
            border-radius: 20%;
            color: #000;
        }
    </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
    <!-- container-scroller -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="div_center">
                <h2>Update User</h2>
                <form action="{{ route('storeUser',$user->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    {{--  name	email --}}

                    <div class="form-group">
                        <input type="text" name="name" class="test form-control"  value={{ $user->name }}>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="test form-control" value={{ $user->email }}>
                    </div>

                    <input class="btn btn-primary" style="font-size:20px" value="update User" type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>