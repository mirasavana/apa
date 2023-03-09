<aside class="side-nav" style= "height:auto; min-height : 100vh;">
    <div class="brand">
        <h2>
            <img src="<?= base_url('assets/images/logo-1.png') ?>" style="margin-right : 40px;" width="100%">
            <h3>Lelang Furniture</h3>
        </h2>
    </div>
    <nav>
        <a href="<?= site_url('backend')?>">Dashboard</a>
        <?php if ($activeUser->level == "Admin") : ?>
        <a href="<?= site_url('backend/users')?>">Kelola User</a>
        <a href="<?= site_url('backend/masyarakat')?>">Masyarakat</a>
        <?php endif ?>

        <?php if($activeUser->level == "Petugas") : ?>
        <a href="<?= site_url('backend/barang')?>"> Kelola Barang</a>
        <a href="<?= site_url('backend/lelang')?>">Lelang</a>
        <a href="<?= site_url('backend/penawaran')?>">Penawaran</a>
        <a href="<?= site_url('backend/laporan')?>">Laporan Pemenang</a>
        <?php endif ?>

        <a href="<?= site_url('backend/auth/logout') ?>">Logout</a>
    </nav>
</aside>