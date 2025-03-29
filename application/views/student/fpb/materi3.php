  <div id="content" class="content flex-grow-1">
    <header class="p-4 bg-dark d-flex justify-content-between align-items-center">
      <button id="toggleButton" class="btn btn-secondary"><i class="fas fa-bars"></i></button>
      <h1 class="h3 text-white mx-auto">MATERI FPB</h1>
    </header>
    <div class="p-2 bg-white border border-black d-flex justify-content-center align-items-center">
      <a href="<?php echo base_url('index.php/pages/fpb_materi'); ?>" class="btn btn-dark mx-1">
        <i class="fas fa-book"></i> Materi
      </a>
      <a href="<?php echo base_url('index.php/pages/video_fpb'); ?>" class="btn btn-dark mx-1">
        <i class="fas fa-video"></i> Video
      </a>
      <a href="<?php echo base_url('index.php/pages/fpb_latihan3'); ?>" class="btn btn-dark mx-1">
        <i class="fas fa-pencil-alt"></i> Latihan
      </a>
      <a href="<?php echo base_url('index.php/pages/fpb'); ?>" class="btn btn-dark mx-1">
        <i class="fas fa-question-circle"></i> Quiz
      </a>
    </div>

    <main class="p-4 flex-grow-1 overflow-auto">
      <div class="mt-4">
        <div class="mt-4 p-4 content-box rounded">

          <h1 class="underline">Cara Menentukan Faktor Persekutuan Terbesar (FPB)</h1>
          <p>Untuk menentukan faktor persekutuan, cara yang dapat dilakukan adalah membaginya menggunakan angka terkecil
            terlebih dahulu.
          <p class="font-weight-bold">Contoh 1
          <p>Berapa FPB dari 20 dan 28</P>
          <P>maka langkah yang dilakukan adalah sebagai berikut.</P>
          <p>- Faktor dari bilangan 20: 1, 2, 4, 5, 10, 20</P>
          <p>- Faktor dari bilangan 28: 1, 2, 4, 7, 14, 28</P>
          <p>Maka faktor persekutuannya adalah 1, 2, dan 4. Di antara faktor persekutuan tersebut, yang merupakan nilai
            terbesar adalah 4, sehingga FPB dari 20 dan 28 adalah 4.</P>
          <p class="font-weight-bold">Contoh 2
          <p>Berapa FPB dari 24 dan 36!</P>
          <p>Faktor 24 = 1, 2, 3, 4, 6, 8, 12, 24</P>
          <p>Faktor 36 = 1, 2, 3, 4, 6, 9, 12, 18, 38</P>
          <p>Setelah mengetahui faktor keduanya, kita dapat menentukan faktor persekutuannya yaitu faktor-faktor yang
            sama.</P>
          <p>Faktor persekutuan dari 24 dan 36 = 1, 2, 3, 4, 6, 12</P>
          <P>Maka, FPB adalah faktor persekutuan antara 24 dan 36 yang paling
            besar yaitu 12.</p>
          <h3 style="text-align:center">FPB dari 12 dan 18 adalah....</h3>
          <div class="text-center mb-4">
            <img src="<?php echo base_url() . 'assets/images/fpb.png'; ?>" alt="Deskripsi gambar">
          </div>
        </div>
        <div class="d-flex justify-content-center mt-4">
          <a href="<?php echo base_url('index.php/pages/fpb_materi2'); ?>" class="btn btn-dark mx-1">
            <i class="fas fa-arrow-left"></i> <span class="d-inline-block" style="margin-left: 5px;">Kembali</span>
          </a>
        </div>
    </main>