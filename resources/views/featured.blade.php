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
       <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
         <div class="modal-dialog" role="document">
              <div class="modal-content">
                   <div class="modal-header bg-warning" style="postion:relative">
                          <h1>MORE CAR INFORMATION
                          </h1>
                          <button type="button" class="btn-close  btn" data-bs-dismiss="modal" aria-label="Close">close</button>
                    </div>
                         <div class="modal-body">
                    <div class="card">   
                                
                    <div class="swiper-slide box">
                    @if($offer->images()->exists())
                      @foreach($offer->images as $image)
                        <img src="/img/{{$image->url}}" alt="">
                      @endforeach
                   @endif
                 <div class="content"><h2>
                 <div class="price"> <span  class="text-warning">CAR MODEL : </span>{{$offer->model}}</div>
                   <div class="price"> <span class="text-warning" >CAR ID :  </span>{{$offer->id}} </div>
                   <div class="price"> <span class="text-warning" >TYPE:  </span>{{$offer->type}} </div>
                   <div class="price"> <span class="text-warning" >NAME:  </span>{{$offer->name}} </div>
                  </h2>
                  
                </div> 
                                   
                   <h2>  <div class="price"> <span  class="text-warning">price :ksh </span>{{$offer->price}}</div>
    
                   
                       <p>
                   <span class="fas fa-circle"></span  class="text-warning"> {{$offer->color}}  </p>
                        <textarea name="desription" id="" cols="30" rows="5">
                        {{$offer->description}}
                        </textarea>
                       </h2>  
                                    
                 </div>
                 
             </div>
                     </div>
                         <div class="modal-footer">
                          <a href="#" class="btn btn-secondary close" data-dismiss="modal">CANCEL</a>       
                         </div>
                       </div>
                     </div>
       @endforeach
       <div class="swiper-pagination"></div>

    </div>
    

                      

</section>


@include('includes.footer')