<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title><?= $result_pengantin->nama_pria ?> & <?= $result_pengantin->nama_wanita ?></title>
  <meta property="og:description" content="Undangan pernikahan online pasangan <?= $result_pengantin->nama_pria ?> & <?= $result_pengantin->nama_wanita ?>">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="../../adminlte/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <link rel="stylesheet" href="https://unpkg.com/aos@2.3.0/dist/aos.css" />
  <link rel="stylesheet" href="../../../../assets/css/theme/theme3.css" />
</head>

<body>
  <div class="background">
    <div class="blue"></div>
    <div class="pink"></div>
  </div>
  <!-- navbar -->
  <nav id="mainNav">
    <ul>
      <li>
        <a class="active" href="#home"><i class="icon_home"></i></a>
      </li>
      <li>
        <a href="#pengantin"><i class="icon_pengantin"></i></a>
      </li>
      <li>
        <a href="#acara"><i class="icon_acara"></i></a>
      </li>
      <li>
        <a href="#ct"><i class="icon_ct"></i></a>
      </li>
      <li>
        <a href="#galery"><i class="icon_img"></i></a>
      </li>
      <li>
        <a href="#story"><i class="icon_story"></i></a>
      </li>
      <li>
        <a href="#tamu"><i class="icon_kehadiran"></i></a>
      </li>
    </ul>
  </nav>
  <!-- end navbar -->

  <!-- Cover -->
  <div class="cover cover1">
    <div class="cover-container">
      <div class="cover-content" style="background-image: url(/../../../../../assets/img/order/<?= $result_pengantin->img_berdua ?>)">
        <div class="box">
          <div class="header-row">
            <h3>
              Kepada Yth <br />
              Bapak/Ibu/Saudara/i
            </h3>
            <h4><?= $nama_tamu ?></h4>
          </div>
          <p>
            Kami Turut Mengundang Bapak/Ibu/Saudara/i <br />
            untuk hadir diacara pernikahan kami
          </p>
          <h1>
            <div class="color2"><?= $result_pengantin->nama_pria ?></div>
            <div class="and">&</div>
            <div class="color1"><?= $result_pengantin->nama_wanita ?></div>
          </h1>
          <?php $s = strtotime("$result_detail->waktu_resepsi $result_detail->tgl_resepsi"); ?>
          <div class="tgl"><?= date('d F Y', $s) ?></div>
          <div class="btn_open close-cover">
            <i class="icon_open"></i>
            Open
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Cover -->

  <!-- header -->
  <header id="home" class="page-scroll">
    <div class="background" style="background-image: url(/../../../../../assets/img/order/<?= $result_pengantin->img_berdua ?>)"></div>
    <div class="text">
      <div class="heading">Undangan Pernikahan</div>
      <h1>
        <div class="color2"><?= $result_pengantin->nama_pria ?></div>
        <div class="and">&</div>
        <div class="color1"><?= $result_pengantin->nama_wanita ?></div>
      </h1>
      <?php $s = strtotime("$result_detail->waktu_resepsi $result_detail->tgl_resepsi"); ?>
      <div class="tgl"><?= date('d F Y', $s) ?></div>
      <div class="header-row">
        <h3>
          Kepada Yth <br />
          Bapak/Ibu/Saudara/i
        </h3>
        <h4><?= $nama_tamu ?></h4>
      </div>
    </div>
  </header>
  <!-- end Header -->

  <!-- pengantin -->
  <section class="layout pengantin page-scroll" id="pengantin">
    <div class="heading2" data-aos="fade-up">Pengantin Pria dan Wanita</div>
    <div class="boxContainer">
      <div class="box" data-aos="fade-right">
        <div class="img" style="background-image: url(../../../../assets/img/order/<?= $result_pengantin->img_pria ?>)">
          <img src="../../../../assets/img/theme/theme3/bunga.png" class="pria" alt="" />
        </div>
        <div class="panggilan">- <?= $result_pengantin->panggilan_pria ?> -</div>
        <div class="name"><?= $result_pengantin->nama_pria ?></div>
        <div class="des">
          Putra ke <?= $result_pengantin->putra_ke ?> dari pasangan <br />
          Bapak <?= $result_pengantin->ayah_pria ?> dan Ibu <?= $result_pengantin->ibu_pria ?>
        </div>
        <a target="_blank" href="<?= $result_pengantin->ig_pria ?>" class="ig">
          <i class="icon_ig"></i>
          <?= $result_pengantin->name_ig_pria ?>
        </a>
      </div>
      <div class="box" data-aos="fade-left">
        <div class="img" style="background-image: url(../../../../assets/img/order/<?= $result_pengantin->img_wanita ?>)">
          <img src="../../../../assets/img/theme/theme3/bunga.png" class="wanita" alt="" />
        </div>
        <div class="panggilan">- <?= $result_pengantin->panggilan_wanita ?> -</div>
        <div class="name"><?= $result_pengantin->nama_wanita ?></div>
        <div class="des">
          Putri ke <?= $result_pengantin->putri_ke ?> dari pasangan <br />
          Bapak <?= $result_pengantin->ayah_wanita ?> dan Ibu <?= $result_pengantin->ibu_wanita ?>
        </div>
        <a target="_blank" href="<?= $result_pengantin->ig_wanita ?>" class="ig">
          <i class="icon_ig"></i>
          <?= $result_pengantin->name_ig_wanita ?>
        </a>
      </div>
    </div>
  </section>
  <!-- end Pengantin -->

  <!-- Acara -->
  <section class="layout acara page-scroll" id="acara">
    <div class="heading2" data-aos="fade-up">Acara</div>
    <div class="boxContainer">
      <img src="../../../../assets/img/theme/theme3/bunga2.png" class="variasi1" alt="" />
      <img src="../../../../assets/img/theme/theme3/bunga3.png" class="variasi2" alt="" />
      <div class="box" data-aos="fade-right">
        <div class="title">Akad Nikah</div>
        <?php $s = strtotime("$result_detail->waktu_akad $result_detail->tgl_akad"); ?>
        <div class="des">
          <?= date('l', $s) ?>, <?= date('d F Y', $s) ?> <br />
          <?= $result_detail->waktu_akad ?>
          <br />
          <br />
          <?= $result_detail->tempat_akad ?>
          <br />
          <?= $result_detail->alamat_akad ?>
        </div>
        <a target="_blank" href="<?= $result_detail->maps_akad ?>" class="btn_maps">
          <i class="icon_maps"></i>
          Maps
        </a>
      </div>
      <div class="box" data-aos="fade-left">
        <div class="title">Resepsi</div>
        <?php $s = strtotime("$result_detail->waktu_resepsi $result_detail->tgl_resepsi"); ?>
        <div class="des">
          <?= date('l', $s) ?>, <?= date('d F Y', $s) ?> <br />
          <?= $result_detail->waktu_resepsi ?>
          <br />
          <br />
          <?= $result_detail->tempat_resepsi ?>
          <br />
          <?= $result_detail->alamat_akad ?>
        </div>
        <a target="_blank" href="<?= $result_detail->maps_resepsi ?>" class="btn_maps">
          <i class="icon_maps"></i>
          Maps
        </a>
      </div>
    </div>
  </section>
  <!-- End Acara -->

  <!-- Countdown -->
  <section class="layout ct page-scroll" id="ct">
    <div class="heading2" data-aos="fade-up">Countdown</div>
    <div class="boxContainer">
      <div class="box" data-aos="fade-right">
        <h3 id="hari"></h3>
        <p>Hari</p>
      </div>
      <div class="box" data-aos="fade-up">
        <h3 id="jam"></h3>
        <p>Jam</p>
      </div>
      <div class="box" data-aos="fade-up">
        <h3 id="menit"></h3>
        <p>Menit</p>
      </div>
      <div class="box" data-aos="fade-left">
        <h3 id="detik"></h3>
        <p>Detik</p>
      </div>
    </div>
    <div class="ct-stop" id="stop" data-aos="fade-up">Acara Sudah Dimulai</div>
  </section>
  <!-- End Countdown -->

  <!-- galery -->
  <section class="layout galery page-scroll" id="galery">
    <div class="heading2" data-aos="fade-up">Galery</div>
    <div class="boxContainer">
      <?php foreach ($result_galery as $g) : ?>
        <figure data-aos="fade-up">
          <img src="../../../../assets/img/galery/<?= $g->img ?>" alt="galery-pict" />
        </figure>
      <?php endforeach; ?>
    </div>
  </section>
  <!-- end galery -->

  <!-- video -->
  <?php if ($result->paket_id > 1) : ?>
    <section class="layout video" id="video">
      <div class="heading" data-aos="fade-up">Video</div>
      <?= $result_tambahan->video ?>
    </section>
  <?php endif; ?>
  <!--end video -->
  <!-- Streaming -->
  <?php if ($result->paket_id > 1) : ?>
    <section class="layout live" id="live">
      <div class="heading" data-aos="fade-up">Live Streaming</div>
      <?= $result_tambahan->live ?>
    </section>
  <?php endif; ?>
  <!--end Streaming -->
  <!-- 3dRoom -->
  <?php if ($result->paket_id == 3) : ?>
    <section class="layout 3droom" id="3droom">
      <div class="heading" data-aos="fade-up">3D ROOM</div>
      <?= $result_tambahan->link_room ?>
    </section>
  <?php endif; ?>
  <!--end 3dRoom -->

  <!-- kisah cinta -->
  <div class="layout story page-scroll" id="story">
    <div class="heading2" data-aos="fade-up">Kisah Cinta</div>
    <div class="box" id="slide1" data-aos="fade-up">
      <div class="text">
        <div class="title">Pertama Bertemu</div>
        <p>
          <?= $result_story->pertama ?>
        </p>
      </div>
      <img src="../../../../../assets/img/story/<?= $result_story->img_pertama ?>" alt="" />
    </div>
    <div class="box hidden" id="slide2" data-aos="fade-up">
      <div class="text">
        <div class="title">Menyatakan Cinta</div>
        <p>
          <?= $result_story->kedua ?>
        </p>
      </div>
      <img src="../../../../../assets/img/story/<?= $result_story->img_kedua ?>" alt="" />
    </div>
    <div class="box hidden" id="slide3" data-aos="fade-up">
      <div class="text">
        <div class="title">Bertunangan</div>
        <p>
          <?= $result_story->ketiga ?>
        </p>
      </div>
      <img src="../../../../../assets/img/story/<?= $result_story->img_ketiga ?>" alt="" />
    </div>
    <div class="list" data-aos="fade-up">
      <div class="item pertama active">Pertama Kenal</div>
      <div class="item kedua">Menyatakan Cinta</div>
      <div class="item ketiga">Tunangan</div>
    </div>
  </div>
  <!-- end kisah cinta -->

  <!-- Quete -->
  <section class="quete layout" id="quete">
    <div class="boxContainer">
      <p data-aos="flip-up">
        "Tidak ada solusi yang lebih baik bagi dua insan yang saling mencintai di banding pernikahan."
        <br />
        <br />
        HR. Ibnu Majah
      </p>
      <img src="../../../../assets/img/theme/theme3/bunga4.png" class="variasi1" alt="" />
      <img src="../../../../assets/img/theme/theme3/bunga5.png" class="variasi2" alt="" />
    </div>
  </section>
  <!-- end Quete -->

  <!-- buku tamu -->
  <section class="tamu layout page-scroll" id="tamu">
    <div class="heading2" data-aos="fade-up">Buku Tamu</div>
    <?php if ($tamu) : ?>
      <form action="/ucapan/store" method="POST" data-aos="fade-up">
        <?= csrf_field() ?>
        <input type="hidden" name="tamu" value="<?= $result_tamu->nama ?>" />
        <input type="hidden" name="link" value="<?= $link ?>" />
        <input type="hidden" name="id" value="<?= $result->id ?>" />
        <label for="name">Nama</label>
        <input type="text" class="form-style" name="name" placeholder="Nama" value="<?= $result_tamu->nama ?>" required />
        <label for="name">Jumlah</label>
        <input type="number" class="form-style" name="jumlah" placeholder="Jumlah" required />
        <label for="kehadiran">Kehadiran</label>
        <select name="ket" id="ket" class="form-style" id="kehadiran" required>
          <option value="">- Kehadiran -</option>
          <option value="1">Hadir</option>
          <option value="2">Tidak Hadir</option>
        </select>
        <label for="pesan">Pesan</label>
        <textarea name="pesan" class="form-style" id="pesan" cols="30" rows="10" placeholder="Pesan..." required></textarea>
        <button type="submit" class="btn_send">
          <i class="icon_send"></i>
          Kirim
        </button>
      </form>
    <?php else : ?>
      <form action="/ucapan/store" method="POST" data-aos="fade-up">
        <?= csrf_field() ?>
        <input type="hidden" name="id" value="<?= $result->id ?>" />
        <label for="name">Nama</label>
        <input type="text" class="form-style" name="name" placeholder="Nama" required />
        <label for="name">Jumlah</label>
        <input type="number" class="form-style" name="jumlah" placeholder="Jumlah" required />
        <label for="kehadiran">Kehadiran</label>
        <select name="ket" id="ket" class="form-style" id="kehadiran" required>
          <option value="">- Kehadiran -</option>
          <option value="1">Hadir</option>
          <option value="2">Tidak Hadir</option>
        </select>
        <label for="pesan">Pesan</label>
        <textarea name="pesan" class="form-style" id="pesan" cols="30" rows="10" placeholder="Pesan..." required></textarea>
        <button type="submit" class="btn_send">
          <i class="icon_send"></i>
          Kirim
        </button>
      </form>
    <?php endif; ?>
  </section>
  <!-- end buku tamu -->

  <!-- tamu -->
  <section class="tamu layout" id="tamu">
    <div class="boxContainer" data-aos="fade-up">
      <?php foreach ($data_ucapan as $u) : ?>
        <div class="box">
          <img src="../../../../assets/img/user/default.png" alt="" />
          <div class="text">
            <?php
            $s = strtotime("$u->date_created");
            ?>
            <div class="name"><?= $u->name ?></div>
            <div class="time"><?= date('d F Y', $s) ?></div>
            <div class="pesan">
              <?= $u->pesan ?>
            </div>
          </div>
        </div>
        <hr />
      <?php endforeach; ?>
    </div>
  </section>
  <!-- end tamu -->


  <!-- mengundang -->
  <section class="mengundang layout" id="mengundang">
    <div class="heading2" data-aos="fade-up">Turut Mengundang</div>
    <?php foreach ($data_mengundang as $r) : ?>
      <p data-aos="fade-up"><?= $r->nama ?></p>
    <?php endforeach; ?>
  </section>
  <!-- end mengundang -->

  <!-- musik -->
  <!-- <iframe class="youtube-video" width="50" height="50" src="https://www.youtube.com/embed/O3d34zc8YhE?enablejsapi=1&version=3&playerapiid=ytplayer&autoplay=1" modestbranding="0" controls="0" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
  <audio id="myAudio">
    <source src="../assets/audio/audio.mp3" type="audio/mpeg" />
  </audio>
  <!-- wm -->
  <div class="layout wm">
    <div class="wm-title">Design By :</div>
    <a href="">
      <img src="../../../../assets/img/theme/theme2/wm.png" alt="" />
    </a>
  </div>
  <!-- end wm -->

  <!-- gift -->
  <?php if ($result->paket_id > 1) : ?>
    <div class="up-fixed" id="gift">
      <div class="btn_gift open">
        <i class="icon_gift"></i>
        Gift
      </div>
    </div>

    <!-- end gift -->

    <!-- Modal Gift-->
    <div class="modal hide">
      <div class="modal-container hide">
        <div class="heading2" data-aos="fade-up">Gift</div>
        <div class="modal-header">
          <button class="close-modal">X</button>
        </div>
        <div class="modal-content">
          <p>kirim Hadiah melalui nomer di bawah ini :</p>
          <br />
          <table>
            <?php foreach ($data_gift as $g) : ?>
              <tr>
                <td><?= $g->method ?></td>
                <td><?= $g->nama ?></td>
                <td><?= $g->nomor ?></td>
              </tr>
            <?php endforeach; ?>
          </table>
        </div>
        <div class="heading2" data-aos="fade-up">Terimakasih</div>
      </div>
    </div>
  <?php endif; ?>

  <!-- sticky -->
  <a class="play-video" onclick="playAudio()" id="button">
    <img src="../../../../assets/img/theme/play.png" alt="" />
  </a>
  <a class="pause-video" onclick="pauseAudio()" id="button2">
    <img src="../../../../assets/img/theme/pause.png" alt="" />
  </a>
  <!-- Flashdata -->
  <div class="flash-data-success" data-flashdata="<?= session()->getFlashdata('berhasil'); ?>"></div>
  <div class="flash-data-warning" data-flashdata="<?= session()->getFlashdata('gagal'); ?>"></div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://unpkg.com/aos@2.3.0/dist/aos.js"></script>
  <script>
    CountDownTimer("<?= $result_detail->countdown; ?>", 'hari', 'jam', 'menit', 'detik');

    function CountDownTimer(dt, id1, id2, id3, id4) {
      var end = new Date(dt);

      var _second = 1000;
      var _minute = _second * 60;
      var _hour = _minute * 60;
      var _day = _hour * 24;
      var timer;

      function showRemaining() {
        var now = new Date();
        var distance = end - now;
        var distance1 = now - end;
        if (distance1 > 0) {
          document.getElementById(id1).innerHTML = 0;
          document.getElementById(id2).innerHTML = 0;
          document.getElementById(id3).innerHTML = 0;
          document.getElementById(id4).innerHTML = 0;
          document.getElementById("stop").innerHTML = 'Acara sudah dimulai';
          clearInterval(timer);
          return;
        }
        var days = Math.floor(distance / _day);
        var hours = Math.floor((distance % _day) / _hour);
        var minutes = Math.floor((distance % _hour) / _minute);
        var seconds = Math.floor((distance % _minute) / _second);

        document.getElementById(id1).innerHTML = days;
        document.getElementById(id2).innerHTML = hours;
        document.getElementById(id3).innerHTML = minutes;
        document.getElementById(id4).innerHTML = seconds;
      }

      timer = setInterval(showRemaining, 1000);
    }
  </script>
  <script>
    AOS.init({
      duration: 1000,
    });
  </script>
  <script>
    var x = document.getElementById("myAudio");

    function playAudio() {
      x.play();
    }

    function pauseAudio() {
      x.pause();
    }
  </script>
  <script src="../../../../assets/js/script-theme.js"></script>
  <!-- SweetAlert2 -->
  <script src="../../adminlte/plugins/sweetalert2/sweetalert2.min.js"></script>
  <script src="../../../../../../../assets/js/script-theme.js"></script>
  <script>
    const flashDataSuccess = $('.flash-data-success').data('flashdata');
    const flashDataWarning = $('.flash-data-warning').data('flashdata');
    var Toast = Swal.mixin({
      toast: true,
      position: 'top-end',
      showConfirmButton: true,
      timer: 10000
    });
    if (flashDataSuccess) {
      Toast.fire({
        icon: 'success',
        title: flashDataSuccess,
      })
    }
    if (flashDataWarning) {
      Toast.fire({
        icon: 'warning',
        title: flashDataWarning
      })
    }
  </script>
</body>

</html>