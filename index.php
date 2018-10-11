<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Font Awesome -->
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Devicon icons (http://konpa.github.io/devicon/) -->
    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

    <!-- Custom style -->
    <link rel="stylesheet" href="./style/css/style.css" />

    <!-- Custom icons -->
    <link rel="stylesheet" href="./style/css/custom-icons.css" />

    <title>WhatICode</title>
  </head>
  <body>
    <?php include("config.php"); ?>

    <!-- All page container -->
    <div class="container-fluid">


      <!-- Content row -->
      <div class="row">


        <!-- Left content informations -->
        <div class="col-12 col-sm-5 col-md-5 col-lg-3 pb-5 pt-4 pl-4 pr-4 my-bg-primary">

          <!-- User image -->
          <div class="text-center">
            <img src="./images/<?php echo $myImage; ?>" class="img-fluid" alt="User image">
          </div>

          <!-- Main info container -->
          <!-- class="info-sidebar" to change the text size Responsive -->
          <div class="info-sidebar my-sidebar-padding mb-2 mt-1">
            <!-- Name -->
            <h1 class="my-text-default pt-2"><?php echo $myName; ?></h1>

            <!-- Profession -->
            <h2 class="my-text-subtext"><?php echo $myProfession; ?></h2>
          </div>

          <!-- Bio (card) -->
          <div class="card my-bg-primary my-card-bio my-sidebar-padding mb-5">
            <div class="card-body">
              <p class="card-text my-text-subtext"><?php echo $myBio; ?></p>
            </div>
          </div>

          <!-- Contact links -->
          <div class="list-group list-group-flush mt-3">
            <?php
              foreach($myLinks as $data => $value) {
            ?>
              <a target="_blank" href="<?php echo $value; ?>" class="list-group-item list-group-item-action"><i class="<?php echo $myLinkIcons[$data]; ?> mr-3"></i><span class="my-text-list"><?php echo $myLinksText[$data]; ?></span></a>
            <?php } ?>
          </div>

          <!-- Contact me button -->
          <a href="mailto:<?php echo $contactMail; ?>"class="btn btn-primary my-bg-btn btn-block mt-5 p-2 font-weight-bold">CONTACT ME</a>
        </div>




        <!-- Right content section -->
        <div class="col-12 col-sm-7 col-md-7 col-lg-9 my-bg-secondary pt-5 pr-5 pl-5 pb-3">

          <!-- Section 1 - About me -->
          <?php if ($active['aboutMe']) { ?>
          <div class="container mb-5">
            <h4 class="my-text-title mb-0">About Me</h4>
            <p class="my-text-title small"><i>Get to know who I am</i></p>

            <!-- Hr -->
            <hr class="my-hr-style mb-3"/>

            <!-- Data list -->
            <div class="my-bg-secondary">
              <p class="my-text-subtext">
              <?php
                echo $whoIAm;
              ?>
              </p>
            </div>
          </div>
          <?php } ?>


          <!-- Section 1 - Experience -->
          <?php if ($active['experience']) { ?>
          <div class="container mb-5">
            <h4 class="my-text-title mb-0">Experience</h4>
            <p class="my-text-title small"><i>Level of experience with different technologies <small>(Click to see more information)</small></i></p>

            <!-- Hr -->
            <hr class="my-hr-style mb-3"/>

            <!-- Data list -->
            <div class="my-bg-secondary">
              <?php
                foreach($experience as $data => $value) {
              ?>

              <div class="progress mt-1 mb-3" data-toggle="tooltip" data-html="true" data-placement="top" title="<small><?php echo $value . " / 100"; ?></small>">
                <div class="progress-bar" role="progressbar" style="width: <?php echo $value; ?>%" aria-valuenow="<?php echo $value; ?>" aria-valuemin="0" aria-valuemax="100">
                  <span><?php echo $data; ?></span>
                </div>
              </div>
              <?php } ?>
            </div>
          </div>
          <?php } ?>


          <!-- Section 2 - Known -->
          <?php if ($active['knownTechnologies']) { ?>
          <div class="container mb-5 pt-5">
            <h4 class="my-text-title mb-0">Known Technologies</h4>
            <p class="my-text-title small"><i>Programming languages, frameworks, software and other <small>(Click to see more information)</small></i></p>

            <!-- Hr -->
            <hr class="my-hr-style mb-3"/>

            <!-- Data list -->
            <div class="my-bg-secondary">
              <?php
                foreach($known as $data => $value) {
                  if ($value == 1) {
              ?>
                <button type="button" class="clear-button-style" data-toggle="tooltip" data-html="true" data-placement="top" title="<small><?php echo $knownDescription[$data]; ?></small>"><i class="<?php echo $data; ?> my-icon-single"></i></button>
              <?php } } ?>
            </div>
          </div>
          <?php } ?>


          <!-- Section 3 - Learning at the moment -->
          <?php if ($active['currentlyLearning']) { ?>
          <div class="container mb-5 pt-5">
            <h4 class="my-text-title mb-0">Currently Learning</h4>
            <p class="my-text-title small"><i>Technologies that I am currently studying and experimenting with <small>(Click to see my current percentage progress)</small></i></p>

            <!-- Hr -->
            <hr class="my-hr-style mb-3"/>

            <!-- Data list -->
            <div class="my-bg-secondary">
              <?php
                foreach($known as $data => $value) {
                  if ($value == 2) {
              ?>
                <button type="button" class="clear-button-style" data-toggle="tooltip" data-placement="top" title="<?php echo $knownDescription[$data]; ?>"><i class="<?php echo $data; ?> my-icon-single"></i></button>
              <?php } } ?>
            </div>

          </div>
          <?php } ?>


          <!-- Section 4 - My Projects -->
          <?php if ($active['myProjects']) { ?>
          <div class="container mb-5 pt-5">
            <h4 class="my-text-title mb-0">My Projects</h4>
            <p class="my-text-title small"><i>Projects on which I worked on <small>(Click to see more information)</small></i></p>

            <!-- Hr -->
            <hr class="my-hr-style mb-3"/>

            <!-- Data list -->
            <div class="my-bg-secondary">

              <!-- Dropdowns -->
              <div id="accordion">

                <?php
                  $count = 1;
                  foreach($projects as $data => $value) {
                    $id = "heading".$count;
                    $collapse = "collapse".$count;
                ?>
                  <div class="card my-bg-primary">
                    <div class="card-header" id="<?php echo $id; ?>">
                      <button class="clear-button-style w-100" data-toggle="collapse" data-target="<?php echo '#'.$collapse; ?>" aria-expanded="false" aria-controls="<?php echo $collapse; ?>">
                        <h5 class="my-text-subtext mb-0 text-left">
                            <?php echo $data; ?>
                          <i class="fa fa-angle-down float-right"></i>
                        </h5>
                      </button>
                    </div>

                    <div id="<?php echo $collapse; ?>" class="collapse" aria-labelledby="<?php echo $id; ?>" data-parent="#accordion">
                      <div class="card-body my-text-subtext">
                        <small>
                          <?php echo $value; ?>
                        </small>
                      </div>
                    </div>
                  </div>
                <?php
                  ++$count;
                  }
                ?>


              </div>
            </div>
          </div>
          <?php } ?>



        <!-- Made by footer, please do not delete or change, thanks -->
        <footer class="pt-5 pl-4 pr-4" style="opacity: 0.6">
          <nav class="nav">
            <p class="my-text-subtext">
              <small>Designed and built by <a target="_blank" href="https://github.com/LassSandro">Sandro Maglione</a><br />Support the developer on socials<br />Currently v1.1.0 2018 GNU General Public License v3.0</small>
            </p>
          </nav>
        </footer>


       <!-- Close main content section -->
      </div>

    <!-- Close container -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Enable tooltip (from popper.js) -->
    <script>
      $( document ).ready(function() {
        $(function () {
          $('[data-toggle="tooltip"]').tooltip()
        })
      });
    </script>

  </body>
</html>
