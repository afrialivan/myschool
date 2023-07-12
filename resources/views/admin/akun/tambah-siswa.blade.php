@extends('layouts.dashboard')

@section('container')
    <section class="section mt-5">
        <div class="container-fluid">
            <div class="form-elements-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- input style start -->
                        <form action="/register" method="POST" class="card-style mb-30">
                            @csrf
                            <h6 class="mb-25">Input Fields</h6>
                            <div class="input-style-1">
                                <label>Nama Siswa</label>
                                <input type="text" name="nama" placeholder="Full Name" />
                            </div>
                            <div class="input-style-1">
                                <label>NIS Siswa</label>
                                <input type="text" name="nis" placeholder="Full Name" />
                            </div>
                            <!-- end input -->
                            <div class="select-style-1">
                                <label>Kelas</label>
                                <div class="select-position">
                                    <select name="id_kelas">
                                      <option value="">Pilih Kelas</option>
                                        @foreach ($kelas as $item)
                                            <option value="{{ $item->id }}">{{ $item->kelas }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="input-style-1">
                                <label>Password Siswa</label>
                                <input type="password" name="password" placeholder="Full Name" />
                            </div>
                            <div class="d-grid">
                                <button class="btn btn-primary">
                                    Tambah
                                </button>
                            </div>
                        </form>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
        </div>
    </section>
@endsection
