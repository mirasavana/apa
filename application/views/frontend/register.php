<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('_partials/header'); ?>
</head>


    <div class="container col-5 m-4 mx-auto justify-content-center">
        <div class="card p-5 ">
            <div style="color:#477a7d">
                <h5 class="text-center">Form Registrasi</h1>
                    <hr>
            </div>
            <div class="card-body">
                <form action="" method="POST" autocomplete="off">
                    <div class="form-group">
                        <label for="nik"><strong>NIK</strong></label>
                        <input type="text" class="form-control" name="nik" required maxlength="20" />
                    </div>
                    <div class="form-group">
                        <label for="nama"><strong>Nama</strong></label>
                        <input type="text" class="form-control" name="nama" required maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label for="jk"><strong>Jenis Kelamin</strong></label>
                        <select name="jk" id="jk" class="form-control" required>
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="no_hp"><strong>No Kontak</strong></label>
                        <input type="text" class="form-control" name="no_hp" required maxlength="50" />
                    </div>
                    <div class="form-group">
                        <label for="alamat"><strong>Alamat</strong></label>
                        <textarea class="form-control" name="alamat" required maxlength="250"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="email"><strong>Email</strong></label>
                        <input type="email" class="form-control" name="email" required maxlength="100" />
                    </div>
                    <div class="form-group">
                        <label for="password"><strong>Password</strong></label>
                        <input type="password" class="form-control" id=" password" name="password" required maxlength="100">
                    </div>
                    <div class="float-right">
                        <button type="submit" id="save" value="save" class="btn btn-success"><i class="fa-regular fa-floppy-disk"></i> Lanjutkan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php $this->load->view('_partials/footer'); ?>
</body>

</html>

