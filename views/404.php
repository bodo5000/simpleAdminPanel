<?php include "components/navbar.php" ?>
<!-- /.navbar -->

<!-- Main Sidebar Container -->
<?php if (!isset($_SESSION['user'])) : ?>
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
<?php else : ?>
    <?php require_once "../views/components/sidebar.php"; ?>
<?php endif; ?>

<div class="error-page">
    <h2 class="headline text-warning"> 404</h2>

    <div class="error-content">
        <h3><i class="fas fa-exclamation-triangle text-warning"></i> Oops! Page not found.</h3>

        <p>
            We could not find the page you were looking for.
            Meanwhile, you may
            <a href="<?= isset($_SESSION['user']) ? '/home' : '/' ?>">
                return to dashboard</a>
            or try using the search form.
        </p>
    </div>
    <!-- /.error-content -->
</div>