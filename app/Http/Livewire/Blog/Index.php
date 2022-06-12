<?php

namespace App\Http\Livewire\Blog;

use App\Models\Blog;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    protected $listeners = ['updateBlogIndex'];


    public $search = '';
    public $page = 1;
    public $perPage = 6;

    protected $queryString = [
        'search' => ['except' => ''],
        'page' => ['except' => 1],
    ];


    // function to read the blog




    public function updateBlogIndex()
    {
        $this->mount();
    }

    public function mount()
    {

    }

    public function reset(...$properties)
    {
        $this->search = '';
        $this->page = 1;
        $this->perPage = 6;
    }

    public function render()
    {
        $blogs = Blog::where('title', 'like', '%'.$this->search.'%')->latest()->paginate($this->perPage);

        $data = array('blogs' => $blogs);

        return view('livewire.blog.index', $data);
    }
}
