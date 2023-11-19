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
                <h2>Show menu</h2>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">title</th>
                    <th scope="col">price</th>
                    <th scope="col">description</th>
                    <th scope="col">image</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>  
                  @foreach ($foods as $food)
                  <tr>
                    <td>{{ $food->title }}</td>
                    <td>{{ $food->price }}</td>
                    <td>{{ $food->description }}</td>
                    <td><img src="foodimage/{{$food->image }}"  width="200px" height="200px" alt="image"></td>
                    <td>
                      <a href="{{ route('deleteFood',$food->id) }}" class="btn btn-danger">delete</a>
                      <a href="{{ route('updateFood',$food->id) }}" class="btn btn-primary">update</a>
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