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
                <h2>update food</h2>
                <form action="{{ route('UploadUpdateFood',$food->id) }}" method="post" enctype="multipart/form-data">

                    @csrf
                    {{-- // 	title	price	image	description --}}

                    <div class="form-group">
                        <input type="text" name="title" class="test form-control" value="{{ $food->title }}">
                    </div>
                    <div class="form-group">
                        <input type="text" name="description" class="test form-control" value="{{ $food->description }}">
                    </div>
                    <div class="form-group">
                        <input type="number" name="price" class="test form-control" min="0" value="{{ $food->price }}">
                    </div>
                    <div class="form-group">
                        <img src="foodimage/{{ $food->image }}" style=" 
                            width: 200px;
                            height: 200px;
                            margin: 15px auto;
                            border-radius: 15%;
                            padding: 5px;
                            border: 2px solid #fff;" 
                        alt="">
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="test form-control">
                    </div>
                    <input class="btn btn-primary" style="font-size:20px" value="Add Food" type="submit" name="submit">
                </form>
            </div>
        </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>