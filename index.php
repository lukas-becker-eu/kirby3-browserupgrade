<?php

@include_once __DIR__ . '/vendor/autoload.php';

Kirby::plugin('candyblue/kirby3-browserupgrade', [
  'translations' => [
    'en' => [
      'candyblue.kirby3-browserupgrade.enable-js' => 'Please enable javascript for the correct function of this site.',
      'candyblue.kirby3-browserupgrade.upgrade-your-browser' => 'You are using an&nbsp;<strong>outdated browser</strong>. It has known security flaws and may not display all features of this and other websites. Please&nbsp;<a href="http://outdatedbrowser.com/" target="_blank">upgrade your browser</a>&nbsp;to improve your experience.'
    ],
    'de' => [
      'candyblue.kirby3-browserupgrade.enable-js' => 'Bitte aktiviere Javascript, damit diese Website korrekt funktioniert.',
      'candyblue.kirby3-browserupgrade.upgrade-your-browser' => 'Sie benutzen einen&nbsp;<strong>veralteten Browser</strong> mit Sicherheitsschwachstellen und können vermutlich nicht alle Funktionen dieser und anderer Webseiten nutzen. Bitte&nbsp;<a href="http://outdatedbrowser.com/de" target="_blank">aktualisieren Sie ihren Browser</a>, und verbessern Sie ihr Nutzererlebnis.'
    ]
  ],
  'options' => [
    'fallback' => [
      'enable-js' => 'Please enable javascript for the correct function of this website.',
      'upgrade-your-browser' => 'You are using an&nbsp;<strong>outdated browser</strong>. It has known security flaws and may not display all features of this and other websites. Please&nbsp;<a href="http://outdatedbrowser.com/" target="_blank">upgrade your browser</a>&nbsp;to improve your experience.'
    ]
  ],
  'snippets' => [
    'browserupgrade' => __DIR__ . '/snippets/browserupgrade.php',
  ]
]);
