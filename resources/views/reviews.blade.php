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
                    <h3>JAMES MASAARA</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-2.png" alt="">
                <div class="content">
                <p>This is the best website to acquir a brand new car especially for beginners who might be ignorant when it come to this.
</p>
                    <h3>DAVID MUGO</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-3.png" alt="">
                <div class="content">
                    <p>A was able to purchase my first dream car from this site and I 
                        received te best customer care services that i really appreciate.this the best site to get a car</p>
                    <h3>John Kamau</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-4.png" alt="">
                <div class="content">
                    <p>This is the best website to acquir a brand new car especially for beginners who might be ignorant when it come to this.
</p>
                    <h3>DAVID MUGO</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-5.png" alt="">
                <div class="content">
                    <p>I do not have a single of regret  after purshaching my gilfrend a car from urban cars .Urban car continue with the quality service and cars that you offeR</p>
                    <h3>JOSEPH NJENGA</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="assets/image/pic-6.png" alt="">
                <div class="content">
                <p>This is the best website to acquir a brand new car especially for beginners who might be ignorant when it come to this.
</p>
                    <h3>LYDIA LEMARIMBE</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
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
                         <div class="mb-3">
                                <label  class="form-label">YOUR Name</label>
                                <input type="text" name="reviewName" class="form-control" id="carName" placeholder="Enter your name">
                              </div> 
                              <label  class="form-label">YOUR Email</label>
                                <input type="text" name="reviewemail" class="form-control" id="carName" placeholder="Enter your Email">
                              </div> 
                              <label  class="form-label">ADD REVIEW</label>
                              <textarea name="review" id="review" cols="30"c rows="10" class="form-control " placeholder="Add your review here----" ></textarea>
                              </div> 
                         </div>
                         <div class="modal-footer">
                          <a class=" btn btn-danger"  href="">SUBMIT</a>        
                          <a href="" class=" btn btn-primary" >CANCEL</a>        
                         </div>
                       </div>
                     </div>
                   </div>
    </div>
</div>

</section>
@include('includes.footer')
