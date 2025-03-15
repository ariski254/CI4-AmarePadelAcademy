<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/admin/login.css'); ?>">
</head>

<body>
    <div class="container">
        <div class="login-box">
            <h2 class="text-center mb-4">Login Admin</h2>

            <?php if (session()->getFlashdata('error')): ?>
            <div class="alert alert-danger mt-3">
                <?= session()->getFlashdata('error') ?>
            </div>
            <?php endif; ?>

            <form method="post" action="<?= site_url('auth/login') ?>" class="login-form">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" class="form-control" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <button type="submit" class="btn btn-primary btn-block">Login</button>
            </form>
        </div>
    </div>
</body>

</html>