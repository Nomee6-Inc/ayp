<?php
include_once 'config.php';

$data = file_get_contents('./twitch.json');
$json_arr = json_decode($data, true);

$jsonitem = file_get_contents("./twitch.json");

$objitems = json_decode($jsonitem);
$findname = function($id) use ($objitems) {
    foreach ($objitems as $name) {
        if ($name->id == $id) return $name->name;
    }
  };
  
if (isset($_POST['platformnamechange'])) {
  foreach ($json_arr as $key => $value) {
      if ($value['id'] == "platformname") {
          $json_arr[$key]['name'] = htmlentities($_POST['newtwitchname']);
      }
  }
  file_put_contents('./twitch.json', json_encode($json_arr));
  header("Refresh:0");
};
?>
<!doctype html>
<html lang="tr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <meta name="description" content="Allah Yönetim Paneli ile tm güç artık senin!">
    <meta name="keywords" content="allah, yönetim, panel, paneli, allah yönetim, allah yönetim paneli, evren yönetim, evren yönetim paneli, evren yönetim panel, allah yönetim panel">
    <title>Allah Yönetim Paneli</title>
    <link href="./dist/css/tabler.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-flags.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-payments.min.css" rel="stylesheet"/>
    <link href="./dist/css/tabler-vendors.min.css" rel="stylesheet"/>
    <link href="./dist/css/demo.min.css" rel="stylesheet"/>
    <meta property="og:title" content="Allah Yönetim Paneli" />
    <meta property="og:site_name" content="Allah Yönetim Paneli NOMEE6" />
    <meta property="og:locale" content="tr_TR" />
    <meta property="og:description" content="Allah Yönetim Paneli ile tüm güç artık senin!" />
    <meta property="og:image" content="https://nomee6.xyz/assets/pp.png" />
    <link rel="manifest" href="manifest.json" />
    <link rel="apple-touch-icon" href="https://nomee6.xyz/assets/pp.png" />
    <script>
    if ('serviceWorker' in navigator) {
        navigator.serviceWorker.register('https://ayp.nomee6.xyz/service-worker.js');
    } else {
        console.log("Service worker bu tarayıcıda desteklenmiyor.");
    }
    </script>
    <!-- Matomo -->
    <script>
      var _paq = window._paq = window._paq || [];
      /* tracker methods like "setCustomDimension" should be called before "trackPageView" */
      _paq.push(['trackPageView']);
      _paq.push(['enableLinkTracking']);
      _paq.push(['enableHeartBeatTimer']);
      _paq.push(['trackSiteSearch']);

      (function() {
        var u="https://matomo.aliyasin.org/";
        _paq.push(['setTrackerUrl', u+'matomo.php']);
        _paq.push(['setSiteId', '14']);
        var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
        g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
      })();
    </script>
    <!-- End Matomo Code -->
  </head>
  <body>
        <div class="mb-3">
            <header class="navbar navbar-expand-md navbar-dark bg-primary d-print-none">
                <div class="container-xl">
                    <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
                    <a href=".">
                      <img src="./static/logo.svg" width="110" height="32" alt="AYP" class="navbar-brand-image">
                    </a>
                </h1>
            </div>
                  <div class="container-xl">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-nav flex-row order-md-last">
                      <a href="?theme=dark" class="nav-link px-0 hide-theme-dark" title="Koyu Temaya Geç" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 3c.132 0 .263 0 .393 0a7.5 7.5 0 0 0 7.92 12.446a9 9 0 1 1 -8.313 -12.454z" /></svg>
                      </a>
                      <a href="?theme=light" class="nav-link px-0 hide-theme-light" title="Açık Temaya Geç" data-bs-toggle="tooltip" data-bs-placement="bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><circle cx="12" cy="12" r="4" /><path d="M3 12h1m8 -9v1m8 8h1m-9 8v1m-6.4 -15.4l.7 .7m12.1 -.7l-.7 .7m0 11.4l.7 .7m-12.1 -.7l-.7 .7" /></svg>
                      </a>
                    </div>
                    <div class="collapse navbar-collapse" id="navbar-menu">
                      <div class="d-flex flex-column flex-md-row flex-fill align-items-stretch align-items-md-center">
                        <ul class="navbar-nav">
                          <li class="nav-item active">
                            <a class="nav-link" href="dunya" >
                              <span class="nav-link-title">
                                Dnya
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="cehennem" >
                              <span class="nav-link-title">
                                Cehennem
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="cennet" >
                              <span class="nav-link-title">
                                Cennet
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="dolar" >
                              <span class="nav-link-title">
                                Dolar
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="bank" >
                              <span class="nav-link-title">
                                Banka
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="premium/" >
                              <span class="nav-link-title">
                                Premium Panel
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="./creators" >
                              <span class="nav-link-title">
                                Yapımcılar
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="./bugreport" >
                              <span class="nav-link-title">
                                Bug Bildir
                              </span>
                            </a>
                          </li>
                          <li class="nav-item dropdown">
                            <a class="nav-link" href="./community" >
                              <span class="nav-link-title">
                                Topluluk
                              </span>
                            </a>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </header>
              </div>
              <div class="page-wrapper">
        <div class="container-xl">
              <div class="col-12">
                    <div class="row row-cards">
                      <div class="col-xl-6">
                        <div class="row row-cards">
                          <div class="col-12">
                            <div class="card">
                              <div class="card-img-top img-responsive img-responsive-16by9" style="background-image: url(./static/twitch.jpg)"></div>
                              <div class="card-body">
                                <h3 class="card-title"><?php echo $findname("platformname"); ?> Ayarları</h3>
                                Platform İsmi: <div class="text-green"><?php echo htmlentities($findname("platformname")); ?></div></p>
                              </div>
                              <div class="card-footer">
                            <div></div><h4></h4>
                              Eylemler:
                            <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="deleteallkanal" class="btn btn-primary">Bütün Kanalları Sil</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <input type="text" class="form-control" placeholder="Kendi Nickin" required>
                                <div></div><h4></h4>
                                <button name="kendineabunegonder" class="btn btn-primary">Kendine Abone Gnder</button>
                                <button name="kendinepartner" class="btn btn-primary">Kendine Partner Ver</button>
                                <div></div><h4></h4>
                                <button name="sponsorlarikendinegonder" class="btn btn-primary">Bütün sponsorları kendine gönder</button>
                              </form>
                              <div></div><h4></h4>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="asmrcarp" class="btn btn-primary">ASMR Yapanları Çarp</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="platformdelete" class="btn btn-primary">Twitch alemini Yok Et</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="herkesabonesifirla" class="btn btn-primary">Herkesin abonesini sıfrla</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="twitchrestart" class="btn btn-primary">Twitch Yeniden Başlat</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="allliveoff" class="btn btn-primary">Herkesin yayınını kapat</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="18+ban" class="btn btn-primary">+18 Yayın yapanları dünyadan banla</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <button name="Drama Çıkar" class="btn btn-primary">Drama Çıkar</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <input type="text" class="form-control" placeholder="İstediğin Kanal İsmi" required>
                                <div></div><h4></h4>
                                <button name="kanalnickdegis" class="btn btn-primary">Kanal İsmini Değiştir</button>
                                <button name="kanalsik" class="btn btn-primary">Kanalı Sil</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <input id="newtwitchname" name="newtwitchname" type="text" class="form-control" placeholder="Yeni Platform İsmi" required>
                                <div></div><h4></h4>
                                <button id="platformnamechange" name="platformnamechange" class="btn btn-primary">Platform smini Değiştir</button>
                              </form>
                              <div></div><h4></h4>
                              <form enctype="multipart/form-data" action="" method="POST">
                                <a href="dunya.php" class="btn btn-primary">Ana Menü</a>
                                <div></div><h4></h4>
                              </form>
                              <div></div><h4></h4>
                              <small class="form-hint">
                                  Bu sitenin kullanımından dolayı dünyada oluşacak zararlardan Nomee6 Inc. sorumlu tutulamaz.
                              </small>
                              <div></div><h4></h4>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>
        <footer class="footer footer-transparent d-print-none">
          <div class="container-xl">
            <div class="row text-center align-items-center flex-row-reverse">
              <div class="col-lg-auto ms-lg-auto">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item"><a href="https://github.com/aliyasiny65/ayp" target="_blank" class="link-secondary" rel="noopener">Kaynak Kodu</a></li>
                  <li class="list-inline-item">
                    <a href="premium/" target="_blank" class="link-secondary" rel="noopener">
                      <svg xmlns="http://www.w3.org/2000/svg" class="icon text-pink icon-filled icon-inline" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M19.5 13.572l-7.5 7.428l-7.5 -7.428m0 0a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572" /></svg>
                      Allah Premium
                    </a>
                  </li>
                </ul>
              </div>
              <div class="col-12 col-lg-auto mt-3 mt-lg-0">
                <ul class="list-inline list-inline-dots mb-0">
                  <li class="list-inline-item">
                    Copyright &copy; 2022
                    <a href="." class="link-secondary">NOMEE6 Inc</a>.
                    Tüm hakları saklıdır.
                  </li>
                  <li class="list-inline-item">
                    <a href="." class="link-secondary" rel="noopener">
                      Bu site tamamen mizah amaçlı yapılmıtır.
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="./dist/js/tabler.min.js"></script>
    <script src="./dist/js/demo.min.js"></script>
  </body>
</html>
