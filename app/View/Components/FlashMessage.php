<?php

namespace App\View\Components;

use Illuminate\View\Component;

class FlashMessage extends Component
{

    public $code;
    public $type;
    public $message;
    public $timeOut;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($code = 0, $message = '')
    {
        //
        $this->code = $code;
        $this->message = $message;
        
        if ($code <= 200) {
            $this->type = "success";
            $this->timeOut = 3000;
        }
        else if ($code < 400) {
            $this->type = "warning";
            $this->timeOut = 1000;
        }
        else{
            $this->type="error";
            $this->timeOut = 0;
        }
        
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.flash-message');
    }
}
