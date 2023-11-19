<!DOCTYPE html>
<html lang="en">
  <head>
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
                <h2>Add chef</h2>
                <form action="{{ route('Addchef') }}" method="post" enctype="multipart/form-data">

                    @csrf
                    {{-- // 	title	price	image	description --}}

                    <div class="form-group">
                        <input type="text" name="name" class="test form-control"  placeholder="name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="speciality" class="test form-control" placeholder="speciality">
                    </div>
                    <div class="form-group">
                        <input type="file" name="image" class="test form-control">
                    </div>
                    <input class="btn btn-primary" style="font-size:20px" value="Add chef" type="submit" name="submit">
                </form>
            </div>
            <div class="div_center">
                <h2>Show chefs</h2>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">name</th>
                    <th scope="col">speciality</th>
                    <th scope="col">image</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>   
                  @foreach ($chefs as $chef)
                  <tr>
                    <td>{{ $chef->name }}</td>
                    <td>{{ $chef->speciality}}</td>
                    <td>
                        <img src="foodimage/{{ $chef->image }}" alt="{{ $chef->name }}">
                    </td>
                    <td>
                      <a href="{{ route('deleteChef',$chef->id) }}" class="btn btn-danger">delete</a>
                    </td>
                  </tr>
                  @endforeach
                  
                </tbody>
              </table>
        </div>
    </div>

    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>