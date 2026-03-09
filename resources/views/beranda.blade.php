<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Home</title>
      <link rel="stylesheet" href="css/bootstrap.css">
   </head>
   <body>
      <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
         <div class="container">
            <a class="navbar-brand" href="#">Website Saya</a>
            <div>
               <a class="nav-link text-white d-inline" href="/">Home</a>
               <a class="nav-link text-white d-inline" href="/kontak">Kontak</a>
            </div>
         </div>
      </nav>
      <!-- Content -->
      <div class="container mt-5">
         <div class="text-center">
            <h1 class="mb-3">Halo {{ $text ?? 'Pengunjung' }}</h1>
            <p class="text-muted">Ini contoh halaman sederhana menggunakan Bootstrap 5</p>
            <a href="/tes" class="btn btn-primary">Klik Saya</a>
            <a href="/" class="btn btn-primary">Klik Saya</a>
         </div>
      </div>
      <div class="container mt-5">
         <div class="d-flex justify-content-between mb-3">
            <h2>Kelola Data Buku</h2>
            <a href="#" class="btn btn-success">Tambah Buku</a>
         </div>
         <!-- Alert -->
         <div class="alert alert-success alert-dismissible fade show">
            Book created successfully.
            <button class="btn-close" data-bs-dismiss="alert"></button>
         </div>
         <!-- Table -->
         <table class="table table-bordered table-striped bg-white">
            <thead class="table-light">
               <tr>
                  <th>No</th>
                  <th>Judul</th>
                  <th>Penulis</th>
                  <th>Penerbit</th>
                  <th width="220px">Action</th>
               </tr>
            </thead>
            <tbody>
               <tr>
                  <td>1</td>
                  <td>Belajar Membangun Web Otodidak</td>
                  <td>Fuadi</td>
                  <td>Indeveloper</td>
                  <td>
                     <a class="btn btn-info btn-sm">Show</a>
                     <a class="btn btn-primary btn-sm">Edit</a>
                     <a class="btn btn-danger btn-sm">Delete</a>
                  </td>
               </tr>
               <tr>
                  <td>2</td>
                  <td>Belajar PHP</td>
                  <td>Randi</td>
                  <td>Erliang</td>
                  <td>
                     <a class="btn btn-info btn-sm">Show</a>
                     <a class="btn btn-primary btn-sm">Edit</a>
                     <a class="btn btn-danger btn-sm">Delete</a>
                  </td>
               </tr>
               <tr>
                  <td>3</td>
                  <td>Cepat Menguasai Framework Laravel</td>
                  <td>Astoni</td>
                  <td>Sinar Matahari</td>
                  <td>
                     <a class="btn btn-info btn-sm">Show</a>
                     <a class="btn btn-primary btn-sm">Edit</a>
                     <a class="btn btn-danger btn-sm">Delete</a>
                  </td>
               </tr>
               <tr>
                  <td>4</td>
                  <td>Highcharts Demo</td>
                  <td>Romie</td>
                  <td>Akmu</td>
                  <td>
                     <a class="btn btn-info btn-sm">Show</a>
                     <a class="btn btn-primary btn-sm">Edit</a>
                     <a class="btn btn-danger btn-sm">Delete</a>
                  </td>
               </tr>
            </tbody>
         </table>
         <div class="container mt-5">
            <div class="row justify-content-center">
               <div class="col-md-6">
                  <div class="card shadow-lg border-0 rounded-4">
                     <img src="https://media.discordapp.net/attachments/1043750772170555418/1480426921794998333/image.png?ex=69afa283&is=69ae5103&hm=a58edd02ac03d2b70efbc62d0ef5f86b6c258bfc492dad87ad833c0cd8772e72&=&format=webp&quality=lossless&width=660&height=298"
                        class="card-img-top rounded-top-4"
                        alt="gambar">
                     <div class="card-body text-center">
                        <h4 class="card-title">Judul Gambar</h4>
                        <p class="text-muted">
                           Ini adalah contoh tampilan gambar menggunakan Bootstrap 5 yang terlihat elegan.
                        </p>
                        <a href="#" class="btn btn-primary px-4">Detail</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <br> <br> <br> <br> <br> <br> <br> <br> <br> <br> <br>
      <!-- Footer -->
      <footer class="bg-dark text-white text-center p-3 mt-5">
         © 2026 Website Saya
      </footer>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
   </body>
   <script src="js/bootstrap.js"></script>
</html>