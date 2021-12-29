$(document).ready(function(){
    $('.header__burger').click(function(event) {
        $('.header__burger,.nav,.logo,.custom-logo-link').toggleClass('active');
        $('body').toggleClass('lock');
    });
});

// var notAdded = true;
// $(window).scroll(function(){
//   if(  $('header').scrollTop() == 0){
//        $('.header').removeClass('.header-has-background');
//        notAdded = true;
//   }
//   else if(notAdded){
//      $('header').addClass('.header-has-background');
//        notAdded  = false;
//  }
// });
function fc(){
  let nav = document.querySelector('.header');
    if (window.pageYOffset > 10) {
       nav.classList.add('header-has-background');
    } else {
      nav.classList.remove('header-has-background');
    }
}

window.onscroll=fc;
fc();