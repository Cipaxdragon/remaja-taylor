@extends('layout.main')
@section('container')
        <!-- Card -->
        <div class="card shadow">
            <div class="card-body text-center">
                <h1 class="mb-3">ini adalah halaman {{ $title }}</h1>
                <p class="text-muted">Ini halaman tes menggunakan Bootstrap 5</p>

                <!-- Button -->
                <button class="btn btn-primary">Klik Saya</button>
                <button class="btn btn-success">Sukses</button>
                <button class="btn btn-danger">Hapus</button>
            </div>
        </div>

        <!-- Form -->
        <div class="card mt-4 shadow">
            <div class="card-body">
                <h4>Form Input</h4>
                <form>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" class="form-control" placeholder="Masukkan Nama">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Masukkan Email">
                    </div>

                    <button class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
@endsection