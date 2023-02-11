<style>
h2 {text-align: center; font-family:verdana; color: white; font-size: 18px;}
h3 {text-align: center; font-family:verdana; color: white;}
p {text-align: center; font-family:verdana; color: white;}
p2 {text-align: center; font-family:verdana; color: white; font-size: 12px;}
b {text-align: center; font-family:verdana; color: white; line-height: 40px;}
span {font-weight: bold; font-family:verdana; color: white; font-size: 24px;}
div {text-align: center; vertical-align: middle; padding: 20% 0;}
form {overflow: hidden;}
input {text-align: right; font-weight: bold; font-size: 16px;}

body {background-color: 1b1b1b;}
</style>
<head>
  <title>Υπολογισμός Μορίων Υγείας 2023</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>


<div>
<h3>Υπολογισμός Μορίων Πανελλαδικών ΓΕΛ 2023</h3>
<h2>3ο Επιστημονικό Πεδίο</h2>
<b>Έκθεση-Βιολογία-Φυσική-Χημεία</b>
<form name="form" action="" method="get">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="lang" id="lang" value="">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="bio" id="bio" value="">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="phys" id="phys" value="">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="chem" id="chem" value="">
</form>

<br>
<br>
<br>

<b>Συντελεστές Μαθημάτων</b><br>
<b>Έκθεση-Βιολογία-Φυσική-Χημεία</b>

<form name="form" action="" method="get">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="langc" id="langc" value="1">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="bioc" id="bioc" value="1">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="physc" id="physc" value="1">
  <input class="form-control formBlock" style="height:30px; width:50px" type="number" name="chemc" id="chemc" value="1">
</form>

<b>Συνολικά Μόρια: </b>
<input id='moutput' type="text" class="form-control formBlock" name="total"  placeholder="Μόρια"/>

<div>
<script>
$('input').keyup(function(){ // run anytime the value changes
    var glang  = Number($('#lang').val());   // get value of field
    var gbio = Number($('#bio').val()); // convert it to a float
    var gphys  = Number($('#phys').val());
    var gchem = Number($('#chem').val());
    var clang  = Number($('#langc').val());   // get value of field
    var cbio = Number($('#bioc').val()); // convert it to a float
    var cphys  = Number($('#physc').val());
    var cchem = Number($('#chemc').val());
    var totgr = (((glang * clang)+(gbio*cbio)+(gphys*cphys)+(gchem*cchem))*1000)/4
    document.getElementById('moutput').value = Math.floor(totgr/1);
});
</script>
