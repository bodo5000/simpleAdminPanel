<?php require_once "../views/components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once "../views/components/sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 325.4px;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <div class="card card-widget">

            <div class="card-body">
                <div class="mb-3 text-center">
                    <img class="img-fluid pad" src="../assets/dist/img/<?= $car['image'] ?>" alt="Photo" width="400px" height="400px">
                </div>

                <div class="text-center">
                    <span>name: <span class="text-primary"><?= $car['name'] ?> </span> </span>
                    <p> description: <span class="text-green"><?= $car['description'] ?> </span></p>
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer card-comments">

            </div>
            <!-- /.card-footer -->
            <div class="card-footer d-flex justify-content-center">
                <div class="mb-4">
                    <a href="/cars" class="btn btn-success mx-2">return to cars</a>
                    <a href="/car/edit?id=<?= $car['id'] ?>" class="btn btn-primary mx-2">Edit</a>
                </div>

                <form action="/car/delete" method="post">
                    <input type="hidden" name="_method" value="DELETE">
                    <input type="hidden" name="id" value="<?= $car['id'] ?>">
                    <div class="px-4">
                        <button type="submit" class="btn btn-danger" name="update">Delete</button>
                    </div>

                </form>
            </div>
            <!-- /.card-footer -->
        </div>
    </section>

</div>


<?php require_once "../views/components/footer.php"; ?>