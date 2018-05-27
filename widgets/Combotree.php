<?php

namespace dee\easyui\widgets;

use dee\easyui\helpers\Html;


/**
 * Combotree
 *
 * @author Alexey Rozum <alexey.rozum@gmail.com>
 * @since 1.0
 */
class Combotree extends InputWidget
{
    protected $properties = ['url'];
    
    public function run()
    {
        $this->registerWidget('combotree');
        return Html::tag('input', '', $this->options);
    }
}