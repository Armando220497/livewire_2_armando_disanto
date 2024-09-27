<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads; // Aggiungi questa riga

class CreateArticle extends Component
{
    use WithFileUploads; // Aggiungi questa riga

    #[Validate('required|min:3')]
    public $title;

    #[Validate('required|min:3')]
    public $subtitle;

    #[Validate('required|min:3')]
    public $body;

    public $img; // Variabile per l'immagine

    public function store()
    {
        $this->validate();

        // Controllo se l'immagine è stata caricata
        if ($this->img) {
            $imagePath = $this->img->store('images', 'public'); // Salva l'immagine
        } else {
            // Gestisci il caso in cui non ci sia un'immagine
            session()->flash('message', 'Immagine non trovata.');
            return;
        }

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
            'img' => $imagePath,
        ]);

        $this->reset();

        session()->flash('message', 'Articolo creato correttamente');
    }

    protected function clearForm()
    {
        $this->title = "";
        $this->subtitle = "";
        $this->body = "";
        $this->img = ""; // Assicurati di resettare anche l'immagine
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
