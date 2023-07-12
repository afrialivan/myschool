@extends('layouts.main')

@section('container')
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Haii selamat datang, {{ auth()->user()->nama }}</h2>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
            <div class="row">
                <a href="/absen" class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            <i class="lni lni-camera"></i>
                        </div>
                        <div class="content">
                            {{-- <h6 class="mb-10">Jumlah Siswa</h6> --}}
                            <h3 class="text-bold mb-10">Absen Sekarang</h3>
                        </div>
                    </div>
                </a>
                <!-- End Icon Cart -->
            </div>
            <!-- End Row -->
            <div class="row">
                <div class="col-lg-5">
                    <div class="card-style calendar-card mb-30">
                        <div id="calendar-mini"></div>
                    </div>
                </div>
                <!-- End Col -->
                <div class="col-lg-7">
                    <div class="card-style mb-30">
                        <div
                            class="
                  title
                  d-flex
                  flex-wrap
                  align-items-center
                  justify-content-between
                ">
                            <div class="left">
                                <h6 class="text-medium mb-30">Status Absensi Siswa Terbaru</h6>
                            </div>
                            <div class="right">
                                <div class="select-style-1">
                                    <div class="select-position select-sm">
                                        <select class="light-bg">
                                            <option value="">Today</option>
                                            <option value="">Yesterday</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- end select -->
                            </div>
                        </div>
                        <!-- End Title -->
                        <div class="table-responsive">
                            <table class="table top-selling-table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6 class="text-sm text-medium">Nama</h6>
                                        </th>
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Kelas
                                            </h6>
                                        </th>
                                        {{-- <th class="min-width">
                      <h6 class="text-sm text-medium">
                        Revenue
                      </h6>
                    </th> --}}
                                        <th class="min-width">
                                            <h6 class="text-sm text-medium">
                                                Status
                                            </h6>
                                        </th>
                                        <th>
                                            <h6 class="text-sm text-medium text-end">
                                                Actions
                                            </h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($absen as $item)
                                        <tr>
                                            <td>
                                                <div class="product">
                                                    <div class="image">
                                                        <img src="{{ $item->foto }}" alt="" />
                                                    </div>
                                                    <p class="text-sm">{{ auth()->user()->nama }}</p>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="text-sm">XII RPL</p>
                                            </td>
                                            <td>
                                                @if ($item->status === 'hadir')
                                                    <span class="status-btn success-btn">{{ $item->status }}</span>
                                                @endif
                                                @if ($item->status === 'sakit')
                                                    <span class="status-btn warning-btn">{{ $item->status }}</span>
                                                @endif
                                                @if ($item->status === 'izin')
                                                    <span class="status-btn warning-btn">{{ $item->status }}</span>
                                                @endif
                                            </td>
                                            <td>
                                                <div class="action justify-content-end">
                                                    <button class="edit">
                                                        <i class="lni lni-pencil"></i>
                                                    </button>
                                                    <button class="more-btn ml-10 dropdown-toggle" id="moreAction1"
                                                        data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="lni lni-more-alt"></i>
                                                    </button>
                                                    <ul class="dropdown-menu dropdown-menu-end"
                                                        aria-labelledby="moreAction1">
                                                        <li class="dropdown-item">
                                                            <a href="#0" class="text-gray">Remove</a>
                                                        </li>
                                                        <li class="dropdown-item">
                                                            <a href="#0" class="text-gray">Edit</a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <!-- End Table -->
                        </div>
                    </div>
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
        </div>
        <!-- end container -->
    </section>
    <!-- ========== section end ========== -->
@endsection
