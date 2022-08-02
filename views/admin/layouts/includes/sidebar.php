<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse"
                href="<?php echo url('admin/thongke/index') ?>">
                <i class="bi bi-grid"></i>
                <span>Statistical</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo url('admin/doanhthu/index') ?>">
                        <i class="bi bi-circle"></i><span>Statistical</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/thongke/index') ?>">
                        <i class="bi bi-circle"></i><span>Turnover</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Dashboard Nav -->
        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>List product</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo url('admin/products/index') ?>">
                        <i class="bi bi-circle"></i><span>View list product</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/products/showCreate') ?>">
                        <i class="bi bi-circle"></i><span>creat new product </span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>List category</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="<?php echo url('admin/categories/create') ?>">
                        <i class="bi bi-circle"></i><span>Create new category</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('admin/categories/index') ?>">
                        <i class="bi bi-circle"></i><span>View list category</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Shop </span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                
                <li>
                    <a href="<?php echo url('admin/oders/index') ?>">
                        <i class="bi bi-circle"></i><span>List Order</span>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('homepage/index') ?>">
                        <i class="bi bi-circle"></i><span>Come back Shop</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->

    </ul>

</aside>