# WhatICode
A single webpage where you can **showcase** all the programming languages, frameworks, operating systems or other technologies you are familiar with. It is intended to work like a **curriculum** or **portfolio** page, where you add all your professional information (e-mail, social network etc.), your computer knowledge and your past and present projects.
## Getting started
I used `Bootstrap 4` for the **responsive** markup of the page and `php` to allow you to setup your personal information with ease, without touching a line of code. I also created the design of the page using `sass`.

The main page is index.php, all the sass and css files are in the `./style` directory and you can upload your own image in `./images`.

## Prerequisites
All you need to have is a website that supports `.php` files. You also need a internet connection in order to include Bootrstap and the other frameworks that the page needs.

## Installing
Simply download the entire project on your website.

Then you just need to setup your personal information:

1. Upload your own image in `./images`

2. Open the config.php file and setup your data
   - Change the image name with the one you just uploaded
   - Write your name, profession and description
   - Add your social names and links
   - Setup which technologies do you know (value = 1) and which technologies are you learining (value = 2)
   - Write a small description of what do you know and why do you like a particular technologie (The description will be shown on click through a tooltip)
   - Write the title and a small description of your project that you want to showcase (The description will be shown on click through a dropdown box)
   
   
For more information follow the comments on the file.

## Example
This is how the page looks like

![Showcase image](http://www.cmprogrammers.com/images/WhatICode-Screen1.png)


## Built with
- [Bootstrap v4](https://getbootstrap.com/)
- [Sass v3.5.5](https://sass-lang.com/)
- HTML5
- CSS3
- [NodeJS](https://nodejs.org) - live-server
- [FontAwesome](https://fontawesome.com/)
- [Devicon](http://konpa.github.io/devicon/)
- [Popper.js](https://popper.js.org/)
- [jQuery](https://jquery.com/)

## Versioning
WhatICode v1.0.0 - 4 February 2018 by Sandro Maglione

## Author
- **Sandro Maglione** - *Initial work, developement and designing*

## License
GNU General Public License v3.0, see the [LICENSE.md](https://github.com/LassSandro/WhatICode/blob/master/LICENSE) file for details.

