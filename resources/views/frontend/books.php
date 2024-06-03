<!DOCTYPE html>
<html lang="en">
<?php include_once ("header.php"); ?>

<body>
    <section class="banner">
        <img src="assets/img/Book-banner.jpg" alt="banner" class="img-fluid">
    </section>

    <section class="book-content">
        <div class="container">
           
                <div class="book-filter row">
                <div class="col-md-5">
                    <div class="dropdown text-center">
                        <select id="languageSelector" onchange="toggleLanguage(this.value)">
                            <option value="language selector">Select The Languages</option>
                            <option value="English">English</option>
                            <option value="Korean">Korean</option>
                            <option value="Spanish">Spanish</option>
                            <option value="French">French</option>
                            <option value="German">German</option>
                            <!-- Add more language options here -->
                        </select>
                    </div>
                    </div>
              
                <div class="col-md-7">
                    <div class="search-container">
                        <form id="search-form" action="javascript:void(0);">
                            <input type="text" id="search-input" placeholder="Search.." name="search">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <div class="search-results"></div>
                </div>

            </div>

        </div>
    </section>

    <section id="pricing" class="pricing">
        <div class="container aos-init aos-animate" data-aos="fade-up">
            <header class="section-header">
                <h2>Book Category:Ayurveda</h2>
             
            </header>

            <div class="row gy-4 aos-init aos-animate mt-2" data-aos="fade-left">
                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box card-container">
                        <img src="assets/img/books/secrets-of-indian-herbs.jpg" class="img-fluid" alt="">
                        <h4> <a href="secrets-of-indian-herbs.php">Jadi Buti Rahasya/ Secrets of Indian Herbs</a></h4>
                        <p>Language: English</p>
                        <a href="secrets-of-indian-herbs.php" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box card-container">
                        <img src="assets/img/books/upchar-padhiti.jpg" class="img-fluid" alt="">
                        <h4>Upchar Padhyati</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/hansrajnidanam.jpg" class="img-fluid" alt="">
                        <h4>Hansrajnidanam</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/govinddasotsav.jpg" class="img-fluid" alt="">
                        <h4>Govinddasotsav</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>
            </div>
            <div class="row gy-4 aos-init aos-animate mt-3" data-aos="fade-left">
                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box card-container">
                        <img src="assets/img/books/Jadi-Buti-Rahasya.jpg" class="img-fluid" alt="">
                        <h4>Jadi Buti Rahasaya (old version)</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box card-container">
                        <img src="assets/img/books/Flora-of-Morni-Hills.jpg" class="img-fluid" alt="">
                        <h4>Flora of Morni Hills</h4>
                        <p>Language: English</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/Jadi-Buti-Rahasya-Volume-1.jpg" class="img-fluid" alt="">
                        <h4>Jadi Buti Rahasya Volume-1</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/Divya-Aushadiya-Avam-Saundriyakaran.jpg" class="img-fluid" alt="">
                        <h4>Divya Aushadiya Avam Saundriyakaran</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row gy-4 aos-init aos-animate mt-3" data-aos="fade-left">
                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box card-container">
                        <img src="assets/img/books/Jadi-Buti-Rahasya-Volume-2.jpg" class="img-fluid" alt="">
                        <h4>Jadi Buti Rahasya Volume-2</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                    <div class="box card-container">
                    <img src="assets/img/books/Jadi-Buti-Rahasya-Volume-3.jpg" class="img-fluid" alt="">
                        <h4>Jadi Buti Rahasya Volume-3</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/Bindusar-Hindi.jpg" class="img-fluid" alt="">
                        <h4>Bindusar</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/Ayurved-Siddhant-Rahasya-Telugu.jpg" class="img-fluid" alt="">
                        <h4>Ayurved Siddhant Rahasya</h4>
                        <p>Language: Telugu</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row gy-4 aos-init aos-animate mt-3" data-aos="fade-left">
                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box card-container">
                        <img src="assets/img/books/Ayurved-Siddhant-Rahasya-Hindi.jpg" class="img-fluid" alt="">
                        <h4>Ayurved Siddhant Rahasya</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="box card-container">
                        <img src="assets/img/books/Ayurved-Siddhant-Rahasya-English.jpg" class="img-fluid" alt="">
                        <h4>Ayurved Siddhant Rahasya</h4>
                        <p>Language: English</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                        <img src="assets/img/books/kumaramritam.jpg" class="img-fluid" alt="">
                        <h4>Kumaramritam</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                    <img src="assets/img/books/Ayurved-Siddhant-Rahasya-Gujarati.jpg" class="img-fluid" alt="">
                        <h4>Ayurved Siddhant Rahasya</h4>
                        <p>Language: Gujarati</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>
            </div>

            <div class="row gy-4 aos-init aos-animate mt-3" data-aos="fade-left">
                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="100">
                    <div class="box card-container">
                        <img src="assets/img/books/Ayurved-Siddhant-Rahasya-Kannada.jpg" class="img-fluid" alt="">
                        <h4>Ayurved Siddhant Rahasya</h4>
                        <p>Language: Kannad</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="200">
                <div class="box card-container">
                        <img src="assets/img/books/Laghu-Nighantu-english.jpg" class="img-fluid" alt="">
                        <h4>Laghu Nighantu</h4>
                        <p>Language: English</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                    <img src="assets/img/books/Laghu-Nighantu-hindi.jpg" class="img-fluid" alt="">
                        <h4>Laghu Nighantu</h4>
                        <p>Language: Hindi</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 aos-init aos-animate" data-aos="zoom-in" data-aos-delay="300">
                    <div class="box card-container">
                    <img src="assets/img/books/Aushadh-Darshan-Gujarati.jpg" class="img-fluid" alt="">
                        <h4>Aushadh Darshan</h4>
                        <p>Language: Gujarati</p>
                        <a href="#" class="btn-buy">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <?php include_once ("footer.php"); ?>

    <script>
        const languageTexts = {
            English: "Show English Text",
            Korean: "한국어 텍스트 표시",
            Spanish: "Mostrar texto en español",
            French: "Afficher le texte français",
            German: "Deutschen Text anzeigen",
            // Add more language translations here
        };

        function toggleLanguage(language) {
            let description = document.getElementById("description");
            description.innerHTML = languageTexts[language] || "Show English Text";
        }
    </script>


</body>