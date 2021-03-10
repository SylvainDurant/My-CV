$(function(){

    $(".navbar a, footer a").on("click", function(event){
    
        event.preventDefault();
        let hash = this.hash;
        
        $('body,html').animate({scrollTop: $(hash).offset().top} , 900 , function(){window.location.hash = hash;})
        
    });
})

toastr.options = {
	"closeButton": true,
	"newestOnTop": true,
	"positionClass": "toast-top-center",
	"timeOut": "5000",
}


///// PORTFOLIO /////
let targets = document.getElementsByClassName("portfolioContainer");
Array.from(targets).forEach(target => {
    target.addEventListener("mouseover", () => {
        target.querySelector("div").classList.remove("flipOutX");
       target.querySelector("div").classList.add("flipInX");
    });
    target.addEventListener("mouseleave", () => {
        target.querySelector("div").classList.add("flipOutX");
        target.querySelector("div").classList.remove("flipInX");
    });
});

const redirect = (url) => {
    window.open("https://"+url);
}

///// NOPE /////
let nopeLink = document.getElementsByClassName("nope");
let nopeText = document.getElementById("nopeText");
nopeLink[0].addEventListener("click", (event) => {
    event.preventDefault();
});
nopeLink[0].addEventListener("mouseover", () => {
    nopeText.hidden = false;
});
nopeLink[0].addEventListener("mouseleave", () => {
    nopeText.hidden = true;
});