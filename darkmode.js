function myFunction(img) {
    var element = document.body;
    element.classList.toggle("dark-mode");
    if (img.src.match("Light.png")){
        img.src = "Dark.png";        
    }
    else {
        img.src = "Light.png";
    }
 }