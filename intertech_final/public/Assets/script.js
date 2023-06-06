// const menuButton = document.querySelector('.menu-button');
//     const menuBar = document.querySelector('.menu-bar');

//     function toggleMenuBar() {
//       menuBar.classList.toggle('active');
//     }

// menuButton && menuButton.addEventListener('click', toggleMenuBar);
//     const carouselImages = document.querySelectorAll('.carousel-image');
//     let currentImageIndex = 0;

//     function changeImage() {
//       carouselImages[currentImageIndex].classList.remove('active');
//       currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
//       carouselImages[currentImageIndex].classList.add('active');
//     }

//     setInterval(changeImage, 5000); 

//     function openNav() {
//   document.getElementById("mySidenav").style.width = "250px";
//   document.getElementById("main").style.marginRight = "250px";
// }

// function closeNav() {
//   document.getElementById("mySidenav").style.width = "0";
//   document.getElementById("main").style.marginRight = "0";
// }

//     function changeImage() {
//       carouselImages[currentImageIndex].classList.remove('active');
//       carouselImages[currentImageIndex].style.opacity = '0';
//       currentImageIndex = (currentImageIndex + 1) % carouselImages.length;
//       carouselImages[currentImageIndex].classList.add('active');
//       carouselImages[currentImageIndex].style.opacity = '1';
//     }