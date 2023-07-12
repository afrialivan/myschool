@extends('layouts.dashboard')

@section('container')
    <!-- ========== section start ========== -->
    <section class="section">
        <div class="container-fluid">
            <!-- ========== title-wrapper start ========== -->
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>My School Dashboard</h2>
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
                                        Dashboard
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!-- end col -->
                </div>
                <!-- end row -->
            </div>
            <!-- ========== title-wrapper end ========== -->
            <div class="row">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon purple">
                            S
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Jumlah Siswa</h6>
                            <h3 class="text-bold mb-10">{{ $siswa->count() }}</h3>
                            {{-- <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +2.00%
                  <span class="text-gray">(30 days)</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon success">
                            H
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Siswa Yang Sudah Absen</h6>
                            <h3 class="text-bold mb-10">{{ $hadir->count() }}</h3>
                            {{-- <p class="text-sm text-success">
                  <i class="lni lni-arrow-up"></i> +5.45%
                  <span class="text-gray">Increased</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon primary">
                            A
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Siswa Yang Tidak Hadir</h6>
                            <h3 class="text-bold mb-10">{{ $alpa->count() }}</h3>
                            {{-- <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -2.00%
                  <span class="text-gray">Expense</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="icon-card mb-30">
                        <div class="icon orange">
                            I
                        </div>
                        <div class="content">
                            <h6 class="mb-10">Siswa Yang Sakit/Izin</h6>
                            <h3 class="text-bold mb-10">{{ $izin->count() }}</h3>
                            {{-- <p class="text-sm text-danger">
                  <i class="lni lni-arrow-down"></i> -25.00%
                  <span class="text-gray"> Earning</span>
                </p> --}}
                        </div>
                    </div>
                    <!-- End Icon Cart -->
                </div>
                <!-- End Col -->
            </div>
            <!-- End Row -->
            {{-- <div class="row">
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="title d-flex flex-wrap justify-content-between">
                <div class="left">
                  <h6 class="text-medium mb-10">Yearly subscription</h6>
                  <h3 class="text-bold">$245,479</h3>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Yearly</option>
                        <option value="">Monthly</option>
                        <option value="">Weekly</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <canvas id="Chart1" style="width: 100%; height: 400px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
                <div class="left">
                  <h6 class="text-medium mb-30">Sales/Revenue</h6>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Yearly</option>
                        <option value="">Monthly</option>
                        <option value="">Weekly</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <canvas id="Chart2" style="width: 100%; height: 400px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
        </div> --}}
            <!-- End Row -->
            {{-- <div class="row">
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="
                    title
                    d-flex
                    justify-content-between
                    align-items-center
                  ">
                <div class="left">
                  <h6 class="text-medium mb-30">Sells by State</h6>
                </div>
              </div>
              <!-- End Title -->
              <div id="map" style="width: 100%; height: 400px"></div>
              <p>Last updated: 7 days ago</p>
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="
                    title
                    d-flex
                    flex-wrap
                    justify-content-between
                    align-items-center
                  ">
                <div class="left">
                  <h6 class="text-medium mb-30">Top Selling Products</h6>
                </div>
                <div class="right">
                  <div class="select-style-1">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Yearly</option>
                        <option value="">Monthly</option>
                        <option value="">Weekly</option>
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
                      <th></th>
                      <th>
                        <h6 class="text-sm text-medium">Products</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Category</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Price</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Sold</h6>
                      </th>
                      <th class="min-width">
                        <h6 class="text-sm text-medium">Profit</h6>
                      </th>
                      <th></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="assets/images/products/product-mini-1.jpg" alt="" />
                          </div>
                          <p class="text-sm">Arm Chair</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <p class="text-sm">43</p>
                      </td>
                      <td>
                        <p class="text-sm">$45</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
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
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="assets/images/products/product-mini-2.jpg" alt="" />
                          </div>
                          <p class="text-sm">SOfa</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$145</p>
                      </td>
                      <td>
                        <p class="text-sm">13</p>
                      </td>
                      <td>
                        <p class="text-sm">$15</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
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
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="assets/images/products/product-mini-3.jpg" alt="" />
                          </div>
                          <p class="text-sm">Dining Table</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$95</p>
                      </td>
                      <td>
                        <p class="text-sm">32</p>
                      </td>
                      <td>
                        <p class="text-sm">$215</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
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
                    <tr>
                      <td>
                        <div class="check-input-primary">
                          <input class="form-check-input" type="checkbox" id="checkbox-1" />
                        </div>
                      </td>
                      <td>
                        <div class="product">
                          <div class="image">
                            <img src="assets/images/products/product-mini-4.jpg" alt="" />
                          </div>
                          <p class="text-sm">Office Chair</p>
                        </div>
                      </td>
                      <td>
                        <p class="text-sm">Interior</p>
                      </td>
                      <td>
                        <p class="text-sm">$105</p>
                      </td>
                      <td>
                        <p class="text-sm">23</p>
                      </td>
                      <td>
                        <p class="text-sm">$345</p>
                      </td>
                      <td>
                        <div class="action justify-content-end">
                          <button class="more-btn ml-10 dropdown-toggle" id="moreAction1" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <i class="lni lni-more-alt"></i>
                          </button>
                          <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="moreAction1">
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
                  </tbody>
                </table>
                <!-- End Table -->
              </div>
            </div>
          </div>
          <!-- End Col -->
        </div> --}}
            <!-- End Row -->
            {{-- <div class="row">
          <div class="col-lg-7">
            <div class="card-style mb-30">
              <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
                <div class="left">
                  <h6 class="text-medium mb-2">Sales Forecast</h6>
                </div>
                <div class="right">
                  <div class="select-style-1 mb-2">
                    <div class="select-position select-sm">
                      <select class="light-bg">
                        <option value="">Last Month</option>
                        <option value="">Last 3 Months</option>
                        <option value="">Last Year</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <div id="legend3">
                  <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                    <li>
                      <div class="d-flex">
                        <span class="bg-color primary-bg"> </span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Revenue</span> +25.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color purple-bg"></span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Net Profit</span> +45.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color orange-bg"></span>
                        <div class="text">
                          <p class="text-sm text-danger">
                            <span class="text-dark">Order</span> -4.2%
                            <i class="lni lni-arrow-down"></i>
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <canvas id="Chart3" style="width: 100%; height: 450px"></canvas>
              </div>
            </div>
          </div>
          <!-- End Col -->
          <div class="col-lg-5">
            <div class="card-style mb-30">
              <div class="
                    title
                    d-flex
                    flex-wrap
                    align-items-center
                    justify-content-between
                  ">
                <div class="left">
                  <h6 class="text-medium mb-2">Traffic</h6>
                </div>
                <div class="right">
                  <div class="select-style-1 mb-2">
                    <div class="select-position select-sm">
                      <select class="bg-ligh">
                        <option value="">Last 6 Months</option>
                        <option value="">Last 3 Months</option>
                        <option value="">Last Year</option>
                      </select>
                    </div>
                  </div>
                  <!-- end select -->
                </div>
              </div>
              <!-- End Title -->
              <div class="chart">
                <div id="legend4">
                  <ul class="legend3 d-flex flex-wrap align-items-center mb-30">
                    <li>
                      <div class="d-flex">
                        <span class="bg-color primary-bg"> </span>
                        <div class="text">
                          <p class="text-sm text-success">
                            <span class="text-dark">Store Visits</span>
                            +25.55%
                            <i class="lni lni-arrow-up"></i>
                          </p>
                          <h2>3456</h2>
                        </div>
                      </div>
                    </li>
                    <li>
                      <div class="d-flex">
                        <span class="bg-color danger-bg"></span>
                        <div class="text">
                          <p class="text-sm text-danger">
                            <span class="text-dark">Visitors</span> -2.05%
                            <i class="lni lni-arrow-down"></i>
                          </p>
                          <h2>3456</h2>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <canvas id="Chart4" style="width: 100%; height: 420px"></canvas>
              </div>
              <!-- End Chart -->
            </div>
          </div>
          <!-- End Col -->
        </div> --}}
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
                                                    <p class="text-sm">A. Muh. Afrial Ivan Pratama</p>
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
