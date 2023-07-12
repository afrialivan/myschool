@extends('layouts.dashboard')

@section('container')
    <section class="table-components">
        <div class="container-fluid">
            <button id="menu-toggle" class="mt-3 main-btn primary-btn btn-hover" data-bs-toggle="modal"
                data-bs-target="#modalId">
                Tambah
            </button>
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-20">
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
                                      @foreach ($kelas as $item)
                                      <tr>
                                          <td class="min-width">
                                              <div class="lead">
                                                  <div class="lead-image">
                                                      <img src="assets/images/lead/lead-1.png" alt="" />
                                                  </div>
                                                  <div class="lead-text">
                                                      <p>{{ $item->kelas }}</p>
                                                  </div>
                                              </div>
                                          </td>
                                          <td class="min-width">
                                              <p><a href="#0">{{ $item->walikelas }}</a></p>
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
                                      @endforeach
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

    <!-- Modal Body -->
    <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
    <div class="modal modal-lg fade" id="modalId" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog"
        aria-labelledby="modalTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitleId">Modal title</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="/dashboard/tambah-kelas" method="post">
                  @csrf
                  <div class="modal-body">
                      <div class="mb-3">
                        <label for="" class="form-label">Nama Kelas</label>
                        <input type="text"
                          class="form-control" name="kelas" id="" aria-describedby="helpId" placeholder="">
                      </div>
                  </div>
                  <div class="modal-body">
                      <div class="mb-3">
                        <label for="" class="form-label">Nama Walikelas</label>
                        <input type="text"
                          class="form-control" name="walikelas" id="" aria-describedby="helpId" placeholder="">
                      </div>
                  </div>
                  <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Tambah</button>
                  </div>
                </form>
            </div>
        </div>
    </div>


    <!-- Optional: Place to the bottom of scripts -->
    <script>
        const myModal = new bootstrap.Modal(document.getElementById('modalId'), options)
    </script>
@endsection
