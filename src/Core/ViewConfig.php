<?php

declare(strict_types=1);

namespace SiteCockpit\EasyVision\Oxid7\Core;

use OxidEsales\EshopCommunity\Core\Di\ContainerFacade;
use OxidEsales\EshopCommunity\Internal\Framework\Module\Facade\ModuleSettingServiceInterface;

class ViewConfig extends ViewConfig_parent
{
    public function getEasyVisionIntegrationKey(): string
    {
        $moduleSettingService = ContainerFacade::get(ModuleSettingServiceInterface::class);
        $value = (string) $moduleSettingService->getString('easyvision_integration_key', 'scp_easyvision_oxid7');

        return trim($value);
    }
}
