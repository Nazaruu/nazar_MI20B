<?php
require_once('Connection.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</head>

<body>
    <div class="main mt-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header bg-white text-uppercase">
                            <div class="h3 text-center">Add Surat</div>
                        </div>
                        <div class="card-body">
                            <form action="add_proses.php" method="post">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>Nomor Surat</small>
                                            <input type="text" name="no_surat" id="no_surat" class="form-control" placeholder="SK-2021-09001">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <small>Jenis Surat</small>
                                            <select name="jenis_surat" id="jenis_surat" class="form-control">
                                                <option value="">Silahkan Pilih...</option>
                                                <option value="1">Surat Keputusan</option>
                                                <option value="2">Surat Pernyataan</option>
                                                <option value="3">Surat Peminjaman</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Tgl Surat</small>
                                            <input type="date" name="tgl_surat" id="tgl_surat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <small>Ttd Surat</small>
                                            <input type="text" name="ttd_surat" id="ttd_surat" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>Ttd Menyetujui</small>
                                            <input type="text" name="ttd_menyetujui" id="ttd_menyetujui" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 mt-3">
                                        <div class="form-group">
                                            <small>Ttd Mengetahui</small>
                                            <input type="text" name="ttd_mengetahui" id="ttd_mengetahui" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-4">
                                        <button type="submit" name="submit" class="btn btn-info text-white">Add</button>
                                        <a href="view.php" class="btn btn-danger">Cancel</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script> -->
    <script src="assets/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>