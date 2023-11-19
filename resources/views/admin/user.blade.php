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
            margin: 10px auto;
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
                <h2>Show User</h2>
            </div>
            <table class="table">
                <thead class="thead-dark">
                  <tr>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($users as $user)
                  <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                     
                      @if ($user->usertype == 0)
                        <a href="{{ route('deleteUser',$user->id) }}" class="btn btn-danger">delete</a>
                        <a href="{{ route('updateUser',$user->id) }}" class="btn btn-primary">update</a>
                      @else
                        <p style="">Not allowed</p>  
                      @endif
                     
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