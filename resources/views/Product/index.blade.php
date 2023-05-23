<x-layout>

    @if (session()->has('message'))
    
            <div class="alert alert-success">

                {{ session('message') }}

            </div>
               
    @endif

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
                    @if($product->image)
                    <img src="{{Storage::url($product->image)}}" class="card-img-top" alt="{{$product->name}}">
                    @else  {{-- SE L'IMMAGINE NON è PRESENTE INSERISCI L'IMMAGINE DI DEFAULT--}}
                        <img src="storage/image/default.jpg" class="card-img-top" alt="...">
                    @endif
                <div class="card-body">

                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">{{$product->description}}</p>
                <p class="card-text">{{$product->price}}</p>

                <a href="{{route('showProduct', compact('product'))}}" class="btn btn-primary">Dettaglio</a>

                @auth
            
                    @if($shop->user)

                         @if(Auth::user()->id == $shop->user->id)

                <a href="{{route('editProduct', compact('product'))}}" class="btn btn-primary">Modifica</a>

                <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$product->id}}').submit();" class="btn btn-primary">Elimina</a>
                <form id="form-delete-{{$product->id}}" method="POST" action="{{route('deleteProduct', compact('product'))}}">
                    @method('delete')
                    @csrf
                </form>

                        @endif

                    @endif

                @endauth

                </div>
                </div>

            </div>
            @endforeach
        </div>
    </div>
   
</x-layout>