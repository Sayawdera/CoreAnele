<h1>Hello Main Index</h1>

<?php if (!empty($names)): ?>
    <?php foreach ($names as $name): ?>
       <?= $name->id?> => <?= $name->name?>
    <?php endforeach; ?>
<?php endif; ?>
