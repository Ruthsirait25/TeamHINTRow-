@extends('layouts/app')

@section('container')
    <div class="jumbotron" style="margin-bottom: 0; border-radius: 0;">
        <h1 class="display-4">
            <center>Team HINTRow!
        </h1>
        </center>
        <p class="lead">Get to Know Our Team</p>
        <hr class="my-4">
        <p>
            We are Five IT students from the Department of Software Engineering Technology, Del Institute of Technology.
            We work part time and managed to develop this bootcamp-style Dental Clinic website
            Read the information below, then contact us with any questions you may have. We look forward to meeting you!
        </p>
    </div>
    <nav class="navbar navbar-light bg-light" style="margin: 0;">
        <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
        <ul class="nav justify-content-center">
            <li class="nav-item">
                <a class="nav-link" href="#viranty"><strong>Viranty Napitupulu</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#ruth"><strong>Ruth Karolina Sirait</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#mahes"><strong>Mahes Panjaitan</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#vera"><strong>Tri Vera Silalahi</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#tesa"><strong>Tesalonika Pangaribuan</strong></a>
            </li>
        </ul>
    </nav>

    <div class="container">
        <div class="row" style="margin-top: 2rem;">
            <div class="col-sm-4">
                <img class="selfie img-fluid rounded mx-auto d-block" src="images/1.jpg" alt="Mahes" height="100px"
                    width="200px">
            </div>
            <div class="container col-sm-8" id="viranty" style="text-align: justify;">
                <h3>Viranty Napitupulu</h3>
                <h5>Project manager</h5>
                <p>
                    Hallo, Saya Viranty Napitupulu saya berperan sebagai Project manager yang memiliki beberapa tugas
                    dan tanggung jawab esensial. Mulai dari membuat perencanaan, mengalokasikan tim, membuat mitigasi
                    risiko, hingga membuat berbagai laporan kompleks untuk para stakeholder.
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="col-sm-4">
                <img class="selfie img-fluid rounded mx-auto d-block" src="images/2.jpg" alt="Ruth" height="100px"
                    width="200px">
            </div>
            <div class="container col-sm-8" id="ruth" style="text-align: justify;">
                <h3>Ruth karolina sirait</h3>
                <h5>Tester</h5>
                <p>
                    Hallo, Saya Ruth karolina sirait saya berperan sebagai tester programmer yang bertanggung jawab
                    terhadap perencanaan jaminan kualitas, tidak adanya bug (kesalahan), melakukan analisis, dan
                    pelaporan pada saat tester sudah mengumpulkan bug yang terjadi dalam web aplikasi klinik gigi
                    HINTRow.
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="col-sm-4">
                <img class="selfie img-fluid rounded mx-auto d-block" src="images/3.jpg" alt="mahes" height="100px"
                    width="200px">
            </div>
            <div class="container col-sm-8" id="mahes" style="text-align: justify;">
                <h3>Mahes Panjaitan</h3>
                <h5>Programmer</h5>
                <p>
                    Hallo, Saya Mahes Panjaitan saya bertugas sebagai Programmer yang Membangun/mengembangkan software
                    terutama pada tahap construction dengan melakukan coding dengan bahasa pemrograman yang ditentukan
                    untuk membangun klinik HINTRow.
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="col-sm-4">
                <img class="selfie img-fluid rounded mx-auto d-block" src="images/4.png" alt="vera" height="100px"
                    width="200px">
            </div>
            <div class="container col-sm-8" id="vera" style="text-align: justify;">
                <h3>Tri Vera Silalahi</h3>
                <h5>Analyst</h5>
                <p>
                    Hallo ,Saya Tri Vera Silalahi saya sebagai Analyst yang menerjemahkan keinginan user atau
                    pengguna sistem informasi menjadi rancangan sistem teknologi informasi. Merancang sebuah aplikasi
                    berbasis PC atau mobile secara detail. Menganalisis perilaku organisasi beserta fungsinya.
                    Menganalisis pilihan-pilihan sistem operasi.
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="col-sm-4">
                <img class="selfie img-fluid rounded mx-auto d-block" src="images/5.jpeg" alt="tesa" height="100px"
                    width="200px">
            </div>
            <div class="container col-sm-8" id="tesa" style="text-align: justify;">
                <h3>Tesalonika Pangaribuan</h3>
                <h5>Design</h5>
                <p>
                    Hallo,Saya Tesalonika Pangaribuan saya berperan sebagai Designer yang bertugas membuat desain sebuah
                    website. Desain tersebut nantinya bisa dibuka dan dinikmati pada sebuah layar monitor.
            </div>
        </div>
    </div>
    </div>

    <footer id="Footer" style="margin-top: 2rem;">
        <div class="container-fluid">
            <div class="row">
            </div>
        </div>
    </footer>
    <footer id="Footer" style="margin-top: 1rem;">
        <a href="#">Copyright © 2022 - Team HINTRow!</a>
    </footer>
    </div>
@endsection


{{-- @extends('layouts/main')

@section('container')
<section class="about">
    <div class="content">
        <img src="images/gigi 1.png">
        <div class="text">
            <h1>About Us</h1>
            <h5>Visi</h5>
            <p>Menjadi institut pendidikan yang mampu mempermudah masyarakat dalam mengatasi kesehatan pada gigi.</p>
        </div>
        <div class="text">
            <h5>Misi</h5>
            <p>1. Menyelenggarakan pengabdian masyarakan sebagai bentuk kepedulian terhadap permasalahan kesehatan gigi dan mulut masyarakat</p>
            <p>2. Menyelenggarakan pelayanan yang bermutu,mengacu pada konsep keilmuan keperawatan gigi yang diterapkan ditingkat nasional dan internasional.</p>     
            </div>
        </div>
    </div>
</section>

@endsection --}}
