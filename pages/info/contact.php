<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Hubungi Javapedia - Kirim pesan, saran, atau pertanyaan Anda kepada tim kami">
    <title>Hubungi Kami - JAVAPEDIA</title>
    <link rel="icon" type="image/x-icon" href="../../assets/javapedia.png">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="../../css/pages/info/contact.css">
</head>
<body>
    
    <?php include '../../components/navbar.php'; ?>

    <main>
        <section class="contact" aria-labelledby="contact-title">
            <div class="contact__container" data-aos="fade-up">
                <header class="contact__header">
                    <div class="header__icon" aria-hidden="true">
                        <i class="ri-customer-service-2-line"></i>
                    </div>
                    <h1 id="contact-title" class="contact__title">Hubungi Kami</h1>
                    <p class="contact__description">Ada pertanyaan atau masukan? Kami siap membantu Anda. Kirimkan pesan dan kami akan merespons secepatnya.</p>
                </header>

                <div class="contact__content">
                    <section class="contact__info" aria-labelledby="info-title">
                        <h2 id="info-title" class="info__title">Informasi Kontak</h2>
                        <div class="info__items">
                            <a href="https://www.instagram.com/javapedia_" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="info__card"
                               aria-label="Instagram Javapedia">
                                <div class="card__icon" aria-hidden="true">
                                    <i class="ri-instagram-line"></i>
                                </div>
                                <h3 class="card__title">Instagram</h3>
                                <p class="card__text">@javapedia_</p>
                            </a>
                            <div class="info__card" role="article">
                                <div class="card__icon" aria-hidden="true">
                                    <i class="ri-time-line"></i>
                                </div>
                                <h3 class="card__title">Waktu Respons</h3>
                                <p class="card__text">1 x 24 jam</p>
                            </div>
                            <a href="https://wa.me/6282132167400" 
                               target="_blank" 
                               rel="noopener noreferrer" 
                               class="info__card"
                               aria-label="WhatsApp Javapedia">
                                <div class="card__icon" aria-hidden="true">
                                    <i class="ri-whatsapp-line"></i>
                                </div>
                                <h3 class="card__title">WhatsApp</h3>
                                <p class="card__text">+62 821-3216-7400</p>
                            </a>
                        </div>
                    </section>

                    <form class="contact__form" id="contactForm" aria-labelledby="form-title">
                        <h2 id="form-title" class="visually-hidden">Form Kontak</h2>
                        <div class="form__grid">
                            <div class="form__group">
                                <label for="name" class="visually-hidden">Nama</label>
                                <div class="input__wrapper">
                                    <input type="text" 
                                           class="form__input" 
                                           id="name" 
                                           name="name" 
                                           placeholder="Masukkan nama Anda"
                                           required
                                           aria-required="true"
                                           minlength="2">
                                    <i class="ri-user-line input__icon" aria-hidden="true"></i>
                                </div>
                            </div>
                            <div class="form__group">
                                <label for="email" class="visually-hidden">Email</label>
                                <div class="input__wrapper">
                                    <input type="email" 
                                           class="form__input" 
                                           id="email" 
                                           name="email" 
                                           placeholder="Masukkan email Anda"
                                           required
                                           aria-required="true"
                                           pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                    <i class="ri-mail-line input__icon" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="subject" class="visually-hidden">Subjek</label>
                            <div class="input__wrapper">
                                <input type="text" 
                                       class="form__input" 
                                       id="subject" 
                                       name="subject" 
                                       placeholder="Masukkan subjek pesan"
                                       required
                                       aria-required="true">
                                <i class="ri-chat-1-line input__icon" aria-hidden="true"></i>
                            </div>
                        </div>
                        <div class="form__group">
                            <label for="message" class="visually-hidden">Pesan</label>
                            <div class="input__wrapper">
                                <textarea class="form__input form__textarea" 
                                          id="message" 
                                          name="message" 
                                          placeholder="Tulis pesan Anda"
                                          required
                                          aria-required="true"
                                          minlength="10"></textarea>
                                <i class="ri-message-2-line input__icon" aria-hidden="true"></i>
                            </div>
                        </div>
                        <button type="submit" class="form__button">
                            <span>Kirim Pesan</span>
                            <i class="ri-send-plane-line button__icon" aria-hidden="true"></i>
                        </button>
                    </form>
                </div>
            </div>

            <div class="modal" 
                 id="successModal" 
                 role="dialog" 
                 aria-modal="true" 
                 aria-labelledby="modal-title"
                 hidden>
                <div class="modal__content">
                    <div class="modal__icon" aria-hidden="true">
                        <i class="ri-check-line"></i>
                    </div>
                    <h2 id="modal-title" class="modal__title">Pesan Terkirim!</h2>
                    <p class="modal__text">Terima kasih telah menghubungi kami. Kami akan segera merespons pesan Anda.</p>
                    <button type="button" class="modal__button" id="closeModal">
                        <span>Tutup</span>
                        <i class="ri-close-line button__icon" aria-hidden="true"></i>
                    </button>
                </div>
            </div>
        </section>
    </main>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
    <script src="../../js/pages/info/contact.js"></script>
</body>
</html>