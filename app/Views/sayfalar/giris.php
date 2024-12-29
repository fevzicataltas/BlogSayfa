<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giriş Ekranı</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #6f42c1, #ff7e5f);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            background: #ffffff;
            padding: 3rem;
            border-radius: 0.75rem;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
            transition: box-shadow 0.3s ease;
        }

        .login-container:hover {
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.2);
        }

        .login-title {
            font-size: 1.8rem;
            font-weight: 700;
            margin-bottom: 1.5rem;
            text-align: center;
            color: #495057;
        }

        .btn-primary {
            width: 100%;
            padding: 0.75rem;
            font-size: 1.2rem;
            font-weight: 500;
            border-radius: 0.5rem;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .form-control {
            margin-bottom: 1.25rem;
            border-radius: 0.5rem;
            box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .alert {
            margin-bottom: 1rem;
            border-radius: 0.5rem;
        }

        .footer-text {
            text-align: center;
            font-size: 0.9rem;
            margin-top: 2rem;
            color: #6c757d;
        }

        .footer-text a {
            color: #6f42c1;
            text-decoration: none;
        }

        .footer-text a:hover {
            text-decoration: underline;
        }

    </style>
</head>
<body>
    <div class="login-container">
        <div class="login-title">Giriş Yap</div>

        <!-- Hata Mesajı -->
        <?php if (!empty($error)): ?>
            <div class="alert alert-danger" role="alert">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <!-- Giriş Formu -->
        <form method="post" action="<?= base_url('/giris') ?>">
            <?= csrf_field(); ?> <!-- CSRF token'ını ekleyin -->
            <div class="mb-3">
                <label for="username" class="form-label">Kullanıcı Adı</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Kullanıcı adınızı girin" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Şifre</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Şifrenizi girin" required>
            </div>
            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>

        <div class="footer-text">
            <p>Hesabınız yok mu? <a href="<?= base_url('signup'); ?>">Kayıt Olun</a></p>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
