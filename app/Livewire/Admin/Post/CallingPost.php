<?php

namespace App\Livewire\Admin\Post;

use App\Models\Post;
use Livewire\Component;

class CallingPost extends Component
{
    public $searchTerm = "";
    public function render()
    {
        $data['posts'] = Post::where("title","LIKE","%".$this->searchTerm."%")->get();
        return view('livewire.admin.post.calling-post',$data);
    }

    public function deletePost($id){
        Post::find($id)->delete();
        session()->flash('message','Post Deleted Successfully');
        return redirect()->route('admin.posts');
        
    }
}
