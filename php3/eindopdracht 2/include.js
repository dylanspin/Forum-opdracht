
  var tell = 0;

  function Kleur(t){
    var vak = t.id;
    tell += 1;

    document.getElementById(vak).style.backgroundColor = "#1B63DF";

    if(tell == 3){ //dit moet korter maar voor een of andere reden will de for loop niet mee werken
      /*for(var i=0; i<=25; i++){
        //document.getElementById('test').innerHTML = "<h1>"+i+"</h1>";
        document.getElementById(i).style.backgroundColor = "white";
      }*/
      document.getElementById(1).style.backgroundColor = "white";
      document.getElementById(2).style.backgroundColor = "white";
      document.getElementById(3).style.backgroundColor = "white";
      document.getElementById(4).style.backgroundColor = "white";
      document.getElementById(5).style.backgroundColor = "white";
      document.getElementById(6).style.backgroundColor = "white";
      document.getElementById(7).style.backgroundColor = "white";
      document.getElementById(8).style.backgroundColor = "white";
      document.getElementById(9).style.backgroundColor = "white";
      document.getElementById(10).style.backgroundColor = "white";
      document.getElementById(11).style.backgroundColor = "white";
      document.getElementById(12).style.backgroundColor = "white";
      document.getElementById(13).style.backgroundColor = "white";
      document.getElementById(14).style.backgroundColor = "white";
      document.getElementById(15).style.backgroundColor = "white";
      document.getElementById(16).style.backgroundColor = "white";

      tell -= 3;
    }
    else{

    }

  }


  /*var speler = true;
      function Achtergrond(t){
        var div = t.id;
          if (speler){
            document.getElementById(div).style.backgroundColor = "#1B63DF";
            speler = false;
            document.getElementById(div).innerHTML ="<div class='center'><h1 class = 'een'>" + "0" +"</h1></div>";
          }
          else{
            document.getElementById(div).style.backgroundColor = "#F45A18";
            speler = true;
            document.getElementById(div).innerHTML ="<div class='center'><h1 class = 'een'>" + "×" +"</h1></div>";
          }
      }
*/
