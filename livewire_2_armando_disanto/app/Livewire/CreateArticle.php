<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;

class CreateArticle extends Component
{
    use WithFileUploads;

    public $title;
    public $subtitle;
    public $body;
    public $image;

    public function store()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'nullable|max:1024',
        ]);

        // Salva l'immagine nella cartella pubblica e ottieni il percorso
        $imagePath = $this->image ? $this->image->store('images', 'public') : null;

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $imagePath, // Salva il percorso dell'immagine nella colonna 'img'
        ]);

        session()->flash('message', 'Articolo creato con successo!');
        return redirect()->route('articles.index');
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
