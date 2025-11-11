<nav class="site-nav">
    <ul>
        <?php foreach ($menuItems as $item): ?>
            <li><a href="<?= htmlspecialchars($item['href']) ?>"><?= htmlspecialchars($item['label']) ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>