@extends('secmain')
@section('navbar')
    @include('navbar')
@endsection
@section('content')
    @php
        $bg = rand(1, 5);
        $ppl = rand(3, 5);
    @endphp
    <section id="hasil" class="d-flex align-items-center"
        style="background-image: url('images/bg/hasil/bg{{ $bg }}.png')">
        <div class="container">
            <div class="row justify-content-evenly" style="margin-top: 100px">
                <div id="imgLeft" class="d-none d-sm-none d-md-none d-lg-block col-lg-5 penanda">
                    <img class="col-10 imgleft" src="images/bg/hasil/ppl{{ $ppl }}.png" alt="">
                </div>
                <div class="col-lg-6 mb-3" style="">
                    <div class="card shadow">
                        <div class="card-body">
                            <div class="text-center">
                                <h2 class="">Hasil Diagnosa</h2>
                            </div>
                            <hr>
                            <div class="tab-penyakit" style="padding: 10px">
                                @foreach ($data as $item)
                                    @if ($item->nilai > 50)
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div class="progress-circle over50 p{{ $item->nilai }}">
                                                    <span>{{ $item->nilai }}%</span>
                                                    <div class="left-half-clipper">
                                                        <div class="first50-bar"></div>
                                                        <div class="value-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h4>{{ $item->penyakit->penyakit }}</h4>
                                            </div>
                                        </div>
                                        <hr>
                                    @else
                                        <div class="row align-items-center">
                                            <div class="col-4">
                                                <div class="progress-circle p{{ $item->nilai }}">
                                                    <span>{{ $item->nilai }}%</span>
                                                    <div class="left-half-clipper">
                                                        <div class="first50-bar"></div>
                                                        <div class="value-bar"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <h4>{{ $item->penyakit->penyakit }}</h4>
                                            </div>
                                        </div>
                                        <hr>
                                    @endif
                                @endforeach
                            </div>
                            <div class="row justify-content-evenly text-center">
                                <div class="col-6">
                                    <a class="btn btn-primary" href="/tes-ulang">Lakukan Tes Ulang</a>
                                </div>
                                <div class="col-6">
                                    <button id="bukagejala" class="btn btn-success" onclick="lihatGejala()">Lihat
                                        Gejala</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 content-penyakit">
                    {{-- OCD --}}
                    <div id="gejalaPenyakit" class="card shadow p-3">
                        <div class="text-center mb-3">
                            <h4>Gejala Yang Dirasakan</h4>
                        </div>
                        <div>
                            @php
                                $counter = 1;
                            @endphp
                            @foreach ($gejala as $item)
                                <div class="row text-row align-items-center mb-2">
                                    <div class="col-1">
                                        <div class="text-number text-center">
                                            <span>{{ $counter }}</span>
                                        </div>
                                    </div>
                                    <div class="col-9">
                                        <span class="text-gejala">{{ $item->gejala->gejala }}</span>
                                    </div>
                                </div>
                                @php
                                    $counter = $counter + 1;
                                @endphp
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section><!-- End Hero -->
    @if ($penyakit->penyakit == 'Gangguan Kecemasan')
        <section>
            <div class="container cons card p-5 shadow rounded">
                <div class="tabs">
                    <div class="mb-3">
                        <h4 class="pills p-3 active">Gangguan Kecemasan Umum</h4>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="active p-3">
                        <h2>Gangguan Kecemasan Umum</h2>
                        <p><b>Gangguan Kecemasan umum atau yang biasa disebut GAD (generalized anxiety disorder) merupakan
                                salah
                                satu satu gangguan kecemasan yang dapat ditandai dengan adanya perasaan cemas yang
                                berlebihan,
                                kecemasan ini biasanya terjadi karena penderita terlalu mengkhawatirkan segala hal yang
                                terjadi
                                diwaktu yang akan datang</b></p>

                        <h4>Cara Penanganan: </h4>
                        <p>Bernapas dengan dalam dapat membuat tubuh relaks dan mengurangi aktivitas saraf di otak yang
                            menyebabkan rasa cemas. Ketika merasa cemas, fokus akan terganggu. Jika ini terjadi, cobalah
                            untuk
                            kembali fokus pada hal yang akan dilakukan. Menghindari kafein yang berlebihan dan alkohol.
                            Menceritakan apa yang sedang dirasakan dan alami kepada orang yang dipercaya bisa meringankan
                            kecemasan. Orang tersebut bisa saja psikiater, teman dekat, atau anggota keluarga. ediakan waktu
                            untuk berjalan santai, melakukan meditasi, mendapatkan pijatan, menonton film, atau mendengarkan
                            audio yang bisa menenangkan, atau berendam di air hangat. Kekurangan cairan atau dehidrasi juga
                            dapat membuat jantung berdetak lebih cepat dan memperburuk rasa cemas. Agar hasilnya optimal,
                            Anda
                            disarankan untuk berkonsultasi ke dokter guna mendapat penanganan lebih lanjut.</p>

                    </div>
                </div>
            </div>
        </section>
    @elseif($penyakit->penyakit == 'OCD')
        <section>
            <div class="container cons card p-5 shadow rounded">
                <div class="tabs">
                    <div class="mb-3">
                        <h4 class="pills p-3 active">Obsessive compulsive disorder</h4>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="active p-3">
                        <h2>Obsessive compulsive disorder</h2>
                        <p><b>Obsessive Compulsive Disorder atau OCD merupakan bagian dari gangguan kecemasan yang membuat
                                penderitanya menghabiskan banyak waktu untuk melakukan hal yang sama berulang-ulang,
                                sehingga
                                menyebabkan stress dan memburuknya kehidupan sehari-hari</b></p>

                        <h4>Cara Penanganan:</h4>
                        <p>Tuangkan segala kekhawatiran dan atasi satu persatu, catat apakah masalah tersebut realistis atau
                            tidak dapat membantu. Pikirkan mengenai ketakutan dan tanyakan pada diri sendiri apakah
                            ketakutan
                            tersebut benar adanya atau keliru menganggap pemikiran tersebut sebagai sebuah kenyataan. Jika
                            mengalami kesulitan dengan OCD, konsultasikan pada profesional medis mengenai jenis pengobatan
                            lainnya dan buatlah janji dengan seorang psikolog untuk menemukan strategi self-help tambahan
                            untuk
                            situasi yang lebih spesifik.</p>

                    </div>
                </div>
            </div>
        </section>
    @elseif($penyakit->penyakit == 'Depresi')
        <section>
            <div class="container cons card p-5 shadow rounded">
                <div class="tabs">
                    <div class="mb-3">
                        <h4 class="pills p-3 active">Depresi</h4>
                    </div>
                </div>
                <div class="tab-content">
                    <div class="active p-3">
                        <h2>Depresi</h2>
                        <p><b>Depresi merupakan salah satu penyakit mental yang paling umum terjadi saat ini, penderita
                                depresi
                                biasanya memiliki gangguan emosional besar yang disebabkan oleh stress dan ketegangan yang
                                dapat
                                menimbulkan munculnya keinginan untuk bunuh diri seiring waktu</b></p>

                        <h4>Cara Penanganan:</h4>
                        <p>Beberapa bentuk olahraga dapat membantu meningkatkan mood. Berjalan kaki selama 30 menit setiap
                            hari
                            dapat membuat mood lebih baik dapat ditingkatkan dengan melakukan olahraga yang rutin. Penting
                            untuk
                            memilih buah-buahan dan sayuran daripada makanan yang tinggi lemak dan gula. seperti ikan
                            berlemak
                            yang mengandung banyak omega-3. Omega-3 terbukti dapat mengubah zat kimia pada otak yang
                            bertugas
                            mengatur mood. memulai tidur dan bangun pada waktu yang sama setiap hari, pada waktu yang lama.
                            Jangan tidur siang terlalu lama, karena akan kesulitan untuk tidur kembali pada malam hari.
                            Saran
                            terbaik adalah menantang mood buruk, lawan depresi dan ubah cara berpikir. Apabila merasa buruk,
                            cobalah untuk mengendalikan pikiran dan mulai memikirkan hal-hal positif. menikmati waktu
                            bersama
                            dengan keluarga dan teman-teman dapat membantu melupakan depresi dan meningkatkan mood secara
                            efektif. Bicarakan dengan dokter atau psikiater tentang bagaimana melawan depresi. Mungkin akan
                            memerlukan kombinasi obat dan terapi bicara dengan gaya hidup yang sehat untuk mengendalikan
                            depresi.</p>

                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection
{{-- @section('footer')
    @include('footer')
@endsection --}}
