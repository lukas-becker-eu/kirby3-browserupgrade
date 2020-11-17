<?php
$upgradeYourBrowser = t('candyblue.kirby3-browserupgrade.upgrade-your-browser', option('candyblue.kirby3-browserupgrade.fallback.upgrade-your-browser'));
if(!empty($upgradeYourBrowser)): ?>
  <?php
  $lteIe9 = asset('media/plugins/candyblue/kirby3-browserupgrade/css/browserupgrade-lte-ie9.css');
  if($lteIe9->exists()):
  $lteIe9 = file_get_contents($lteIe9->url()); ?>
    <!--[if lte IE 9]>
    <?= Html::tag('style', [$lteIe9], ['type' => 'text/css']) ?>
    <![endif]-->
  <?php endif ?>
<?php endif ?>

<?php
$enableJs = t('candyblue.kirby3-browserupgrade.enable-js', option('candyblue.kirby3-browserupgrade.fallback.enable-js'));
if(!empty($enableJs)): ?>
  <?php
  $gteIe10 = asset('media/plugins/candyblue/kirby3-browserupgrade/css/browserupgrade-gte-ie10.css');
  if($gteIe10->exists()):
  $gteIe10 = file_get_contents($gteIe10->url()); ?>
    <?= Html::tag('style', [$gteIe10], ['type' => 'text/css']) ?>
  <?php endif ?>
<?php endif ?>
