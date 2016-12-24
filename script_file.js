function add()
{


?>
var patname=document.pres.patname.value;
var patid=document.pres.patid.value;
var date=document.pres.date.value;
var treatment=document.pres.trtmnt.value;

var s11=document.pres.s1.value;
var m11=document.pres.m1.value;
var q11=document.pres.q1.value;
var t11=document.pres.t1.value;

var s22=document.pres.s2.value;
var m22=document.pres.m2.value;
var q22=document.pres.q2.value;
var t22=document.pres.t2.value;

var s33=document.pres.s3.value;
var m33=document.pres.m3.value;
var q33=document.pres.q3.value;
var t33=document.pres.t3.value;

var s44=document.pres.s4.value;
var m44=document.pres.m4.value;
var q44=document.pres.q4.value;
var t44=document.pres.t4.value;

var s55=document.pres.s5.value;
var m55=document.pres.m5.value;
var q55=document.pres.q5.value;
var t55=document.pres.t5.value;

var s66=document.pres.s6.value;
var m66=document.pres.m6.value;
var q66=document.pres.q6.value;
var t66=document.pres.t6.value;

var s77=document.pres.s7.value;
var m77=document.pres.m7.value;
var q77=document.pres.q7.value;
var t77=document.pres.t7.value;
var ins=s11+m11+q11+t11+s22+m22+q22+t22+s33+m33+q33+t33+s44+m44+q44+t44+s55+m55+q55+t55+s66+m66+q66+t66+s66+m66+q66+t66;

var pre="<h1 align='left'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>PRESCRIPTION</u></h1>";
var details="<br><b>Patient Name&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><i>"+patname+"</i><br><br><br><b>Patient ID&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><i>"+patid+"</i><br><br><br><b>Treatment&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><i>"+trtmnt+"</i><br><br><br>"+"<b>Date&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b><i>"+date+"</i><br><br><br>";

var str="<b>Prescription&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:<br><br></b><i><table border='1'><tr><th>S.no</th><th>Medication</th><th>Quantity</th><th>M/A/N</th></tr><tr><td>"+s11 +"</td><td>"+m11+"</td><td>"+q11+"</td><td>"+t11+"</td></tr><tr><td>" +s22+"</td><td>"+m22+"</td><td>"+q22+"</td><td>"+t22+"</td></tr><tr><td>"+s33+"</td><td>"+m33+"</td><td>"+q33+"</td><td>"+t33+"</td></tr><tr><td>"+s44+"</td><td>"+m44+"</td><td>"+q44+"</td><td>"+t44+"</td></tr><tr><td>"+s55+"</td><td>"+m55+"</td><td>"+q55+"</td><td>"+t55+"</td></tr><tr><td>"+s66+"</td><td>"+m66+"</td><td>"+q66+"</td><td>"+t66+"</td></tr><tr><td>"+s77+"</td><td>"+m77+"</td><td>"+q77+"</td><td>"+t77+"</i></td></tr></table>";
alert("Prescription added.");
//document.getElementById('td1').innerHTML = details+str;
document.writeln(pre+details+str);
document.writeln("<button onclick='window.print()'>Print</button>");
return true;
}
function zzz()
{
document.write("First Name is " +a);
return true;
}




