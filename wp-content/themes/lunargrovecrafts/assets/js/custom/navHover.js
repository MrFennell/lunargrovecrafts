( function( $ ) {
   
        const screenWidth = 768;
        const $window = $(window);

        function checkWidth(){
            const windowsize = $window.width();
            return (windowsize > screenWidth) ? true : false;
        }
        // checkWidth();
        $('.dropdown').mouseover(function() {
            if(checkWidth()===true){
                $('.dropdown-menu').addClass('show');
            }
        });
        $('.dropdown-menu').mouseout(function() {
            let isHovered = $('.dropdown').is(":hover");
            if ((!isHovered) && (checkWidth()===true)){
                $('.dropdown-menu').removeClass('show');
            }
        });
        $('.dropdown').mouseout(function() {
            let isHovered = $('.dropdown-menu').is(":hover");
            if ((!isHovered) && (checkWidth()===true)){
                $('.dropdown-menu').removeClass('show');
            }
        });

})( jQuery );;