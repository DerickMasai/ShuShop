<?php

namespace App\View\Components;

use Illuminate\View\Component;

class WishlistShoe extends Component
{
    public $shoe;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($shoe)
    {
        $this->shoe = $shoe;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.wishlist-shoe');
    }
}
