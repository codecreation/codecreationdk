<html xmlns="http://www.w3.org/1999/html">
  <head>
    <title>DocIT.dk</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation-flex.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
  </head>
  <body>
    <?php
      $companyName = 'LevelOne';

    ?>
    <header data-sticky-container>
      <div class="top-bar sticky is-stuck ">
        <div class="top-bar-title">
          <span data-responsive-toggle="responsive-menu" data-hide-for="medium" class="top-bar-toggle">
            <button type="button" data-toggle><i class="fa fa-bars" aria-hidden="true"></i></button>
          </span>
          <strong><?= $companyName; ?>.dk</strong>
        </div>
        <div id="responsive-menu">
          <div class="top-bar-right">
            <ul class="menu">
              <li><a name="about" class="top-bar-link top-bar-link-active" href="#"><?= $companyName; ?></a></li>
              <li><a name="technologies" class="top-bar-link" href="#">Teknologier</a></li>
              <li><a name="projects" class="top-bar-link" href="#">Projekter</a></li>
              <li><a name="customers" class="top-bar-link" href="#">Kunder</a></li>
              <li><a name="contact" class="top-bar-link" href="#">Kontakt</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <section id="level1">
      <div data-name="about" class="page" style="background-image:url('bg-about.jpg');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Hvem er vi</h3>
                <div class="row">
                  <div class="small-12 medium-4 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-4 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-4 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>

              <div class="page-content">
                <h3>Hvorfor er vi anderledes</h3>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div data-name="technologies" class="page" style="background-image:url('bg-technologies.png');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">

              <div class="page-content">
                <h3>PHP</h3>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>

              <div class="page-content">
                <h3>JavaScript</h3>
                <div class="row">
                  <div class="small-12 medium-4 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-4 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-4 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>

              <div class="page-content">
                <h3>HTML & CSS</h3>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>

      <div data-name="projects" class="page" style="background-image:url('bg-projects.jpg');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Vores projekter</h3>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="page-down trigger-vertical-scroll">
                <p>Testaviva.dk</p>
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-name="customers" class="page" style="background-image:url('bg-customers.jpg');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Vores kunder</h3>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>

                <br /><br />

                <div class="row">
                  <div class="small-3 columns">
                    <img src="customers/thegoodwooddk.png" width="100%" height="auto" />
                  </div>
                  <div class="small-9 columns">
                    <h4>THEGOODWOOD</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>

                <br /><br />

                <div class="row">
                  <div class="small-3 columns">
                    <img src="customers/rapteksterdk.png" width="100%" height="auto" />
                  </div>
                  <div class="small-9 columns">
                    <h4>Raptekster.dk</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-name="contact" class="page" style="background-image:url('bg-contact.png');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Kontakt</h3>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <form class="col s12" name="contact" onsubmit="window.contact(event);">
                      <label for="name">Navn
                        <input id="name" type="text" class="validate" name="name" required>
                      </label>
                      <label for="email">E-mail
                        <input id="email" type="email" class="validate" name="email" required>
                      </label>
                      <label for="textarea1">Indhold
                        <textarea id="textarea1" class="materialize-textarea" name="content" required></textarea>
                      </label>

                      <button class="button success" type="submit">Submit</button>
                    </form>
                  </div>
                </div>
              </div>

              <div class="page-content">
                <h3>Besøg os</h3>
                <p>You are always welcome to swing by for a coffee, tea, beer or just a cup of water :)</p>
                <p>
                  <strong>DocIT IVS</strong>
                  <br />
                  Kristen Bernikows gade 6, 5 sal
                  <br />
                  1105 København K
                </p>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="level2">
      <div data-name="about" class="page"><!-- About does not have any vertical children. --></div>

      <div data-name="technologies" class="page"><!-- Technologies does not have any vertical children. --></div>

      <div data-name="projects" class="page" style="background-image:url('projects/project-testaviva.png');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Testaviva.dk</h3>
                <p><strong>Lanceret: 2015</strong></p>
                <p><strong>Teknologi: Symfony / React</strong></p>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="page-down trigger-vertical-scroll">
                <p>Kontraktmaskinen</p>
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-name="customers" class="page"><!-- Customers does not have any vertical children. --></div>

      <div data-name="contact" class="page"><!-- Contact does not have any vertical children. --></div>
    </section>

    <section id="level3">
      <div data-name="about" class="page"><!-- About does not have any vertical children. --></div>

      <div data-name="technologies" class="page"><!-- Technologies does not have any vertical children. --></div>

      <div data-name="projects" class="page" style="background-image:url('projects/project-kontraktmaskinen.png');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Kontraktmaskinen</h3>
                <p><strong>Lanceret: 2015</strong></p>
                <p><strong>Teknologi: Symfony / React</strong></p>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
              <div class="page-down trigger-vertical-scroll">
                <p>Sikkerarv.dk</p>
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-name="customers" class="page"><!-- Customers does not have any vertical children. --></div>

      <div data-name="contact" class="page"><!-- Contact does not have any vertical children. --></div>
    </section>

    <section id="level3">
      <div data-name="about" class="page"><!-- About does not have any vertical children. --></div>

      <div data-name="technologies" class="page"><!-- Technologies does not have any vertical children. --></div>

      <div data-name="projects" class="page" style="background-image:url('projects/project-sikkerarv.png');">
        <div class="page-inner">
          <div class="row">
            <div class="small-12 columns">
              <div class="page-content">
                <h3>Sikkerarv.dk</h3>
                <p><strong>Lanceret: 2015</strong></p>
                <p><strong>Teknologi: Symfony / React</strong></p>
                <div class="row">
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                  <div class="small-12 medium-6 columns">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div data-name="customers" class="page"><!-- Customers does not have any vertical children. --></div>

      <div data-name="contact" class="page"><!-- Contact does not have any vertical children. --></div>
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.min.js"></script>
    <script src="script.js?v1"></script>
  </body>
</html>
