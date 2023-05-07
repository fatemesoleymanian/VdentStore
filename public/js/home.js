const dots = document.querySelectorAll('.dot');
const img_slides = document.querySelectorAll('.slider-img-slide');
const content_slides = document.querySelectorAll('.slider-content');

var sliderNav = function (manual)
{
    dots.forEach((dot)=>
    {
       dot.classList.remove('active-slide')
    });
    img_slides.forEach((slide)=>
    {
        slide.classList.remove('active-slide')
    });
    content_slides.forEach((slide)=>
    {
        slide.classList.remove('active-slide')
    });
    dots[manual].classList.add('active-slide');
    img_slides[manual].classList.add('active-slide');
    content_slides[manual].classList.add('active-slide');
}
dots.forEach((dot,i)=>
{
    dot.addEventListener('click',()=>
    {
       sliderNav(i);
    });
});
//Automatic
var repeat = function (activeClass)
{
    let active = document.getElementsByClassName('active-slide');
    let i =1;

    var repeater = () =>
    {
        setTimeout(function ()
        {
            [...active].forEach((activeSlide)=>
            {
                activeSlide.classList.remove('active-slide');
            })

            img_slides[i].classList.add('active-slide');
            content_slides[i].classList.add('active-slide');
            dots[i].classList.add('active-slide');
            i++;

            if (img_slides.length == i) i=0;
            if (i >= img_slides.length) return;

            repeater();
        },40000);
    }
    repeater();
}
repeat();

//small category
function aos_smallCat(){
    const smallCatContent = document.querySelector('.latest-product-section .slider-small-category');
    const sCategory_items = document.querySelectorAll(".latest-product-section .slider-small-category .category-item");
    let smallContentPosition = smallCatContent.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5 ;

    if (smallContentPosition < screenPosition ){
        sCategory_items.forEach((link , index)=> { link.style.animation = `smallCat-items-an 0.7s ease forwards ${index / 3 + 0.1}s`;});
    }else     sCategory_items.forEach((link , index)=> { link.style.animation = ''});
}
window.addEventListener('scroll' , aos_smallCat);


// latest product slider
var mySwiper = new Swiper('.swiper-container', {
    loop: true,
    speed: 1000,
    autoplay: {
        delay: 10000,
    },
    effect: 'coverflow',
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 'auto',
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 200,
        modifier: 1,
        slideShadows: true,
    },

    // Navigation arrows
    // navigation: {
    //     nextEl: '.swiper-button-next',
    //     prevEl: '.swiper-button-prev',
    // },

});
function aos_title(){
    let line_title = document.querySelector('.latest-product-section .swiper-container .title-lp');
    let line_title_products_light = document.querySelector('.product-sc .title-cards-light');
    let titleContentPosition = line_title.getBoundingClientRect().top;
    let titleContentPosition_products_light = line_title_products_light.getBoundingClientRect().top;
    let screenPosition = window.innerHeight / 1.5 ;
    const root = document.querySelector(":root");


        if (titleContentPosition < screenPosition || titleContentPosition_products_light < screenPosition) {
            root.style.setProperty("--pseudo-animation", 'line-an 0.7s forwards');
            // var currScroll = document.body.scrollTop;
            // document.body.scrollTop = calc();
        } else root.style.setProperty("--pseudo-animation", 'none');

}
window.addEventListener('scroll' , aos_title);





