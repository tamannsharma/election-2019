<!DOCTYPE html>
<html>

<head>
  <title>select</title>
</head>
<body>
<h2>Choose party to know more...</h2>
<select id="selectParty" onChange="changeFunction()">
</select>
  <br/>
<select id="slt2" name="slt2 ">
  <option>Please choose a party first</option>
</select>

</body>
  <script type="text/javascript">
var select = document.getElementById("selectParty");
var option = document.createElement("option");
option.text = "Choose a party";
select.add(option);
var options = ["AAP","AAIDMK","BSP","BJP","Congress","CPI","DMK","NCP","ShivSena","SP","TDP","TMC","YSR Congress"];
for(var i = 0; i < options.length; i++) {
    var opt = options[i];
    var el = document.createElement("option");
    el.textContent = opt;
    el.value = opt;
    select.appendChild(el);
}
function changeFunction() {

  var selectedText = document.getElementById("selectParty").value;
  if(selectedText == 'BJP' || selectedText =='Congress')
  {
    var select2 = document.getElementById("slt2");
    var date = ["15 March 2019","16 March 2019", "17 March 2019", "18 March 2019", "19 March 2019","20 March 2019","21 March 2019", "22 March 2019", "23 March 2019", "24 March 2019", "25 March 2019", "26 March 2019","27 March 2019","28 March 2019", "29 March 2019", "30 March 2019", "31 march 2019"];
    select2.options.length = 0;
    for(var i = 0; i < date.length; i++) {
     var opt = date[i];
     var el = document.createElement("option");
     el.textContent = opt;
     el.value = opt;
     select2.appendChild(el);
  }

}
else{
var select2 = document.getElementById("slt2");
    var date2 = ["15-17 March","18-20 March", "21-23 March", "24-26 March", "27-29 March"];
    select2.options.length = 0;
    for(var i = 0; i < date2.length; i++) {
     var opt = date2[i];
     var el = document.createElement("option");
     el.textContent = opt;
     el.value = opt;
     select2.appendChild(el);
  
}
}
}

  </script>
</html>