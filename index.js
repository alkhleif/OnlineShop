
// wenn auf Menü klickt, wird die Menü angezeigt
(function(){

    $(".hamburger").on("click", function() {
        $(this).parent(".hamburger-wrapper").toggleClass("hamburger-active")
    });
    
    }());
    