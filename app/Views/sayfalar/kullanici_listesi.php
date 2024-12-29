<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kullanıcı Listesi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: #007bff;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: white;
            text-decoration: none;
            font-weight: 500;
            margin: 0 10px;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            background-color: #ffffff;
            padding: 2.5rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 2rem;
        }

        h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        p {
            color: #6c757d;
            font-size: 1.1rem;
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .btn {
            font-size: 1rem;
            font-weight: 600;
            padding: 10px 20px;
            border-radius: 8px;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        .btn-success {
            background-color: #28a745;
            border: none;
        }

        .btn-success:hover {
            background-color: #218838;
            transform: translateY(-2px);
        }

        .btn-warning {
            background-color: #ffc107;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
            transform: translateY(-2px);
        }

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
        }

        .table {
            margin-top: 1.5rem;
            width: 100%;
            border-collapse: collapse;
        }

        .table th, .table td {
            text-align: center;
            padding: 12px 15px;
        }

        .table th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .text-success, .text-danger {
            font-size: 1.2rem;
            font-weight: 500;
            text-align: center;
            margin-top: 20px;
        }

        .footer {
            text-align: center;
            margin-top: 3rem;
            color: #6c757d;
        }

        .footer a {
            color: #007bff;
            text-decoration: none;
        }

        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    <nav>
        <a href="<?= base_url(); ?>">Home</a>
        <a href="<?= base_url('admin'); ?>">Admin Paneli</a>
    </nav>

    <div class="container">
        <h2>Kullanıcılar</h2>
        <p>Buradan kullanıcıları görüntüleyebilir, düzenleyebilir ve silebilirsiniz.</p>

        <a href="<?= base_url('admin/kullanici-ekle'); ?>" class="btn btn-success">Yeni Kullanıcı Ekle</a>

        <!-- Başarı ve Hata Mesajları -->
        <?php if (session()->getFlashdata('success')): ?>
            <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
        <?php endif; ?>

        <?php if (session()->getFlashdata('error')): ?>
            <p class="text-danger"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Kullanıcı Adı</th>
                    <th>İşlemler</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $user['id']; ?></td>
                    <td><?= $user['username']; ?></td>
                    <td>
                        <a href="<?= base_url('admin/kullanici-duzenle/' . $user['id']); ?>" class="btn btn-warning">Düzenle</a>
                        <a href="<?= base_url('admin/kullanici-sil/' . $user['id']); ?>" class="btn btn-danger" onclick="return confirm('Emin misiniz?')">Sil</a>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="footer">
        <p>Admin Paneli © 2024 | <a href="<?= base_url('logout'); ?>">Çıkış Yap</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
