<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="<?= base_url('assets/favicon.ico'); ?>" />
    <!-- Core theme CSS -->
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
</head>
<body>
    <nav>
        <a href="<?= base_url(); ?>">Home</a>
        <a href="<?= base_url('login'); ?>">Login</a>
    </nav>
    
    <div class="container">
        <h2>Giriş Yap</h2>

        <?php if (session()->getFlashdata('error')) : ?>
            <div class="alert alert-danger">
                <?= session()->getFlashdata('error'); ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('auth/login'); ?>" method="post">
            <div class="form-group">
                <label for="name">Kullanıcı Adı:</label>
                <input type="text" id="name" name="name" class="form-control" required />
            </div>

            <div class="form-group">
                <label for="password">Şifre:</label>
                <input type="password" id="password" name="password" class="form-control" required />
            </div>

            <button type="submit" class="btn btn-primary">Giriş Yap</button>
        </form>
    </div>
</body>
</html>
