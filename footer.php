<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package iPanelThemes Knowledgebase
 */
?>
</div>
<!-- #content -->


<footer id="footer" class="footer" itemscope="" itemtype="https://schema.org/WPFooter">
    <div class="wrap">
      <div id="department-footer">
        <div id="footer-widgets" class="container">
          <div class="row">
            <div class="col-md-4 col-md-offset-2" id="footer-widget-1">
              <?php dynamic_sidebar( 'sidebar-2' ); ?>
            </div>
            <div class="col-md-4 col-md-offset-2" id="footer-widget-2">
              <?php dynamic_sidebar( 'sidebar-3' ); ?>
            </div>
          </div>
        </div>
        <?php wp_footer(); ?>
        <h2 style="margin-bottom:12px;">The University of Tennessee at&nbsp;Chattanooga</h2>
        <div>
          <address>
			  <a href="https://explore.utc.edu/"><span class="mobile-block">615 McCallie Ave</span><span class="mobile-hide">,</span> Chattanooga,&nbsp;TN&nbsp;37403</a> <span class="mobile-hide">&nbsp;&nbsp;|&nbsp;&nbsp;</span><span class="mobile-block">
          <svg class="svg-inline--fa fa-phone" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="phone" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
            <path fill="currentColor" d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"></path>
          </svg>
          <!-- <i class="fas fa-phone"></i> -->&nbsp;&nbsp;<a href="tel:423-425-4111">423-425-4111</a></span> 
          </address>
        </div>
      </div>
     
      <div class="footer-copyright-container">
        <div class="footer-copyright">
          <h2 class="sr-only">Footer</h2>
        </div>
        <div id="social-footer">
     	  <ul>
            <li> <a href="https://blog.utc.edu/news" target="_self" aria-label="Read our news blog" title="Read our news blog">
              <svg class="svg-inline--fa fa-blog fa-2x" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="blog" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M192 32c0 17.7 14.3 32 32 32c123.7 0 224 100.3 224 224c0 17.7 14.3 32 32 32s32-14.3 32-32C512 128.9 383.1 0 224 0c-17.7 0-32 14.3-32 32zm0 96c0 17.7 14.3 32 32 32c70.7 0 128 57.3 128 128c0 17.7 14.3 32 32 32s32-14.3 32-32c0-106-86-192-192-192c-17.7 0-32 14.3-32 32zM96 144c0-26.5-21.5-48-48-48S0 117.5 0 144V368c0 79.5 64.5 144 144 144s144-64.5 144-144s-64.5-144-144-144H128v96h16c26.5 0 48 21.5 48 48s-21.5 48-48 48s-48-21.5-48-48V144z"></path>
              </svg>
              <!-- <span class="fa fa-blog fa-2x"></span> --> </a> </li>
            <li> <a href="https://www.linkedin.com/school/27384/" target="_self" aria-label="Find us on LinkedIn" title="Find us on LinkedIn">
              <svg class="svg-inline--fa fa-linkedin-in fa-2x" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path>
              </svg>
              <!-- <span class="fa fa-linkedin fa-2x"></span> --> </a> </li>
            <li> <a href="https://www.youtube.com/UTChattanooga" target="_self" aria-label="Find us on Youtube" title="Find us on Youtube">
              <svg class="svg-inline--fa fa-youtube fa-2x" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="youtube" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" data-fa-i2svg="">
                <path fill="currentColor" d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"></path>
              </svg>
              <!-- <span class="fa fa-youtube fa-2x"></span> --> </a> </li>
            <li> <a href="https://www.twitter.com/UTChattanooga" target="_self" aria-label="Find us on Twitter" title="Find us on Twitter">
              <svg class="svg-inline--fa fa-twitter fa-2x" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="twitter" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" data-fa-i2svg="">
                <path fill="currentColor" d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"></path>
              </svg>
              <!-- <span class="fa fa-twitter fa-2x"></span> --> </a> </li>
            <li> <a href="https://www.instagram.com/utchattanooga" target="_self" aria-label="Find us on Instagram" title="Find us on Instagram">
              <svg class="svg-inline--fa fa-instagram fa-2x" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" data-fa-i2svg="">
                <path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path>
              </svg>
              <!-- <span class="fa fa-instagram fa-2x"></span> --> </a> </li>
            <li> <a href="https://www.facebook.com/UTChattanooga" target="_self" aria-label="Find us on Facebook" title="Find us on Facebook">
              <svg class="svg-inline--fa fa-facebook-f fa-2x" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="facebook-f" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512" data-fa-i2svg="">
                <path fill="currentColor" d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"></path>
              </svg>
              <!-- <span class="fa fa-facebook fa-2x"></span> --> </a> </li>
          </ul>
        </div>
       <p>©2023 <span class="mobile-block">University&nbsp;of&nbsp;Tennessee at&nbsp;Chattanooga<span class="mobile-hide">.</span></span> <span class="mobile-block">All rights reserved.</span></p>
	   <p class="footer-links"><a href="https://www.utc.edu/sexual-misconduct/index.php#title-ix-statement" id="legal-title-ix" class="footer-link">Title IX Statement</a> | <a href="https://www.utc.edu/about/privacy.php" id="legal-privacy" class="footer-link">Privacy Statement</a> | <a href="https://www.utc.edu/academic-affairs/accessible-information-materials-technology-program/" class="footer-link">Accessibility</a></p>
	</div>
    </div>
  </footer>

<!-- #colophon -->
</div>
<!-- #page --> 
<!-- Add Brandbar --> 

</body></html>