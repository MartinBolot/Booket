var displayUtilities = (function(){
    var maxLength = 500;
    var homeTeasers = document.querySelectorAll(".home_teaser");

    Array.prototype.forEach.call(homeTeasers, function(homeTeaser){
        if(homeTeaser){
            if(homeTeaser.innerText){
                if(homeTeaser.innerText.length > maxLength){
                    homeTeaser.innerText = homeTeaser.innerText.slice(0, maxLength);
                    homeTeaser.innerText += "...";
                }
            }
        }
    });
})();
