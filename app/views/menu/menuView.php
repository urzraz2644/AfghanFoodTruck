<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, inital-scale=1">
    <title>Afghan Food Truck Menu</title>
    <style>
        body { font-family: Arial, sans-serif; background:#fafafa; margin:40px; }
        h1 { color:#333; text-align:center; }
        table { width:80%; margin:0 auto; border-collapse:collapse; background:#fff; }
        th, td { padding:12px; border:1px solid #ccc; text-align: left; }
        th { background:#007BFF; color:#fff; }
        tr:nth-child(even) { background:#f2f2f2; }
    </style>
</head>
<body>
    <h1>Afghan Food Truck Menu</h1>
    <?php if (empty($menuItems)): ?>
        <p style="text-align: center;">No items yet. (If you expect data, import your SQL below.)</p>
    <?php else: ?>
    <table>
        <tr>
            <th>Item Name</th>
            <th>Price</th>
            <th>Description</th>
        </tr>
        <?php foreach ($menuItems as $item): ?>
        <tr>
            <td><?= htmlspecialchars($item['item_name'] ?? '') ?></td>
            <td>$<?= number_format((float)($item['price'] ?? 0), 2) ?></td>
            <td><?= htmlspecialchars($item['description'] ?? '') ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
        <?php endif; ?>
</body>
</html>