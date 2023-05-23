<x-layout>

  @if (session()->has('message'))
    
    <div class="alert alert-success">

        {{ session('message') }}

    </div>
       
  @endif

<div>                                                                                  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <h1>Registrati</h1>

            </div>
        </div>
    </div>
</div>

<div>                                                                                  
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">

                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="exampleInputName" class="form-label">Nome</label>
                        <input type="name" name="name" class="form-control" id="exampleInputName" aria-describedby="nameHelp">
                      </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail" class="form-label">Email</label>
                      <input type="email" name="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="exampleInputPassword">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPasswordConfirmation" class="form-label">Conferma Password</label>
                        <input type="password" name="password_confirmation" class="form-control" id="exampleInputPasswordConfirmation">
                      </div>
                    <div class="mb-3 form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Ricordami</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Registrati</button>
                  </form>

            </div>
        </div>
    </div>
</div>

</x-layout>