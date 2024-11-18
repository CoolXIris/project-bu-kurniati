<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Results</title>
</head>

<body>
    <h1>Search Results for "<?= esc($query) ?>"</h1>

    <?php if (!empty($results)): ?>
        <ul>
            <?php foreach ($results as $result): ?>
                <li>
                    <a href="<?= esc($result['url']) ?>"><?= esc($result['title']) ?></a>
                </li>
            <?php endforeach; ?>
        </ul>
    <?php else: ?>
        <p>No results found for your search.</p>
    <?php endif; ?>

    <a href="<?= base_url('search') ?>">Back to search</a>
</body>

</html>