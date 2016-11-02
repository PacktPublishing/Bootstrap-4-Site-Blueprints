/* 
These functions make sure WordPress 
and JBST play nice together.
*/

jQuery(document).ready(function() {
    
    // Remove empty P tags created by WP inside of Accordion and Orbit
    //jQuery('.accordion p:empty, .orbit p:empty').remove();
    
		
	// Adds Flex Video to YouTube and Vimeo Embeds
	jQuery('iframe[src*="youtube.com"], iframe[src*="vimeo.com"]').addClass('embed-responsive-item').wrap("<div class='embed-responsive embed-responsive-16by9'/>");
     
    // offcanvas menu
    jQuery('[data-toggle="offcanvas"]').click(function () {
      jQuery('.row-offcanvas').toggleClass('active');
    });

});
