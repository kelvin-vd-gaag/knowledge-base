import './bootstrap';
import '../scss/app.scss';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

let menu = document.getElementById("hamburger-menu");
let explainer = document.getElementById("course-item-explainer");
let course_item = document.getElementsByClassName("course-items");
let navigation = document.getElementById("navigation");


menu.addEventListener("click", function (){
    navigation.classList.toggle("show");
});

navigation.addEventListener("click", function (){
    navigation.classList.toggle("show");
});

course_item.addEventListener("click", function (){
    console.log("test");
    explainer.style.height = "100";
});


