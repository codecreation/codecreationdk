<div class="row">
  <div class="small-12 medium-5 columns">
    <div class="page-content">
      <h3>Besøg os</h3>
      <p>Du er altid velkommen til at besøge os. Vi giver altid gerne en kop kaffe, te, en eller øl eller blot et glas vand.</p>
      <p>
        <strong><?= $companyNameFull; ?></strong>
        <br />
        Kristen Bernikows gade 6, 5 sal
        <br />
        1105 København K
      </p>
      <div class="google-map" id="map"></div>
      <script>
        function initMap() {
          var address = {lat: 55.680604, lng: 12.58206};
          var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 17,
            center: address
          });
          var marker = new google.maps.Marker({
            position: address,
            map: map
          });
        }
      </script>
      <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAXg3V94lVE1wm5-L2aRMKfmkzyI7XsGqw&callback=initMap"></script>
    </div>
  </div>
  <div class="small-12 medium-7 columns">
    <div class="page-content">
      <h3>Kontakt</h3>
      <form class="contact-form" name="contact" onsubmit="window.contact(event);">
        <label for="name">Navn
          <input id="name" type="text" class="validate" name="name" required>
        </label>
        <label for="email">E-mail
          <input id="email" type="email" class="validate" name="email" required>
        </label>
        <label for="textarea1">Indhold
          <textarea id="textarea1" class="materialize-textarea" name="content" required></textarea>
        </label>
        <button id="contact-form-button" class="button" type="submit">
          <span>Send</span>
          <i class="fa fa-circle-o-notch fa-spin fa-fw"></i>
        </button>
        <p class="contact-form-message" data-email="<?= $companyMail; ?>" id="contact-message"></p>
      </form>
    </div>
  </div>
</div>