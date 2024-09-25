<?php

namespace App\Livewire;

use App\Models\Article;
use Livewire\Attributes\Validate;
use Livewire\Component;

class CreateArticle extends Component
{

    #[Validate('required|min:3')]
    public $title;
    #[Validate('required|min:3')]
    public $subtitle;
    #[Validate('required|min:3')]
    public $body;



    public function store()
    {

        $this->validate();

        Article::create([
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,

        ]);

        $this->reset();


        session()->flash('message', 'Articolo creato correttamente');
    }

    protected function clearForm()
    {
        $this->title = "";
        $this->subtitle = "";
        $this->body = "";
    }

    public function render()
    {
        return view('livewire.create-article');
    }
}
