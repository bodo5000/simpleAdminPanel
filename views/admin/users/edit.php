<?php require_once "../views/components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once "../views/components/sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 325.4px;">
    <!-- Content Header (Page header) -->
    <?php require_once "../views/components/sidebar.php"; ?>
    <!-- Main content -->
    <section class="content">
        <form method="post" action="/admins/user">

            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">

            <?php if (isset($errors['email_assign'])) : ?>
                <p class="text-danger text-center"><?= $errors['email_assign'] ?></p>
            <?php endif; ?>

            <div class="card-body">

                <div class="form-group">
                    <label for="exampleInputName">Name</label>
                    <input type="text" class="form-control" id="exampleInputName" placeholder="Enter Name" name="name" value="<?= $user['name'] ?>">

                    <?php if (isset($errors['name'])) : ?>
                        <p class="text-danger"><?= $errors['name'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?= $user['email'] ?>">

                    <?php if (isset($errors['email'])) : ?>
                        <p class="text-danger"><?= $errors['email'] ?></p>
                    <?php endif; ?>

                </div>

            </div>
            <!-- /.card-body -->

            <div class="px-4">
                <button type="submit" class="btn btn-primary" name="update">Update</button>
            </div>
        </form>
    </section>

</div>


<?php require_once "../views/components/footer.php"; ?>