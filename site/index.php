<?php include('functions.php'); ?>
<?php $companyName = 'Code Creation'; ?>
<?php $companyNameFull = "$companyName IVS"; ?>
<?php $companyNameWeb = "codecreation.dk"; ?>
<?php $companyMail = "kontakt@codecreation.dk"; ?>
<html xmlns="http://www.w3.org/1999/html">
  <head>
    <title><?= $companyName ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation-flex.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="levels.css">
  </head>
  <body>
    <header data-sticky-container>
      <div class="top-bar sticky is-stuck ">
        <div class="top-bar-title">
          <span data-responsive-toggle="responsive-menu" data-hide-for="medium" class="top-bar-toggle">
            <button type="button" data-toggle><i class="fa fa-bars" aria-hidden="true"></i></button>
          </span>
          <strong><?= $companyName; ?></strong>
        </div>
        <div id="responsive-menu">
          <div class="top-bar-right">
            <ul class="menu">
              <li><a data-page="0" class="top-bar-link" href="#">Om <?= $companyName; ?></a></li>
              <li><a data-page="1" class="top-bar-link" href="#">Kompetencer</a></li>
              <li><a data-page="2" class="top-bar-link" href="#">Projekter</a></li>
              <li><a data-page="3" class="top-bar-link" href="#">Kunder</a></li>
              <li><a data-page="4" class="top-bar-link" href="#">Kontakt</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <section data-level="0" class="level">
      <div data-page="0" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/about-level1.php'); ?>
            </div>
          </div>
        </div>
      </div>

      <div data-page="1" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/skills-level1.php'); ?>
            </div>
          </div>
        </div>
      </div>

      <div data-page="2" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/projects-level1.php'); ?>
              <?php nextProject('Testaviva.dk'); ?>
            </div>
          </div>
        </div>
      </div>

      <div data-page="3" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/customers-level1.php'); ?>
            </div>
          </div>
        </div>
      </div>

      <div data-page="4" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/contact-level1.php'); ?>
            </div>
          </div>
        </div>
      </div>
      <div class="clear"></div>
    </section>


    <section data-level="1" class="level">
      <div data-page="0" class="page"><!-- About does not have any vertical children. --></div>
      <div data-page="1" class="page"><!-- Technologies does not have any vertical children. --></div>
      <div data-page="2" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/projects-level2.php'); ?>
              <?php nextProject('Kontraktmaskinen'); ?>
            </div>
          </div>
        </div>
      </div>
      <div data-page="3" class="page"><!-- Customers does not have any vertical children. --></div>
      <div data-page="4" class="page"><!-- Contact does not have any vertical children. --></div>
      <div class="clear"></div>
    </section>

    <section data-level="2" class="level">
      <div data-page="0" class="page"><!-- About does not have any vertical children. --></div>
      <div data-page="1" class="page"><!-- Technologies does not have any vertical children. --></div>
      <div data-page="2" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/projects-level3.php'); ?>
              <?php nextProject('Sikkerarv.dk'); ?>
            </div>
          </div>
        </div>
      </div>
      <div data-page="3" class="page"><!-- Customers does not have any vertical children. --></div>
      <div data-page="4" class="page"><!-- Contact does not have any vertical children. --></div>
      <div class="clear"></div>
    </section>

    <section data-level="3" class="level">
      <div data-page="0" class="page"><!-- About does not have any vertical children. --></div>
      <div data-page="1" class="page"><!-- Technologies does not have any vertical children. --></div>
      <div data-page="2" class="page">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <?php include('pages/projects-level4.php'); ?>
            </div>
          </div>
        </div>
      </div>
      <div data-page="3" class="page"><!-- Customers does not have any vertical children. --></div>
      <div data-page="4" class="page"><!-- Contact does not have any vertical children. --></div>
      <div class="clear"></div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.js"></script>
    <script src="script.js?v1"></script>
  </body>
</html>
