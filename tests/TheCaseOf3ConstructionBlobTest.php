<?php

use APP\Form;
use APP\Pattern;
use APP\WashBrush;
use APP\WatercolorPanel;
use PHPUnit\Framework\TestCase;

class WatercolorPanelTest extends TestCase
{
    public function testCreate()
    {
        $widget = new TestingFocusWidget();
        $form = new Form();
        $washBrush = new WashBrush();
        $pattern = new Pattern();
        $waterColorPanel = new WatercolorPanel($form, $washBrush, $pattern);
        $waterColorPanel->supersedeCursor($widget);
    }
}

/**
 * 可以使用Extract Interface或Subclass and override method
 * Class TestingFocusWidget
 */
class TestingFocusWidget extends FocusWidget
{

}