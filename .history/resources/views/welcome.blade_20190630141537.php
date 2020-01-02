<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Kinerja Akademik Dosen</title>
    <link rel="icon" href="frontend/img/akakom.png">

    <!-- Bootstrap core CSS -->
    <link href="{{asset('frontend/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
        rel='stylesheet' type='text/css'>
    <link
        href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic'
        rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="{{asset('frontend/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{asset('frontend/css/creative.min.css')}}" rel="stylesheet">

    <link href'>

<style>
    div.dataTables_wrapper {
        width: 800px;
        margin: 0 auto;
    }
</style>

</head>

<body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">Kinerja Akademik Dosen</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse"
                data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Isi Kuisioner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('login')}}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="masthead text-center text-white d-flex">
        <div class="container my-auto">
            <div class="row">
                <div class="col-lg-10 mx-auto">
                    <h1 class="text-uppercase">
                        <strong>Kinerja Akademik Dosen STMIK Akakom</strong>
                    </h1>
                    <hr>
                </div>
                <div class="col-lg-8 mx-auto">
                    <p class="text-faded mb-5">Jangan menyerah atas impianmu, impian memberimu tujuan hidup. Ingatlah,
                        sukses bukan kunci kebahagiaan, kebahagiaanlah kunci sukses. Semangat!</p>
                    <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                </div>
            </div>
        </div>
    </header>

    <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading text-white">Kinerja Akademik Dosen</h2>
                    <hr class="light my-4">
                    <p class="text-faded mb-4">Merupakan sarana bagi mahasiswa untuk melakukan penilaian terhadap
                        kinerja akademik dosen STMIK AKAKOM Yogyakarta.</p>
                    <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Isi Kuisioner</a>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <h1 class="text-uppercase"><strong>
                    <p class="text-center">Kinerja Akademik Dosen</p>
                </strong></h1>

            @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session()->get('success')}}
            </div>
            @endif

            <form action="/" method="post">
                <div class="form-group">
                    <label for="">Matakuliah</label>
                    <select class="form-control input-sm" required name="matakuliah" id="dropdown">
                        <option value="">Pilih Matakuliah</option>
                        @foreach($akademik as $akademikakakom)
                        <option value="{{$akademikakakom->id_matakuliah}}">{{$akademikakakom->nama_matakuliah}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Kelas</label>
                    <select class="form-control input-sm" required name="kelas" id="kelas">
                        <option value="">Pilih Kelas</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Dosen</label>
                    <select class="form-control input-sm" required name="dosen" id="dosen">
                        <option value="">Pilih Dosen</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Semester</label>
                    <select class="form-control input-sm" required name="semester" id="semester">
                        <option value="">Pilih Semester</option>
                    </select>
                </div>

                <p>Keterangan:</p>
                <p>SB = Sangat Baik, B = Baik, C = Cukup, KB = Kurang Baik, SKB = Sangat Kurang Baik</p>

                @csrf
                <table class="table table-bordered">
                    <thead>
                        <tr class="table-warning">
                            <th scope="col" class="text-center">No</th>
                            <th scope="col" class="text-center">Kriteria</th>
                            <th scope="col" class="text-center">SB</th>
                            <th scope="col" class="text-center">B</th>
                            <th scope="col" class="text-center">C</th>
                            <th scope="col" class="text-center">KB</th>
                            <th scope="col" class="text-center">SKB</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="7" class="font-weight-bold">A. Proses Belajar Mengajar</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">1</th>
                            <td class="text-justify">Rencana materi dan tujuan mata kuliah diberikan di awal
                                perkuliahan</td>
                            <td class="text-center"><input type="radio" name="p1" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p1" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p1" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p1" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p1" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center" class="text-center"
                                class="text-center">2</th>
                            <td class="text-justify">Dosen datang tepat waktu dan mengajar sesuai waktu yang
                                terjadwal</td>
                            <td class="text-center"><input type="radio" name="p2" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p2" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p2" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p2" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p2" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center" class="text-center"
                                class="text-center">3</th>
                            <td class="text-justify">Memberikan kuliah sesuai dengan silabus</td>
                            <td class="text-center"><input type="radio" name="p3" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p3" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p3" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p3" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p3" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center" class="text-center"
                                class="text-center">4</th>
                            <td class="text-justify">Diadakan latihan/diskusi/tanya jawab</td>
                            <td class="text-center"><input type="radio" name="p4" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p4" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p4" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p4" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p4" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center" class="text-center">5</th>
                            <td class="text-justify">Memberikan kuis/tugas/pekerjaan rumah yang cukup</td>
                            <td class="text-center"><input type="radio" name="p5" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p5" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p5" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p5" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p5" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center" class="text-center">6</th>
                            <td class="text-justify">Kesesuaian evaluasi (tugas dan UTS) dengan materi yang
                                diajarkan</td>
                            <td class="text-center"><input type="radio" name="p6" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p6" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p6" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p6" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p6" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center" class="text-center">7</th>
                            <td class="text-justify">Pembahasan soal-soal/tugas/UTS</td>
                            <td class="text-center"><input type="radio" name="p7" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p7" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p7" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p7" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p7" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center">8</th>
                            <td class="text-justify">Pemanfaatan media teknologi pembelajaran (viewer, komputer,
                                dan
                                alat bantu pembelajaran lainnya)</td>
                            <td class="text-center"><input type="radio" name="p8" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p8" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p8" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p8" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p8" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center" class="text-center">9</th>
                            <td class="text-justify">Transparansi/keterbukaan dalam penilaian</td>
                            <td class="text-center"><input type="radio" name="p9" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p9" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p9" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p9" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p9" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="7" class="font-weight-bold">B. Kompetensi Dosen</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">10</th>
                            <td class="text-justify">Kemampuan dosen dalam menjelaskan materi perkuliahan</td>
                            <td class="text-center"><input type="radio" name="p10" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p10" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p10" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p10" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p10" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">11</th>
                            <td class="text-justify">Penguasaan materi, wawasan, dan implementasi pada mata kuliah
                                yang
                                diajarkan</td>
                            <td class="text-center"><input type="radio" name="p11" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p11" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p11" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p11" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p11" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">12</th>
                            <td class="text-justify">Kemampuan dosen dalam berkomunikasi dengan mahasiswa</td>
                            <td class="text-center"><input type="radio" name="p12" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p12" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p12" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p12" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p12" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">13</th>
                            <td class="text-justify">Kemampuan dosen dalam memberikan motivasi/membangkitkan minat
                                belajar</td>
                            <td class="text-center"><input type="radio" name="p13" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p13" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p13" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p13" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p13" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <td colspan="7" class="font-weight-bold">C. Ketersediaan Sarana</td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">14</th>
                            <td class="text-justify">Materi pembelajaran (diktat/handout/file ppt) tersedia</td>
                            <td class="text-center"><input type="radio" name="p14" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p14" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p14" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p14" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p14" id="inlineRadio2" value="1"></td>
                        </tr>
                        <tr>
                            <th scope="row" class="text-center">15</th>
                            <td class="text-justify">Buku refrensi (textboook) tersedia</td>
                            <td class="text-center"><input type="radio" name="p15" id="inlineRadio2" value="5" required>
                            </td>
                            <td class="text-center"><input type="radio" name="p15" id="inlineRadio2" value="4"></td>
                            <td class="text-center"><input type="radio" name="p15" id="inlineRadio2" value="3"></td>
                            <td class="text-center"><input type="radio" name="p15" id="inlineRadio2" value="2"></td>
                            <td class="text-center"><input type="radio" name="p15" id="inlineRadio2" value="1"></td>
                        </tr>
                    </tbody>
                </table>
                <button type="submit" class="btn btn-primary btn-lg btn-block">Submit</button>
                <button type="reset" class="btn btn-secondary btn-lg btn-block">Reset</button>
            </form>

        </div>
        </div>
    </section>

    <section class="bg-dark text-white" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mx-auto text-center">
                    <h2 class="section-heading">Let's Get In Touch!</h2>
                    <hr class="light my-4">
                    <p class="mb-5">Copyright &copy; adiprimanto 2019 | Made with love <i
                            class="fas fa-1x fa-heart text-primary mb-3 sr-icon-4"></i></p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 ml-auto text-center">
                    <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
                    <p>+6283105612985</p>
                </div>
                <div class="col-lg-4 mr-auto text-center">
                    <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
                    <p>
                        <a href="mailto:your-email@your-domain.com">adiprimanto.98@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Bootstrap core JavaScript -->
    <script src="{{asset('frontend/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{asset('frontend/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{asset('frontend/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>

    <!-- Custom scripts for this template -->
    <script src="{{asset('frontend/js/creative.min.js')}}"></script>

    <script type="text/javascript">
        $("select[name='matakuliah']").on('change', function () {
            var id_matakuliah = $(this).val();
            var token = $("input[name='_token']").val();
            var select = document.getElementById("kelas");
            while (select.firstChild) {
                select.removeChild(select.firstChild);
            }
            select.options[select.options.length] = new Option('Pilih Kelas');

            $.ajax({
                url: "<?php echo url('select_ajax') ?>/",
                method: "GET",
                data: {
                    id_matakuliah: id_matakuliah,
                    _token: token
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result, function (k, v) {
                        $('#kelas').append($('<option>', {
                            value: k,
                            text: v
                        }));
                    });
                }
            });
        });

        $("select[name='kelas']").on('change', function () {
            var id_kelas = $(this).val();
            var id_matakuliah = $("select[name='matakuliah']").val();
            var token = $("input[name='_token']").val();
            var select = document.getElementById("dosen");
            while (select.firstChild) {
                select.removeChild(select.firstChild);
            }
            select.options[select.options.length] = new Option('Pilih Dosen');

            console.log(id_kelas + "matakul : " + id_matakuliah);

            $.ajax({
                url: "<?php echo url('select_ajax2') ?>/",
                method: "GET",
                data: {
                    id_matakuliah: id_matakuliah,
                    id_kelas: id_kelas,
                    _token: token
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result, function (k, v) {
                        $('#dosen').append($('<option>', {
                            value: k,
                            text: v
                        }));
                    });
                }
            });
        });

        $("select[name='dosen']").on('change', function () {
            var id_dosen = $(this).val();
            var id_kelas = $("select[name='kelas']").val();
            var id_matakuliah = $("select[name='matakuliah']").val();
            var token = $("input[name='_token']").val();
            var select = document.getElementById("semester");
            while (select.firstChild) {
                select.removeChild(select.firstChild);
            }
            select.options[select.options.length] = new Option('Pilih Semester');


            $.ajax({
                url: "<?php echo url('select_ajax3') ?>/",
                method: "GET",
                data: {
                    id_matakuliah: id_matakuliah,
                    id_kelas: id_kelas,
                    id_dosen: id_dosen,
                    _token: token
                },
                dataType: 'json',
                success: function (result) {
                    $.each(result, function (k, v) {
                        $('#semester').append($('<option>', {
                            value: k,
                            text: v
                        }));
                    });
                },
                error: function (error) {

                    console.log("error : " + error);
                }
            });
        });

    </script>


</body>

</html>
