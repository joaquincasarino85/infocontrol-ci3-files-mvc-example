<!DOCTYPE html>
<html>
<head>
    <title>Document Status</title>
</head>
<body>
    <h2>Document Status</h2>
    <?php if (empty($documents)) : ?>
        <p>No documents found for this contractor.</p>
    <?php else : ?>
        <ul>
        <?php foreach ($documents as $doc): ?>
            <li><?php echo $doc->filename . ' - ' . $doc->status . ' - ' . $doc->created_at; ?></li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>