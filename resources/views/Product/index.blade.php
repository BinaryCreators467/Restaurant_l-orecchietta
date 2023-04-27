<x-layout>
 
    <div class="container-fluid">
        <div class="row my-4">
            <div class="col-12 d-flex justify-content-center">

                <h1>TUTTI I PIATTI</h1>


            </div>
        </div>
    </div>


    <div class="container nome">
        <div class="row justify-content-center">

             @foreach($products as $product)

            <div class="col-12 col-md-4 d-flex justify-content-center">

                <div class="card mt-5" style="width: 18rem;">
                <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="image">
                <div class="card-body">

                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>

                <a href="#" class="btn btn-primary">Dettaglio</a>

                </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
   

</x-layout>