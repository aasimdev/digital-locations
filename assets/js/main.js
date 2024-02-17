$(function () {
    // $(window).scroll(function(){
    //     if ($(window).scrollTop() >= 40) {
    //       $('.header-top').css('background', "#0f0f47");
    //      }
    //      else {
    //       $('.header-top').css('background', "transparent");
    //      }
    //   });
    const teamModal = new bootstrap.Modal(document.getElementById('team'));
    $('.biography-btn').on('click', function (e) {
        e.preventDefault();
        var title = $(this).parent().find('.team-title').html();
        var decription = $(this).parent().find('.team-description').html();
        $('#team').find('.modal-title').text(title);
        $('#team').find('.modal-body').html(decription);
        teamModal.show();
    });


    $('.popup-youtube').magnificPopup({
        type: 'iframe',
        iframe: {
            markup: '<div class="mfp-iframe-scaler">' +
                '<div class="mfp-close"></div>' +
                '<iframe class="mfp-iframe" frameborder="0" allow="autoplay"></iframe>' +
                '</div>',
            patterns: {
                youtube: {
                    index: 'youtube.com/',
                    id: 'v=',
                    src: 'https://www.youtube.com/embed/%id%?autoplay=1&rel=0'
                }
            }
        },
        mainClass: 'mfp-fade',
        removalDelay: 160,
        preloader: false,
        fixedContentPos: true,

    });




    $('.cchat-box').each(function (e) {
        var videoSrc = $(this).find('.getThumbnail').attr('href');
        var videoID = videoSrc.match(/youtube\.com.*(\?v=|\/embed\/)(.{11})/).pop();
        var video_thumbnail = $('<img src="//img.youtube.com/vi/' + videoID + '/maxresdefault.jpg" class="object-fit-contain" alt="Cancervax">');
        $(this).find('.getThumbnail').siblings('.cchat-thumbnail').html(video_thumbnail);
    });

    $('.ceochats-carousel').slick({
        slidesToShow: 2.4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 0,
        speed: 9000,
        cssEase: 'linear',
        pauseOnHover: true,
        arrows: false,
        dots: false,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1.5,
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                }
            }
        ]
    });
})

