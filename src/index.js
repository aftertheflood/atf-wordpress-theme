const debounce = require('lodash.debounce');

const main = () => {
  const contentElement = document.getElementById('content');
  const homeLink = document.querySelector('.header-links.home-link');
  
  function scrollHandler() {  
    if(contentElement.getBoundingClientRect().top < 30){
      homeLink.classList.add('scrolled');
    }else{
      homeLink.classList.remove('scrolled');
    }
  };

  window.onscroll = debounce(scrollHandler, 150) 
}

window.onload = main;