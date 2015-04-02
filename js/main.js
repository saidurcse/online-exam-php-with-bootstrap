function changeQuestion(ques){	
	document.form1.questionNumber.value=ques-2;
    var formToSend = document.getElementById("form1");   
    formToSend.submit();
}


<!-- Begin
// Take user here after session timed out


timedouturl = "result.php";

function Minutes(data) {
for (var i = 0; i < data.length; i++)
if (data.substring(i, i + 1) == ":")
break;
return (data.substring(0, i));
}
function Seconds(data) {
for (var i = 0; i < data.length; i++)
if (data.substring(i, i + 1) == ":")
break;
return (data.substring(i + 1, data.length));
}
function Display(min, sec) {
var disp;
if (min <= 9) disp = " 0";
else disp = " ";
disp += min + ":";
if (sec <= 9) disp += "0" + sec;
else disp += sec;
return (disp);
}
function Down() {
sec--;
if (sec == -1) { sec = 59; min--; }
document.form1.clock.value = Display(min, sec);
window.status = "Session will time out in: " + Display(min, sec);
if (min == 0 && sec == 0) {
alert("Your session has timed out.");
window.location.href = timedouturl;
}
else down = setTimeout("Down()", 100);
}
function timeIt() {
min = 1 * Minutes(document.form1.clock.value);
sec = 0 + Seconds(document.form1.clock.value);
Down();
}
//  End -->