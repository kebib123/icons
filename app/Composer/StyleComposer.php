<?php
/**
 * Created by PhpStorm.
 * User: Bibek
 * Date: 8/5/2019
 * Time: 3:38 PM
 */

namespace App\Composer;


use App\Repositories\Contracts\StyleRepository;
use Illuminate\View\View;

class StyleComposer
{
    protected $style;

    public function __construct(StyleRepository $style)
    {
        $this->style=$style;
    }
    public function compose(View $view)
    {
        $style =$this->style->getCategories();

        $view->with([
            'style'=>$style
        ]);
    }
}