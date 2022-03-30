@include('includes.header')
<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="assets/image/pic-1.png" alt="">
                <div class="content">
                <p>A was able to purchase my first dream car from this site and I 
                        received te best customer care services that i really appreciate.this the best site to get a car</p>
                    <h3>JAMES MASARA</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-2.png" alt="">
                <div class="content">
                <p>This is the best website to acquir a brand new car especially for beginners who might be ignorant when it come to this.
</p>
                    <h3>DAVID MUGO</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-3.png" alt="">
                <div class="content">
                    <p>A was able to purchase my first dream car from this site and I 
                        received te best customer care services that i really appreciate.this the best site to get a car</p>
                    <h3>John Kamau</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-4.png" alt="">
                <div class="content">
                    <p>This is the best website to acquir a brand new car especially for beginners who might be ignorant when it come to this.
</p>
                    <h3>DAVID MUGO</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-5.png" alt="">
                <div class="content">
                    <p>I do not have a single of regret  after purshaching my gilfrend a car from urban cars .Urban car continue with the quality service and cars that you offeR</p>
                    <h3>JOSEPH NJENGA</h3>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-6.png" alt="">
                <div class="content">
                <p>This is the best website to acquir a brand new car especially for beginners who might be ignorant when it come to this.
</p>
                    <h3>LYDIA LEMARIMBE</h3>
                </div>
            </div>

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
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position:absolute; right:10px; top:5px">
                             <span aria-hidden="true">&times;</span>
                           </button>
                        </div>
                         <div class="modal-body">
                             <h4 id="reviewResp" style="display:none"></h4>
                        <!-- Review submission handled via javascript -->
                         <form id="reviewForm" method="POST" action="/reviews" class="mb-3">
                             @csrf
                                <div class="form-group">
                                    <label  class="form-label">Your Name</label>
                                    <input type="text" name="username" class="form-control" id="carName" value="{{session()->has('user')?session('user')->username:'' }}" placeholder="Enter your name" required>
                                </div> 
                                <div class="form-group">
                                    <label  class="form-label">Your Email</label>
                                    <input type="text" name="email" class="form-control" id="carName" value="{{ session()->has('user')?session('user')->email:''}}" placeholder="Enter your Email" required>
                                </div> 
                                <div class="form-group">
                                 <label  class="form-label">Your Review</label>
                                 <textarea name="review" id="review" cols="20" rows="5" class="form-control " placeholder="Add your review here...." reduired></textarea>
                              </div>
                              <div class="form-group">
                                <a href="#" class="btn btn-primary" class="close" data-dismiss="modal" onclick="(()=>$('#myModal1').modal('hide'))()">CANCEL <i class="fa fa-window-close"></i></a>   
                                <button class=" btn btn-danger float-right"  type="submit">SUBMIT <i class="fa fa-paper-plane"></i></button>        
                            </div>
                            </form>
                       </div>
                     </div>
                   </div>
    </div>
</div>

</section>
@include('includes.footer')
