<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>

    <?php if (session()->has('error')): ?>
        <p style="color:red;"><?= session()->get('error') ?></p>
    <?php endif; ?>

    <form action="<?= base_url('login'); ?>" method="post">
        <label for="username">Username:</label>
        <input type="text" name="username" value="<?= old('username'); ?>"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Login">
    </form>
</body>
</html>