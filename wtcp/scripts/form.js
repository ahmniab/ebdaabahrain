function emailvalidation(entered, alertbox)
{
// E-mail-Validation (c) Henrik Petersen / NetKontoret
// Explained at www.echoecho.com/jsforms.htm
// Please do not remove the this line and the two lines above.
with (entered)
{
apos=value.indexOf("@");
dotpos=value.lastIndexOf(".");
lastpos=value.length-1;
if (apos<1 || dotpos-apos<2 || lastpos-dotpos>3 || lastpos-dotpos<2) 
{if (alertbox) {alert(alertbox);} return false;}
else {return true;}
}
}

function valuevalidation(entered, min, max, alertbox, datatype)
{
// Value-Validation (c) Henrik Petersen / NetKontoret
// Explained at www.echoecho.com/jsforms.htm
// Please do not remove the this line and the two lines above.
with (entered)
{
checkvalue=parseFloat(value);
if (datatype)
  {smalldatatype=datatype.toLowerCase();
   if (smalldatatype.charAt(0)=="i") {checkvalue=parseInt(value)};
  }
if ((parseFloat(min)==min && checkvalue<min) || (parseFloat(max)==max && checkvalue>max) || value!=checkvalue)
{if (alertbox!="") {alert(alertbox);} return false;}
else {return true;}
}
}

function digitvalidation(entered, min, max, alertbox, datatype)
{
// Digit-Validation (c) Henrik Petersen / NetKontoret
// Explained at www.echoecho.com/jsforms.htm
// Please do not remove the this line and the two lines above.
with (entered)
{
checkvalue=parseFloat(value);
if (datatype)
  {smalldatatype=datatype.toLowerCase();
   if (smalldatatype.charAt(0)=="i") {checkvalue=parseInt(value); if (value.indexOf(".")!=-1) {checkvalue=checkvalue+1}};
  }
if ((parseFloat(min)==min && value.length<min) || (parseFloat(max)==max && value.length>max) || value!=checkvalue)
{if (alertbox!="") {alert(alertbox);} return false;}
else {return true;}
}
}

function emptyvalidation(entered, alertbox)
{
// Emptyfield-Validation (c) Henrik Petersen / NetKontoret
// Explained at www.echoecho.com/jsforms.htm
// Please do not remove the this line and the two lines above.
with (entered)
{
if (value==null || value=="")
{if (alertbox!="") {alert(alertbox);} return false;}
else {return true;}
}
}


function emptySelect(entered, alertbox)
{
// Emptyfield-Validation (c) Henrik Petersen / NetKontoret
// Explained at www.echoecho.com/jsforms.htm
// Please do not remove the this line and the two lines above.
with (entered)
{
if (value==null || value=="0")
{if (alertbox!="") {alert(alertbox);} return false;}
else {return true;}
}
}