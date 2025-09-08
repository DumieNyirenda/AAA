<?php
require_once __DIR__ . '/backend/config/Database.php';
require_once __DIR__ . '/backend/models/News.php';
require_once __DIR__ . '/backend/utils/Encryptor.php';

if (!isset($_GET['id'])) {
    die('No news ID provided.');
}

$encId = $_GET['id'];
$id = \Encryptor::decrypt($encId);

$db = (new Database())->getConnection();
$newsModel = new News($db);
$news = $newsModel->getById($id);

if (!$news) {
    die('News article not found.');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= htmlspecialchars($news['title']) ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
    <div class="container py-5">
        <a href="index.html" class="btn btn-secondary mb-4">&larr; Back to News</a>
        <div class="card">
            <div class="card-body">
                <h1 class="card-title mb-3"><?= htmlspecialchars($news['title']) ?></h1>
                <?php if (!empty($news['image'])): ?>
                    <img src="<?= htmlspecialchars($news['image']) ?>" class="img-fluid mb-3" alt="News Image" />
                <?php endif; ?>
                <div class="mb-2 text-muted small">Published: <?= htmlspecialchars($news['created_at']) ?></div>
                <div><?= nl2br(htmlspecialchars($news['content'])) ?></div>
            </div>
        </div>
    </div>
</body>
</html>