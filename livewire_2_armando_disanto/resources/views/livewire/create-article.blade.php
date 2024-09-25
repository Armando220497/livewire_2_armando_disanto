<div>

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                    
                @endif
                @if (session('message'))
                    <div class="alert alert-success">
                        {{session('message')}}
                    </div>
                @endif
                <form class="shadow p-5 rounded-5 bg-secondary"
                wire:submit='store'
                >
                    

                    <div class="mb-3">
                      <label for="title" class="form-label">Titolo Articolo</label>
                      <input wire:model="title" type="text" class="form-control" id="title" >
                      <div>@error('title'){{$message}} @enderror</div>
                    </div>
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo Articolo</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle" >
                        <div>@error('subtitle'){{$message}} @enderror</div>
                      </div>
                      <div class="mb-3">
                        <label for="body" class="form-label">Corpo Articolo</label>
                       
                        <textarea wire:model="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        <div>@error('body'){{$message}} @enderror</div>
                      </div>
                 
                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                  </form>
            
            </div>
        </div>
    </div>
 
</div>
