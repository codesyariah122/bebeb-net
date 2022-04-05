$(function () {
    $(document).on('scroll', function () {
        const nav = $('.navbar');
        nav.toggleClass('scrolled', $(this).scrollTop() > nav.height());
    });

    $(document).on('show.bs.collapse', '.navbar > .collapse', function () {
        $('.navbar-toggler > .toggler-icon').addClass('open');
    });

    $(document).on('hide.bs.collapse', '.navbar > .collapse', function () {
        $('.navbar-toggler > .toggler-icon').removeClass('open');
    });

    $(document).on('click', 'main', function () {
        if($('.navbar-collapse.collapse').hasClass('show')) $('.navbar-toggler').trigger('click');
    });

    $('#partner-carousel, #blog-carousel').lightSlider({
        auto: true,
        loop: true,
        controls: false,
        speed: 1000,
        pause: 5000,
        adaptiveHeight: true,
        responsive : [
            {
                breakpoint:992,
                settings: {
                    item:2,
                }
            },
            {
                breakpoint:600,
                settings: {
                    item:1,
                }
            }
        ]
    });

    $('[data-toggle="tooltip"]').tooltip();

    $(document).on('click', '[data-toggle="tooltip"]', function (e) {
        e.preventDefault();
    })

    // $(document).on('click', '.navbar-nav > a.nav-link, footer a.link:not(.text-light)', function (e) {
    //     if(route.main) return;
        
    //     e.preventDefault();
    //     window.location.hash = $(this).attr('href');
    //     $('html,body').scrollTop($($(this).attr('href')).offset().top - 64);
    // });

    // $(document).on('change', 'select#provinsi', function (){
    //     $('select#kabupaten > option:not(:first)').remove();

    //     if($(this).val() == 1){
    //         $('select#kabupaten').append(`
    //             <option value="1">Bojonegoro</option>
    //             <option value="2">Tuban</option>
    //             <option value="3">Ngawi</option>
    //             <option value="4">Nganjuk</option>
    //         `).prop('disabled', false);
    //     }else{
    //         $('select#kabupaten').append(`
    //             <option value="5">Blora</option>
    //         `).prop('disabled', false);
    //     }
    // });

    // $(document).on('submit', 'form#kontak-form', function(e){
    //     e.preventDefault();

    //     const form = $(this);
    //     form.find('button[type="submit"]').attr('disabled', true);

    //     const data = new FormData(this);
    //     data.append('action', 'message_add');
    //     data.append('token', token);

    //     $.ajax({
    //         type: 'POST',
    //         url: appUrl + '/ajax/insert',
    //         data: data,
    //         processData: false,
    //         contentType: false,
    //         dataType: 'json',
    //         beforeSend: function () {
    //             form.hide('fast');
    //             $('#kontak-message').hide('fast').removeClass().empty();
    //             $('#kontak-loader').fadeIn('slow');
    //         },
    //         success: function (response) {
    //             $('#kontak-loader').hide('fast');

    //             if (response.result == 'success') {
    //                 $('#kontak-message').addClass('alert alert-success').text(response.message);
    //             } else if (response.result == 'failed') {
    //                 if (typeof response.message != 'undefined') $('#kontak-message').addClass('alert alert-danger').text(response.message);
    //                 if (typeof response.error != 'undefined') $('#kontak-message').html(response.error);

    //                 form.fadeIn('slow');
    //                 form.find('button[type="submit"]').attr('disabled', false);
    //             }
                
    //             $('#kontak-message').fadeIn('slow');

    //             window.location.hash = '#kontak-message';
    //             $('html,body').scrollTop($('#kontak-message').offset().top - 64);
    //         }
    //     });
    // });

    // $(document).on('submit', 'form#daftar', function(e){
    //     e.preventDefault();

    //     const form = $(this);
    //     form.find('button[type="submit"]').attr('disabled', true);

    //     const data = new FormData(this);
    //     data.append('action', 'register_add');
    //     data.append('token', token);

    //     $.ajax({
    //         type: 'POST',
    //         url: appUrl + '/ajax/insert',
    //         data: data,
    //         processData: false,
    //         contentType: false,
    //         dataType: 'json',
    //         beforeSend: function () {
    //             form.hide('fast');
    //             $('#message').hide('fast').removeClass().empty();
    //             $('#form-loader').fadeIn('slow');
    //         },
    //         success: function (response) {
    //             $('#form-loader').hide('fast');

    //             if (response.result == 'success') {
    //                 $('#message').addClass('alert alert-success').text(response.message);
    //             } else if (response.result == 'failed') {
    //                 if (typeof response.message != 'undefined') $('#message').addClass('alert alert-danger').text(response.message);
    //                 if (typeof response.error != 'undefined') $('#message').html(response.error);

    //                 form.fadeIn('slow');
    //                 form.find('button[type="submit"]').attr('disabled', false);
    //             }
                
    //             $('#message').fadeIn('slow');

    //             window.location.hash = '#message';
    //             $('html,body').scrollTop($('#message').offset().top - 64);
    //         }
    //     });
    // });

    // $(window).on('scroll', function () {
    //     $('section').each(function () {
    //         if(route.main) return;
            
    //         $('.navbar-nav > a.nav-link').removeClass('active');

    //         if ($(this).offset().top + $(this).outerHeight(true) - 65 >= $(window).scrollTop()) {
    //             $(`.navbar-nav > a.nav-link[href="#${$(this).attr('id')}"]`).addClass('active');
    //             return false;
    //         } else {
    //             $(`.navbar-nav > a.nav-link[href="#${$(this).attr('id')}"]`).removeClass('active');
    //         }
    //     });

    //     if ($(this).scrollTop() > 100) {
    //       $('.to-top').fadeIn('fast');
    //     } else {
    //       $('.to-top').fadeOut('fast');
    //     }
    // });
});