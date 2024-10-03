<div>
    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif

                <form class="shadow p-5 rounded-5 bg-secondary" wire:submit.prevent='updateArticle'>

                    <div class="mb-3">
                        <label for="title" class="form-label">Titolo Articolo</label>
                        <input wire:model="title" type="text" class="form-control" id="title">
                        <div>
                            @error('title')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="subtitle" class="form-label">Sottotitolo Articolo</label>
                        <input wire:model="subtitle" type="text" class="form-control" id="subtitle">
                        <div>
                            @error('subtitle')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="body" class="form-label">Corpo Articolo</label>
                        <textarea wire:model="body" class="form-control" id="body" cols="30" rows="10"></textarea>
                        <div>
                            @error('body')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Immagine Articolo</label>
                        <input wire:model="image" type="file" class="form-control" id="image">
                        <div>
                            @error('image')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <!-- Visualizza l'immagine esistente -->
                    @if ($oldImage)
                        <div class="mb-3">
                            <label>Immagine attuale:</label><br>
                            <img src="{{ asset('storage/' . $oldImage) }}" width="200">
                        </div>
                    @endif

                    <!-- Visualizza l'anteprima della nuova immagine -->
                    @if ($image)
                        <div class="mb-3">
                            <label>Anteprima nuova immagine:</label><br>
                            <img src="{{ $image->temporaryUrl() }}" width="200">
                        </div>
                    @endif

                    <button type="submit" class="btn btn-primary">Modifica articolo</button>
                </form>
            </div>
        </div>
    </div>
</div>
