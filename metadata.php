<?php
/**
 * Metadata version
 */
$sMetadataVersion = '2.1';

/**
 * Module information
 */
$aModule = [
    'id'          => 'scp_easyvision_oxid7',
    'title'       => 'easyVision',
    'description' => [
        'de' => 'Integrieren Sie SiteCockpit in OXID: automatisiertes Accessibility‑Monitoring, Frontend‑Widget & gesetzeskonforme Barrierefreiheitserklärung. Integration erfolgt in wenigen Minuten!',
        'en' => 'Integrate SiteCockpit into OXID: automated accessibility monitoring, frontend widget & legally compliant accessibility declaration. Integration takes just a few minutes!'
    ],
    'version'     => '1.0.0',
    'author'      => 'Site Cockpit GmbH',
    'url'         => 'https://www.sitecockpit.com/',
    'email'       => 'marketing@sitecockpit.com',
    'thumbnail'   => 'Extension.svg',
    'extend' => [
        \OxidEsales\Eshop\Core\ViewConfig::class => \SiteCockpit\EasyVision\Oxid7\Core\ViewConfig::class,
    ],
    'settings' => [
        [
            'group' => 'easyvision_main_tab',
            'name' => 'easyvision_integration_key',
            'type' => 'str',
            'value' => '',
        ],
    ]
];
