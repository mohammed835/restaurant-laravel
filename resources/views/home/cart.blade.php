<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
    
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <style>
        .form-group{
            width: 500px;
            text-align: center;
            margin: 30px auto;
            border: 2px solid #ccc;
        }
    </style>

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                        <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                        <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                        <li class="scroll-to-section"><a href="{{ route('showCart') }}">cart</a></li> 
                        <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                        <li class="submenu">
                            <a href="javascript:;">Features</a>
                            <ul>
                                <li><a href="#">Features Page 1</a></li>
                                <li><a href="#">Features Page 2</a></li>
                                <li><a href="#">Features Page 3</a></li>
                                <li><a href="#">Features Page 4</a></li>
                            </ul>
                        </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            @if (Route::has('login'))
                                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                                    @auth
                                    <li>
                                        <x-app-layout></x-app-layout>
                                    </li>
                                   
                                                                        @else
                                      <li> <a href="{{ route('login') }}" class="font-semibold text-gray-700 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li> 
                
                                        @if (Route::has('register'))
                                           <li> <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-700 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

  

    <!-- ***** Main Banner Area Start ***** -->
    <div id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4">
                    <div class="left-content">
                        <div class="inner-content">
                            <h4>KlassyCafe</h4>
                            <h6>THE BEST EXPERIENCE</h6>
                            <div class="main-white-button scroll-to-section">
                                <a href="#reservation">Make A Reservation</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="main-banner header-text">
                        <div class="Modern-Slider">
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-01.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-02.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                          <!-- Item -->
                          <div class="item">
                            <div class="img-fill">
                                <img src="assets/images/slide-03.jpg" alt="">
                            </div>
                          </div>
                          <!-- // Item -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    {{-- start contant  --}}
    <table class="table"  style 
    =
          " padding: 10px;
            margin: 30px auto;
            width: 900px;
            text-align: center;
            text-transform: capitalize;
            border: 5px solid #ccc;"
    >
        <thead class="thead-dark">
          <tr>
            <th scope="col">title</th>
            <th scope="col">price </th>
            <th scope="col">quantity </th>
            <th scope="col">image </th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>  
            {{-- title price image description quantity  --}}
          @foreach ($data as $d)
          <tr>
            <form action="{{ route('orderConfirm') }}" method="post">
            <td>{{ $d->title }}
                <div class="form-group" style="width: 50px">
                    <input type="text" name="foodname[]" class="test form-control" value="{{ $d->title }}" hidden>
                </div>
            </td>
            <td>{{ $d->price }}
                <div class="form-group" style="width: 50px">
                    <input type="number" name="price[]" class="test form-control" value="{{ $d->price }}" hidden>
                </div>
            </td>
            <td>{{ $d->quantity }}
                <div class="form-group" style="width: 50px">
                    <input type="number" name="quantity[]" class="test form-control" min="0" value="{{ $d->quantity }}" hidden>
                </div>
            </td>

            <td>
                <img src="foodimage/{{ $d->image }}" height="30px" width="150px" alt="">
            </td>
           
           
          </tr>
          @endforeach 
          @foreach ($data2 as $data)
          <td>
            <a href="{{ route('deleteCart',$data->id) }}" class="btn btn-danger">delete</a>
        </td>
              
          @endforeach
        </tbody>
      </table>
      <div style="text-align: center; padding:15px;">
        <p id="test" class="btn btn-primary" style="    cursor: pointer;">Order Now</p>
      </div>

        @csrf

        <div class="contain" style="display: none">
            <div class="form-group">
                <input type="text" name="name" class="test form-control"  placeholder="name">
            </div>
            <div class="form-group">
                <input type="phone" name="phone" class="test form-control" placeholder="phone">
            </div>
            <div class="form-group">
                <input type="text" name="address" class="test form-control" min="0" placeholder=" address">
            </div>
            <input class="btn btn-primary" 
            style="
            font-size:20px;
            background: #3200cb;
            text-align: center;
            margin: 10px 650px;" value="Order Confirm" type="submit" name="submit">
        </div>
       
       
    </form>

    {{-- end contant --}}
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-xs-12">
                    <div class="right-text-content">
                            <ul class="social-icons">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="logo">
                        <a href="index.html"><img src="assets/images/white-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12">
                    <div class="left-text-content">
                        <p>© Copyright Klassy Cafe Co.
                        
                        <br>Design: Mo Safwat
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });
    </script>
    <script>
        $(function(){
            $('#test').on('click',function(){
                $('.contain').css('display','block');
            });
        });
    </script>
  </body>
</html>
