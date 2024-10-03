<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8">
                <form wire:submit.prevent="store" class="shadow p-5 rounded-5 bg-secondary">

                    <!-- Titolo -->
                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Articolo</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        <div>
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Sottotitolo -->
                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo Articolo</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        <div>
                            @error('subtitle')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Corpo dell'articolo -->
                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo Articolo</label>
                        <textarea wire:model="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        <div>
                            @error('body')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Campo per l'immagine -->
                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine Articolo</label>
                        <input wire:model="image" type="file" class="form-control" id="image">
                        <div>
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Mostra l'anteprima dell'immagine caricata -->
                    @if ($image)
                        <div class="mb-3">
                            <label>Anteprima Immagine:</label><br>
                            <img src="{{ $image->temporaryUrl() }}" alt="Anteprima immagine" class="img-fluid"
                                style="max-width: 200px; height: auto;">
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Crea articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
