<?php
return [
  'debug' => true,
  'editor' => 'vscode',
  'sitemap.ignore' => ['error', 'assets', 'vendor'],
  'routes' => [
    [
      'pattern' => 'sitemap.xml',
      'action' => function () {
        $pages = site()->pages()->index();

        // fetch the pages to ignore from the config settings,
        // if nothing is set, we ignore the error page
        $ignore = kirby()->option('sitemap.ignore', ['error']);

        $content = snippet('sitemap', compact('pages', 'ignore'), true);

        // return response with correct header type
        return new Kirby\Cms\Response($content, 'application/xml');
      }
    ],
    [
      'pattern' => 'sitemap',
      'action' => function () {
        return go('sitemap.xml', 301);
      }
    ]
  ],
  'blocks' => [
    'fieldsets' => []
  ],
  'ready' => function () {
    $blockBlueprints = Dir::files(kirby()->root('blueprints') . '/blocks');
    $blockBlueprintNames = array_map(function ($blockBlueprint) {
      return F::name($blockBlueprint);
    }, $blockBlueprints);

    /* Move the text block to the first position */
    $blockBlueprintNames = array_values(array_filter($blockBlueprintNames, fn($value) => $value !== 'text'));
    array_unshift($blockBlueprintNames, 'text');

    return [
      'blocks' => [
        'fieldsets' => $blockBlueprintNames
      ]
    ];
  }
];