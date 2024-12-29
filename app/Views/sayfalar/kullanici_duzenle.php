<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kullanıcı Düzenle</title>
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

        .form-label {
            font-weight: 500;
            font-size: 1.1rem;
            color: #495057;
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

        .btn-danger {
            background-color: #dc3545;
            border: none;
        }

        .btn-danger:hover {
            background-color: #c82333;
            transform: translateY(-2px);
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
        <h2>Kullanıcıyı Düzenle</h2>

        <form method="post" action="<?= base_url('admin/kullanici-guncelle/' . $user['id']); ?>">
            <?= csrf_field(); ?> <!-- CSRF token'ını ekleyin -->
            <div class="mb-3">
                <label for="username" class="form-label">Kullanıcı Adı</label>
                <input type="text" name="username" id="username" class="form-control" value="<?= $user['username']; ?>" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Yeni Şifre</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Yeni şifre girin (isteğe bağlı)">
            </div>
            <button type="submit" class="btn btn-primary">Güncelle</button>
        </form>

        <!-- Başarı ve Hata Mesajları -->
        <?php if (isset($success)): ?>
            <p class="text-success"><?= esc($success); ?></p>
        <?php endif; ?>

        <?php if (isset($error)): ?>
            <p class="text-danger"><?= esc($error); ?></p>
        <?php endif; ?>
    </div>

    <div class="footer">
        <p>Admin Paneli © 2024 | <a href="<?= base_url('logout'); ?>">Çıkış Yap</a></p>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
