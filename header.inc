<?php
/*
 * header.inc - shared <head>, skip link, site header and navigation.
 *
 * Each page sets these variables BEFORE including this file:
 *   $pageTitle        text after "Goblin Great Gym | " in the browser tab
 *   $heading          the page's single <h1>
 *   $slogan           the line under the heading (optional)
 *   $metaDescription  the page description (optional)
 *
 * The matching footer.inc closes <body> and <html>.
 */
require_once __DIR__ . '/helpers.inc';

$pageTitle       = $pageTitle       ?? 'Home';
$heading         = $heading         ?? 'Goblin Great Gym';
$slogan          = $slogan          ?? '';
$metaDescription = $metaDescription ?? 'Goblin Great Gym - careers in sports and fitness technology';
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="<?= e($metaDescription) ?>" />
    <title>Goblin Great Gym | <?= e($pageTitle) ?></title>
    <link rel="stylesheet" href="styles/styles.css" />
  </head>
  <body>
    <a class="skip-link" href="#main">Skip to main content</a>

    <header>
      <?php require __DIR__ . '/nav.inc'; ?>

      <div class="hero">
        <img
          src="images/gYM.jpg"
          alt="Goblin Great Gym logo: a grinning goblin in a cap flexing both arms above the words Goblin Great Gym"
          width="80"
          height="80"
        />
        <h1><?= e($heading) ?></h1>
        <?php if ($slogan !== ''): ?>
        <p class="slogan"><?= e($slogan) ?></p>
        <?php endif; ?>
      </div>
    </header>

