<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"
        integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <meta property="og:title" content="Undangan Resepsi Pewiwahan">
    <meta property="og:description" content="Merupakan suatu kebahagiaan dan kehormatan bagi kami, apabila Bapak/ Ibu/ Saudara/i, berkenan hadir.">
    <meta property="og:image" content="{{asset('img/graph.jpg')}}">
    <meta property="og:url" content="{{ url('/' . $invitation->name) }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <section class="sec1" id="home">
        <div class="home">
            <!-- SLIDER IMAGE -->
            <div id="slide-container">
                <div id="slide-first-element">
                    <img class="slide-image" src="{{asset('img/slide1.jpg')}}" alt="Slide 1">
                </div>
                <div id="slide-element-2">
                    <img class="slide-image" src="{{asset('img/slide2.jpg')}}" alt="Slide 2">
                </div>
                <div id="slide-element-3">
                    <img class="slide-image" src="{{asset('img/slide3.jpg')}}" alt="Slide 3">
                </div>
            </div>
            

            <!-- wave -->
            <div class="wave wave1"></div>
            <div class="wave wave2"></div>
            <div class="wave wave3"></div>
            <div class="wave wave4"></div>
            <!-- wave -->

            <!-- home text -->

            <div class="text">
                <p>Undangan Pernikahan</p>
                <p>Shinichirou<br>&<br>Sintya</p>
                <p>17.04.2025</p>
                <p>{{ $invitation->name }}</p>

                <div class="button">
                    <a href="#veda" onclick="enableScrollAndScrollToSection()">Buka Undangan</a>
                </div>
            </div>

            <!-- home text -->
        </div>
    </section>

    <div class="for-navbar">
        <div class="navbar">
            <div class="container">
                
                <div class="card">
                    <a href="#home">
                    <div class="wrapper">
                    <i class="fa-solid fa-house"></i>
                </div>
            </a>
                </div>
            
            
                <div class="card" >
                    <a href="#about">
                    <div class="wrapper">
                    <i class="fa-solid fa-person"></i>
                </div>
            </a>
                </div>
            
                
                <div class="card">
                    <a href="#schedule">
                    <div class="wrapper">
                    <i class="fa-solid fa-clock"></i>
                </div>
            </a>
                </div>
            
                <div class="card">
                    <a href="#gallery">
                    <div class="wrapper">
                    <i class="fa-solid fa-image"></i>
                </div>
                 </a>
                </div>
           
                <div class="card" style="width: 100%">
                    <div class="wrapper">
                        <i id="button" class="fa-solid fa-volume-up"></i>
                        <audio src="{{asset('sound/1.mp3')}}" ></audio>
                    </div>
                </div>

                
            </div>
    </div>

    <section class="veda" id="veda">
        <div class="container">
            <div class="wrapper" data-aos="fade-up"
            data-aos-duration="1000">
                <div class="img-veda">
                    <img src="img/1.png" alt="">
                </div>

                <div class="text-veda">
                    <div class="container-text">
                        <p>Rg Veda X.85.42.</p>
                        <p>Wahai pasangan suami-istri, semoga kalian tetap bersatu dan tidak pernah terpisahkan. Semoga
                            kalian mencapai hidup penuh kebahagiaan, tinggal di rumah yang penuh kegembiraan bersama
                            seluruh keturunanmu.</p>
                    </div>
                </div>

                <div class="img-veda">
                    <img src="img/2.png" alt="">
                </div>
            </div>

            <!-- Wave background -->
            <div class="wavewave wave1"></div>
            <div class="wavewave wave2"></div>
            <div class="wavewave wave3"></div>
            <div class="wavewave wave4"></div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="container">
            <div class="wrapper">
                <div class="text-about" data-aos="fade-up" data-aos-duration="1000">
                    <p >Om Swastyastu</p>
                    <p>Atas Asung Kertha Wara Nugraha Ida Sang Hyang Widhi
                        Wasa/Tuhan Yang Maha Esa kami bermaksud mengundang Bapak/Ibu/Saudara/i pada Upacara Manusa
                        Yadnya Metatah (Potong Gigi) putri kami.</p>
                </div>
                <div class="card-about" data-aos="fade-left" data-aos-duration="1200">
                    <div class="card-container">
                        <div class="img">
                            <img src="img/profil1.jpg" alt="">
                        </div>
                        <div class="text-card">
                            <p>Shinichirou</p>
                            <p>I Wayan Shinichirou Ikebe</p>
                            <p>Anak Pertama dari</p>
                            <p>I Nyoman Artawa <br> & <br> Machiko Ikebe</p>
                        </div>
                    </div>
                </div>
                <div class="card-about" data-aos="fade-right" data-aos-duration="1400">
                    <div class="card-container">
                        <div class="img">
                            <img src="img/profil2.jpg" alt="">
                        </div>
                        <div class="text-card">
                            <p>Sintya</p>
                            <p>Ni Wayan Sintya Listyana</p>
                            <p>Anak Pertama dari</p>
                            <p>I Made Widiastra <br> & <br> Ni Wayan Suliati</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
    </section>

    <section class="schedule" id="schedule">
        <div class="container">
            <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="img-top-schedule">
                    <img src="img/1.png" alt="">
                </div>
                <div class="top-schedule">
                    <div class="top-container">
                        <p>Lokasi & Waktu Acara</p>
                    </div>
                </div>
                <div class="main-schedule">
                    <div class="container-schedule">
                        <div class="agenda">
                            <div class="agenda-container">
                                <p>WAKTU ACARA</p>
                                <div class="line"></div>
                                <div class="icon"><i class="fa-solid fa-calendar-days"></i></div>
                                <p>Kamis, 17 April 2024<br>15:00 - 22:00</p>
                                <!-- <div class="schedule-button">
                                    <a href="">Simpan Tanggal</a>
                                </div> -->
                            </div>
                        </div>
                        <div class="agenda">
                            <div class="agenda-container">
                                <p>LOKASI ACARA</p>
                                <div class="line"></div>
                                <div class="icon"><i class="fa-solid fa-location-dot"></i></div>
                                <p>Jln. Dewi Saraswati, Br. Karang Dalem 1<br> Bongkasa Pertiwi, Abiansemal, Badung,
                                    Bali</p>
                                <div class="schedule-button">
                                    <a href="https://maps.app.goo.gl/mqaZryDf1hh3b5D1A">Lihat Lokasi</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="top-schedule">
                    <div class="top-container">
                        <p>Menuju Hari Bahagia</p>
                    </div>
                </div>

                <div class="countdown">
                    <div class="container-countdown">
                        <div class="wrapper-countdown">
                            <div class="card">
                                <div class="container-card">
                                    <p id="days"></p>
                                </div>
                            </div>

                            <div class="card">
                                <div class="container-card">
                                    <p id="hours"></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="container-card">
                                    <p id="minutes"></p>
                                </div>
                            </div>
                            <div class="card">
                                <div class="container-card">
                                    <p id="seconds"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bottom-schedule">
                    <div class="img-bottom">
                        <img src="img/1.png" alt="">
                    </div>
                    <div class="text-bottom">
                        <p>Dalam sebuah pernikahan kalian disatukan demi sebuah kebahagiaan dengan janji hati untuk
                            saling membahagiakan. Bersamaku engkau akan hidup selamanya karena Tuhan pasti akan
                            memberikan karunia sebagai pelindung dan saksi dalam pernikahan ini. Untuk itulah kalian
                            dipersatukan dalam satu keluarga.<br>(Rgveda : X.85.36)</p>
                    </div>
                </div>
            </div>

            <!-- Wave background -->
            <div class="wavewave wave1"></div>
            <div class="wavewave wave2"></div>
            <div class="wavewave wave3"></div>
            <div class="wavewave wave4"></div>
        </div>


    </section>

    <section class="gift" id="gift">
        <div class="container">
            <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="gift-card">
                    <div class="container-gift-card">
                        <div class="img-gift">
                            <img src="img/pemanis.png" alt="">
                        </div>
                        <div class="text-gift">
                            <p>Love Gift</p>
                            <p>Doa restu anda merupakan karunia yang sangat berarti bagi kami dan jika memberi adalah
                                ungkapan tanda terima kasih anda, anda dapat memberi kado secara cashless</p>
                        </div>
                        <div class="wrapper-gift-card">
                            <div class="sub-gift-card">
                                <div class="container-sub-gift-card">
                                    <i class="fa fa-vcard"></i>
                                    <p id="rekening">BRI - 057101000420560</p>
                                    <p>A/n I Wayan Shinichirou Ikebe</p>
                                    <div class="button-gift" id="copyDiv" onclick="copyText()">
                                        <p>Copy</p>
                                    </div>
                                </div>
                            </div>
                            <div class="sub-gift-card">
                                <div class="container-sub-gift-card">
                                    <i class="fa fa-location-arrow"></i>
                                    <p>Alamat untuk kirim kado</p>
                                    <p>Jln. Dewi Saraswati, Br. Karang Dalem 1, Desa Bongkasa Pertiwi</p>
                                    <div class="button-gift">
                                        <a href="https://maps.app.goo.gl/mqaZryDf1hh3b5D1A">Lokasi</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
    </section>

    <!-- MOMEN -->
    <section class="momen" id="momen">
        <div class="container" >
            <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="momen-text">
                    <p>Momen Bahagia Kami</p>
                </div>
                <div class="grid-gallery" id="gallery">
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/1.webp" data-lightbox="gridImage">
                        <img src="img/1.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/2.webp" data-lightbox="gridImage">
                        <img src="img/2.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/3.webp" data-lightbox="gridImage">
                        <img src="img/3.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/6.webp" data-lightbox="gridImage">
                        <img src="img/6.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/5.webp" data-lightbox="gridImage">
                        <img src="img/5.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/4.webp" data-lightbox="gridImage">
                        <img src="img/4.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/7.webp" data-lightbox="gridImage">
                        <img src="img/7.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/8.webp" data-lightbox="gridImage">
                        <img src="img/8.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/9.webp" data-lightbox="gridImage">
                        <img src="img/9.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/10.webp" data-lightbox="gridImage">
                        <img src="img/10.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/11.webp" data-lightbox="gridImage">
                        <img src="img/11.webp" />
                      </a>
                    </div>
                    <div class="grid-item" data-aos-duration="1000">
                      <a href="img/12.webp" data-lightbox="gridImage">
                        <img src="img/12.webp" />
                      </a>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- wave -->
        <div class="wave wave1"></div>
        <div class="wave wave2"></div>
        <div class="wave wave3"></div>
        <div class="wave wave4"></div>
        <!-- wave -->
    </section>

    <section class="comment" id="comment">
        <div class="container">
            <div class="wrapper" data-aos="fade-up" data-aos-duration="1000">
                <div class="top-comment">
                    <div class="img-comment">
                        <img src="img/1.png" alt="">
                    </div>
                    <div class="text-top-comment">
                        <p>Konfirmasi Kehadiran &<br>
                            Kirim Pesan Bahagia</p>
                    </div>
                </div>
                <div class="form-comment">
                    <form class="form" method="POST" action="{{ route('comment.store') }}">
                        @csrf
                        <div class="input-box">
                            <label for="name" >Nama</label>
                            <input type="text" id="name" name="name" required placeholder="Tulis nama anda disini">
                        </div>
                        <div class="text-area">
                            <label for="utterance">Ucapan</label>
                            <textarea name="utterance" id="utterance" required placeholder="Tulis ucapan disini"></textarea>
                        </div>
                        <div class="absent-option">
                            <div class="absent">
                                <input type="radio" name="absen" id="hadir" value="hadir">
                                <label for="hadir">Hadir</label>
                            </div>
                            <div class="absent">
                                <input type="radio" name="absen" id="tidakHadir" value="tidak_hadir">
                                <label for="tidakHadir">Tidak Hadir</label>
                            </div>
                            <div class="absent">
                                <input type="radio" name="absen" id="belumKonfirmasi" value="belum_konfirmasi">
                                <label for="belumKonfirmasi">Belum Konfirmasi</label>
                            </div>
                        </div>
                        
                        <div class="button-input">
                            <input type="submit" value="Kirim Ucapan">
                        </div>
                    </form>
                </div>
                <div class="people-comment">
                    <div class="container-comment">
                        <div class="total-comment">
                            <p>{{ $comments->count() }} Ucapan</p> <!-- Menampilkan total komentar -->
                        </div>
                        <hr>
                        
                        @foreach ($comments as $comment)
                        <div class="card-comment">
                            <div class="container-user-comment">
                                <div class="wrapper-user-comment">
                                    <div class="icon"><i class="fa fa-user"></i></div>
                                    <div class="text">
                                        <p>{{ $comment->name }}</p> <!-- Nama pengirim -->
                                    </div>
                                    <div class="absen">
                                        <p>{{ ucfirst($comment->absen) }}</p> <!-- Status kehadiran (Hadir, Tidak Hadir, Belum Konfirmasi) -->
                                    </div>
                                </div>
                                <div class="main-comment">
                                    <p>{{ $comment->utterance }}</p> <!-- Isi ucapan -->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                
                <div class="bottom-comment">
                    <div class="container-bottom-comment">
                        <p>Demikianlah undangan ini kami sampaikan, atas kehadiran dan doa restu Bapak/Ibu/Saudara/i
                            kami ucapkan terima kasih.</p>
                        <p>Om Santih Santih Santih Om</p>
                        <p>Kami yang berbahagia</p>
                        <p>Shinichirou & Sintya</p>
                        <div class="img-bottom-comment">
                            <img src="img/2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
        // time
        var countDownDate = new Date("April 17, 2025 16:00:00").getTime();

        function padZero(num) {
            return num < 10 ? "0" + num : num;
        }


        // Update the count down every 1 second
        var x = setInterval(function () {

            // Get today's date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in elements with respective ids
            document.getElementById("days").innerHTML = padZero(days) + "<br><span class='label'>Day(s)</span>";
            document.getElementById("hours").innerHTML = padZero(hours) +
                "<br><span class='label'>Hour(s)</span>";
            document.getElementById("minutes").innerHTML = padZero(minutes) +
                "<br><span class='label'>Minute(s)</span>";
            document.getElementById("seconds").innerHTML = padZero(seconds) +
                "<br><span class='label'>Second(s)</span>";



            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("days").innerHTML = "";
                document.getElementById("hours").innerHTML = "";
                document.getElementById("minutes").innerHTML = "";
                document.getElementById("seconds").innerHTML = "";
                document.getElementById("expired").style.display = "block";
            }
        }, 1000);

        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        });

        // time


        function copyText() {
            const text = document.getElementById("rekening").innerText;
            navigator.clipboard.writeText(text)
                .then(() => alert("Nomor rekening disalin: " + text))
                .catch(err => alert("Gagal menyalin: " + err));
        }

        function enableScrollAndScrollToSection() {
    document.body.style.overflow = 'auto'; // Aktifkan scrolling
    document.body.style.height = 'auto'; // Atur tinggi body kembali ke auto untuk menampilkan seluruh konten
    document.querySelector('.about').scrollIntoView({ behavior: 'smooth' }); // Scroll ke section berikutnya
    }




//     window.addEventListener("DOMContentLoaded", event => {
//     const audio = document.querySelector("audio");
//     audio.volume = 0.2;
//     audio.play();

//     const button = document.querySelector("#button");
//     const icon = button; // #button adalah elemen <i> itu sendiri

//     button.addEventListener("click", () => {
//         if (audio.paused) {
//             audio.volume = 0.2;
//             audio.play();
//             icon.classList.remove('fa-volume-mute');
//             icon.classList.add('fa-volume-up');
//         } else {
//             audio.pause();
//             icon.classList.remove('fa-volume-up');
//             icon.classList.add('fa-volume-mute');
//         }
//         button.classList.add("fade");
//     });
// });
    </script>
</body>

</html>