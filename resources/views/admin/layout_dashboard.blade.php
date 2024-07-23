@extends('layouts.app_admin')
@section('judul_title')
    App - PNS
@endsection
@section('content')
    <div class="pagetitle">
        <h1>Dashboard</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->
    <section class="section dashboard">
        <div class="row">
            <!-- Main columns -->
            <div class="col-lg-12">
                <div class="row">
                    <!-- Start Makanan Card -->
                    <div class="col-md-6">
                        <a href="">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Makanan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-people-fill"></i>
                                        </div>
                                        <div class="ps-3">
                                            <h6></h6><span class="text-muted pt-2 ps-1">Daftar
                                                Makanan</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Pegawai Card -->

                    <!-- Start Minuman Card -->
                    <div class="col-md-6">
                        <a href="">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Minuman</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-person-workspace"></i>
                                        </div>
                                        <div class="ps-3"><span class="text-muted  pt-2 ps-1">Daftar
                                                Minuman</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Unit Kerja Card -->

                    <!-- Start Dessert Card -->
                    <div class="col-md-6">
                        <a href="">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Dessert</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-buildings"></i>
                                        </div>
                                        <div class="ps-3"><span class="text-muted pt-2 ps-1">Daftar
                                                Dessert</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Penugasan Card -->



                    <!-- Start Jabatan Card -->
                    <div class="col-md-6">
                        <a href="">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Jabatan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-collection-fill"></i>
                                        </div>
                                        <div class="ps-3"><span class="text-muted  pt-2 ps-1">Daftar
                                                Jabatan</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Jabatan Card -->

                    <!-- Start Golongan Card -->
                    <div class="col-md-6">
                        <a href="">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Golongan</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="i bi-card-checklist"></i>
                                        </div>
                                        <div class="ps-3"><span class="text-muted  pt-2 ps-1">Daftar
                                                Golongan</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Golongan Card -->

                    <!-- Start Eselon Card -->
                    <div class="col-md-6">
                        <a href="">
                            <div class="card info-card revenue-card">
                                <div class="card-body">
                                    <h5 class="card-title">Eselon</h5>

                                    <div class="d-flex align-items-center">
                                        <div
                                            class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                            <i class="bi bi-card-heading"></i>
                                        </div>
                                        <div class="ps-3"><span class="text-muted  pt-2 ps-1">Daftar
                                                Eselon</span>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div><!-- End Eselon Card -->

                </div>
            </div><!-- End Main columns -->
        </div>
    </section>
@endsection
