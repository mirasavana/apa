<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/header'); ?>
</head>

<body>

    <br><br>
    <div class="container col-5 m-4 mx-auto justify-content-center">
        <div class="card p-5 ">
            <div style="color:#477a7d">
                <h5 class="text-center">Sign In</h1>
                    <hr>
            </div>
            <div class="container my-3 justify-content-end">
                <form method="POST" action="">
                    <div class="form-group">
                        <input type="text" class="form-control" id="email" name="email" required maxlength="100" placeholder="Email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control " id="password" name="password" required maxlength="100" placeholder="Password">
                    </div>
                    <div class="form-group text-danger">
                        <?= $this->session->flashdata('error') ?>
                    </div>
                    <button type="submit" class="btn btn-success" style="width: 100%;" value="Login"><small>Lanjutkan</small> <i class="fa-solid fa-right-to-bracket"></i></button>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('_partials/footer'); ?>
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
            icon: 'success',
            title: '<?= $this->session->flashdata('message') ?>'
        })
    </script>
<?php endif ?>