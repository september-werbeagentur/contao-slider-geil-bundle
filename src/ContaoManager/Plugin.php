<?php

namespace September\ContaoSliderGeilBundle\ContaoManager;

use Contao\CoreBundle\ContaoCoreBundle;
use Contao\ManagerPlugin\Bundle\BundlePluginInterface;
use Contao\ManagerPlugin\Bundle\Config\BundleConfig;
use Contao\ManagerPlugin\Bundle\Parser\ParserInterface;
use September\ContaoSliderGeilBundle\ContaoSliderGeilBundle;

class Plugin implements BundlePluginInterface
{
    /**
     * {@inheritdoc}
     */
    public function getBundles(ParserInterface $parser)
    {
        return [
            BundleConfig::create(ContaoSliderGeilBundle::class)
                ->setLoadAfter([ContaoCoreBundle::class]),
        ];
    }
}
