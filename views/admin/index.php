<?php include "../views/components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
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

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper" style="min-height: 325.4px;">
    <!-- Content Header (Page header) -->
    <?php require_once '../views/components/header.php' ?>
    <!-- /.content-header -->
</div>


<?php include "../views/components/footer.php"; ?>