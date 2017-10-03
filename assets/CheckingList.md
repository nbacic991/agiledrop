**Special instructions for Front-end developers**
-------------------------------------------------

### **1. Set up local environment and install starter theme**

-   use our kickstarter theme from zip folder **kickstarter-8.x.zip**
    > (it uses Gulp and Sass). You can create your own starter theme,
    > but we recommend that you use our.

-   for Drupal 7 use branch "7.x"

-   place theme into correct directory.

-   Drupal 7 example: {your\_www\_root}/sites/all/themes/

-   Drupal 8 example: {your\_www\_root}/themes/

-   rename theme and set theme preview image (screenshot.png)

-   edit theme.info file and template.php file

-   enable your theme and set to default

-   read documentation/readme on kickstarter theme GitHub repository

- Done.

### **2. Before you start theming**

-   Before you start writing your own code, read about Drupal Coding
    > Standards
    > [*https://www.drupal.org/docs/develop/standards/css*](https://www.drupal.org/docs/develop/standards/css)

-   Get to know the theme folder structure (you’ll see that some example
    > files are already placed inside). Put your custom new files in the
    > right place.

-   Read about Drupal template naming conventions

    -   Drupal 8:
        > [*https://www.drupal.org/docs/8/theming/twig/twig-template-naming-conventions*](https://www.drupal.org/docs/8/theming/twig/twig-template-naming-conventions)

    -   Drupal 7:
        > [*https://www.drupal.org/node/1089656*](https://www.drupal.org/node/1089656)

-   Read about JavaScript coding standard on Drupal

    -   [*https://www.drupal.org/docs/develop/standards/javascript/javascript-coding-standards*](https://www.drupal.org/docs/develop/standards/javascript/javascript-coding-standards)


- Done.


### **3. Theming**

-   Open one of provided design files

    -   If you find any element that isn’t in design, you can leave it.
        > Design is more as a guideline for this example.

    -   For all the icons in design you can use FontAwesome library     - Done.

-   Mobile theming

    -   We don’t have mobile design, so you make what you think will
        > be best. You will not always get a mobile design, so now it’s
        > up to you.
        
        - Done.

-   First you need to theme main navigation. Use CSS media breakpoints
    > with combination of JavaScript / jQuery and define desktop and
    > mobile navigation view (on mobile use hamburger icon). You can use
    > CSS animations as well. Create navigation with two level dropdown
    > on desktop, on mobile hide second level by default, and show only
    > on click or touch event. You can add icon "+" to show
    > second level. Navigation must be position fixed. Don’t be afraid
    > to import other libraries that you know and you’ve worked with -
    > for example FontAwesome.
    
    - Done.


-   Style slider on front page.

    -   You can use one of the following jQuery libraries

        -   Slick JS
            > [*http://kenwheeler.github.io/slick/*](http://kenwheeler.github.io/slick/)
            
            - I've used Slick slider.

        -   OWL Carousel
            > [*https://github.com/OwlFonk/OwlCarousel*](https://github.com/OwlFonk/OwlCarousel)

    -   Slider must be responsive, all texts and images must be visible
        > on mobile devices.
        
        - It is responsive.

-   Open provided Companies.afdesign file

    -   You will style company node list by this design.

    -   For company node detail use

-   Event node

    -   Style event list like it is on Events.afdesign

    -   If there will be more than 4 events, apply one of the carousels
        > you’ve used on homepage slider and use prev/next
        > navigation type.

    -   For event detail use the design Events\_page.afdesign and
        > theme it.
        
        - Done.

    -   All blocks must be same heights. Shorten text and titles using
        > CSS ellipsis or some other method that you know, if there will
        > be too many characters displayed.
        

-   Location node

    -   TODO: Boštjan poglej ker dizajn bi bil za tole najbolj
        > primeren? :)

-   Footer

    -   Style footer by the design, create CSS3 pseudo elements for
        > triangle backgrounds on bottom. Change opacity of this
        > elements for mobile devices and set smaller size.
        
        - I've removed them from mobile devices.

-   Global theming

    -   Create simple CSS3 hover transition for all CTA buttons. 
    
    - Done.

    -   When mobile navigation will be triggered, disable scroll on
        > entire site and leave only navigation scrollable by Y axis.
        > Also try to apply overlay to entire site except navigation
        > with white rgb background with alpha channel set to 80%.
        - Done.

    -   Make CTA buttons as extendables, so you could reuse them
        > anywhere else in the code.

    -   Make sure you will set all container widths, colors, etc.
        > globally accessible and that they could be changed globally.

    -   Apply some rule only for mobile device. For example set
        > background to black on header. This must be done without media
        > breakpoint technique. You should target mobile devices only!
        - Done.

    -   Set default stylings for headings (h1,h2,...), paragraphs and
        > lists (ul,ol).

        -   For unordered list (&lt;ul&gt;) use custom check icon (img
            > or FontAwesome) instead of default list style type.
            
            - Done.

-   After you’re done

    -   Make main container width for 120px wider. Now check if your
        > code adapts to new width. (This is what can happen in real
        > life projects, when client suddenly decides to have wider
        > site, or maybe you just set it wrong...)