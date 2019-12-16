var ids=["assassin","witcher","rainbow","cod","cyberpunk","lastofus","forza","nfs","crew","fifa","nba","madden"];
var names=["Assassins Creed Odyssey","Witcher 3:Wild Hunt","Rainbow Six Siege","Call of Duty:Modern Warfare","Cyberpunk 2077","The Last of Us","Forza Horizon 4","Need for Speed:Heat","The Crew 2","Fifa 20","NBA 2K20","Madden NFL 20"];
var cost=["2499","999","1999","4699","2499","949","2999","3999","1699","3499","2997","3499"];

document.addEventListener('click', function(e){
   if(ids.includes(e.target.id)){
       var b=String(e.target.id);
       var a=Number(localStorage.getItem(b));
        a++;
        localStorage.setItem(b,String(a));
        console.log(b+a);
        

    }

  });

