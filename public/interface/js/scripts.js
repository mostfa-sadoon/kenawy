var imgs = document.querySelectorAll('.item-img');
var imgsArray = [];
var lightboxcontainer = document.querySelector('.lightbox-container');
var lightboxitem = document.querySelector('.lightbox-item');
var wclose = document.getElementById('wclose');
var currentindex = 0;

for (var i = 0; i < imgs.length; i++) {
    imgsArray.push(imgs[i]);
    imgs[i].addEventListener('click', function(e) {
        lightboxcontainer.classList.add("show");
        var imgsrc = e.target.src;
        lightboxitem.style.backgroundImage = "url(" + imgsrc + ")";
        console.log(imgsArray.indexOf(e.target));
        //   console.log(currentindex);                 
    })
}

wclose.addEventListener("click", function() {
    lightboxcontainer.classList.remove("show");
});