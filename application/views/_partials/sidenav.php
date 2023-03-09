<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav d-md-flex align-items-center">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                     <img src="<?= base_url('assets/images/logo.jpg') ?>" style="margin-left :20px;" width="100%">
                    </a>
                    <div class="col-3">
                       <form method="post" action="<?= site_url('page/cari') ?>">
                           <div class="input-group">
                               <input type="text" class="form-control" placeholder="Cari di Lelang Furniture" aria-label="Cari di Lelang Furniture" id="cari" name="cari" aria-describedby="button-addon2">
                               <div class="input-group-append">
                                   <!-- <i class="fa-solid fa-magnifying-glass"></i> -->
                                   <input type="submit" class="btn btn-info" id="search" value="Cari">
                               </div>
                           </div>
                       </form>
                   </div>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav mx-auto" style="margin-top:-0px;">
                            <li class="scroll-to-section"><a href="<?= site_url('') ?>" class="active">Home</a></li>
                            <?php if ($activeUser) : ?>
                            <li class="scroll-to-section"><a href="<?= site_url('page/penawaran') ?>">Penawaran</a></li>
                            <li class="scroll-to-section"><a href="<?= site_url('page/lelang') ?>">Pemenang Lelang</a></li>
                            <li class="scroll-to-section"><a href="<?= site_url('page/edit') ?>">Hi, <?= $activeUser->nama; ?></a></li>
                            <li class="scroll-to-section"><a href="<?= site_url('page/change') ?>">Change</a></li>
                            <li class="scroll-to-section"><a href="<?= site_url('page/logout') ?>">Logout</a></li>
                            <?php endif ?>
                            <?php if (!$activeUser) : ?>
                            <li class="scroll-to-section"><a href="<?= site_url('page/login') ?>">Login</a></li>
                            <li class="scroll-to-section"><a href="<?= site_url('page/register') ?>">Register</a></li>
                            <?php endif ?>
                        </ul>        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->