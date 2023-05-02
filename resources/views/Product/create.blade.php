
<x-layout>

    @if (session()->has('message'))
    
            <div class="alert alert-success">

                {{ session('message') }}

            </div>
               
    @endif
    
    <form method="POST" action="{{route('storeProduct')}}" class="formCustom p-5 shadow bg-danger" enctype="multipart/form-data" >

        @csrf
        
        <div class="mb-3">
            <label for="exampleInputName" class="form-label">Nome prodotto</label>
            <input name="name" type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
        </div>
        
        <div class="mb-3">
            <label for="exampleInputDescription" class="form-label">descizione</label>
            <textarea name="description" class="form-control" id="exampleInputDescription" cols="30" rows="10"></textarea>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPrice" class="form-label">Prezzo</label>
            <input name="price" type="text" class="form-control" id="exampleInputPrice">
        </div>
        
        <div>
        <label for="exampleInputImage" class="form-label">Immagine</label>
        <input name="image" type="file" class="form-control" id="exampleInputImage" aria-describedby="imageHelp" accept="image/jpg, image/bmp, image/png, image/webp">
        </div>

        <br>
        <button type="submit" class="btn btn-primary">Inserisci</button>
        
    </form>
    
</x-layout>