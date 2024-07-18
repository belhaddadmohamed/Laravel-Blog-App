<?php

namespace App\Livewire;

use Livewire\Attributes\Computed;
use App\Models\Post;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]    // Url: to show the query in the URL 
    public $sort = 'desc';

    public function setSort($sort){
        $this->sort = ($sort === 'desc' ? 'desc' : 'asc');
    }

    #[Computed()]
    public function posts()
    {
        return Post::published()->orderBy('published_at', $this->sort)->paginate(3);  // OR: ->simplepaginate(3)
    }


    public function render()
    {
        return view('livewire.post-list');
    }
}
