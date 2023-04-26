<x-layout>
 
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">

                <h1>TUTTI I PIATTI</h1>


            </div>
        </div>
    </div>


   {{-- @foreach($products as $product) --}}

    <div class="card" style="width: 18rem;">
        <img src="https://picsum.photos/200/300?random={{$product->id}}" class="card-img-top" alt="...">
        <div class="card-body">

          <h5 class="card-title">{{$roduct->name}}</h5>
          <p class="card-text">{{$product->description}}</p>

          <a href="#" class="btn btn-primary">Dettaglio</a>

        </div>
    </div>

   {{-- @endforeach --}}


</x-layout>