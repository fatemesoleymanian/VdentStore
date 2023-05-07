var toggle_icon = document.getElementById('theme-toggle');
var body = document.getElementsByTagName('body')[0];
var sun_class = 'bi-brightness-low';
var moon_class = 'bi-moon';
var dark_theme_class = 'dark-mode';
var light_theme_class = 'light-mode';
var dark_color = '#1d212b';
var light_color = '#f3f3f3';
let small_categore_mode = document.querySelectorAll('.category-item img');
const footer_mode = document.querySelector('footer .shape-fill');
const root = document.querySelector(":root");
const pspans = document.querySelectorAll('.latest-product-section .swiper-container .swiper-wrapper .swiper-slide .vit-detail-box .price-light span');
const tpspans = document.querySelectorAll('.latest-product-section .swiper-container .swiper-wrapper .swiper-slide .vit-detail-box .type-light span');

window.onload=function()
{

    if (window.localStorage.getItem('theme') === 'dark')  turn_to_black();
    if (window.localStorage.getItem('theme') === 'light')  turn_to_white();

}
toggle_icon.addEventListener('click', function() {
    if (window.localStorage.getItem('theme') === 'light') {
       turn_to_black();

    }
    else {
       turn_to_white();
    }
});
const turn_to_black = () =>
{
    toggle_icon.classList.add(sun_class);
    toggle_icon.classList.remove(moon_class);
    window.localStorage.setItem('theme', 'dark');
    body.classList.add(dark_theme_class);
    body.classList.remove(light_theme_class);
    toggle_icon.style.color = '#fff';
    small_categore_mode.forEach((i)=> {
        i.classList.add('light');
    });
    document.querySelectorAll('section:not(.slider-home) span').forEach((i)=>{
        i.style.color = light_color;
    });
    document.querySelectorAll('section:not(.slider-home) h2').forEach((i)=>{
        i.style.color = light_color;
    });
    document.querySelectorAll('section:not(.slider-home) span i').forEach((i)=>{
        i.style.color =' rgba(255,255,255,0.4)' ;
    });
    footer_mode.style.fill = dark_color;

    root.style.setProperty("--mode",light_color);

}
let variable =document.querySelectorAll('.latest-product-section .swiper-container .swiper-wrapper .swiper-slide .vit-detail-box .price-light span');

const turn_to_white = () => {

    toggle_icon.classList.add(moon_class);
    toggle_icon.classList.remove(sun_class);
    window.localStorage.setItem('theme', 'light');
    small_categore_mode.forEach((i) => {
        i.classList.remove('light');
    });
    body.classList.add(light_theme_class);
    body.classList.remove(dark_theme_class);
    toggle_icon.style.color = '#1d212b';
    document.querySelectorAll('section:not(.slider-home) span').forEach((i) => {
        i.style.color = dark_color;
    });
    document.querySelectorAll('section:not(.slider-home) h2').forEach((i) => {
        i.style.color = dark_color;
        i.style.textShadow = '2px 2px 12px #1d212b';
    });
    document.querySelectorAll('section:not(.slider-home) span i').forEach((i) => {
        i.style.color = dark_color;
    });

    footer_mode.style.fill = light_color;
    root.style.setProperty("--mode",dark_color);
}
