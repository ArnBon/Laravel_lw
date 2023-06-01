<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Article;


class Articles extends Component
{

    //public $category = 'aprendible';
    // public array $category = [
    //     'name' => ''
    // ];
    // public $tags = [];
    // public $show = false;
    public $search = '';

    public function render()
    {
        return view('livewire.articles', [
            'articles' => Article::where('title', 'like', "%{$this->search}%")->get()
        ])->layout('welcome');
    }
}
