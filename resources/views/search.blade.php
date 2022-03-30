
    
  
        @include('includes.header')
<section class="reviews" id="reviews">

    <h1 class="heading"> client's <span>review</span> </h1>

    <div class="swiper review-slider">

        <div class="swiper-wrapper">
            
         

        <div class="swiper-pagination"></div>

    </div>
    <div>
    <table class="table">
      
      <thead class="bg-warning">
        <tr>
          <th scope="col">Car ID</th>
          <th scope="col">Car model</th>
          <th scope="col">Car Name</th>
          <th scope="col">Car Color</th>
          <th scope="col">Car Type</th>
          <th scope="col">Image</th>
          <th scope="col">price</th>
        </tr>
      
      </thead>
      <tbody>
      @foreach ($results as $result)

        <tr>
          <td> {{$result->id}}</td>
          <td>{{$result->model}} </td>
          <td>{{$result->name}}</td>
          <td>{{$result->color}}</td>
          <td>{{$result->type}}</td>
          @if($result->images()->exists())
            @foreach($result->images as $image)
              <td><img src="/img/{{ $image->url }}" heigth="200px" width="100px" alt=""></td>
            @endforeach
          @else
          <td><img src="/img/{{ '/img/default.png' }}" heigth="200px" width="100px" alt=""></td>
          @endif
          <td>{{$result->price}}</td>
        </tr>
    
@endforeach
</form>
      
      <a href="{{url('/vehicles')}}" class="btn"> <i class="fas fa-arrow-right"></i>BOOK CAR </a>

      
                       

</section>

