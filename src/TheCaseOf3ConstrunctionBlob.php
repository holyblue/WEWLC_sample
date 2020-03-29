<?php

namespace APP;

class WatercolorPanel
{
    public function __construct(Form $border, WashBrush $brush, Pattern $backdrop)
    {
        $anteriorPanel = new Panel($border);
        $anteriorPanel->setBorderColor($brush->getForeColor());
        $backgroundPanel = Panel::createBackground($border, $backdrop);

        $cursor = new FocusWidget($brush, $backgroundPanel);
    }
}

class Form
{

}

class WashBrush
{

    public function getForeColor()
    {
        return 'color';
    }
}

class Pattern
{

}

class Panel
{
    public function __construct(Form $border)
    {

    }

    public static function createBackground(...$param)
    {
        return new static(...$param);
    }

    public function setBorderColor($color)
    {
        
    }
}

class FocusWidget
{
    public function __construct(WashBrush $brush, Panel $panel)
    {
    }
}