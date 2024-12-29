<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Hakkında Düzenle</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?= base_url('css/styles.css'); ?>" rel="stylesheet" />
    <style>
        body {
            background-color: #f8f9fa;
            font-family: 'Arial', sans-serif;
        }

        .container {
            margin-top: 50px;
        }

        h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            font-weight: 600;
            text-align: center;
        }

        .form-label {
            font-size: 1.2rem;
            font-weight: 500;
        }

        .form-control {
            font-size: 1rem;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            box-shadow: 0 0 8px rgba(0, 123, 255, 0.5);
            border-color: #007bff;
        }

        .btn-primary {
            background-color: #007bff;
            border: none;
            padding: 10px 20px;
            font-size: 1.1rem;
            border-radius: 8px;
            width: 100%;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .card {
            background-color: #fff;
            padding: 30px;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            margin-top: 20px;
        }

        .alert {
            margin-top: 20px;
        }

        /* Arka plan fotoğrafı kaldırıldı */
        .header-bg {
            display: none;
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Hakkında Sayfasını Düzenle</h2>

        <div class="card">
            <form method="post" action="<?= base_url('admin/update-about'); ?>">
                <?= csrf_field(); ?> <!-- CSRF token'ı -->
                <div class="mb-3">
                    <label for="content" class="form-label">İçerik</label>
                    <textarea name="content" id="content" class="form-control" rows="6" required><?= esc($about['content']); ?></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </form>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
