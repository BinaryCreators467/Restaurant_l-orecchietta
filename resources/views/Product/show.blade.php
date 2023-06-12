<x-layout>

    <div>                                                                                  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">

                    <h1>Dettaglio di {{$product->name}}</h1>
    
                </div>
            </div>
        </div>
    </div>

    <div>                                                                                  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">

                    <div class="card" style="width: 18rem;">
                        
                        {{-- <img src="..." class="card-img-top" alt="..."> --}}
                        <div class="card-body">
                          <h5 class="card-title">{{$product->name}}</h5>
                          <p class="card-text">{{$product->description}}</p>
                          <p class="card-text">{{$product->price}}</p>
                        
                          {{-- @dd($product->user->name) --}}
                          <p class="card-text">Inserito da: {{$product->user->name}}</p>

                          {{-- <p class="card-text">Sponsorizzato da: </p> --}}
                          {{-- <label for="shops">Sponsorizzato da: </label> --}}
                          {{-- @dd($product->shops) --}}
                          {{--@if(($product->shops) > 0) modo corretto per controllare se ci sono elementi nella collection--}}
                            {{-- @foreach ($product->shops as $shop)
                                <p>{{$shop->name}} ( {{$shop->city}} )</p>
                            @endforeach --}}
                        {{-- @endif --}}
                          

                        <a href="{{route('indexProduct')}}" class="btn btn-primary">Torna indietro</a>

                        </div>
                      </div>
    
                </div>
            </div>
        </div>
    </div>

</x-layout>