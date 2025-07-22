<?php

declare(strict_types=1);

namespace SiteCockpit\EasyVision\Oxid7\Core;

use OxidEsales\EshopCommunity\Core\Registry;

class ViewConfig extends ViewConfig_parent
{
    public function getEasyVisionIntegrationKey(): string
    {
        return trim(Registry::getConfig()->getConfigParam('easyvision_integration_key', ''));
    }
}
