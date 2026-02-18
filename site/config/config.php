<?php
return [
    'debug'  => false,
    'editor' => 'vscode',
    'routes' => [
    [
      'pattern' => 'sitemap.xml',
      'action'  => function () {
        $pages = site()->pages()->index()->listed();

        return new Kirby\Cms\Response(
          snippet('sitemap', compact('pages'), true),
          'application/xml'
        );
      }
    ]
  ],
];