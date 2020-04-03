<?php

namespace APP;

class WatercolorPanel
{
    private FocusWidget $cursor;
    public function __construct(Form $border, WashBrush $brush, Pattern $backdrop)
    {
        $anteriorPanel = new Panel($border);
        $anteriorPanel->setBorderColor($brush->getForeColor());
        $backgroundPanel = Panel::createBackground($border, $backdrop);

        /// *** test point ***
        $this->cursor = new FocusWidget($brush, $backgroundPanel);
    }

    /**
     * never call this method on production code
     * @param FocusWidget $newCursor
     */
    public function supersedeCursor(FocusWidget $newCursor)
    {
        reset($this->cursor);
        $this->cursor = $newCursor;
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