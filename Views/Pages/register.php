<!-- Contend -->
<div class="container mt-5">
    <div class="row">
        <div>
            <div class="card">
                <div class="card-header">
                    <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                        <?php if (isset($_SESSION['edit']) && $_SESSION['edit'] == true) : ?>
                            <h3>Edit User</h3>
                            <div class="card-body">
                                <form action="<?= base_url ?>user/update&id=<?= $user->id ?>" method="POST">
                                    <div>
                                        <input class="hidden" type="hidden" name="id" value="<?= $user->id ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your name" value="<?= $user->first_name ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name" value="<?= $user->last_name ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email" value="<?= $user->email ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option value="user" <?= $user->rol == 'user' ? 'selected' : '' ?>>User</option>
                                            <option value="admin" <?= $user->rol == 'admin' ? 'selected' : '' ?>>Admin</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <?php Utils::deleteSession('edit'); ?>
                            </div>
                        <?php else : ?>
                            <h3>Create User</h3>
                            <div class="card-body">
                                <form action="<?= base_url ?>user/save" method="POST">
                                    <div class="mb-3">
                                        <label for="first_name" class="form-label">Name</label>
                                        <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="last_name" class="form-label">Last Name</label>
                                        <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                    </div>
                                    <div class="mb-3">
                                        <label for="role" class="form-label">Role</label>
                                        <select class="form-select" aria-label="Default select example" name="role">
                                            <option value="user">User</option>
                                            <option value="admin">Admin</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                                <?php Utils::deleteSession('register'); ?>
                            </div>
                        <?php endif; ?>
                    <?php else : ?>
                        <h3>Register</h3>
                        <div class="card-body">
                            <form action="<?= base_url ?>user/register" method="POST">
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="first_name" name="first_name" placeholder="Enter your name">
                                </div>
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="last_name" name="last_name" placeholder="Enter your last name">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password">
                                </div>
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                            <?php if (isset($_SESSION['register']) && $_SESSION['register'] == 'complete') : ?>
                                <div class="alert alert-success mt-3" role="alert">
                                    Register complete
                                </div>
                            <?php elseif (isset($_SESSION['register']) && $_SESSION['register'] == 'failed') : ?>
                                <div class="alert alert-danger mt-3" role="alert">
                                    Register failed
                                </div>
                            <?php endif; ?>
                            <?php Utils::deleteSession('register'); ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Contend -->