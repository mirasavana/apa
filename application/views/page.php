<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/header') ?>
</head>

<body>
    <main class="main">
       

        <div class="content">
            <div class="container col-12 row mx-1 py-3 text-center">
                <?php foreach ($lelang as $b) : ?>
                    <div class="col-3 p-4 card " style="width: 15rem;">
                        <div style="height: 18rem;">
                            <img src="<?= empty($b->gambar) ? base_url('assets/images/no_image.png')  : base_url('upload/barang/' . $b->gambar) ?>" class="card-img-top">
                        </div>
                        <div class="card-body">
                           
                            <h6 class="card-title"><?= $b->nama_barang ?></h6>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">IDR <?= number_format($b->harga_awal, 2) ?></li>
                            <li class="list-group-item"><?= $b->total_penawaran ?> penawaran</li>
                        </ul>
                        <div class="card-body">
                            <a class="btn btn-info" role="button" href="<?= site_url('page/detail_lelang/' . $b->id_lelang) ?>">
                                <small>Ajukan Penawaran</small>
                            </a>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
            <?php $this->load->view('_partials/footer') ?>
        </div>
    </main>
</body>

</html>


<?php if ($this->session->flashdata('message')) : ?>
    <script>
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

        Toast.fire({
            icon: 'info',
            title: '<?= $this->session->flashdata('message') ?>'
        })
    </script>
<?php endif ?>