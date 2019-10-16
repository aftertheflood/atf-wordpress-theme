const debounce = require('lodash.debounce');

function insertAfter(el, referenceNode) {
  referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
}

const main = () => {
  const contentElement = document.getElementById('content');
  const homeLinks = document.querySelectorAll('.header-links.home-link');
  const compactSiteMenu = document.getElementById('compact-site-menu');
  const menuOpenButton = document.querySelector('.menu-link');
  const closeMenuButton = document.querySelector('.close-menu-button');

  function scrollHandler() {  
    if(contentElement.getBoundingClientRect().top < 30){
      homeLinks.forEach(e=>e.classList.add('scrolled'));
    }else{
      homeLinks.forEach(e=>e.classList.remove('scrolled'));
    }
  };

  window.onscroll = debounce(scrollHandler, 150);

  // we know js is enabled so hide the mobile nav and fix it
  compactSiteMenu.setAttribute('style', 'height:0vh; position:fixed; transition-property:height;');

  // add an event listener to the menu open button
  menuOpenButton.addEventListener('click', function(e){
    e.preventDefault();
    compactSiteMenu.setAttribute('style', 'height:100vh; position:fixed;');
    return false;
  });

  closeMenuButton.addEventListener('click', function(e){
    e.preventDefault();
    compactSiteMenu.setAttribute('style', 'height:0;');
    return false;
  })
  
  console.log('MMM',menuOpenButton);
  // add an event listener to the menu close button

}

window.onload = main;