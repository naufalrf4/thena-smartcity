<?php

namespace App\View\Components;

use Illuminate\View\Component;

class NewsCard extends Component
{
    public $article;
    public $index;

    public function __construct($article, $index)
    {
        $this->article = $article;
        $this->index = $index;
    }

    public function render()
    {
        return view('components.news-card');
    }
}
