<?php echo '<?xml version="1.0" encoding="utf-8"?>'; ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

<?php foreach ($pages->index()->listed() as $page): ?>
  <url>
    <loc><?= html($page->url()) ?></loc>
    <lastmod><?= date('Y-m-d', $page->modified()) ?></lastmod>
    <changefreq>weekly</changefreq>
    <priority><?= $page->isHomePage() ? '1.0' : '0.7' ?></priority>
  </url>
<?php endforeach ?>

</urlset>
