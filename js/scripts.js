 // scroll para as seções

  let navBtn = $('.nav-item');

  let bannerSection = $('#mainSlider'); 
  let servicesSection = $('#services-area');
  let aboutSection = $('#about-area');  
  let subscribeSection = $('#subscribe-area');
  let loginSection = $('#login-area');

  let scrollTo = '';

  $(navBtn).click(function() {

    let btnId = $(this).attr('id');

    if(btnId == 'about-menu') {
      scrollTo = aboutSection;
    } else if(btnId == 'services-menu') {
      scrollTo = servicesSection;   
    } else if(btnId == 'subscribe-menu') {
      scrollTo = subscribeSection;
    } else if(btnId == 'login-menu') {
      scrollTo = loginSection;
    } else {
      scrollTo = bannerSection;
    }

    $([document.documentElement, document.body]).animate({
        scrollTop: $(scrollTo).offset().top - 70
    }, 1500);
  });

