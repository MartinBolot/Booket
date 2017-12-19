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

var getDateEdition = (function(){
    var currentDate = new Date();
    var currentDay = currentDate.getDate();
    var currentMonth = parseInt(currentDate.getMonth());
    var currentMonthWord = "";
    var monthes = ["janvier", "février", "mars", "avril", "mai", "juin", "juillet", "août", "septembre", "octobre", "novembre", "décembre"]
    var currentYear = currentDate.getFullYear();
    var dateDisplay = document.querySelector("#date_edition");

    // si le mois est correct
    if(currentMonth >= 0 && currentMonth <= 11){
        currentMonthWord = monthes[currentMonth];
    }
    // janvier par défaut
    else{
        currentMonthWord = "janvier"
    }

    if(dateDisplay){
        dateDisplay.innerText = currentDay + " " + currentMonthWord + " " + currentYear;
    }
})()
