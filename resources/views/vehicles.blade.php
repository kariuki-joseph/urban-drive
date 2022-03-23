@include('includes.header')
<section class="vehicles" id="vehicles">
   
    <h1 class="heading mt-3"> AVAILABLE <span>VEHICLES</span> </h1>
    <div class="row my-3">
    <div class="container">
<div class="form-inline search-form" >
  <select name="Guests" class="form-control form-control-lg"  placeholder="Model" required>
    <option value="1">Toyota</option>
    <option value="2">Mercedez</option>
    <option value="3">Lamboghirni</option>
    <option value="4">Mazda</option>
    <option value="5">BMWW</option>
   
 </select>

   <select name="From" class="form-control form-control-lg" placeholder="TYPE" required>
    <option value="Dallas">Dallas</option>
    <option value="San Diego">San Diego</option>
    <option value="Florida">Florida</option>
    <option value="New York">New York</option>
	<option value="Los Angeles">Los Angeles</option>
	<option value="Chicago">Chicago</option>
  </select>
   <select name="To" class="form-control form-control-lg"  placeholder="COLOR" required>
    <option value="Chicago">Chicago</option>
    <option value="Raleigh">Raleigh</option>
    <option value="Atlanta">Atlanta</option>
    <option value="Austin">Austin</option>
	<option value="Los Angeles">Los Angeles</option>
	<option value="Dallas">Dallas</option>
	<option value="New York">New York</option>

  </select>
  <button type="submit" class="input-group-text btn btn-success"><i class="bi bi-search me-2"></i> Search for Vehicle</button>
</div> 
        </form>
    </div>
    </div>
    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-1.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> ksh 852,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-2.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> ksh 1,000,000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-3.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> Ksh. 1200,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-4.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> Ksh. 900,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-5.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> Ksh. 3,500,000/- </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

            <div class="swiper-slide box">
                <img src="/assets/image/vehicle-6.png" alt="">
                <div class="content">
                    <h3>new model</h3>
                    <div class="price"> <span>price : </span> Ksh. 950,000 </div>
                    <p>
                        new
                        <span class="fas fa-circle"></span> 2021
                        <span class="fas fa-circle"></span> automatic
                        <span class="fas fa-circle"></span> petrol
                        <span class="fas fa-circle"></span> 183mph
                    </p>
                    <a href="#" class="btn">check out</a>
                </div>
            </div>

        </div>

        <div class="swiper-pagination"></div>

    </div>
    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal1">
        BOOK A CAR HERE
      </button>
      </tr>
                <div class="modal fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModal1" aria-hidden="true">
                     <div class="modal-dialog" role="document">
                       <div class="modal-content">
                         <div class="modal-header" style="postion:relative">
                            <h1>BOOK A CAR HERE</h1>
                        </div>
                         <div class="modal-body">
                         <form action="" method="#">
                         <div class="mb-3">
                                <label class="form-label">Car ID</label>
                                <input type="text" name="carModel" class="form-control" id="carModel" placeholder="Enter Car Id">
                              </div>
                         <div class="mb-3">
                                <label class="form-label">Car Model</label>
                                <input type="text" name="carModel" class="form-control" id="carModel" placeholder="Enter Car Model">
                              </div>
                              <div class="mb-3">
                                <label  class="form-label">Car Name</label>
                                <input type="text" name="carName" class="form-control" id="carName" placeholder="Enter car name">
                              </div>              
                            </form>
                         </div>
                         <div class="modal-footer">
                         <button type="submit" class="btn btn-primary " name="save">BOOK <i class="fa fa-paper-plane"></i></button>
                         <button type="submit" class="btn btn-secondary">CANCEL</button>      
                         </div>
                       </div>
                     </div>

</section>
@include('includes.footer')
