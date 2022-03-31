@include('includes.header')
<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">
            
                @foreach($reviews as $review)
                <div class="swiper-slide box">
                   
                    <div class="content">
                    <p>{{$review->review}}</p>
                        <h3>{{$review->username}}</h3>
                    </div>
                </div>
                @endforeach
    

           

        </div>

        <div class="swiper-pagination"></div>

    </div>
    <div>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal1">
        ADD REVIEW HERE
      </button>
      <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
        <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header" style="postion:relative">
                        <h3> PLEASE FILL THIS FORM TO SUBMIT YOUR REVIEW<h3> 

        <button type="button" class="close btn"  data-dismiss="modal" aria-label="Close">
                                         <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                         <div class="modal-body">
                             <h4 id="reviewResp" style="display:none"></h4>
                        <!-- Review submission handled via javascript -->
                         <form id="reviewForm" method="POST" action="{{url('/reviews/add')}}" class="mb-3" enctype="multipart/form-data">
                             @csrf
                                <div class="form-group">
                                    <label  class="form-label">Your Name</label>
                                    <input type="text" name="name" class="form-control" id="carName" value="{{session()->has('user')?session('user')->username:'' }}" placeholder="Enter your name">
                                </div> 
                                <div class="form-group">
                                    <label  class="form-label">Your Email</label>
                                    <input type="text" name="email" class="form-control" id="carName" value="{{ session()->has('user')?session('user')->email:''}}" placeholder="Enter your Email">
                                </div> 
                                <div class="form-group">
                                 <label  class="form-label">Your Review</label>
                                 <textarea name="review" id="review" cols="20" rows="5" class="form-control " placeholder="Add your review here...." ></textarea>
                              </div>
                              <div class="form-group">
                                <a href="#" class="btn btn-warning" class="close" data-dismiss="modal" >CANCEL <i class="fa fa-window-close"></i></a>   
                                <button class=" btn btn-warning float-right" name="submit" type="submit">SUBMIT</button>        
                            </div>
                            </form>
                       </div>
                     </div>
                   </div>
    </div>
</div>

</section>
@include('includes.footer')
