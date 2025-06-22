<!DOCTYPE html>
<html>
<head>
    <title>Upload PDF Document</title>
</head>
<body>
    <h2>Upload a PDF Document</h2>

    <?php if (isset($error)): ?>
        <p style="color:red;"><?php echo $error; ?></p>
    <?php endif; ?>

    <?php if (isset($success)): ?>
        <p style="color:green;"><?php echo $success; ?></p>
    <?php endif; ?>

    <form action="<?= base_url('index.php/documents/upload') ?>" method="post" enctype="multipart/form-data">

        <input type="file" name="document" required>
        <input type="text" name="contractor_id" placeholder="Contractor ID" required>

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="pendiente" selected>Pendiente</option>
            <option value="en_proceso">En Proceso</option>
            <option value="aprobado">Aprobado</option>
            <option value="rechazado">Rechazado</option>
        </select>

        <button type="submit">Upload</button>
    </form>

    <?php if (isset($documents) && !empty($documents)): ?>
        <h3>Documents for Contractor ID: <?php echo htmlspecialchars($contractor_id); ?></h3>
        <ul>
            <?php foreach ($documents as $doc): ?>
                <li><?php echo htmlspecialchars($doc->nombre_archivo); ?> - Estado: <?php echo htmlspecialchars($doc->estado); ?> - Fecha: <?php echo htmlspecialchars($doc->fecha); ?></li>
            <?php endforeach; ?>
        </ul>
    <?php elseif (isset($contractor_id)): ?>
        <p>No documents found for this contractor.</p>
    <?php endif; ?>
</body>
</html>
