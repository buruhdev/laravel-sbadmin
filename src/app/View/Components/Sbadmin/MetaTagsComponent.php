<?php 

namespace App\View\Components\Sbadmin;

use Illuminate\View\Component;

class MetaTagsComponent extends Component
{
    public string $author;
    public string $description;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->author = config('sbadmin.author');
        $this->description = config('sbadmin.description');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sbadmin.meta-tags-component');
    }
}