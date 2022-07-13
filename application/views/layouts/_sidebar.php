<!-- ============================================================== -->
<!-- Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->
<aside class="left-sidebar" data-sidebarbg="skin6">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar" data-sidebarbg="skin6">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <!-- Submemu Dashboard -->
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'home') ? 'active' : ''; ?>" href="<?= base_url('home') ?>" aria-expanded="false">
                        <i data-feather="home" class="feather-icon"></i>
                        <span class="hide-menu">Dashboard</span>
                    </a>
                </li>

                <li class="list-divider"></li>

                <!-- Submemu Kajian Resiko -->
                <li class="nav-small-cap"><span class="hide-menu">Kajian Resiko</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'kajian_resikos' || $this->uri->segment(1) === 'kapasitas_kajian_resikos') ? 'active' : ''; ?>" href="<?= base_url('kajian_resikos') ?>" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">List Data</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link <?= ($this->uri->segment(1) === 'kajian_resiko') ? 'active' : ''; ?>" href="<?= base_url('kajian_resiko') ?>" aria-expanded="false">
                            <i data-feather="file-plus" class="feather-icon"></i>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                    </li>
                <?php endif ?>

                <li class="list-divider"></li>

                <!-- Submemu Kuesioner Kajian Resiko -->
                <li class="nav-small-cap"><span class="hide-menu">Kuesioner Kajian Resiko</span></li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'kuesioner_kajian_resikos' || $this->uri->segment(1) === 'kapasitas_kuesioner_kajian_resikos') ? 'active' : ''; ?>" href="<?= base_url('kuesioner_kajian_resikos') ?>" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">List Data</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item">
                        <a class="sidebar-link <?= ($this->uri->segment(1) === 'kuesioner_kajian_resiko') ? 'active' : ''; ?>" href="<?= base_url('kuesioner_kajian_resiko') ?>" aria-expanded="false">
                            <i data-feather="file-plus" class="feather-icon"></i>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                    </li>
                <?php endif ?>

                <li class="list-divider"></li>

                <!-- Submemu Pelaporan -->
                <li class="nav-small-cap"><span class="hide-menu">Pelaporan Awal</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'pelaporans') ? 'active' : ''; ?>" href="<?= base_url('pelaporans') ?>" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">List Data</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item"> 
                        <a class="sidebar-link <?= ($this->uri->segment(1) === 'pelaporan') ? 'active' : ''; ?>" href="<?= base_url('pelaporan') ?>" aria-expanded="false">
                            <i data-feather="file-plus" class="feather-icon"></i>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                    </li>
                <?php endif ?>
                
                <li class="list-divider"></li>

                <!-- Submemu Penilaian -->
                <li class="nav-small-cap"><span class="hide-menu">Penilaian Cepat</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'penilaians') ? 'active' : ''; ?>" href="<?= base_url('penilaians') ?>" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">List Data</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item"> 
                        <a class="sidebar-link <?= ($this->uri->segment(1) === 'penilaian') ? 'active' : ''; ?>" href="<?= base_url('penilaian') ?>" aria-expanded="false">
                            <i data-feather="file-plus" class="feather-icon"></i>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                    </li>
                <?php endif ?>
                
                <li class="list-divider"></li>

                <!-- Submemu Perkembangan -->
                <li class="nav-small-cap"><span class="hide-menu">Perkembangan</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'cabangs') ? 'active' : ''; ?>" href="<?= base_url('cabangs') ?>" aria-expanded="false">
                        <i data-feather="file-text" class="feather-icon"></i>
                        <span class="hide-menu">List Data</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item"> 
                        <a class="sidebar-link <?= ($this->uri->segment(1) === 'cabang') ? 'active' : ''; ?>" href="<?= base_url('cabang') ?>" aria-expanded="false">
                            <i data-feather="file-plus" class="feather-icon"></i>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                    </li>
                <?php endif ?>
                
                <li class="list-divider"></li>
                
                <!-- Submemu Manajemen Operator -->
                <li class="nav-small-cap"><span class="hide-menu">Operator</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'users') ? 'active' : ''; ?>" href="<?= base_url('users') ?>" aria-expanded="false">
                        <i data-feather="users" class="feather-icon"></i>
                        <span class="hide-menu">List Data</span>
                    </a>
                </li>
                <?php if ($this->session->userdata('role') == 'admin') : ?>
                    <li class="sidebar-item"> 
                        <a class="sidebar-link <?= ($this->uri->segment(1) === 'register') ? 'active' : ''; ?>" href="<?= base_url('register') ?>" aria-expanded="false">
                            <i data-feather="user-plus" class="feather-icon"></i>
                            <span class="hide-menu">Tambah Data</span>
                        </a>
                    </li>
                <?php endif ?>
                
                <!-- <li class="list-divider"></li> -->

                <!-- Submemu Extra -->
                <!-- <li class="nav-small-cap"><span class="hide-menu">Extra</span></li>
                <li class="sidebar-item"> 
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'home') ? 'active' : ''; ?>" href="#" aria-expanded="false">
                        <i data-feather="github" class="feather-icon"></i>
                        <span class="hide-menu">Repository</span>
                    </a>
                </li>
                <li class="sidebar-item">
                    <a class="sidebar-link <?= ($this->uri->segment(1) === 'about') ? 'active' : ''; ?>" href="<?= base_url('about') ?>" aria-expanded="false">
                        <i data-feather="info" class="feather-icon"></i>
                        <span class="hide-menu">About us</span>
                    </a>
                </li> -->
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>
<!-- ============================================================== -->
<!-- End Left Sidebar - style you can find in sidebar.scss  -->
<!-- ============================================================== -->