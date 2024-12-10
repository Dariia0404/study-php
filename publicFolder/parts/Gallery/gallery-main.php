<h2>This is Gallery page</h2>
<a href="/study/Gallery/Create">
    Create
</a>
<table>
    <tr>
        <th>
            id
        </th>
        <th>
            name
        </th>
        <th>
            image
        </th>
        <th>
            categoryName
        </th>
        <th>
            categoryId          
        </th>
    </tr>
    <?php foreach($data as $galleryItem): ?>
        <tr>
            <td>
            <?= $galleryItem ['id'] ?>
            </td>
            <td>
            <?= $galleryItem ['name'] ?>
            </td>
            <td>
            <?= $galleryItem ['image'] ?>
            </td>
            <td>
            <?= $galleryItem ['categoryName'] ?>
            </td>
            <td>
            <?= $galleryItem ['categoryId'] ?>
            </td>
            <td>
                Update
            </td>
            <td>
                Delete
            </td>
            <td>
            <a href="/study/Gallery/Update?id=<?= $galleryItem ['id'] ?>">
            Update
            </td>
            <td>
            <a href="/study/Gallery/Delete?id=<?= $galleryItem ['id'] ?>">
            Delete
            </td>
        </tr>
        <?php endforeach; ?>
</table>