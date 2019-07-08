
window.onscroll = function() {
  const contentTop = document.getElementById('content').getBoundingClientRect().top;
  if(contentTop < 30){
    document.querySelector('.header-links.home-link')
    .classList.add('scrolled');
  }else{
    document.querySelector('.header-links.home-link')
    .classList.remove('scrolled');
  }
  console.log(contentTop);
};