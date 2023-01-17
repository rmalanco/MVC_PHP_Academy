<!-- Menu -->
<header>
    <div class="container-fluid bg-dark text-white">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <div class="container-fluid">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/27/PHP-logo.svg/711px-PHP-logo.svg.png?20180502235434" alt="php" width="40" height="24" class="d-inline-block align-text-top me-2">
                <a href="<?= base_url ?>" class="nav-link active">Example MVC</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a href="<?= base_url ?>" class="nav-link active">Home</a>
                    </div>

                    <?php if (isset($_SESSION['admin'])) : ?>
                        <div class="d-flex ms-auto">
                            <a href="<?= base_url ?>user/profile" class="nav-link active me-2">Profile</a>
                            <a href="<?= base_url ?>user/logout" class="nav-link active me-2">Logout</a>
                        </div>
                    <?php elseif (isset($_SESSION['user'])) : ?>
                        <div class="d-flex ms-auto">
                            <a href="<?= base_url ?>user/profile" class="nav-link active me-2">Profile</a>
                            <a href="<?= base_url ?>user/logout" class="nav-link active me-2">Logout</a>
                        </div>
                    <?php else : ?>
                        <div class="d-flex ms-auto">
                            <a href="<?= base_url ?>login/index" class="nav-link active me-2">Login</a>
                            <a href="<?= base_url ?>register/index" class="nav-link active me-2">Register</a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- End Menu -->