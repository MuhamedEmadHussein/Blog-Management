<?php

namespace App\Livewire;

use App\Models\Post;
use Livewire\Attributes\Reactive;
use Livewire\Component;

class LikeButton extends Component
{
    // #[Reactive]
    public Post $post;
    public function mount(Post $post){
        $this->post = $post;
    }
    public function toggleLike(){
        if(auth()->guest()){
            return $this->redirect(route('login'));
        }

        $user = auth()->user();

        if($user->hasLiked($this->post->id)){ // Pass $this->post->id as an argument
            $user->likes()->detach($this->post->id);
            return;
        }

        $user->likes()->attach($this->post->id);

    }
    public function render()
    {
        return view('livewire.like-button');
    }
}
