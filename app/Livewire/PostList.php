<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use App\Models\Post;
use Livewire\Component;

class PostList extends Component
{
    #[Computed()]
    public function posts()
    {
        return Post::take(5)->get();
    }


    public function render()
    {
        return view('livewire.post-list');
    }
}
