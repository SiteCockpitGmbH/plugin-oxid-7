[{include file="parent/layout/footer.tpl"}]

[{if $oViewConf->getEasyVisionIntegrationKey()}]
    <script type="module" src="https://cdn.sitecockpit.com/cdn/app.js" data-easy-vision-key="[{$oViewConf->getEasyVisionIntegrationKey()}]"></script>
[{/if}]
