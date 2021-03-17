"use strict";
window.onload = function() {
    // Assign the onclick event handler of relevant elements to be imageClick() function
    let imgs = document.getElementsByClassName("image");
    for (let i = 0; i < imgs.length; i++) {
        imgs[i].onclick = imageClick;
    }

    // Assign the onclick event handler of the 'Reset List!' button to be imageReset() function
    let reset = document.getElementById("reset");
    reset.onclick = imageReset;

};

function imageReset() {
    console.log("Reset!");
}

function imageClick() {
    // Use keyword 'this' to refer to the node that calls this function
    let parentNode = this.parentNode; // Access my parent node  
    let i = parentNode.childNodes[1];
    let x = i.nodeValue;
    console.log(i);
    console.log(x);

    let y = document.getElementById("favourites");
    y.innerHTML = y.setAttribute("src", x);
    document.body.appendChild(y);
    // To be added...
}