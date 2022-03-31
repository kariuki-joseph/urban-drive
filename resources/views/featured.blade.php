@include('includes.header')
<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

    <div class="swiper featured-slider">
    @foreach ($offers as $offer)
       <div class="swiper-wrapper">
  
            <div class="swiper-slide box">
                <img src="{{ '/img/'.$offer->images[0]->url }}" alt="">
                <div class="content">
                <h3>{{$offer->car->model}}</h3>
                <h3>Car Id: {{$offer->car->id}}</h3>

               <div class="price text-danger" style="text-decoration:line-through">Ksh  {{$offer->car->price}}</div>
               <div class="price">Ksh {{$offer->new_price}}</div>
               <button type="button" data-info="{{ $offer }}" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal" onclick="viewCarOfferInfo(this.getAttribute('data-info'))"> VIEW CAR INFO</button>
                </div>
            </div>

       </div>
       @endforeach
       <div class="swiper-pagination"></div>

    </div>
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning" style="postion:relative">
                    <h1>BOOK A CAR NOW</h1>
                    <button class="btn btn-warning" data-bs-dismiss="modal">Close &times;</button>
                </div>
                <div class="modal-body">
                    <!-- Content added via javascript -->car->
                </div> 
                <div class="modal-footer">
                    
                </div>             
            </div>
        </div>
</div>
                      

</section>


@include('includes.footer')