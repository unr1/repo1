<html>
<head>
 <title>Системное время</title>
 <style type="text/css">

	.Milliseconds{
		background: #<? echo $_GET["color"]; ?>;
		font-size: 300px;
	}

 </style>

 <script language="JavaScript">
 
var millisec = 1;

function settingNumber(){
	window.document.all.timer1.value = millisec;
	millisec = ++millisec;
}

function writtingNumber(){
	window.setInterval("settingNumber();", 10);
}

writtingNumber();

 </script>
</head>
<body>
<input type="text" name="timer1" class="Milliseconds" size="5"></input>
</body>
</html>