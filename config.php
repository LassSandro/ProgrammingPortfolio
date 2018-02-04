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
  'html5-plain-wordmark' => 1,
  'css3-plain-wordmark' => 1,
  'sass-original' => 1,
  'php-plain' => 1,
  'javascript-plain' => 1,
  'jquery-plain-wordmark' => 2,
  'csharp-line' => 1,
  'cplusplus-line' => 1,
  'wordpress-plain' => 1,
  'bootstrap-plain' => 1,
  'mysql-plain-wordmark' => 1,
  'photoshop-plain' => 1,
  'illustrator-plain' => 2,
  'apache-line-wordmark' => 0,
  'angularjs-plain' => 2,
  'c-line' => 0,
  'coffeescript-original' => 0,
  'd3js-plain' => 0,
  'django-line' => 0,
  'go-plain' => 0,
  'gradle-plain' => 0,
  'laravel-plain' => 0,
  'less-plain-wordmark' => 0,
  'linux-plain' => 0,
  'mongodb-plain-wordmark' => 0,
  'nodejs-plain' => 2,
  'python-plain' => 0,
  'rails-plain' => 0,
  'react-original' => 2,
  'ruby-plain' => 0,
  'swift-plain' => 0,
  'symfony-original' => 0,
  'typescript-plain' => 0,
  'vuejs-plain-wordmark' => 0,
  'android-plain' => 1,
  'apple-original' => 0,
  'atom-original' => 1,
  'bower-plain' => 0,
  'debian-plain' => 0,
  'docker-plain' => 0,
  'dot-net-plain' => 0,
  'drupal-plain' => 0,
  'foundation-plain' => 0,
  'gimp-plain' => 0,
  'git-plain' => 0,
  'github-plain' => 1,
  'gitlab-plain' => 0,
  'google-plain' => 1,
  'inkscape-plain' => 0,
  'intellij-plain' => 0,
  'jeet-plain' => 0,
  'krakenjs-plain' => 0,
  'meteor-plain' => 0,
  'moodle-plain' => 0,
  'nginx-original' => 0,
  'nodewebkit-plain' => 0,
  'oracle-original' => 0,
  'phpstorm-plain' => 0,
  'protractor-plain' => 0,
  'postgresql-plain' => 0,
  'pycharm-plain' => 0,
  'redhat-plain' => 0,
  'redis-plain' => 0,
  'rubymine-plain' => 0,
  'slack-plain' => 0,
  'sourcetree-plain' => 0,
  'ssh-plain' => 0,
  'tomcat-line' => 0,
  'ubuntu-plain' => 0,
  'visualstudio-plain' => 0,
  'webpack-plain' => 0,
  'webstorm-plain' => 0,
  'windows8-plain' => 1,
  'yii-plain' => 0,
  'zend-plain' => 0
);

/* Write the description of the ones you choose */
/* Or the percentage in case you are learning it */
/* These information will pop up through a tooltip on click or on hover */
$knownDescription = array(
  'html5-plain-wordmark' => 0,
  'css3-plain-wordmark' => 0,
  'sass-original' => "83%",
  'php-plain' => "6 years experience",
  'javascript-plain' => 0,
  'jquery-plain-wordmark' => 0,
  'csharp-line' => "I like C#",
  'cplusplus-line' => 0,
  'wordpress-plain' => 0,
  'bootstrap-plain' => 0,
  'mysql-plain-wordmark' => 0,
  'photoshop-plain' => 0,
  'illustrator-plain' => 0,
  'apache-line-wordmark' => "45%",
  'angularjs-plain' => "Favourite framework",
  'c-line' => 0,
  'coffeescript-original' => 0,
  'd3js-plain' => 0,
  'django-line' => "New in my list",
  'go-plain' => 0,
  'gradle-plain' => 0,
  'laravel-plain' => "Back-end programming",
  'less-plain-wordmark' => 0,
  'linux-plain' => 0,
  'mongodb-plain-wordmark' => 0,
  'nodejs-plain' => 0,
  'python-plain' => "21%",
  'rails-plain' => "3%",
  'react-original' => 0,
  'ruby-plain' => "Always a good choice",
  'swift-plain' => 0,
  'symfony-original' => 0,
  'typescript-plain' => 0,
  'vuejs-plain-wordmark' => 0,
  'android-plain' => 0,
  'apple-original' => 0,
  'atom-original' => 0,
  'bower-plain' => 0,
  'debian-plain' => 0,
  'docker-plain' => 0,
  'dot-net-plain' => 0,
  'drupal-plain' => 0,
  'foundation-plain' => 0,
  'gimp-plain' => 0,
  'git-plain' => 0,
  'github-plain' => 0,
  'gitlab-plain' => 0,
  'google-plain' => 0,
  'inkscape-plain' => 0,
  'intellij-plain' => 0,
  'jeet-plain' => 0,
  'krakenjs-plain' => 0,
  'meteor-plain' => 0,
  'moodle-plain' => 0,
  'nginx-original' => 0,
  'nodewebkit-plain' => 0,
  'oracle-original' => 0,
  'phpstorm-plain' => 0,
  'protractor-plain' => 0,
  'postgresql-plain' => 0,
  'pycharm-plain' => 0,
  'redhat-plain' => 0,
  'redis-plain' => 0,
  'rubymine-plain' => 0,
  'slack-plain' => 0,
  'sourcetree-plain' => 0,
  'ssh-plain' => 0,
  'tomcat-line' => 0,
  'ubuntu-plain' => 0,
  'visualstudio-plain' => 0,
  'webpack-plain' => 0,
  'webstorm-plain' => 0,
  'windows8-plain' => 0,
  'yii-plain' => 0,
  'zend-plain' => 0
);


/*
Key: Skill name
Value: Skill description
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
