<?php
if (isset($_POST['Light1ON']))
{
		exec("sudo python LightOFF.py");
}
if(isset($_POST['Light1OFF']))
{
	exec("sudo python LightON.py");
}

if (isset($_POST['Light2ON']))
{
	exec("sudo python Light2on.py");
}
if(isset($_POST['Light2OFF']))
{
	exec("sudo python Light2off.py");
}

if (isset($_POST['Light3ON']))
{
	exec("sudo python Light3on.py");
}
if(isset($_POST['Light3OFF']))
{
	exec("sudo python Light3off.py");
}

if (isset($_POST['Light4ON']))
{
	exec("sudo python Light4on.py");
}
if(isset($_POST['Light4OFF']))
{
	exec("sudo python Light4off.py");
}

if (isset($_POST['Light5ON']))
{
	exec("sudo python Light5on.py");
}
if(isset($_POST['Light5OFF']))
{
	exec("sudo python Light5off.py");
}

if (isset($_POST['Light6ON']))
{
	exec("sudo python Light6on.py");
}
if(isset($_POST['Light6OFF']))
{
	exec("sudo python Light6off.py");
}

if (isset($_POST['Light7ON']))
{
	exec("sudo python Light7on.py");
}
if(isset($_POST['Light7OFF']))
{
	exec("sudo python Light7off.py");
}

if (isset($_POST['Light8ON']))
{
	exec("sudo python Light8on.py");
}
if(isset($_POST['Light8OFF']))
{
	exec("sudo python Light8off.py");
}
?>
<html>
<head>
<style>
button	{
	background-color:#4CAF50;
	color:white;
	padding: 15px 32px;
	text-align:center;
	font-size:20px;
	cursor:pointer;
}
h2 {
	font-size: 15px;
}
</style>
</head>
<body>
<form method="post">
<h2>Light 1</h2>
<button name="Light1ON">ON</button>
<button name="Light1OFF">OFF</button><br>
<h2>Light 2</h2>
<button name="Light2ON">ON</button>
<button name="Light2OFF">OFF</button><br>
<h2>Light 3</h2>
<button name="Light3ON">ON</button>
<button name="Light3OFF">OFF</button><br>
<h2>Light 4</h2>
<button name="Light4ON">ON</button>
<button name="Light4OFF">OFF</button><br>
<h2>Light 5</h2>
<button name="Light5ON">ON</button>
<button name="Light5OFF">OFF</button><br>
<h2>Light 6</h2>
<button name="Light6ON">ON</button>
<button name="Light6OFF">OFF</button><br>
<h2>Light 7</h2>
<button name="Light7ON">ON</button>
<button name="Light7OFF">OFF</button><br>
<h2>Light 8</h2>
<button name="Light8ON">ON</button>
<button name="Light8OFF">OFF</button><br>
</form>
</body>
</html>