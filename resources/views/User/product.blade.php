<div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.html">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
         
          @foreach($data as $product)

          <div class="col-md-4">
            <div class="product-item"> 
              <a href="#"><img height="330" width="10" src="/productimage/{{$product->image}}" alt=""></a>
              <div class="down-content">
                <a href="#"><h4>{{$product->title}}</h4></a>
                <h6>${{$product->price}}</h6>
                <p>{{$product->description}}</p>

                <form action="{{url('addcart',$product->id)}}" method="POST">
                  @csrf

                  <input type="number" value="1" min="1" class="form-control" name="quantity" style="width:100px;"><br>
                  
                  <input class="btn btn-primary" type="submit" value="Add Cart" style="color:black;" >
                </form>
                
              </div>
            </div>
          </div>

          @endforeach


          <div class="d-flex justify-content-center">

          {!! $data->links() !!}

          </div>

        </div>
      </div>
    </div>