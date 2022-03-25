@include('includes.header')
<section class="featured" id="featured">

    <h1 class="heading"> <span>featured</span> cars </h1>

    <div class="swiper featured-slider">
    @foreach ($offers as $offer)
       <div class="swiper-wrapper">
  
            <div class="swiper-slide box">
                <img src="assets/image/car-4.png" alt="">
                <div class="content">
                <h3>{{$offer->model}}</h3>
                <h3>{{$offer->id}}</h3>
                <h3>{{$offer->name}}</h3>

               <div class="price">ksh : {{$offer->price}}</div>
               <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal"> VIEW CAR INFO</button>
                </div>
            </div>

       </div>
       @endforeach
       <div class="swiper-pagination"></div>

    </div>
    
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header bg-warning" style="postion:relative">
                            <h1>BOOK A CAR NOW
                            </h1>
                        </div>
                         <div class="modal-body">
                    <div class="card">                 
                    <div class="swiper-slide box">
                 <img src="/img/{{$offer->images[0]->url}}" alt="">
                 <div class="content">
                    <h2> {{$offer->model}}</h2>
                 <h2>   <div class="price"> <span>CAR ID :  </span>{{$offer->id}} </div></h2>
                  
                </div> 
                                   
                   <h2>  <div class="price"> <span>price :ksh </span>{{$offer  ->price}}</div>
    
                   
                       <p>
                   <span class="fas fa-circle"></span> {{$offer->color}}  </p>
                        <textarea name="" id="" cols="30" rows="3">
                        {{$offer   ->description}}
                        </textarea>
                       </h2>                      
                 </div>
             </div>
                      

</section>


@include('includes.footer')