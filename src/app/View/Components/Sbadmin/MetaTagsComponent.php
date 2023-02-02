<?php 

namespace Aziyan99\ThemeSbadmin\View\Components;

use Illuminate\View\Component;

class MetaTagsComponent extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
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