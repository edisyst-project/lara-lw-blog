<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title, $text, $photo;

    public function save()
    {
        $this->validate([
            'title' => 'required', // 1MB Max
            'text' =>  'required', // 1MB Max
            'photo' => 'image|max:1024', // 1MB Max
        ]);

        $path = $this->photo->store('public/blogs/photos');

        $blog = new Blog();
        $blog->title = $this->title;
        $blog->text = $this->text;
        $blog->photo = $path;
        $blog->user_id = auth()->id();
        $blog->save();

        $this->photo = '';
        $this->reset();

        $this->emit('updateBlogIndex');
    }

    public function render()
    {
        return view('livewire.blog.create');
    }
}
