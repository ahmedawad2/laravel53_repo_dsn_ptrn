<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;

class ComposerClass
{
    public function compose(View $view)
    {
        $view->with('fromClass', 'this value is shared from a view composer class');
    }
}