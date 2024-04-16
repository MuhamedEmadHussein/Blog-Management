<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class PostList extends Component
{
    use WithPagination;

    #[Url()]
    public $sortDir = 'desc';

    #[Url()]
    public $search = '';
    #[Url()]
    public $category = '';
    public function setSortDir($dir){
        $this->sortDir = $dir == 'asc' ? 'asc' : 'desc';
    }

    #[On('search')]
    public function updateSearch($search){
        $this->search = $search;
        $this->resetPage();
    }

    #[Computed()]
    public function posts(){
        return ($this->search == '' && empty(request('category')))
                ?
                 (Post::published()
                        ->orderBy('published_at',$this->sortDir)
                        ->paginate(3))
                :
                (Post::published()
                        ->orderBy('published_at', $this->sortDir)
                        ->when($this->activeCategory, function ($query) {
                            $query->withCategory($this->category);
                        })
                        ->where('title', 'like', "%{$this->search}%")
                        ->paginate(3));

    }

    #[Computed()]
    public function activeCategory()
    {
        return Category::where('title', $this->category)->first();
        // title should be slug in production it's Development
    }

    public function clearFilters(){
        $this->category = '';
        $this->search = '';
        $this->resetPage();
    }
    public function render()
    {
        return view('livewire.post-list');
    }
}
