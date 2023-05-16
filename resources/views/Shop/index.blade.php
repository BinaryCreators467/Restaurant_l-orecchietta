<x-layout>

    @if (session()->has('message'))
    
    <div class="alert alert-success">

        {{ session('message') }}

    </div>
       
@endif

<div class="container-fluid">
<div class="row my-4">
    <div class="col-12 d-flex justify-content-center">

        <h1>TUTTI GLI SPONSOR</h1>

    </div> 
</div>
</div>

<div class="container nome">
<div class="row justify-content-center">

     @foreach($shops as $shop)

    <div class="col-12 col-md-4 d-flex justify-content-center">

        <div class="card mt-5" style="width: 18rem;">
            @if($shop->image)
            <img src="{{Storage::url($shop->image)}}" class="card-img-top" alt="{{$shop->name}}">
            @else  {{-- SE L'IMMAGINE NON è PRESENTE INSERISCI L'IMMAGINE DI DEFAULT--}}
                <img src="storage/image/default.jpg" class="card-img-top" alt="...">
            @endif
        <div class="card-body">

        <h5 class="card-title">{{$shop->name}}</h5>
        <p class="card-text">{{$shop->description}}</p>
        <p class="card-text">{{$shop->city}}</p>

        <a href="{{route('showShop', compact('shop'))}}" class="btn btn-primary">Dettaglio</a>

        <a href="{{route('editShop', compact('shop'))}}" class="btn btn-primary">Modifica</a>

        <a href="" onclick="event.preventDefault(); document.querySelector('#form-delete-{{$shop->id}}').submit();" class="btn btn-primary">Elimina</a>
        <form id="form-delete-{{$shop->id}}" method="POST" action="{{route('deleteShop', compact('shop'))}}">
            @method('delete')
            @csrf
        </form>

        </div>
        </div>

    </div>
    @endforeach
</div>
</div>
</x-layout>