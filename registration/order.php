<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
    <title>Cake Form</title>
    <script type="text/javascript" src="js/formcalculations.js"></script>
    <link href="styles/cakeform.css" rel="stylesheet" type="text/css" />
</head>


<body>
    <form action="" id="cakeform" onsubmit="return false;">
    <select id="filling" name='filling' onchange="calculateTotal()">
                <option value="None">Select Filling</option>
                <option value="Lemon">Lemon($5)</option>
                <option value="Custard">Custard($5)</option>
                <option value="Fudge">Fudge($7)</option>
                <option value="Mocha">Mocha($8)</option>
                <option value="Raspberry">Raspberry($10)</option>
                <option value="Pineapple">Pineapple($5)</option>
                <option value="Dobash">Dobash($9)</option>
                <option value="Mint">Mint($5)</option>
                <option value="Cherry">Cherry($5)</option>
                <option value="Apricot">Apricot($8)</option>
                <option value="Buttercream">Buttercream($7)</option>
                <option value="Chocolate Mousse">Chocolate Mousse($12)</option>
               </select>
    <br/><br/>
    
  
                <label >Size Of the Cake</label><br/><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round6"  onclick="calculateTotal()" />Round cake 6" -  serves 8 people ($20)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round8"  onclick="calculateTotal()" />Round cake 8" - serves 12 people ($25)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round10" onclick="calculateTotal()" />Round cake 10" - serves 16 people($35)</label><br/>
                <label class='radiolabel'><input type="radio"  name="selectedcake" value="Round12" onclick="calculateTotal()" />Round cake 12" - serves 30 people($75)</label><br/>
                <br/>
    
    <div id="tet"></div>
    </form>
    <script>
        
        var price= new Array();
        price["None"]=0;
        price["Lemon"]=5;
        price["Custard"]=50;
        price["Fudge"]=50;
        price["Mocha"]=15;
        price["Raspberry"]=10;
        price["Pineapple"]=7;
        price["Dobash"]=51;
        price["Mint"]=78;
        price["Cherry"]=4;
        price["Apricot"]=12;
        price["Buttercream"]=9;
        price["Chocolate Mousse"]=14;
        
       var arr=new Array();
       
       arr["Round6"]=50;
       arr["Round8"]=42;
       arr["Round10"]=12;
       arr["Round12"]=23;
        
        function calculateTotal1(){
            
            
            var fprice=0;
           
    //Get a reference to the form id="cakeform"
    var theForm = document.forms["cakeform"];
    //Get a reference to the select id="filling"
     var selectedFilling = theForm.elements["filling"];
    
    //set cakeFilling Price equal to value user chose
    //For example filling_prices["Lemon".value] would be equal to 5
   
   fprice=price[selectedFilling.value];
   //alert(fprice);
    return fprice;
          
          
        }
        
        function calculateTotal2(){
            
            var theForm=document.forms["cakeform"];
            var element=theForm.elements["selectedcake"];
            var val=0;
            var result=0;
            for(var i=0;i<element.length;i++){
                
            
            if(element[i].checked){
                
                 val=element[i].value;
                
              
              result=arr[element[i].value];
                
            
              break;
            }
            }
            return result;
        }
        
        function calculateTotal(){
            var final=0;
           final= calculateTotal2()+calculateTotal1();
           
       
            
            document.getElementById("tet").innerHTML="Your Toal Price is: "+final;  
        }
         
        
    </script>
    
</body>