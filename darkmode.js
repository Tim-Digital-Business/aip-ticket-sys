function myFunction(img) {
    var element = document.body;
    element.classList.toggle("dark-mode");
    if (img.src.match("Dark.png")){
        img.src = "Light.png";
    }     
    
    else {
        img.src = "Dark.png";
    }
}