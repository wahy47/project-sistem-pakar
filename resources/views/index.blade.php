@extends('secmain')
@section('navbar')
    @include('navbar')
@endsection
@section('content')
    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center" style="background-image: url('images/bg/banner-bg.png')">
        <div class="container">
            <h1 class="text-white">Mental Health Problem</h1>
            <hr class="col-lg-6 p-0 m-0">
            <h5 class="col-lg-6 text-white">Mental illness atau yang disebut juga gangguan kesehatan
                mental adalah istilah yang mengacu pada berbagai kondisi yang memengaruhi
                pikiran, perasaan, suasana hati, atau perilaku seseorang. Kondisi ini bisa
                terjadi sesekali atau berlangsung dalam waktu yang lama</h5>
            <a href="/tes" class="btn-get-started scrollto">Lakukan Tes Mental Illness</a>
        </div>
    </section><!-- End Hero -->
    <main id="main">

        <!-- ======= Services Section ======= -->
        <section id="services" class="services">
            <div class="container">

                <div class="section-title">
                    <h2>Mental Illness</h2>
                    <p>Ada lebih dari 200 jenis mental illness yang bisa dialami seseorang. Namun, ada beberapa jenis
                        mental illness yang cukup sering terjadi</p>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-heartbeat"></i></div>
                            <h4><a href="https://www.alodokter.com/ocd" target="_blank">Obsessive compulsive
                                    disorder</a></h4>
                            <p>gangguan mental yang mendorong penderitanya untuk melakukan tindakan tertentu secara
                                berulang-ulang. Tindakan tersebut ia lakukan untuk mengurangi kecemasan dalam pikirannya
                            </p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-pills"></i></div>
                            <h4><a href="https://www.alodokter.com/gangguan-kecemasan-umum" target="_blank">Gangguan
                                    kecemasan Umum</a></h4>
                            <p>rasa cemas atau khawatir yang berlebihan dan tidak terkendali terhadap berbagai hal.
                                Kondisi ini bisa disertai dengan gejala fisik, seperti banyak berkeringat, sulit
                                bernapas, atau jantung berdebar</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-hospital-user"></i></div>
                            <h4><a href="https://www.alodokter.com/depresi" target="_blank">Depresi</a></h4>
                            <p>gangguan suasana hati (mood) yang ditandai dengan perasaan sedih yang mendalam dan
                                kehilangan minat terhadap hal-hal yang disukai</p>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div class="col-xl-5 col-lg-6"
                        style="background-image: url('images/bg/psiki.jpg'); background-size: contain; background-repeat: no-repeat">
                    </div>

                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>Diagnosis dan Perawatan Mental Illness</h3>
                        <p>Jika psikiater mendiagnosis bahwa pasien menderita mental illness, umumnya perawatan yang
                            akan diberikan adalah</p>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-heart"></i></div>
                            <h4 class="title">Terapi perilaku kognitif</h4>
                            <p class="description">Ini adalah jenis psikoterapi yang dilakukan untuk mengubah dan
                                mengembangkan pola pikir dan perilaku pasien dari yang negatif menjadi lebih positif.
                            </p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-heart"></i></div>
                            <h4 class="title">Terapi interpersonal</h4>
                            <p class="description">Psikoterapi interpersonal dilakukan dengan tujuan untuk memperbaiki
                                hubungan dan cara pasien berinteraksi dengan orang lain, misalnya pasangan, keluarga,
                                atau sahabatnya. Pasien akan diajarkan cara berempati dan menyelesaikan konflik dengan
                                orang lain.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon"><i class="fas fa-heart"></i></div>
                            <h4 class="title">Terapi perilaku dialektis</h4>
                            <p class="description"> Ini adalah jenis psikoterapi yang dilakukan dengan tujuan untuk
                                membantu pasien mental illness mengelola dan merespons emosi negatif atau perilaku
                                impulsif.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section><!-- End About Section -->

        <!-- ======= Frequently Asked Questions Section ======= -->
        <section id="faq" class="faq section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Frequently Asked Questions</h2>
                </div>

                <div class="faq-list">
                    <ul>
                        <li data-aos="fade-up">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse"
                                data-bs-target="#faq-list-1">Apa itu penyakit mental<i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                                <p>
                                    Penyakit mental mengacu pada berbagai kondisi atau gangguan kesehatan mental yang
                                    mempengaruhi suasana hati, pemikiran, dan perilaku seseorang.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="100">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-2" class="collapsed">Apa yang menyebabkan penyakit mental<i
                                    class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Setelah dilakukan penelitian menjadi jelas bahwa banyak dari kondisi ini disebabkan
                                    oleh kombinasi faktor biologis, psikologis, dan lingkungan.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="200">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-3" class="collapsed">Faktor Biologis Apa yang Terlibat dalam
                                Penyakit Mental <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    <i class="fas fa-dot-circle"></i> Beberapa faktor biologis yang Dapat Menyebabkan
                                    penyakit mental
                                    meliputi:
                                    <b> Penyebab Neurokimia: </b>Beberapa penyakit mental telah dikaitkan dengan
                                    keseimbangan
                                    abnormal bahan kimia khusus di otak yang disebut neurotransmiter. Neurotransmitter
                                    membantu sel-sel saraf di otak berkomunikasi satu sama lain. Jika bahan kimia ini
                                    tidak seimbang atau tidak berfungsi dengan baik, pesan mungkin tidak sampai ke otak
                                    dengan benar, menyebabkan gejala penyakit mental. Selain itu, cacat atau cedera pada
                                    area otak tertentu juga dikaitkan dengan beberapa kondisi mental.
                                </p>
                                <p>
                                    <i class="fas fa-dot-circle"></i> <b>Genetika (keturunan):</b> Banyak penyakit
                                    mental
                                    diturunkan dalam keluarga, menunjukkan bahwa orang yang memiliki anggota keluarga
                                    dengan penyakit mental lebih rentan (memiliki kemungkinan lebih besar untuk
                                    terpengaruh) untuk mengembangkan penyakit mental.
                                </p>
                                <p>
                                    <i class="fas fa-dot-circle"></i> <b>Infeksi:</b> Infeksi tertentu telah dikaitkan
                                    dengan
                                    kerusakan otak dan perkembangan penyakit mental atau memburuknya gejalanya.
                                </p>
                                <p>
                                    <i class="fas fa-dot-circle"></i> <b>Penyebab Struktural:</b> Ini melibatkan
                                    kemungkinan
                                    masalah dalam "pengkabelan" berbagai bagian otak. Ini termasuk kemungkinan
                                    konsekuensi dari trauma otak.
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="300">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-4" class="collapsed">Faktor Psikologi Apa yang Dapat
                                Menyebabkan
                                Penyakit Mental <i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Faktor psikologis yang dapat menyebabkan penyakit mental termasuk kerentanan
                                    spesifik seperti ciri-ciri kepribadian, fitur temperamen ekstrem tertentu, kepekaan
                                    spesifik terhadap emosi negatif, kerentanan kognitif, sikap disfungsional,
                                    keputusasaan, distorsi negatif
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-5" class="collapsed">Faktor Lingkungan Apa yang Dapat
                                Menyebabkan Penyakit Mental?<i class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Faktor pemicu tertentu dapat menjadi pemicu stres yang signifikan yang memicu
                                    penyakit mental seperti:
                                </p>
                                <p><i class="fas fa-dot-circle"></i> Pengalaman kehilangan, kelelahan fisik setelah
                                    trauma, kehilangan orang penting, perpisahan, dll…</p>
                                <p><i class="fas fa-dot-circle"></i> Ancaman kronis</p>
                                <p><i class="fas fa-dot-circle"></i> Kondisi traumatis jangka panjang</p>
                                <p><i class="fas fa-dot-circle"></i> Dinamika keluarga yang berbahaya</p>
                                <p><i class="fas fa-dot-circle"></i> Hidup dalam kekurangan dan kemiskinan yang ekstrim
                                </p>
                                <p><i class="fas fa-dot-circle"></i> Penyalahgunaan alkohol dan zat bebahaya</p>
                                <p><i class="fas fa-dot-circle"></i> Perang, bencana alam, kecelakaan, dan lain lain</p>
                                <p><i class="fas fa-dot-circle"></i> Nyeri kronis dan penyakit kronis yang melumpuhkan
                                </p>
                                <p><i class="fas fa-dot-circle"></i> Diskriminasi sosial misalnya terhadap minoritas
                                </p>
                            </div>
                        </li>

                        <li data-aos="fade-up" data-aos-delay="400">
                            <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse"
                                data-bs-target="#faq-list-6" class="collapsed">Bisakah penyakit mental dicegah?<i
                                    class="bx bx-chevron-down icon-show"></i><i
                                    class="bx bx-chevron-up icon-close"></i></a>
                            <div id="faq-list-6" class="collapse" data-bs-parent=".faq-list">
                                <p>
                                    Sebagian besar penyakit mental disebabkan oleh kombinasi berbagai faktor. Namun,
                                    beberapa tindakan pencegahan dapat mengurangi kemungkinan berkembangnya penyakit
                                    mental. Konsep risiko yang dapat diatribusikan telah memperoleh landasan dalam
                                    penelitian kesehatan mental dan faktor-faktor yang terkait dengan hal tersebut dapat
                                    berpotensi dikurangi untuk mencegah penyakit mental: mencegah pengabaian dan
                                    pelecehan di masa kanak-kanak, mencegah penyalahgunaan zat, mencegah paparan perang,
                                    meningkatkan dukungan sosial, mengurangi beban gangguan kesehatan lainnya, melatih
                                    manajemen stres dan lain lain.
                                </p>
                            </div>
                        </li>

                    </ul>
                </div>

            </div>
        </section><!-- End Frequently Asked Questions Section -->
    </main>
@endsection
@section('footer')
    @include('footer')
@endsection
