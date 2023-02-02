<?php 

namespace App\View\Components\Sbadmin;

use Illuminate\View\Component;

class LeftMenuComponent extends Component
{

    public string $appName;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(): void
    {
        $this->appName = env('APP_NAME', 'SBAdmin');
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.sbadmin.left-menu-component');
    }
}