<?php require_once "../views/components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 325.4px;">
    <!-- Content Header (Page header) -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">


        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="/sessions" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>
                            Login
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/register" class="nav-link">
                        <i class="nav-icon fas fa-th"></i>
                        <p>
                            Register
                        </p>
                    </a>
                </li>

            </ul>
        </nav>
    </aside>
    <!-- Main content -->
    <section class="content">
        <form method="post" action="/register">

            <?php if (isset($errors['email_assign'])) : ?>
                <p class="text-danger text-center"><?= $errors['email_assign'] ?></p>
            <?php endif; ?>
            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name">

                    <?php if (isset($errors['name'])) : ?>
                        <p class="text-danger"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email">

                    <?php if (isset($errors['email'])) : ?>
                        <p class="text-danger"><?= $errors['email'] ?></p>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">

                    <?php if (isset($errors['password'])) : ?>
                        <p class="text-danger"><?= $errors['password'] ?></p>
                    <?php endif; ?>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Register</button>
            </div>
        </form>
    </section>

</div>


<?php require_once "../views/components/footer.php"; ?>