<!-- Sidebar -->
<ul class="sidebar navbar-nav">
    <li class="nav-item <?php echo $this->uri->segment(1) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin') ?>">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span>Home</span>
        </a>
    </li>

    <li class="nav-item <?php echo $this->uri->segment(1) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/products/add') ?>">
        <i class="fa fa-plus-circle" aria-hidden="true"></i>
            <span>Tambah Data</span>
        </a>
    </li>
    
    <li class="nav-item <?php echo $this->uri->segment(1) == '' ? 'active': '' ?>">
        <a class="nav-link" href="<?php echo site_url('admin/products/index') ?>">
        <i class="fa fa-list-alt" aria-hidden="true"></i>
            <span>List Data</span>
        </a>
    </li>

  
</ul>




