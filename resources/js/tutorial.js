$("document").ready(function() {
    // $("#tutorial_start").on('scroll', function () {
    //     console.log("scrolled");
    // })
    // $('.skip').on('click', function () {
    //     $('.tutorial-layout').hide(1000);
    // });
    $('.tutorial-logo').animate({
        opacity: 1,
        top: "+=530px",

    }, 1000, function() {

        $('.tutorial-logo').animate({

                top: "-=30px",

            }, 1000);

        $('.tutorial-bg-image').animate({
            opacity: 1
        }, 1000);
        $('.scroll-down').animate({
            opacity: 1
        }, 1000);
    });

    let counter = 0;

    $('.tutorial-layout').bind('mousewheel', function(e){
        e.preventDefault();
        if(e.originalEvent.wheelDelta /120 <= 0 && counter < 1) {

            $('.tutorial-bg-image').animate({
                opacity: 0
            }, 1500);

            $('.tutorial-logo').animate({

                top: "-150%",

            }, 1500, function () {
            });
            $('.dots').animate({
                'max-height': '500px'
            }, 500, function (){
                $('.scroll-down').animate({
                    top: "-=40vh",

                }, 1500, function(){
                    $('.tutorial-layout').hide();
                    $('#tutorial_main').show(1000);
                });
            });



            counter = 1;
        }



    });

    $('.tutorial-item').on('click', function () {

        let curentStep = $(this).find('.num').text();

        $('.tutorial-item .num').each(function( index, value ) {
            if(!value.classList.contains('active') && value.innerHTML < curentStep){
                value.classList.add('active');
            }
        });
        // for (let i = 0; i < curentStep; i++){
        //     if(!$('.tutorial-item')[i].find('.num').hasClass('active')){
        //         $('.tutorial-item')[i].find('.num').addClass('active')
        //     }
        // }
        $('.tutorial-item.active').removeClass('active');
        $(this).addClass('active');
        $(this).find('.num').addClass('active');
    })
});
