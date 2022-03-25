
@include('includes.header')


<section class="vehicles" id="vehicles">
   
    <h1 class="heading mt-3"> AVAILABLE <span>VEHICLES</span> </h1>
    <div class="row my-3">
    <div class="container">
<div class="form-inline" >
  <select name="model" class="form-control form-control-lg"  placeholder="Model" required>
    @foreach ($models as $model)
    <option value="2">{{$model->model}}</option>
    @endforeach
    </select>

   <select name="type" class="form-control form-control-lg" placeholder="TYPE" required>
     @foreach ($types as $type)
    <option value="2">{{$type->types}}</option>
    @endforeach
  </select>
   <select name="color" class="form-control form-control-lg"  placeholder="COLOR" required>
   @foreach ($colors as $color)
    <option value="2">{{$color->colors}}</option>
    @endforeach
  </select>
  <button type="submit" class="input-group-text btn btn-warning"><i class="bi bi-search me-2"></i> Search for Vehicle</button>
</div> 
        </form>
    </div>
    </div>
    <div class="swiper vehicles-slider">

        <div class="swiper-wrapper">
     @foreach ($cars as $car)
    
            <div class="swiper-slide box">
                <img src="/img/{{$car->images[0]->url}}" alt="">
                <div class="content">
                    <h3> {{$car->model}}</h3>
                    <div class="price"> <span>price :ksh </span>{{$car->price}}</div>
                    <div class="price"> <span>CAR ID :  </span>{{$car->id}} </div>
                   
                    <button type="button" class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#myModal"> VIEW CAR INFO</button>
                </div>
            </div>
            @endforeach

            

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
<section>
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
                 <img src="/img/{{$car->images[0]->url}}" alt="">
                 <div class="content"><h2>
                 <div class="price"> <span  class="text-warning">CAR MODEL : </span>{{$car->model}}</div>
                   <div class="price"> <span class="text-warning" >CAR ID :  </span>{{$car->id}} </div>
                   <div class="price"> <span class="text-warning" >TYPE:  </span>{{$car->type}} </div>
                   <div class="price"> <span class="text-warning" >NAME:  </span>{{$car->name}} </div>
                  </h2>
                  
                </div> 
                                   
                   <h2>  <div class="price"> <span  class="text-warning">price :ksh </span>{{$car->price}}</div>
    
                   
                       <p>
                   <span class="fas fa-circle"></span  class="text-warning"> {{$car->color}}  </p>
                        <textarea name="desription" id="" cols="30" rows="5">
                        {{$car->description}}
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
</section>
@include('includes.footer')