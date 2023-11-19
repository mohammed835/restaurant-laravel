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
                <h2>Show Reservation</h2>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">phone</th>
                    <th scope="col">guest</th>
                    <th scope="col">data</th>
                    <th scope="col">time</th>
                    <th scope="col">message</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>   
                  @foreach ($Reservation as $R)
                  <tr>
                    <td>{{ $R->name }}</td>
                    <td>{{ $R->email }}</td>
                    <td>{{ $R->phone }}</td>
                    <td>{{ $R->guest }}</td>
                    <td>{{ $R->data }}</td>
                    <td>{{ $R->time }}</td>
                    <td>{{ $R->message }}</td>
                    <td>
                      <a href="{{ route('deleteReservation',$R->id) }}" class="btn btn-danger">delete</a>
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