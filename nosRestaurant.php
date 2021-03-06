<!DOCTYPE html>
<html>
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>bug_cookers</title>
      <!-- Latest compiled and minified CSS -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Optional theme -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css"/>


  </head>
  <body>
    <header>
        <?php include("header.php");?>
    </header>

    <section><!--our restaurants-->
      <div class="container">

        <h2 class="text-center" id="locationH2">Nous trouver</h2>
        <div class="row restaurantLocation">
          <div class="col-sm-6 hidden-xs" id="map"><!--map-->
            <div class="embed-responsive embed-responsive-4by3">-->
              <iframe class="embed-responsive-item" src="https://www.google.com/maps/d/embed?mid=1LxqFAQapbNo_85xnMo-mSTdg2biGlEXz"></iframe>
            </div>
          </div>
          <div class="col-sm-6 col-xs-12">
            <div class="row">
                <div class="col-sm-6 col-thumbnail">
                  <div class="thumbnail text-center idRestaurentThumbnail">
                    <div class="caption">
                      <h3>Lyon</h3>
                      <a href="https://www.google.fr/maps/place/17+Rue+Delandine,+69002+Lyon/@45.7461644,4.8252459,17z/data=!3m1!4b1!4m5!3m4!1s0x47f4ea4ab93a6b4d:0xe7034289905cd02a!8m2!3d45.7461607!4d4.8274399" class="linkAdress linkAdressDisable" target="_blank">17 rue Delandine<br/>69002 Lyon</a>
                      <p class="text-center">04 74 00 00 00</p>
                      <a class="linkMail" href="lyon@bug_cookers.com">mail</a>
                      <a class="btn btn-default" href="" role="button">Nos specialités</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-thumbnail">
                  <div class="thumbnail text-center idRestaurentThumbnail">
                    <div class="caption">
                      <h3>Bordeaux</h3>
                      <a href="https://www.google.fr/maps/place/15+Place+Canteloup,+33800+Bordeaux/@44.8336514,-0.5682078,17z/data=!3m1!4b1!4m5!3m4!1s0xd5527cba74d1bdf:0xb81d5dd07bca4e2e!8m2!3d44.8336476!4d-0.5660191" class="linkAdress linkAdressDisable" target="_blank">15 Place Canteloup<br/>33800 Bordeaux</a>
                      <p class="text-center">04 74 00 00 00</p>
                      <a class="linkMail" href="lyon@bug_cookers.com">mail</a>
                      <a class="btn btn-default" href="" role="button">Nos specialités</a>
                    </div>
                  </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-thumbnail">
                  <div class="thumbnail text-center idRestaurentThumbnail">
                    <div class="caption">
                      <h3>Marseille</h3>
                      <a href="https://www.google.fr/maps/place/7+Prom.+Robert+Laffont,+13002+Marseille/@43.2967924,5.3587962,17z/data=!3m1!4b1!4m5!3m4!1s0x12c9c0dc9461a663:0x7c7e52170a7af51d!8m2!3d43.2967885!4d5.3609849" class="linkAdress linkAdressDisable" target="_blank">7 Promenade Robert Laffont<br/>13002 Marseille</a>
                      <p class="text-center">04 74 00 00 00</p>
                      <a class="linkMail" href="lyon@bug_cookers.com">mail</a>
                      <a class="btn btn-default" href="" role="button">Nos specialités</a>
                    </div>
                  </div>
                </div>
                <div class="col-sm-6 col-thumbnail">
                  <div class="thumbnail text-center idRestaurentThumbnail">
                    <div class="caption">
                      <h3>Paris</h3>
                      <a href="https://www.google.fr/maps/place/11+Rue+de+Poissy,+75005+Paris/@48.8490758,2.3504115,17z/data=!3m1!4b1!4m5!3m4!1s0x47e671e4fa5fdbf9:0x5dcb5a09cff26472!8m2!3d48.8490723!4d2.3526002" class="linkAdress linkAdressDisable" target="_blank">11 Rue de Poissy<br/>75005 Paris</a>
                      <p class="text-center">04 74 00 00 00</p>
                      <a class="linkMail" href="lyon@bug_cookers.com">mail</a>
                      <a class="btn btn-default" href="" role="button">Nos specialités</a>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section><!--contact-->
      <div class="container">
        <h2 class="text-center" id="formH2">Une question ? Contactez-nous</h2>
        <div class="row">
            <div class="col-sm-6">
              <p id="contactPresentation">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
              </p>
            </div>
            <div class="col-sm-4 col-sm-offset-1 col-xs-8 col-xs-offset-2">
              <form method="post" name="formInformation">
                <input type="text" class="form-control formElement" placeholder="Nom"/>
                <input type="text" class="form-control formElement" placeholder="Mail"/>
                <textarea class="form-control formElement" rows="3">message</textarea>
                <button class="btn btn-default formElement" id="sendButton" type="submit">Envoyer</button>
              </form>
            </div>
        </div>
      </div>
    </section>

    <footer class="banniere_top">
            <?php include("footer.php");?>
    </footer>

    <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVey409tCuTrEvxBikHt4qso7jbpotsh4&callback=initMap">    </script>
    <script src="script_map.js"></script>

  </body>
</html>
