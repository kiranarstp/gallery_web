<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Profile</title>
    <!-- Tambahkan link CSS jika diperlukan -->
</head>
<body>
    <h1>User Profile</h1>
    <?php if(isset($_SESSION['Username'])): ?>
        <p>Selamat datang di halaman profil Anda, <?php echo $_SESSION['Username']; ?>!</p>
    <?php endif; ?>
    <div class="topbar-profile d-flex align-items-center">
        <div class="dropdown">
            <a href="<?= site_url('Login/authenticate') ?>" class="profile-icon" role="button" aria-expanded="false">
                <i class="bi bi-person-circle"></i>
            </a>
            <?php if(isset($_SESSION['Username'])): ?>
                <span><?php echo $_SESSION['Username']; ?></span>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
