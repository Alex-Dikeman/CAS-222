var gallery = {
    ace1 : {name: 'ace1', alt: 'Racers running through the water', url: 'ace1.jpg'},
    ace2 : {name: 'ace2', alt: 'Racers from the front', url: 'ace2.jpg'},
    ace3 : {name: 'ace3', alt: 'Cyclists crossing the finish line', url: 'ace3.jpg'},
    ace4 : {name: 'ace4', alt: 'Running up the beach', url: 'ace4.jpg'},
    ace5 : {name: 'ace5', alt: 'Cyclists in the hot sun', url: 'ace5.jpg'},
    ace6 : {name: 'ace6', alt: 'Three people pose after finishing their race', url: 'ace6.jpg'},
    ace7 : {name: 'ace7', alt: 'A woman gets high-fives from bystanders', url: 'ace7.jpg'},
    ace8 : {name: 'ace8', alt: 'Racers run down a dirt road', url: 'ace8.jpg'},
    ace9 : {name: 'ace9', alt: 'Cyclists crossing the finish line', url: 'ace9.jpg'},
    ace10 : {name: 'ace10', alt: 'Crossing the finish line in first place', url: 'ace10.jpg'},
    ace11 : {name: 'ace11', alt: 'Runners in a group', url: 'ace11.jpg'},
    ace12 : {name: 'ace12', alt: 'Cyclists coming around a corner', url: 'ace12.jpg'},
    ace13 : {name: 'ace13', alt: 'View from the front of a marathon', url: 'ace13.jpg'},
    ace14 : {name: 'ace14', alt: 'Racers running on a track', url: 'ace14.jpg'},
    ace15 : {name: 'ace15', alt: 'Woman with crutches competing', url: 'ace15.jpg'},
    ace16 : {name: 'ace16', alt: 'Running along a main road', url: 'ace16.jpg'},
    ace17 : {name: 'ace17', alt: 'Racers all wearing the same high-vis sweater', url: 'ace17.jpg'},
    ace18 : {name: 'ace18', alt: 'View from above as racers cross under an overpass', url: 'ace18.jpg'}
};
var imageArr = [];
var i = 0;

for(var key in gallery) {
    imageArr.push(gallery[key]);
}

function loadReg() {
    document.getElementById("main").innerHTML = "";
    $("#main").load("includes/reg_form.html.php")
}

function loadContact() {
    document.getElementById("main").innerHTML = "";
    $("#main").load("includes/contact_form.html.php")
}

function loadGallery() {
    document.getElementById("main").innerHTML = "";
    $("#main").load("includes/gallery.html.php");
}

function loadMain() {
    document.getElementById("main").innerHTML = "";
    window.location.assign("index.php");
}

function successReturn() {
    alert("Successfully Submitted. Returning Home.")
    window.location.assign("../index.php");
}

function loadImages() {
    document.getElementById("imageboard").setAttribute("src", "images/" + imageArr[i].url);
    document.getElementById("imageboard").setAttribute("alt", imageArr[i].alt);
}

function prevImg() {
    if(i > 0) {
        i--;
        loadImages();
    }
}

function nextImg() {
    if(i < 16) {
        i++;
        loadImages();
    }
}
