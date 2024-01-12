
var  spil = [];
var  tabla = [];

var  boja = ['red', 'green', 'blue', 'yellow'];
var  vrednost = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'skip', 'reverse', 'draw2'];

var BrojLjudi=2;
var brojKarata = 5;
var pozicija= 0;
var smer=1;
var stil = 1;


function spil1()
{
	stil=1;
}
function spil2()
{
	stil=2;
}
function spil3()
{
	stil=3;
}


function napraviSpil() {

  
  for(let i = 0; i < boja.length ; i++){
    for (let  j = 0; j < vrednost.length; j++){
      let karta = { BojaKarte: boja[i], 
					vrednostKarte: vrednost[j]
					};
      spil.push(karta);
    }
  }
	/*
		for (let  i = 0; i < boja.length; i++) {
			for (let  j = 0; j < vrednost.length; j++) {    
				console.log(karta = { BojaKarte : boja[i], vrednostKarte: vrednost[j] })
			}
		} 
	*/
	
	
	
	
}
function promesaj(){
	
	
	for (let i = 0; i < 1000; i++) {
    var j = Math.floor((Math.random() * spil.length));
    var k = Math.floor((Math.random() * spil.length));
    var tmp = spil[j];
    spil[j] = spil[k];
    spil[k] = tmp;
	}	

	/*
		for (let  i = 0; i < boja.length; i++) {
			for (let  j = 0; j < vrednost.length; j++) {    
				console.log(spil)
			}	
		} 
	*/
	/*
	document.getElementById("demo").innerHTML = JSON.stringify(spil);
	*/
	
}

function createPlayers(BrojLjudi) {
   ljudiNiz = [];
  for (let i = 0; i < BrojLjudi; i++) {
    var player = {  ime: 'Player' +"00"+ i,
					ruka: [] };
					
    ljudiNiz.push(player);
  }
  
}

function podeli() {
  for (let i = 0; i < brojKarata; i++) {
    for (let j = 0; j < ljudiNiz.length; j++) {
		
		
      var karta = spil.pop();
	 // document.getElementById("demo").innerHTML =karta.BojaKarte;
      ljudiNiz[j].ruka.unshift(karta);
      renderCard(karta, j);
    }
  }
  
}


function renderCard(karta, playerIndex) {
  
  var cardImg = document.createElement('img');
  cardImg.src = 'images/' + karta.BojaKarte + '-' + karta.vrednostKarte + '.png';
  cardImg.setAttribute("id",'images/' + karta.BojaKarte + '-' + karta.vrednostKarte );  
  //cardImg.src = "images/green-1.png";
  
   document.getElementById('player' +"00"+ playerIndex).appendChild(cardImg);
  //document.body.appendChild(cardImg);
  
  
  cardImg.addEventListener("click", function() {//IZ RUKE NA TABLU
	  
		
	  if(((tabla[0].BojaKarte==karta.BojaKarte) || (tabla[0].vrednostKarte==karta.vrednostKarte )) &&  (playerIndex==pozicija))
	  {
		  let numb = document.getElementById('player' +"00"+ playerIndex).childElementCount;
			if(numb==0)
			{document.getElementById('prikaz').innerHTML = "pobednik je " + 'player' +"00"+ playerIndex;
			}
			
			
			if(pozicija%2==0)
			{
				document.getElementById("player001").style.background = "blue";
				document.getElementById("player000").style.background = "brown";
			}
			else 
			{
				document.getElementById("player001").style.background = "brown";
				document.getElementById("player000").style.background = "blue";
			}
			
			
		  //STA RADI SVAKA KARTA KAD SE BACI
		  if(karta.vrednostKarte == "reverse")
		  {
			  smer=-smer;
			  if(BrojLjudi==2)
			  {
				  pozicija= potez(pozicija,smer);
			  } 
		   }
		   
		  if(karta.vrednostKarte == "skip")
		  {
			 pozicija= potez(pozicija,smer);
		   }
		   
		   if(karta.vrednostKarte == "draw2")
		  {
			  pozicija= potez(pozicija,smer);
			  VuciIzSpila();
			  pozicija= potez(pozicija,smer);
		   }
			  
			  
		  // POTEZ 
			
			
			
		   pozicija= potez(pozicija,smer);
			
			var list = document.getElementById("tabla");
			if (list.hasChildNodes())
				{
					list.removeChild(list.children[1]);
					
				}
			
		  
		  tabla[0] = { BojaKarte : karta.BojaKarte , vrednostKarte : karta.vrednostKarte  }
		  document.getElementById("tabla").appendChild(cardImg);
		  
			
		  
		  
		  
		 //console.log( ljudiNiz[playerIndex].ruka.find((item => item.BojaKarte === karta.BojaKarte) && (item => item.vrednostKarte === karta.vrednostKarte )));
	  }
	
	//console.log( ljudiNiz[playerIndex].ruka.find((item => item.BojaKarte === karta.BojaKarte) && (item => item.vrednostKarte === karta.vrednostKarte )));
	// console.log(ljudiNiz[playerIndex].ruka);
	//console.log(karta);
	});
  
}
function tablaFun(){ //PRVA KARTA
	var karta = spil.pop();
	var cardImg = document.createElement('img');
    cardImg.src = 'images/' + karta.BojaKarte + '-' + karta.vrednostKarte + '.png';
    document.getElementById("tabla").appendChild(cardImg);
	tabla[0] = karta;
	
	
}

function potez(pozicija,smer){
	
	if(smer==1)
	{
		pozicija=pozicija+1;
	}
	else
	{
		pozicija=pozicija-1;
	}
	
	pozicija=Math.abs(pozicija%BrojLjudi);
	
	return pozicija;
}
function VuciIzSpila()
{
	var karta = spil.pop();
	var playerIndex=pozicija;
	var cardImg = document.createElement('img');
    cardImg.src = 'images/' + karta.BojaKarte + '-' + karta.vrednostKarte + '.png';
	cardImg.setAttribute("id",'images/' + karta.BojaKarte + '-' + karta.vrednostKarte );  
  //cardImg.src = "images/green-1.png";
  
   document.getElementById('player' +"00"+ pozicija).appendChild(cardImg);
   
   cardImg.addEventListener("click", function() {//IZ RUKE NA TABLU
	  
	
	
	
	
	  if(((tabla[0].BojaKarte==karta.BojaKarte) || (tabla[0].vrednostKarte==karta.vrednostKarte )) &&  (playerIndex==pozicija))
	  {
				if(pozicija%2==0)
			{
				document.getElementById("player001").style.background = "blue";
				document.getElementById("player000").style.background = "brown";
			}
			else 
			{
				document.getElementById("player001").style.background = "brown";
				document.getElementById("player000").style.background = "blue";
			}
			
			if(karta.vrednostKarte == "reverse")
		  {
			  smer=-smer;
			  if(BrojLjudi==2)
			  {
				  pozicija= potez(pozicija,smer);
			  } 
		   }
		   
		  if(karta.vrednostKarte == "skip")
		  {
			   pozicija= potez(pozicija,smer);
		   }
		   
		   if(karta.vrednostKarte == "draw2")
		  {
			  pozicija= potez(pozicija,smer);
			  VuciIzSpila();
			  pozicija= potez(pozicija,smer);
		   }
			
		   pozicija= potez(pozicija,smer);
		   
			var list = document.getElementById("tabla");
			if (list.hasChildNodes())
				{
					list.removeChild(list.children[1]);
					
				}
		
		  
		  tabla[0] = { BojaKarte : karta.BojaKarte , vrednostKarte : karta.vrednostKarte  }
		  document.getElementById("tabla").appendChild(cardImg);
		 
		 
		
		
	  }
	});
	//pozicija= potez(pozicija,smer);
}




function StilRuka()
{	
	document.getElementById("idSlikeSpila").style.visibility = "visible";
	
	if(stil==1)
	{
		document.getElementById("idSlikeSpila").src = "images/BackCard.png";
	}
	if(stil==2)
	{
		document.getElementById("idSlikeSpila").src = "images/BackCard2.png";
	}
	if(stil==3)
	{
		document.getElementById("idSlikeSpila").src = "images/BackCard3.png";
	}
	
	
	
	document.getElementById("player000").style.visibility = "visible";
	document.getElementById("player001").style.visibility = "visible";
	document.getElementById("unoLast").style.visibility = "visible";
	document.getElementById("unoLastText").style.visibility = "visible";
	document.getElementById("player001").style.background = "brown";
	document.getElementById("player000").style.background = "blue";
}


function startGame() {
	
  napraviSpil();
  promesaj();	
  createPlayers(BrojLjudi);
  StilRuka();
  podeli();
  tablaFun();
 
}


function last() {
	for(let i=0; i< BrojLjudi ;i++)
	{
		let numb = document.getElementById('player' +"00"+i).childElementCount;
		if(numb==0)
		{
			console.log("pobednik je player00"+i);
			document.getElementById("demo").innerHTML = 'player'+"00"+i;	
			
			
		}
	}
	
	for(let i=0; i< BrojLjudi ;i++)
	{
		let numb = document.getElementById('player' +"00"+i).childElementCount;
		if(numb==0)
		{
			
			for(let j=0; j< BrojLjudi ;j++)
				{	
			
					
					
					parent = document.getElementById('player' +"00"+j)
					while (parent.firstChild)
					{
						parent.firstChild.remove();
						
					}
					
				}
		
		}
	}
	
 
 
}
