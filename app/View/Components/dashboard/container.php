<?php

namespace App\View\Components\dashboard;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class container extends Component
{

  /**
   * @var \App\Models\Container
   */
  public $container;

  /**
   * Create a new component instance.
   *
   * @param \App\Models\Container $container
   */
    public function __construct(\App\Models\Container $container)
    {
        $this->container = $container;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return View|Closure|string
     */
    public function render()
    {
        return view('components.dashboard.container');
    }
}
