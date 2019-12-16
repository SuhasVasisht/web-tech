<html>
    <head>

    </head>
    <body>
        <script type="text/javascript">
        var ids=["assassin","witcher","rainbow","cod","cyberpunk","lastofus","forza","nfs","crew","fifa","nba","madden"];
        var names=["Assassins Creed Odyssey","Witcher 3:Wild Hunt","Rainbow Six Siege","Call of Duty:Modern Warfare","Cyberpunk 2077","The Last of Us","Forza Horizon 4","Need for Speed:Heat","The Crew 2","Fifa 20","NBA 2K20","Madden NFL 20"];
        var cost=["2499","999","1999","4699","2499","949","2999","3999","1699","3499","2997","3499"];
        var x;
        var i=0;
        for(x of ids)
        {   
            localStorage.setItem(x,"0");
            console.log(x);
           /* localStorage.setItem(x+"1",names[i]);
            console.log(names[i]);
            localStorage.setItem(x+"2",cost[i]);
            console.log(cost[i]);
            i++;*/

        }
        

                
        </script>
        
    </body>
</html>