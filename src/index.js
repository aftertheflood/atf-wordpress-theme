const debounce = require('lodash.debounce');

function insertAfter(el, referenceNode) {
  referenceNode.parentNode.insertBefore(el, referenceNode.nextSibling);
}

const main = () => {
  const contentElement = document.getElementById('content');
  const homeLink = document.querySelector('.header-links.home-link');
  const compactSiteMenu = document.getElementById('compact-site-menu');
  const menuOpenButton = document.querySelector('.menu-link');
  const closeMenuButton = document.querySelector('.close-menu-button');
  const navBottom = document.querySelector('.nav-place-holder');

  function scrollHandler() {  
    if(contentElement.getBoundingClientRect().top < 30){
      homeLink.classList.add('scrolled');
    }else{
      homeLink.classList.remove('scrolled');
    }
  };

  window.onscroll = debounce(scrollHandler, 150);

  // we know js is enabled so hide the mobile nav
  compactSiteMenu.setAttribute('style', 'height:0;');

  // add an event listener to the menu open button
  insertAfter(compactSiteMenu, navBottom);

  menuOpenButton.addEventListener('click', function(e){
    e.preventDefault();
    compactSiteMenu.setAttribute('style', 'height:100vh;');
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