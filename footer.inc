<?php
/*
 * footer.inc - shared footer; closes the <body> and <html> opened in
 * header.inc. Links edited here change on every page.
 */
$jiraUrl   = '';  // paste the shared Jira board address here (link stays hidden while empty)
$githubUrl = 'https://github.com/alimahamed2006/Goblin-Great-Gym-Part2';
?>
    <footer>
      <p>
        <?php if ($jiraUrl !== ''): ?>
        <a href="<?= e($jiraUrl) ?>" target="_blank" rel="noopener">Jira Project Board</a>
        |
        <?php endif; ?>
        <a href="<?= e($githubUrl) ?>" target="_blank" rel="noopener">GitHub Repository</a>
        |
        <a href="mailto:info@goblingym.com">info@goblingym.com</a>
        |
        <a href="login.php">HR Login</a>
      </p>
      <p class="credits"><a href="about.php#credits">Credits and acknowledgements</a></p>
      <p>&copy; <?= date('Y') ?> Goblin Great Gym</p>
    </footer>
  </body>
</html>
