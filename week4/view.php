<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>
<body>
    <?php
    foreach ($query as $isi) {
        if ($isi["Jenis_surat"]=='1'){            
        }
        else if($isi["jeni_surat"]=='2'){
            $js="Usrat Keputusan";
        }else if($isi["jeni_surat"]=='3'){
            $js="Usrat Keputusan";
        }else if{
            $js="Usrat Keputusan";
        }
        ?>
        <tr>
            <td><?php echo $isi['no_surat'];?></td>
            <td><?php echo $js;?></td>
            <td><?php echo $isi['tgl_surat'];?></td>
            <td><?php echo $isi['ttd_surat'];?></td>
    </tr>
    <?php

    }

    ?>
<table class="table caption-top">
  <caption>DATA MAHASISWA</caption>
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Nim</th>
      <th scope="col">Alamat</th>
    </tr>
  </thead>

  <tbody>

    <tr>
      <th scope="row">1</th>
      <td>Nazar</td>
      <td>202002094</td>
      <td>Arab</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Ilham</td>
      <td>202002087</td>
      <td>Amerika</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Lintang</td>
      <td>202002054</td>
      <td>Australia</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ragil</td>
      <td>202002054</td>
      <td>Jerman</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Ananda</td>
      <td>202002054</td>
      <td>Jimbabwe</td>
    </tr>
  </tbody>
</table>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
</html>