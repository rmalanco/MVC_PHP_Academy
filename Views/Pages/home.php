 <!-- Contend -->
 <div class="container">
     <div class="row">
         <div class="col-12">
             <div class="container-fluid mt-2">
                 <div class="row">
                     <div class="col-12">
                         <!-- boton de crear usuario -->
                         <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                             <a href="<?= base_url ?>user/create" class="btn btn-primary mb-2">Create User</a>
                         <?php endif; ?>
                         <table class=" table table-sm">
                             <thead>
                                 <tr>
                                     <th scope="col">#</th>
                                     <th scope="col">First Name</th>
                                     <th scope="col">Last Name</th>
                                     <th scope="col">Email</th>
                                     <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true) : ?>
                                         <th scope="col">Action</th>
                                     <?php endif; ?>
                                 </tr>
                             </thead>
                             <tbody>
                                 <?php while ($user = $users->fetch_object()) : ?>
                                     <tr>
                                         <th scope="row"><?= $user->id ?></th>
                                         <td><?= $user->first_name ?></td>
                                         <td><?= $user->last_name ?></td>
                                         <td><?= $user->email ?></td>
                                         <td><?= $user->rol ?></td>
                                         <?php if (isset($_SESSION['admin']) && $_SESSION['admin'] == true && $_SESSION['user']->id != $user->id) : ?>
                                             <td>
                                                 <a href="<?= base_url ?>user/edit&id=<?= $user->id ?>"><i class="fas fa-edit me-2"></i></a>
                                                 <a href="<?= base_url ?>user/delete&id=<?= $user->id ?>"><i class="fas fa-trash-alt me-2"></i></a>
                                             </td>
                                         <?php endif; ?>
                                     </tr>
                                 <?php endwhile; ?>
                             </tbody>
                         </table>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- End Contend -->