<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Article;

class EditArticle extends Component
{
    use WithFileUploads;

    public $article;
    public $title;
    public $subtitle;
    public $body;
    public $image;
    public $oldImage;

    public function mount($article)
    {
        $this->article = $article;
        $this->title = $article->title;
        $this->subtitle = $article->subtitle;
        $this->body = $article->body;
        $this->oldImage = $article->img;
    }

    public function updateArticle()
    {
        $this->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'body' => 'required',
            'image' => 'nullable|max:1024',
        ]);

        if ($this->image) {
            $imageName = $this->image->store('images', 'public');
            $this->article->img = $imageName; // Salva la nuova immagine
        }

        $this->article->title = $this->title;
        $this->article->subtitle = $this->subtitle;
        $this->article->body = $this->body;
        $this->article->save();

        session()->flash('message', 'Articolo aggiornato con successo!');
        return redirect()->route('articles.index');
    }

    public function render()
    {
        return view('livewire.edit-article');
    }
}
