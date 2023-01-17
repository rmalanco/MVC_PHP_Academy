<div class="container mt-5">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-header">
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                        <h3>Me Profile: <?= $user->first_name . ' ' . $user->last_name ?> <a href="<?= base_url ?>user/edit&id=<?= $user->id ?>" class="btn btn-primary float-end">Edit</a></h3>
                        <div class="card-body">
                            <form action="<?= base_url ?>user/update&id=<?= $user->id ?>" method="POST">
                                <div>
                                    <input class="hidden" type="hidden" name="id" value="<?= $user->id ?>">
                                </div>
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your name" value="<?= $user->first_name ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" value="<?= $user->last_name ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?= $user->email ?>" readonly>
                                </div>
                                <div class="mb-3">
                                    <label for="role" class="form-label">Role</label>
                                    <input type="text" class="form-control" id="role" name="role" placeholder="Enter your role" value="<?= $user->rol ?>" readonly>
                                </div>
                            </form>
                            <?php Utils::deleteSession('edit'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contend -->