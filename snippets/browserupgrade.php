<?php
$upgradeYourBrowser = t('candyblue.kirby3-browserupgrade.upgrade-your-browser', option('candyblue.kirby3-browserupgrade.fallback.upgrade-your-browser'));
if(!empty($upgradeYourBrowser)): ?>
<!--[if lte IE 9]>
<?= css('media/plugins/candyblue/kirby3-browserupgrade/css/browserupgrade-lte-ie9.css') ?>
<![endif]-->
<?= Html::tag('div', [$upgradeYourBrowser], ['class' => 'browserupgrade browserupgrade-ie', 'aria-hidden' => 'true']) ?>
<?php endif ?>

<?php
$enableJs = t('candyblue.kirby3-browserupgrade.enable-js', option('candyblue.kirby3-browserupgrade.fallback.enable-js'));
if(!empty($enableJs)): ?>
<noscript>
  <?= Html::tag('div', [$enableJs], ['class' => 'browserupgrade browserupgrade-js', 'aria-hidden' => 'true']) ?>
</noscript>
<?php endif ?>
