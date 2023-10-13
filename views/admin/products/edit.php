<?php require_once "../views/components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php require_once "../views/components/sidebar.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 325.4px;">
    <!-- Content Header (Page header) -->

    <!-- Main content -->
    <section class="content">
        <form method="post" action="/car/update" enctype="multipart/form-data">

            <input type="hidden" name="_method" value="PATCH">
            <input type="hidden" name="id" value="<?= $car['id'] ?>">


            <?php if (isset($errors['carIsExists'])) : ?>
                <p class="text-danger"><?= $errors['carIsExists'] ?></p>
            <?php endif; ?>

            <div class="card-body">

                <div class="form-group">
                    <label for="carCode">carCode</label>
                    <input type="text" class="form-control" id="carCode" placeholder="Enter CarCode" name="code" value="<?= $car['code'] ?>">

                    <?php if (isset($errors['code'])) : ?>
                        <p class="text-danger"><?= $errors['code'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group">
                    <label for="carName">carName</label>
                    <input type="text" class="form-control" id="carName" placeholder="Enter CarName" name="name" value="<?= $car['name'] ?>">

                    <?php if (isset($errors['name'])) : ?>
                        <p class=" text-danger"><?= $errors['name'] ?></p>
                    <?php endif; ?>

                </div>

                <div class="form-group">
                    <label for="price">price</label>
                    <input type="number" class="form-control" id="price" placeholder="price" name="price" required value="<?= $car['price'] ?>">

                    <?php if (isset($errors['price'])) : ?>
                        <p class=" text-danger"><?= $errors['price'] ?></p>
                    <?php endif; ?>
                </div>

                <div class="form-group d-flex">

                    <textarea name="description" id="description" cols="200" rows="10" placeholder="description"><?= $car['description'] ?></textarea>

                    <?php if (isset($errors['description'])) : ?>
                        <p class="text-danger"><?= $errors['description'] ?></p>
                    <?php endif; ?>
                </div>


                <div class="form-group">
                    <label for="image">image:</label>
                    <input type="file" id="image" placeholder="image" name="image" required value="<?= $car['description'] ?>">
                </div>

                <?php if (isset($errors['image_error'])) : ?>
                    <p class="text-danger"><?= $errors['image_error'] ?></p>
                <?php endif; ?>
            </div>
            <!-- /.card-body -->



            <div class="d-flex w-100 px-4">
                <div>
                    <button type="submit" class="btn btn-primary">update</button>
                </div>

                <div>
                    <a href="/cars" class="btn btn-danger mx-2">cancel</a>
                </div>

            </div>
        </form>
    </section>

</div>


<?php require_once "../views/components/footer.php"; ?>