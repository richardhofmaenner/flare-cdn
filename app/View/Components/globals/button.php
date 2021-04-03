<?php

namespace App\View\Components\globals;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class button extends Component
{

  /**
   * @var string
   */
  public $type = 'info';

  /**
   * @var string
   */
  public $bgColor = 'bg-info-300';

  /**
   * Create a new component instance.
   * @param String $type
   */
  public function __construct(String $type)
  {
    switch ($type) {
      case 'error':
        $this->bgColor = 'bg-red-300';
        break;
      default: break;
    }
  }

  /**
   * Get the view / contents that represent the component.
   *
   * @return View|Closure|string
   */
  public function render()
  {
    return view('components.globals.button');
  }
}
