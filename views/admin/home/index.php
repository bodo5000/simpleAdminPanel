<?php require_once "../views/components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once "../views/components/sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 325.4px;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">welcome <span class="text-Primary"><?= $_SESSION['user']['email'] ?></span></h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Users</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <div class="row m-3">
        <a href="/admins/users" class="btn btn-success">Add new Admin</a>
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
                <div id="example2_wrapper" class="dataTables_wrapper dt-bootstrap4">
                    <div class="row">
                        <div class="col-sm-12 col-md-6"></div>
                        <div class="col-sm-12 col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <table id="example2" class="table table-bordered table-hover dataTable dtr-inline" aria-describedby="example2_info">
                                <thead>
                                    <tr>
                                        <th>id</th>
                                        <th>name</th>
                                        <th>email</th>
                                        <th>role</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- //foreach ($users as $user) : ?> -->
                                    <?php foreach ($users as $user) : ?>
                                        <tr class="odd">
                                            <td class="dtr-control sorting_1" tabindex="0">
                                                <?= $user['id'] ?>
                                            </td>
                                            <td>
                                                <?= $user['name'] ?>
                                                <!-- $user['name'] ?> -->
                                            </td>
                                            <td>
                                                <?= $user['email'] ?>
                                            </td>

                                            <td>
                                                <?= $user['role'] ?>
                                            </td>

                                            <td class="d-flex">
                                                <div>
                                                    <a href="/admins/user?id=<?= $user['id'] ?>" class="btn btn-primary">Edit</a>
                                                </div>

                                                <form action="admins/user" method="post">
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <input type="hidden" name="id" value="<?= $user['id'] ?>">
                                                    <div class="px-4">
                                                        <button type="submit" class="btn btn-danger" name="update">Delete</button>
                                                    </div>
                                                </form>
                                            </td>

                                        </tr>
                                        <!-- // endforeach; ?> -->
                                    <?php endforeach; ?>
                                </tbody>

                            </table>
                        </div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
    </section>

</div>


<?php require_once "../views/components/footer.php"; ?>