<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class PostComments extends Component
{
    use WithPagination;
    public Post $post;

    #[Rule('required|min:3')]
    public string $comment;

    #[Computed()]
    public function comments(){
        return $this->post->comments()->latest()->paginate(3);
    }
    public function postComment(){
        if(auth()->guest()){
            return $this->redirect(route('login'));
        }
        $this->validate();
        $this->post->comments()->create([
            'comment' => $this->comment,
            'user_id' => auth()->user()->id,
            'post_id' =>  $this->post->id,
        ]);
        $this->reset('comment');
    }
    public function render()
    {
        return view('livewire.post-comments');
    }
}
