<?php

namespace SeptemberWerbeagentur\ContaoSliderGeilBundle\Module;

class Slider extends \ContentElement
{
    /**
	 * Template
	 * @var string
	 */
	protected $strTemplate = 'ce_slidergeil';
	/**
     * Compile the content element
     */
    protected function compile()
    {
        if (TL_MODE == 'BE') {
            $this->genBeOutput();
        } else {
            $this->genFeOutput();
        }
    }

    /**
     * @return string
     */
    private function genBeOutput()
    {
        $this->strTemplate          = 'be_wildcard';
        $this->Template             = new \TwigBackendTemplate($this->strTemplate);
        $this->Template->title      = $this->headline;
        $this->Template->wildcard   = "### SliderGeil ###";
    }

    /**
     * @return string
     */
    private function genFeOutput()
    {
        if ($this->headline != '') {
            $this->Template->headline = $this->headline;
        }
    }
}