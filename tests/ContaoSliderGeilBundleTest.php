<?php

namespace SeptemberWerbeagentur\ContaoSliderGeilBundle\Tests;

use SeptemberWerbeagentur\ContaoSliderGeilBundle\ContaoSliderGeilBundle;
use PHPUnit\Framework\TestCase;

class ContaoSliderGeilBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoSliderGeilBundle();

        $this->assertInstanceOf('SeptemberWerbeagentur\ContaoSliderGeilBundle\ContaoSliderGeilBundle', $bundle);
    }
}