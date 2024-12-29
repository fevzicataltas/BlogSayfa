<table>
    <tr>
        <th>Kullanıcı Adı</th>
        <th>Email</th>
        <th>İşlemler</th>
    </tr>
    <?php foreach ($users as $user): ?>
    <tr>
        <td><?= $user['username']; ?></td>
        <td><?= $user['email']; ?></td>
        <td>
            <a href="/users/delete/<?= $user['_id']; ?>">Sil</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
<a href="/users/create">Yeni Kullanıcı Ekle</a>
