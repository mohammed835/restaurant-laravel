
<section class="section" id="menu">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="section-heading">
                    <h6>Our Menu</h6>
                    <h2>Our selection of cakes with quality taste</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="menu-item-carousel">
        <div class="col-lg-12">
            <div class="owl-menu-item owl-carousel">

               

                @foreach ($foods as $food)
                <form action="{{ route('addCart',$food->id) }}" method="Post">
                    @csrf
                    <div class="item" >
                        <div class='card card1' style="background-image: url('foodimage/{{ $food->image }}')">
                            <div class="price"><h6>{{ $food->price }}</h6></div>
                            <div class='info'>
                            <h1 class='title'>{{ $food->title }}</h1>
                            <p class='description'>{{ $food->description }}</p>
                            <div class="main-text-button">
                                <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                            </div>
                            </div>
                        </div>
                            <input  type="number" name='quantity' min="1" placeholder="quantity">
                            <input class="test"
                             style="
                                        background:#c95555; 
                                        color:#fff;
                                        padding:10px;
                                        margin:5px ;
                                        text-transform:capitalize"
                             type="submit" value="add To Cart" name="submit">
                        </div>
                    </form>
                @endforeach

            </div>
        </div>
    </div>
</section>