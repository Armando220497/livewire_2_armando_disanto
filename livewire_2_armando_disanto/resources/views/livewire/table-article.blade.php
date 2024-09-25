<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10">


                <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titolo</th>
                        <th scope="col">Sottotitolo</th>
                        <th scope="col">Gestisci</th>

                      </tr>
                    </thead>
                    <tbody>

                        @foreach($articles as $article)
                            
                       

                      <tr>
                        <th scope="row">{{$article->id}}</th>
                        <td>{{$article->title}}</td>
                        <td>{{$article->subtitle}}</td>
                        <td>
                            <a class="btn btn-info" href="{{route('articles.show', compact('article'))}}">Mostra</a>
                            <a class="btn btn-warning" href="{{route('articles.edit', compact('article'))}}">Modifica</a>
                            <button wire:click="destroy({{$article}})" class="btn btn-danger">Elimina</button>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>


            </div>
        </div>
    </div>
    

</div>
