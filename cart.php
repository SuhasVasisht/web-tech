<html>
    <head>
  <title>Cart</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="common.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 

  <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Homepagestyle.css">
    <link href="https://fonts.googleapis.com/css?family=Staatliches&display=swap" rel="stylesheet">
</head>
<body style="background:linear-gradient(rgb(30,30,30),rgb(25,25,25));">

<?php include('connect.php') ?>
<?php include("includes/header.php"); ?>


  <div class="container"style="margin-top:60px" id="start">
    </div>
    <h1 class="display-3 text2" style="display:inline-block;">Your Cart&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h1>
    <div class="container text-right">
    <button type="button" class="btn btn-dark" id="remove" style="font-family:Ubuntu;">Clear</button>
    </div>
    <br><br>
<div class="container">
    <div class="table-responsive">
        <table class="table text3">
            <thead>
                <tr>
            <th>Add/Remove</th>
            <th>Game</th>
            <th>Quantity</th>
            <th>Cost</th>
            </tr>
            </thead>
            <tbody>
                <tr id="one" style="display:none;">
                    <div id="oneg" style="display:none;"></div>
                    <td>
                        <div class="btn-group">
                                <button type="button" class="btn btn-light" id="one+">+</button>
                                 <button type="button" class="btn btn-light" id="one-">-</button>
                                 
                              </div>
                        </td>
                        <td id="one1"></td>
                        <td id="one2"></td>
                        <td id="one3"></td>

                </tr>
                <tr id="two" style="display:none;">
                    <div id="twog" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="two+">+</button>
                                     <button type="button" class="btn btn-light" id="two-">-</button>  
                                  </div>

                    </td>
                    <td id="two1"></td>
                    <td id="two2"></td>
                    <td id="two3"></td>

                </tr>
                <tr id="three" style="display:none;">
                    <div id="threeg" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="three+">+</button>
                                     <button type="button" class="btn btn-light" id="three-">-</button>  
                                  </div>

                    </td>
                    <td id="three1"></td>
                    <td id="three2"></td>
                    <td id="three3"></td>


                </tr>
                <tr id="four" style="display:none;">
                    <div id="fourg" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="four+">+</button>
                                     <button type="button" class="btn btn-light" id="four-">-</button>  
                                  </div>

                    </td>
                    <td id="four1"></td>
                    <td id="four2"></td>
                    <td id="four3"></td>


                </tr>
                <tr id="five" style="display:none;">
                    <div id="fiveg" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="five+">+</button>
                                     <button type="button" class="btn btn-light" id="five-">-</button>  
                                  </div>

                    </td>
                    <td id="five1"></td>
                    <td id="five2"></td>
                    <td id="five3"></td>


                </tr>
                <tr id="six" style="display:none;">
                    <div id="sixg" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="six+">+</button>
                                     <button type="button" class="btn btn-light" id="six-">-</button>  
                                  </div>

                    </td>
                    <td id="six1"></td>
                    <td id="six2"></td>
                    <td id="six3"></td>


                </tr>
                <tr id="seven" style="display:none;">
                    <div id="seveng" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="seven+">+</button>
                                     <button type="button" class="btn btn-light" id="seven-">-</button>  
                                  </div>

                    </td>
                    <td id="seven1"></td>
                    <td id="seven2"></td>
                    <td id="seven3"></td>


                </tr>
                <tr id="eight" style="display:none;">
                    <div id="eightg" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="eight+">+</button>
                                     <button type="button" class="btn btn-light" id="eight-">-</button>  
                                  </div>

                    </td>
                    <td id="eight1"></td>
                    <td id="eight2"></td>
                    <td id="eight3"></td>


                </tr>
                <tr id="nine" style="display:none;">
                    <div id="nineg" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="nine+">+</button>
                                     <button type="button" class="btn btn-light" id="nine-">-</button>  
                                  </div>

                    </td>
                    <td id="nine1"></td>
                    <td id="nine2"></td>
                    <td id="nine3"></td>


                </tr>
                <tr id="ten" style="display:none;">
                    <div id="teng" style="display:none;"></div>
                    <td>
                            <div class="btn-group">
                                    <button type="button" class="btn btn-light" id="ten+">+</button>
                                     <button type="button" class="btn btn-light" id="ten-">-</button>  
                                  </div>

                    </td>
                    <td id="ten1"></td>
                    <td id="ten2"></td>
                    <td id="ten3"></td>


                </tr>
                <tr>
                    <th>Total</th>
                    <td></td>
                    <td></td>
                    <td id="total"></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<br><br>
<div class="container text-right">
        <form action="checkout.php" method="post" onsubmit="return validate()">
            <input type="hidden" name="purchase" id="tophp">
            <input type="hidden" name="history" id="hist">
            <button type="submit" class="btn btn-dark" id="finish" style="font-family:Ubuntu;">Checkout</button>
        </form>
        </div>
    <script>
        var holders=["one","two","three","four","five","six","seven","eight","nine","ten"];
        var ids=["assassin","witcher","rainbow","cod","cyberpunk","lastofus","forza","nfs","crew","fifa","nba","madden"];
        var names=["Assassins Creed Odyssey","Witcher 3:Wild Hunt","Rainbow Six Siege","Call of Duty:Modern Warfare","Cyberpunk 2077","The Last of Us","Forza Horizon 4","Need for Speed:Heat","The Crew 2","Fifa 20","NBA 2K20","Madden NFL 20"];
        var cost=["2499","999","1999","4699","2499","949","2999","3999","1699","3499","2997","3499"];
       function total(){
           var sum=0;
           var purchase="";
           for(m of holders){
               var x=String(m);
               if(document.getElementById(x+"2").innerHTML!=""){
                   var s=document.getElementById(x+"2").innerHTML;
                   var name=document.getElementById(x+"1").innerHTML;
                   var t=document.getElementById(x+"3").innerHTML;
                   t=t.substring(1);
                   
                   t=Number(t);

                   sum+=t;
                   console.log("in"+sum);
                   purchase+=name+" :"+s+";";
                   console.log(purchase);

               }
           }
           document.getElementById("total").innerHTML="&#8377;"+sum;
           document.getElementById("tophp").value = sum;
           document.getElementById("hist").value = purchase;

       }
       function clear(){
           for(i=0;i<10;i++){
               document.getElementById(holders[i]+"1").innerHTML="";
               document.getElementById(holders[i]+"2").innerHTML="";
               document.getElementById(holders[i]+"3").innerHTML="";
               document.getElementById(holders[i]+"g").innerHTML="";
               document.getElementById(holders[i]).style.display="none";
               
               
           }
       } 
       function doit(){
            var count=0;
            for(i=0;i<12;i++)
            {
                var a=Number(localStorage.getItem(ids[i]));
                if(a!=0){
                    document.getElementById(holders[count]+"g").innerHTML=ids[i];
                    document.getElementById(holders[count]+"1").innerHTML=names[i];
                    document.getElementById(holders[count]+"2").innerHTML=a;
                    document.getElementById(holders[count]+"3").innerHTML="&#8377;"+(Number(cost[i])*a);
                    console.log(ids[i]);
                    document.getElementById(holders[count]).style.removeProperty("display");
                    count++;

                }
                
            }
       } 
       clear();
       doit();
       total();
       var adds=new Array();
       var subs=new Array();
       for(i=0;i<10;i++){
           adds[i]=holders[i]+"+";
           subs[i]=holders[i]+"-";
       }
       document.addEventListener("click",function(e){
            if(adds.includes(e.target.id)){
                var ad=e.target.id;
                ad=(ad.slice(0,-1))+"g";
                ad=document.getElementById(ad).innerHTML
                var num=Number(localStorage.getItem(ad));
                num++;
                localStorage.setItem(ad,String(num));
                console.log(num);
                clear();
                doit();
                total();
                
            }
            else if(subs.includes(e.target.id)){
                var ad=e.target.id;
                ad=(ad.slice(0,-1))+"g";
                ad=document.getElementById(ad).innerHTML
                var num=Number(localStorage.getItem(ad));
                if(num!=0){
                    num--;
                }
                localStorage.setItem(ad,String(num));
                console.log(num);
                clear();
                doit();
                total();

            }
            else if(e.target.id=="remove"){
                clear();
                for(i=0;i<12;i++){
                localStorage.setItem(ids[i],"0");
                }
                total();
            }
       });
    function validate(){
        var logged = decodeURIComponent(document.cookie);
        var n = logged.includes("logstat");
        console.log(n);
        if((!n)){
            alert("You need to sign in to perform a transaction");
            return false;
        }
    }

    </script>
  </body>
</html>