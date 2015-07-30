# HispanicLiverpoolOmeka
![Theme Image](https://github.com/digihum/OmekaThemeDev-HispanicLiverpoolCC/blob/master/themes/omekahispanicliverpool/theme.jpg)

A Custom Omeka theme for Hispanic Liverpool Community Collection Project, prepared by Hafiz Hanif.

_This folder contains a complete Omeka installation. If you want to take a look at the custom theme, please head to **omekahispanicliverpool** folder in the theme directory._

This is a custom Omeka theme, developed based on Omeka's own Berlin theme. The concept of the theme derived from the main project website (http://www2.warwick.ac.uk/fac/arts/modernlanguages/research/hispanic/hispanicliverpool), including the colour scheme and the header image. The project is set to collect images and stories from the Hispanic community.

## Project Description
The Hispanic Liverpool Project works with families, individuals, archives and heritage organisations to gather and preserve the forgotten stories of Liverpool's Hispanic community from the nineteenth century until the present. By bringing together sources from census returns and trade directories to family photographs and memories, we hope to put Liverpool's Hispanic history back on the local and global map.

## The Team
* Kirsty Hooper (http://www2.warwick.ac.uk/fac/arts/modernlanguages/people/academic/hooper/)
* Laura Yates


supported by the University of Warwick Digital Humanities Developer Team, led by
* David Beck (http://www2.warwick.ac.uk/fac/arts/history/people/teaching_staff/beck/)
* Steve Ranford (http://www2.warwick.ac.uk/fac/arts/research/digitalhumanities/connect/contactus/#stever)
* Hafiz Hanif (http://www2.warwick.ac.uk/fac/soc/ces/postgrads/pgr/eportfolios/edrmak)

## Uses
* Macaw for fast html,css, and javascript templating

## Plugins Used
* Commenting
* Contribution
* Guess User
* Record Relations
* Simple Contact Form
* Simple Pages
* User Profiles

_*some plugins depend on other plugins to work_

## Todo
* ~~Templating web pages~~
* ~~Moving to live server~~
* ~~Link everything to database. Problematic issues/pages includes (26th July 2015, 9:07pm):~~

  * ~~register~~
  * ~~login~~
  * ~~lost password~~
  * ~~search function~~
  * ~~featured item~~
  * ~~featured collection~~
  * ~~items/browse~~
  * ~~items/show~~
  * ~~items/tags~~
  * ~~collections/show~~
  * ~~collections/browse~~
  * ~~disclaimer text~~
  
  Awesome



## Design Influences
I've designed this theme based on one of the listed websites in the AWWWARDS website. Colour scheme is based on the existing project website hosted under University of Warwick's website (link above). Only 1 font is used i.e. Roboto, with some variations of font-weight an font-size, to differentiate between headings and body copy. This helps the site to look simple, clean, and consistent throughout the site. 

## Lesson Learned
### From design perspective
* To keep tab on what ever websites I've used as a reference when designing, so that it can be properly referenced in this document, for future use.
* Absolute positioning should be avoided, in case there's an 'admin-bar' conflict.

### From development perspective
* To begin to use bootstrap v3 in future projects so that the code will be more manageable.
* To have a proper steps of setting up projects in local development environment.
* SimpleContactForm needs to be edited in its original plugin folder, unlike Simple Pages that can be replaced with its own directory in the theme folder. For the Simple Pages use case, see tutorial from InteractiveMechanics, below.
* GuestUser register.php _h1_ heading needed to be moved, to produce the same look between pages.
* To configure HTML layout for login/forgotpassword etc pages, head to _application/views/scripts/users_ folder.
* To configure HTML layout for SignUp page, head to _plugins/GuessUser/views/public/user_ folder.
* Wrap everything between header and footer, a div with an id 'primary'.
* Need to learn how to properly 'hack' the search function.

## Useful Resources (Omeka Development)
* Displaying total number of items (http://omeka.org/forums/topic/display-total-items-in-omeka-20)
* Displaying tags cloud (http://omeka.readthedocs.org/en/latest/Reference/libraries/globals/tag_cloud.html)
* Tips on customising file structure to introduce new pages (http://omeka.readthedocs.org/en/latest/Tutorials/modifyingThemes.html)
* Tutorial on the basics of Omeka Theme development (http://interactivemechanics.com/blog/the-basics-of-building-omeka-themes/)
* Tutorial on setting up a proper file structure for introducing new pages in Omeka via Simple Pages plugin (http://interactivemechanics.com/blog/page-templates-with-omeka-simple-pages/)
* Tips on how to edit Featured Items/Collections _(single.php)_ (http://omeka.org/forums/topic/how-to-edit-recently-added-items)
