
var tell = 0;

/*  document.getElementById(1).innerHTML = ;
  document.getElementById(2).innerHTML = ;
  document.getElementById(3).innerHTML = ;
  document.getElementById(4).innerHTML = ;
  document.getElementById(5).innerHTML = ;
  document.getElementById(6).innerHTML = ;
  document.getElementById(7).innerHTML = ;
  document.getElementById(8).innerHTML = ;
  document.getElementById(9).innerHTML = ;
  document.getElementById(10).innerHTML = ;
  document.getElementById(11).innerHTML = ;
  document.getElementById(12).innerHTML = ;
  document.getElementById(13).innerHTML = ;
  document.getElementById(14).innerHTML = ;
  document.getElementById(15).innerHTML = ;
  document.getElementById(16).innerHTML = ;*/

  // een array van 8 lang dan een random dan pakt die een loc voor een van het array als dat nummer twee keer is geweest dan moet die uit het array worden gehaa

  var nums = [1,2,3,4,5,6,7,8];
  var vakjes = ["","","","","","","","","","","","","","","",""];
  var b;

  for(b=0; b<=16; b++){
    var random = Math.floor(Math.random() * 8);
    vakjes[b] = random;
  }

  function Kleur(t){
    var vak = t.id;

    var rand = 7;
    tell += 1;
    var i;
    var f;
    /*if(){

    }*/
  	document.getElementById(vak).innerHTML = "<br><div class='centerr'><h1 class='num'>"+vakjes[vak]+"</h1</div>";
    document.getElementById(vak).style.backgroundColor = "#1B63DF";
    if(tell == 3){
      for(i=1; i<=16; i++){
        document.getElementById(i).innerHTML = "";
        document.getElementById(i).style.backgroundColor = "white";
      }
      tell -= 3;
    }
    else{

    }

  }
