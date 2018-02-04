<?php
/* Change the string content to match your personal information */

/* User image (filename.png/jpg/jpeg...) */
$myImage = "default.jpeg";

/* Name */
$myName = "James Smith";

/* Profession */
$myProfession = "Developer";

/* My description */
$myBio = "I am a developer. I love cats, computers and visit new places and meeting new people";

/* Contact me email */
$contactMail = "lass.maglio@gmail.com";


/* Social links */
/* Do not change the array key (email, github etc.) */
/* You can also add or delete one value if you want */
$myLinks = array(
  'email' => 'mailto:lass.maglio@gmail.com',
  'github' => 'https://github.com/LassSandro',
  'linkedin' => 'https://www.linkedin.com/in/sandro-maglione97/',
  'website' => 'http://www.cmprogrammers.com/',
  'twitter' => 'https://twitter.com/SandroMaglione',
  'playstore' => 'https://play.google.com/store/apps/dev?id=7196118552342692066',
  'facebook' => 'https://www.facebook.com/sandro.maglione.35'
);

/* Display text */
$myLinksText = array(
  'email' => 'lass.maglio@gmail.com',
  'github' => 'LassSandro',
  'linkedin' => 'Sandro Maglione',
  'website' => 'cmprogrammers.com',
  'twitter' => '@SandroMaglione',
  'playstore' => 'C.M.Programmers',
  'facebook' => 'Sandro Maglione'
);

/* Icons (Default from FontAwesome (https://fontawesome.com/)) */
$myLinkIcons = array(
  'email' => 'fa fa-envelope',
  'github' => 'fab fa-github',
  'linkedin' => 'fab fa-linkedin-in',
  'website' => 'fa fa-globe',
  'twitter' => 'fab fa-twitter',
  'playstore' => 'fab fa-google-play',
  'facebook' => 'fab fa-facebook-f'
);


/*
Setup the Technologies you know (value = 1) and your are learning (value = 2)
Leave a value of 0 if you do not want to include something
1 = Known
2 = Learning
0 = Not Known / Not include
*/
$known = array(
  'devicon-html5-plain-wordmark' => 1,
  'devicon-css3-plain-wordmark' => 1,
  'devicon-sass-original' => 1,
  'devicon-php-plain' => 1,
  'devicon-javascript-plain' => 1,
  'devicon-jquery-plain-wordmark' => 2,
  'devicon-csharp-line' => 1,
  'devicon-cplusplus-line' => 1,
  'devicon-wordpress-plain' => 1,
  'devicon-bootstrap-plain' => 1,
  'devicon-mysql-plain-wordmark' => 1,
  'devicon-photoshop-plain' => 1,
  'devicon-illustrator-plain' => 2,
  'devicon-apache-line-wordmark' => 0,
  'devicon-angularjs-plain' => 2,
  'devicon-c-line' => 0,
  'devicon-coffeescript-original' => 0,
  'devicon-d3js-plain' => 0,
  'devicon-django-line' => 0,
  'devicon-go-plain' => 0,
  'devicon-gradle-plain' => 0,
  'devicon-laravel-plain' => 0,
  'devicon-less-plain-wordmark' => 0,
  'devicon-linux-plain' => 0,
  'devicon-mongodb-plain-wordmark' => 0,
  'devicon-nodejs-plain' => 2,
  'devicon-python-plain' => 0,
  'devicon-rails-plain' => 0,
  'devicon-react-original' => 2,
  'devicon-ruby-plain' => 0,
  'devicon-swift-plain' => 0,
  'devicon-symfony-original' => 0,
  'devicon-typescript-plain' => 0,
  'devicon-vuejs-plain-wordmark' => 0,
  'devicon-android-plain' => 1,
  'devicon-apple-original' => 0,
  'devicon-atom-original' => 1,
  'devicon-bower-plain' => 0,
  'devicon-debian-plain' => 0,
  'devicon-docker-plain' => 0,
  'devicon-dot-net-plain' => 0,
  'devicon-drupal-plain' => 0,
  'devicon-foundation-plain' => 0,
  'devicon-gimp-plain' => 0,
  'devicon-git-plain' => 0,
  'devicon-github-plain' => 1,
  'devicon-gitlab-plain' => 0,
  'devicon-google-plain' => 1,
  'devicon-inkscape-plain' => 0,
  'devicon-intellij-plain' => 0,
  'devicon-jeet-plain' => 0,
  'devicon-krakenjs-plain' => 0,
  'devicon-meteor-plain' => 0,
  'devicon-moodle-plain' => 0,
  'devicon-nginx-original' => 0,
  'devicon-nodewebkit-plain' => 0,
  'devicon-oracle-original' => 0,
  'devicon-phpstorm-plain' => 0,
  'devicon-protractor-plain' => 0,
  'devicon-postgresql-plain' => 0,
  'devicon-pycharm-plain' => 0,
  'devicon-redhat-plain' => 0,
  'devicon-redis-plain' => 0,
  'devicon-rubymine-plain' => 0,
  'devicon-slack-plain' => 0,
  'devicon-sourcetree-plain' => 0,
  'devicon-ssh-plain' => 0,
  'devicon-tomcat-line' => 0,
  'devicon-ubuntu-plain' => 0,
  'devicon-visualstudio-plain' => 0,
  'devicon-webpack-plain' => 0,
  'devicon-webstorm-plain' => 0,
  'devicon-windows8-plain' => 1,
  'devicon-yii-plain' => 0,
  'devicon-zend-plain' => 0,
  'icon-twitch' => 0,
  'icon-google-adwords' => 0,
  'icon-archlinux' => 0,
  'icon-cyclejs' => 0,
  'icon-firebase' => 0,
  'icon-graphene' => 0,
  'icon-kotlin' => 0,
  'icon-steam' => 0,
  'icon-udacity' => 0,
  'icon-flight' => 0,
  'icon-fsharp' => 0,
  'icon-spring' => 0,
  'icon-backbone-icon' => 0,
  'icon-bitbucket' => 0
);

/* Write the description of the ones you choose */
/* Or the percentage in case you are learning it */
/* These information will pop up through a tooltip on click or on hover */
$knownDescription = array(
  'devicon-html5-plain-wordmark' => 1,
  'devicon-css3-plain-wordmark' => 1,
  'devicon-sass-original' => 1,
  'devicon-php-plain' => 1,
  'devicon-javascript-plain' => 1,
  'devicon-jquery-plain-wordmark' => 2,
  'devicon-csharp-line' => 1,
  'devicon-cplusplus-line' => 1,
  'devicon-wordpress-plain' => 1,
  'devicon-bootstrap-plain' => 1,
  'devicon-mysql-plain-wordmark' => 1,
  'devicon-photoshop-plain' => 1,
  'devicon-illustrator-plain' => 2,
  'devicon-apache-line-wordmark' => 0,
  'devicon-angularjs-plain' => 2,
  'devicon-c-line' => 0,
  'devicon-coffeescript-original' => 0,
  'devicon-d3js-plain' => 0,
  'devicon-django-line' => 0,
  'devicon-go-plain' => 0,
  'devicon-gradle-plain' => 0,
  'devicon-laravel-plain' => 0,
  'devicon-less-plain-wordmark' => 0,
  'devicon-linux-plain' => 0,
  'devicon-mongodb-plain-wordmark' => 0,
  'devicon-nodejs-plain' => 2,
  'devicon-python-plain' => 0,
  'devicon-rails-plain' => 0,
  'devicon-react-original' => 2,
  'devicon-ruby-plain' => 0,
  'devicon-swift-plain' => 0,
  'devicon-symfony-original' => 0,
  'devicon-typescript-plain' => 0,
  'devicon-vuejs-plain-wordmark' => 0,
  'devicon-android-plain' => 1,
  'devicon-apple-original' => 0,
  'devicon-atom-original' => 1,
  'devicon-bower-plain' => 0,
  'devicon-debian-plain' => 0,
  'devicon-docker-plain' => 0,
  'devicon-dot-net-plain' => 0,
  'devicon-drupal-plain' => 0,
  'devicon-foundation-plain' => 0,
  'devicon-gimp-plain' => 0,
  'devicon-git-plain' => 0,
  'devicon-github-plain' => 1,
  'devicon-gitlab-plain' => 0,
  'devicon-google-plain' => 1,
  'devicon-inkscape-plain' => 0,
  'devicon-intellij-plain' => 0,
  'devicon-jeet-plain' => 0,
  'devicon-krakenjs-plain' => 0,
  'devicon-meteor-plain' => 0,
  'devicon-moodle-plain' => 0,
  'devicon-nginx-original' => 0,
  'devicon-nodewebkit-plain' => 0,
  'devicon-oracle-original' => 0,
  'devicon-phpstorm-plain' => 0,
  'devicon-protractor-plain' => 0,
  'devicon-postgresql-plain' => 0,
  'devicon-pycharm-plain' => 0,
  'devicon-redhat-plain' => 0,
  'devicon-redis-plain' => 0,
  'devicon-rubymine-plain' => 0,
  'devicon-slack-plain' => 0,
  'devicon-sourcetree-plain' => 0,
  'devicon-ssh-plain' => 0,
  'devicon-tomcat-line' => 0,
  'devicon-ubuntu-plain' => 0,
  'devicon-visualstudio-plain' => 0,
  'devicon-webpack-plain' => 0,
  'devicon-webstorm-plain' => 0,
  'devicon-windows8-plain' => 1,
  'devicon-yii-plain' => 0,
  'devicon-zend-plain' => 0,
  'icon-twitch' => 0,
  'icon-google-adwords' => 0,
  'icon-archlinux' => 0,
  'icon-cyclejs' => 0,
  'icon-firebase' => 0,
  'icon-graphene' => 0,
  'icon-kotlin' => 0,
  'icon-steam' => 0,
  'icon-udacity' => 0,
  'icon-flight' => 0,
  'icon-fsharp' => 0,
  'icon-spring' => 0,
  'icon-backbone-icon' => 0,
  'icon-bitbucket' => 0
);


/*
Key: Project title
Value: Project description
*/
$projects = array(
  'WhatICode' =>
  'Explain here what you developed: What language did you use? What was your role in the team? etc.',
  'Project1' =>
  'Explain here what you developed: What language did you use? What was your role in the team? etc.',
  'Project2' =>
  'Explain here what you developed: What language did you use? What was your role in the team? etc.',
  'Project3' =>
  'Explain here what you developed: What language did you use? What was your role in the team? etc.',
);
?>
