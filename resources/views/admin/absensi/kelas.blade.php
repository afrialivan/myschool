@extends('layouts.dashboard')

@section('container')
    <section class="table-components">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                {{-- <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Tables</h2>
                        </div>
                    </div>
                    <!-- end col -->
                    <div class="col-md-6">
                        <div class="breadcrumb-wrapper mb-30">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item">
                                        <a href="#0">Dashboard</a>
                                    </li>
                                    <li class="breadcrumb-item active" aria-current="page">
                                        Tables
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div> --}}
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->

            <!-- ========== tables-wrapper start ========== -->
            <div class="tables-wrapper">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-style mb-30">
                            <h6 class="mb-10">Daftar Kelas</h6>
                            {{-- <p class="text-sm mb-20">
                                For basic styling—light padding and only horizontal
                                dividers—use the class table.
                            </p> --}}
                            <div class="table-wrapper table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                <h6>Nama Kelas</h6>
                                            </th>
                                            <th>
                                                <h6>Nama Wali Kelas</h6>
                                            </th>
                                            <th>
                                                <h6>Jumlah Siswa</h6>
                                            </th>
                                            <th>
                                                <h6>Action</h6>
                                            </th>
                                        </tr>
                                        <!-- end table row-->
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="min-width">
                                                <div class="lead">
                                                    <div class="lead-image">
                                                        <img src="assets/images/lead/lead-1.png" alt="" />
                                                    </div>
                                                    <div class="lead-text">
                                                        <p>XII RPL</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="min-width">
                                                <p><a href="#0">Oktavianto</a></p>
                                            </td>
                                            <td class="min-width">
                                                <p>34 Siswa</p>
                                            </td>
                                            <td>
                                                <div class="action">
                                                    <button class="text-primary">
                                                        {{-- <i class="lni lni-trash-can"></i> --}}
                                                        Buka
                                                    </button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- end table -->
                            </div>
                        </div>
                        <!-- end card -->
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== tables-wrapper end ========== -->
        </div>
        <!-- end container -->
    </section>
@endsection
