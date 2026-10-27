<?php
/*
 * nav.inc - main navigation, included by header.inc.
 * Add or rename a page here and it changes on every page.
 * The link for the page being viewed gets aria-current="page"
 * (styled in styles.css as the current-page indicator).
 */
$navLinks = [
    'index.php' => 'Home',
    'jobs.php'  => 'Jobs',
    'apply.php' => 'Apply',
    'about.php' => 'About',
];

$currentFile = basename($_SERVER['SCRIPT_NAME']);
if ($currentFile === 'search.php') {
    $currentFile = 'jobs.php'; // search results belong to the Jobs section
}
?>
<nav aria-label="Main navigation">
  <ul>
    <?php foreach ($navLinks as $file => $label): ?>
    <li><a href="<?= e($file) ?>"<?= $file === $currentFile ? ' aria-current="page"' : '' ?>><?= e($label) ?></a></li>
    <?php endforeach; ?>
  </ul>
</nav>
