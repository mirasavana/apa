<!DOCTYPE html>
<html lang="en">
    <?php $this->load->view('_partials/header') ?>
    <?php $this->load->view('_partials/sidenav') ?>


    <!-- ***** Main Banner Area Start ***** -->
    <div class="main-banner" id="top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-content">
                        <div class="thumb">
                            <div class="inner-content">
                                <h4>Lelang Furniture</h4>
                                <span>welcome to lelang furniture, Your Tagline Her!</span>
    
                            </div>
                            <img src="assets/images/sofa-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Sofa</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Sofa</h4>
                                                <p>Berbagai macam jenis sofa bisa anda temukan di Lelang furniture Nanas.</p>
                                            </div>
                                        </div>
                                        <img src="assets/images/sofa.png">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Mesin Cuci</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Mesin Cuci</h4>
                                                <p>Berbagai Pilihan Mesin cuci dengan beragam model dan ukuran
                                                 bisa anda temukan di lelang Furniture Nanas.</p>
                                            </div>
                                        </div>
                                        <img src="assets/images/mesincuci.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Ranjang Kasur</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Ranjang Kasur</h4>
                                                <p>Berbagai Pilihan Ranjang Kasur dengan beragam model dan ukuran
                                                 bisa anda temukan di lelang Furniture Nanas.</p>
                                            </div>
                                        </div>
                                        <img src="assets/images/ranjang-kasur.jpg">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="right-first-image">
                                    <div class="thumb">
                                        <div class="inner-content">
                                            <h4>Meja Kabinet</h4>
                                        </div>
                                        <div class="hover-content">
                                            <div class="inner">
                                                <h4>Meja Kabinet</h4>
                                                <p>Berbagai Pilihan Meja dengan beragam model dan jenis
                                                 bisa anda temukan di lelang Furniture Nanas.</p>
                                            </div>
                                        </div>
                                        <img src="assets/images/meja-kabinet.jpg">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** Men Area Starts ***** -->
    <section class="section" id="men">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-heading">
                        <h2>Furniture Latest.</h2>
                        <span>Details to details is what makes lelang furniture nanas different from the other lelang</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="men-item-carousel">
                        <div class="owl-men-item owl-carousel">
                            <?php foreach($dashboard as $a):?>
                            <div class="item">
                                <div class="thumb">
                                    <div class="hover-content">
                                    </div>
                                    <img src="<?=base_url('upload/barang/'.$a->gambar)?>"; alt="">
                                </div>
                                <div class="down-content">
                                    <h4><?=$a->nama_barang?></h4>
                                    <span>open in <?=$a->harga_awal?></span>
                                    <a href="<?= site_url('page/detail_lelang/'. $a->id_lelang)?>">Detail</a>
                                </div>
                            </div>
                            <?php endforeach?>
                           

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Men Area Ends ***** -->

     <?php $this->load->view('_partials/footer') ?>
</html>