@extends('layouts.main')

@section('content')
    <section class="contact_section layout_padding-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading_container">
                        <h2>
                            Lapor Kejadian
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12"">
                    <div class="map_container">
                        <div class="map">
                            <p>Pilih titik lokasi kejadian di bawah ini*</p>
                            <div id="googleMap"></div>
                        </div>
                    </div>
                    &nbsp;
                    <div class="form_container">
                        <form action="">
                            <div>
                                <p>Masukkan Dusun Kejadian*</p>
                                <input type="radiogroup" />
                            </div>
                            <div>
                                <p>Masukkan Desa Kejadian*</p>
                                <input type="radiogroup" />
                            </div>
                            <div>
                                <p>Masukkan Tanggal Kejadian*</p>
                                <input type="date" />
                            </div>
                            <div>
                                <p>Masukkan Jam Kejadian*</p>
                                <input type="time" />
                            </div>
                            <div>
                                <p>Masukkan Foto Kejadian*</p>
                                <input type="file" />
                            </div>
                            <div>
                                <p>Masukkan Video Kejadian</p>
                                <input type="file" />
                            </div>
                            <div>
                                <p>Masukkan Nama Pelapor*</p>
                                <input type="text" />
                            </div>
                            <div>
                                <p>Masukkan NIK Pelapor*</p>
                                <input type="text" />
                            </div>
                            <div>
                                <p>Masukkan HP Pelapor*</p>
                                <input type="text" />
                            </div>
                            <div>
                                <p>Masukkan Keterangan Kejadian</p>
                                <input type="text" class="message-box" />
                            </div>
                            <div class="btn_box" align="center">
                                <button>
                                    SEND
                                </button>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- end content section -->

    <!-- info section -->

    <section class="info_section layout_padding2">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_contact">
                        <h4>
                            Alamat Satgas
                        </h4>
                        <div class="contact_link_box">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    ITSK RS dr. Soepraoen
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    WA +6285678901234
                                </span>
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    satgas@gmail.com
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col">
                    <div class="info_detail">
                        <h4>
                            Info
                        </h4>
                        <p align="justify">
                            Sistem Informasi Tanggap Bencana Tanah Longsor memberikan dan menerima informasi tanah longsor
                            yang terjadi di daerah Poncokusuma Kabupaten Malang.
                        </p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-2 mx-auto info_col">
                    <div class="info_link_box">
                        <h4>
                            Menu
                        </h4>
                        <div class="info_links">
                            <a class="active" href="index.html">
                                <img src="images/nav-bullet.png" alt="">
                                Home
                            </a>
                            <a class="" href="informasi.html">
                                <img src="images/nav-bullet.png" alt="">
                                Informasi
                            </a>
                            <a class="" href="lapor.html">
                                <img src="images/nav-bullet.png" alt="">
                                Lapor
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 info_col ">
                    <h4>
                        Subscribe
                    </h4>
                    <form action="#">
                        <input type="text" placeholder="Masukkan nomor WA" />
                        <button type="submit">
                            Subscribe
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
