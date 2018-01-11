var scroll = document.querySelector('.container');
var body = document.querySelector('body');
var thumbHolder = document.querySelector('.ThreeD');
var thumbs = document.querySelector('.lightboxThumb');
var lightbox = document.querySelector('.lightbox');
var lightboxSrc = "images/Nail_Polish_big"
var lightboxImg = document.querySelector('.lightboxImg');

function lightboxToggle() {
  lightbox.classList.toggle("hidden");
  lightbox.style.top = body.scrollTop + "px";
  lightbox.style.left = body.scrollLeft + "px";
  body.classList.toggle("scrollStop");
}

function getImg(get) {
  if (get.target !== get.currentTarget) {
  var selected = get.target.id;
  console.log(selected);
  lightboxImg.src = lightboxSrc + selected +".png";
}
}

thumbHolder.addEventListener('click', getImg, false);
thumbHolder.addEventListener('click', lightboxToggle, false);
lightbox.addEventListener('click', lightboxToggle, false);
