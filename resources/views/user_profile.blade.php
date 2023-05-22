<x-layout>

    <div>                                                                                  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">

                    <h1 class="text-center">Profilo di {{Auth::user()->name}}</h1>
    
                </div>
            </div>
        </div>
    </div>


    <div>                                                                                  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">

                    <h1 class="text-center">I miei sponsor</h1>
    
                </div>
            </div>
        </div>
    </div>
    
    
    <div>                                                                                  
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-6">


                    <table class="table">
                        <thead>
                          <tr>
                            <th scope="col">#id</th>
                            <th scope="col">name</th>
                            <th scope="col">city</th>
                            <th scope="col">description</th>
                          </tr>
                        </thead>
                        
                        <tbody>

                        @foreach (Auth::user()->shops as $shop)
                                
                          <tr>
                            
                            <th>{{$shop->id}}</th>
                            <td>{{$shop->name}}</td>
                            <td>{{$shop->city}}</td>
                            <td>{{$shop->description}}</td>

                          </tr>



                          
                          
                         
                         

                          @endforeach
              
                        </tbody>

                    </table>

                        <form action="{{route('deleteUser')}}" method="POST">
                            @method('delete')
                            @csrf
                            <button type="submit" class="btn btn-danger">Cancella</button>
                        </form>
                        
                      

                  
                </div>
            </div>
        </div>
    </div>

    

</x-layout>