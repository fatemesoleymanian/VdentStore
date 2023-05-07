const menuBtn = document.querySelector(".menu-icon i");
const searchBtn = document.querySelector(".search-icon");
const cancelBtn = document.querySelector(".cancel-icon");
const items = document.querySelector(".links");
const form = document.querySelector("nav .search-form");
const navItems = document.querySelectorAll(".links li");
const nav = document.querySelector("nav");
const categoryBtn = document.querySelector(".category-open");
const sideNav = document.querySelector(".sidenav");
const sideNav_container = document.querySelector(".sidenav .dropdown-container");
const sideItems = document.querySelectorAll(".sidenav .ex");
const sideBtn = document.querySelectorAll(".sidenav .dropdown-btn.ex");
const content = document.querySelector(".content");
categoryBtn.onclick=()=>{
    items.classList.remove("open");
    sideNav.style.left = '0%';
    menuBtn.classList.add("hide");
    searchBtn.classList.add("hide");
    cancelBtn.classList.add("show");
    categoryBtn.style.animation ="bibile 0.3s ease-out";


    sideItems.forEach((link , index)=> { link.style.animation = `nav-items-fade 0.3s ease forwards ${index / 10 + 0.3}s`;});
}
menuBtn.onclick=()=>{
    items.classList.add("open");
    menuBtn.classList.add("hide");
    searchBtn.classList.add("hide");
    cancelBtn.classList.add("show");
    navItems.forEach((link , index)=>{
            link.style.animation = `nav-items-fade 0.5s ease forwards ${index / 5 + 0.5}s`;});

}
cancelBtn.onclick = ()=>{
    sideNav.style.left = '-100%';
    items.classList.remove("open");
    menuBtn.classList.remove("hide");
    searchBtn.classList.remove("hide");
    cancelBtn.classList.remove("show");
    form.classList.remove("active");
    cancelBtn.style.color = "#ff3d00";
}
searchBtn.onclick = ()=>{
    form.classList.add("active");
    searchBtn.classList.add("hide");
    cancelBtn.classList.add("show");
}


window.addEventListener('mouseup',function(event){
    if(event.target != nav && event.target.parentNode!= sideNav && event.target.parentNode!=sideNav_container && event.target.parentNode.className != "dropdown-container pr-3" && event.target.parentNode.className != "dropdown-container"&& event.target.className != "fas fa-search"&& event.target.className != "search-data"){
        sideNav.style.left="-100%";
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
        sideItems.forEach((link , index)=> {link.style.animation = '';});
        navItems.forEach((link , index)=>{link.style.animation = '';});
        categoryBtn.style.animation ="";

    }

});
window.addEventListener('mouseup',function(event){

    if(event.target != nav && event.target.parentNode != content && event.target.parentNode.tagName != "LI" && event.target.className != "fas fa-search"&& event.target.className != "search-data"){
        items.classList.remove("open");
        menuBtn.classList.remove("hide");
        searchBtn.classList.remove("hide");
        cancelBtn.classList.remove("show");
        form.classList.remove("active");
        cancelBtn.style.color = "#ff3d00";
        sideItems.forEach((link , index)=> {link.style.animation = '';});
        navItems.forEach((link , index)=>{link.style.animation = '';});
        categoryBtn.style.animation ="";
    }

});

var dropdown = document.getElementsByClassName("dropdown-btn");

for (i = 0; i < dropdown.length; i++) {
    dropdown[i].addEventListener("click", function() {

        var dropdownContent = this.nextElementSibling;
        console.log(sideBtn)
        sideBtn.forEach((link , index)=> { link.style.animation = `nav-items-fade 0.3s ease forwards ${index / 10 + 0.3}s`;});
        if (dropdownContent.style.display === "block") {


            dropdownContent.style.display = "none";

        } else {
            dropdownContent.style.display= "block";

           dropdownContent.childNodes.forEach((link , index)=>{
                    link.nextElementSibling.style.animation = `nav-items-fade 0.5s ease forwards ${index / 5 + 0.5}s`;


           });


        }

    });
}
window.onscroll = function() {scrollNavFunction()};

function scrollNavFunction() {
    const nav_color = document.querySelector('.wrapper');

    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        nav_color.style.background="#171c24";
    } else {
        nav_color.style.background = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
function toggle_mode(){
    document.querySelector('body').classList.add("light-mode");
    console.log(document.querySelector('body').style.background);
}
////////////////////////////////
// getting all required elements
// const searchWrapper = document.querySelector(".search-input");
// const inputBox = searchWrapper.querySelector("input");
// const suggBox = searchWrapper.querySelector(".autocom-box");
// const icon = searchWrapper.querySelector(".icon");
// let linkTag = searchWrapper.querySelector("a");
// let webLink;
//
// // if user press any key and release
// inputBox.onkeyup = (e)=>{
//     let userData = e.target.value; //user enetered data
//     let emptyArray = [];
//     if(userData){
//         icon.onclick = ()=>{
//             webLink = "https://www.google.com/search?q=" + userData;
//             linkTag.setAttribute("href", webLink);
//             console.log(webLink);
//             linkTag.click();
//         }
//         emptyArray = suggestions.filter((data)=>{
//             //filtering array value and user characters to lowercase and return only those words which are start with user enetered chars
//             return data.toLocaleLowerCase().startsWith(userData.toLocaleLowerCase());
//         });
//         emptyArray = emptyArray.map((data)=>{
//             // passing return data inside li tag
//             return data = '<li>'+ data +'</li>';
//         });
//         searchWrapper.classList.add("active"); //show autocomplete box
//         showSuggestions(emptyArray);
//         let allList = suggBox.querySelectorAll("li");
//         for (let i = 0; i < allList.length; i++) {
//             //adding onclick attribute in all li tag
//             allList[i].setAttribute("onclick", "select(this)");
//         }
//     }else{
//         searchWrapper.classList.remove("active"); //hide autocomplete box
//     }
// }
//
// function select(element){
//     let selectData = element.textContent;
//     inputBox.value = selectData;
//     icon.onclick = ()=>{
//         webLink = "https://www.google.com/search?q=" + selectData;
//         linkTag.setAttribute("href", webLink);
//         linkTag.click();
//     }
//     searchWrapper.classList.remove("active");
// }
//
// function showSuggestions(list){
//     let listData;
//     if(!list.length){
//         userValue = inputBox.value;
//         listData = '<li>'+ userValue +'</li>';
//     }else{
//         listData = list.join('');
//     }
//     suggBox.innerHTML = listData;
// }
//
// let suggestions = [
//     "CodingMak",
//     "CodingMaker",
//     "YouTube",
//     "YouTube cod",
//     "YouTube CodingMak",
//     "YouTube CodingMaker",
//     "YouTuber",
//     "YouTube Channel",
//     "Blogger",
//     "Facebook",
//     "Freelancer",
//     "Facebook Page",
//     "Developer",
//     "Web Designer",
//     "website Developer",
//     "Login Form in HTML & CSS",
//     "How to learn HTML & CSS",
//     "How to learn JavaScript",
//     "How to became Freelancer",
//     "How to became Web Designer",
//     "How to start Gaming Channel",
//     "How to start YouTube Channel",
//     "What does HTML stands for?",
//     "What does CSS stands for?",
// ];
//




