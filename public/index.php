<?php
$pages = ['items', 'import', 'b2b', 'definitions', 'settings'];
$page = isset($_GET['page']) && in_array($_GET['page'], $pages) ? $_GET['page'] : 'items';

function pageTitle($page) {
    return ucfirst($page);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?= pageTitle($page) ?> | Modern Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap 5 CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background: #f4f6fa; }
        .navbar-brand { font-weight: bold; }
        .nav-link.active { color: #0d6efd !important; font-weight: 600; }
        .content { padding: 2rem; background: #fff; border-radius: 1rem; margin-top: 2rem; box-shadow: 0 2px 16px rgba(0,0,0,0.05);}
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="?page=items">Modern Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">
        <?php foreach ($pages as $item): ?>
        <li class="nav-item">
          <a class="nav-link <?= $page === $item ? 'active' : '' ?>" href="?page=<?= $item ?>"><?= ucfirst($item) ?></a>
        </li>
        <?php endforeach; ?>
      </ul>
    </div>
  </div>
</nav>
<div class="container">
    <div class="content">
        <?php include __DIR__ . "/pages/{$page}.php"; ?>
    </div>
</div>
<!-- Bootstrap 5 JS Bundle CDN -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
