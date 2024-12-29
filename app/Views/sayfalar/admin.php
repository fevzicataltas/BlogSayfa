<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Admin Paneli</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico'); ?>" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background: #f4f7fc;
            font-family: 'Arial', sans-serif;
        }

        nav {
            background-color: #343a40;
            padding: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        nav a {
            color: #ffffff;
            text-decoration: none;
            font-weight: 500;
            padding: 8px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #007bff;
            color: #ffffff;
        }

        .container {
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            padding: 2rem;
            margin-top: 3rem;
        }

        h2 {
            font-size: 2rem;
            font-weight: 600;
            color: #495057;
            margin-bottom: 1rem;
        }

        p {
            font-size: 1.1rem;
            color: #6c757d;
        }

        .btn {
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            transition: transform 0.2s ease, background-color 0.3s ease;
        }

        .btn:hover {
            transform: translateY(-2px);
            background-color: #0056b3;
        }

        .btn-warning {
            background-color: #ffc107;
            color: #000;
            border: none;
        }

        .btn-warning:hover {
            background-color: #e0a800;
        }

        .btn-danger {
            background-color: #dc3545;
        }

        .btn-danger:hover {
            background-color: #c82333;
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
        <div>
            <a href="<?= base_url(); ?>">Ana Sayfa</a>
            <a href="<?= base_url('admin'); ?>">Admin Paneli</a>
        </div>
        <div>
            <!-- Yeni Kullanıcı Ekle Butonu -->
            <a href="<?= base_url('admin/kullanici-ekle'); ?>" class="btn btn-success">Yeni Kullanıcı Ekle</a>
            <!-- Kullanıcı Listele Butonu -->
            <a href="<?= base_url('admin/kullanici-listesi'); ?>" class="btn btn-primary">Kullanıcılar</a>
        </div>
    </nav>

    <div class="container">
        <h2>Hoşgeldiniz, <?= session()->get('username'); ?>!</h2>
        <p>Buradan admin paneline erişebilirsiniz.</p>

        <!-- Düzenle Butonu -->
        <a href="<?= base_url('admin/edit-about'); ?>" class="btn btn-warning">Hakkndayı düzenle</a>
        



        <a href="<?= base_url('logout'); ?>" class="btn btn-danger">Çıkış Yap</a>
    </div>

    <div class="footer">
        <p>Admin Paneli © 2024 | <a href="<?= base_url('logout'); ?>">Çıkış Yap</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
