<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Kullanıcı Ekle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <style>
        body {
            background-color: #f4f7fc;
            font-family: 'Arial', sans-serif;
        }

        .container {
            background-color: #ffffff;
            padding: 3rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            max-width: 600px;
            margin-top: 5rem;
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
            color: #495057;
        }

        .form-control {
            padding: 1rem;
            border-radius: 8px;
            border: 1px solid #ced4da;
            transition: border-color 0.3s;
        }

        .form-control:focus {
            border-color: #0056b3;
            box-shadow: 0 0 8px rgba(0, 86, 179, 0.3);
        }

        .btn {
            font-size: 1.1rem;
            padding: 10px 20px;
            border-radius: 8px;
            font-weight: 600;
            width: 100%;
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

        .text-success {
            font-size: 1.1rem;
            color: #28a745;
            text-align: center;
            margin-top: 20px;
        }

        .text-danger {
            font-size: 1.1rem;
            color: #dc3545;
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

    <div class="container">
        <h2>Yeni Kullanıcı Ekle</h2>

        <!-- Kullanıcı Ekleme Formu -->
        <form method="post" action="<?= base_url('admin/kullanici-ekle'); ?>">
            <?= csrf_field(); ?> <!-- CSRF token'ı ekleniyor -->
            
            <div class="mb-4">
                <label for="username" class="form-label">Kullanıcı Adı</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Kullanıcı adını girin" required>
            </div>
            
            <div class="mb-4">
                <label for="password" class="form-label">Şifre</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Şifre girin" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Kullanıcı Ekle</button>
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
