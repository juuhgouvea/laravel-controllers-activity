<?php

namespace App\View\Components;

use Illuminate\View\Component;

class TableList extends Component
{
    public $headers;
    public $data;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($headers, $data)
    {
        $this->headers = $headers;
        $this->data = $data;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.tablelist');
    }
}
