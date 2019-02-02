<?php

namespace September\ContaoSliderGeilBundle\Tests;

use September\ContaoSliderGeilBundle\ContaoSliderGeilBundle;
use PHPUnit\Framework\TestCase;

class ContaoSliderGeilBundleTest extends TestCase
{
    public function testCanBeInstantiated()
    {
        $bundle = new ContaoSliderGeilBundle();

        $this->assertInstanceOf('September\ContaoSliderGeilBundle\ContaoSliderGeilBundle', $bundle);
    }
}
