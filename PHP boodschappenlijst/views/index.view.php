
    <table class="groceries">
        <thead>
            <tr>
                <th>Product</th>
                <th>Prijs</th>
                <th>Aantal</th>
                <th>Subtotaal</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($groceries as $item) : ?>
                <tr>
                    <td><?= htmlspecialchars($item['name']); ?> </td>
                    <td><?= htmlspecialchars($item['price']); ?> </td>
                    <td><?= htmlspecialchars($item['number']); ?> </td>
                    <td><?= htmlspecialchars($item['price'] * $item['number']); ?> </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Totaal</td>
                <td id="totalCost"><?php echo $totalprice ?></td>
            </tr>
        </tfoot>
    </table>