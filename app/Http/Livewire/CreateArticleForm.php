<?php

namespace App\Http\Livewire;

use App\Models\Article;
use Livewire\Component;

class CreateArticleForm extends Component
{   
    public $title;
    public $subtitle;
    public $body;

    protected $rules = [
        'title' => 'required|min:6|max:50',
        'subtitle' => 'required|min:6|max:200',
        'body' => 'required|min:20',
    ];

    public function store()
    
    {
        $this->validate();

        Article::create([
            
            'title' => $this->title,
            'subtitle' => $this->subtitle,
            'body' => $this->body,
        ]);

        $this->reset();
        
    }

    public function updated($propertyName)
    
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.create-article-form');
    }
}
