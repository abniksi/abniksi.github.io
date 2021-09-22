//Once the search button is clicked, all the code below executes.
document.getElementById("searchBtn").addEventListener("click", () => {

  //Setting variables that are connected to classes.
  let removeContent = $(".col-12");
  let removeContent2 = $(".col-md-6");
  let removeContent3 = $(".col-lg-4");
  let numberOfResults = $(".numberOfResults");

  //Once search button clicked, the classes we targeted get deleted.
  removeContent.remove();
  removeContent2.remove();
  removeContent3.remove();
  numberOfResults.remove();

  //Getting the value of the search box and setting it to a variable.
  let searchTerm = document.getElementById("search").value;

    //Using .getJSON to convert JSON into usable JavaScript
    $.getJSON(
    `https://www.thesportsdb.com/api/v1/json/1/searchplayers.php?p=${searchTerm}`,
    function(data){
        console.log(data);
        //X variable that will help control the for loop.
        let x = 0;
        //Variable that contains HTML and the length of the JSON array.
        let number = `<p class="numberOfResults">There is <u>${data.player.length}</u> result(s)!</p>`;
        //Adding HTML before the container class we are targeting.
        $('.container').prepend(number);

        //For loop that runs the length of the JSON array we get back.
        for(let i = 0; i <= data.player.length; i++){
            //Variable that contains all the HTML we insert everytime search button is clicked.
            let results = 
            ` 
            <div class="col-12 col-md-6 col-lg-4">
                <div class="playerContainer">
                    <div class="playerImage">
                        <img src="${data.player[x].strThumb}">
                    </div>
                <h4><u>Name</u></h4>
                <p class="center">${data.player[x].strPlayer}</p>
                <h4><u>Sport</u></h4>
                <p class="center">${data.player[x].strSport}</p>
                <h4><u>Position</u></h4>                    <p class="center">${data.player[x].strPosition}</p>
                <h4><u>Team</u></h4>
                <p class="center">${data.player[x].strTeam}</p>
                <h4><u>Description</u></h4>
                <p class="description">${data.player[x].strDescriptionEN}</p>
                </div>
            </div> `;
          x++;
          //Targeting row class and then inserting the HTML after the class
          $('.row').append(results);
        }
    });
});