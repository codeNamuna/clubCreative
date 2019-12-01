<!DOCTYPE html>
<html>
<head>
<title>Login | Club Creative</title>	
<link href='https://fonts.googleapis.com/css?family=Lobster|Pacifico' rel='stylesheet' type='text/css'>
<link rel="icon" type="image/png" href="http://s19.postimg.org/6lpvtmy6b/ico2.png">
<style>

	@keyframes back_ani_major{
		from{top:0px;}
		to{top:100px;}
	}
	
	@keyframes back_ani{
		from{transform: rotate(0deg);}
		to{transform: rotate(359deg);}
	}
	
	@keyframes fades{
		from{opacity:0;}
		to{opacity:1;}
	}
	
	#mega_fade{
		height:100%;
		width:100%;
		top:0px;
		left:0px;
		background-color:White;
		opacity:1;
		display:block;
		animation-name:fades;
		animation-duration:2s;
		animation-iteration-count:1;
		animation-timing-function:ease-out;
	}
	
	#background_major{
		position:fixed;
		background-color:White;
		top:50px;
		animation-name:back_ani_major;
		animation-timing-function:ease-in-out;
		animation-iteration-count:infinite;
		animation-duration:8s;
		animation-direction:alternate;
		z-index:0;
	}
	
	.background_mini{
		position:absolute;
		display:inline-block;
		background-size:contain;
		background-repeat:no-repeat;	
		animation-name:back_ani;
		animation-iteration-count:infinite;
		animation-timing-function:linear;
		overflow:hidden;
		z-index:auto;
	}
	
	#triangle1{
		height:125px;
		width:125px;
		top:25px;
		left:50px;
		background-image:url("http://s19.postimg.org/d8llfot4z/triangles.png");
		animation-duration:15s;
	}

	#triangle2{
		height:50px;
		width:50px;
		top:300px;
		left:1250px;
		background-image:url("http://s19.postimg.org/d8llfot4z/triangles.png");
		animation-duration:5s;
	}

	#smoothies{
		height:100px;
		width:100px;
		top:360px;
		left:40px;
		background-image:url("http://s19.postimg.org/tkvn5f7gj/smoothies.png");
		animation-duration:15s;
	}
	
	#shoes{
		height:80px;
		width:80px;
		top:60px;
		left:1200px;
		background-image:url("http://s19.postimg.org/9nl4ipz7n/shoes.png");
		animation-duration:10s;
	}

	#waves{
		height:100px;
		width:100px;
		top:550px;
		left:250px;
		background-image:url("http://s19.postimg.org/qpdykte2n/waves.png");
		animation-duration:5s;
	}
	
	#squares{
		height:40px;
		width:40px;
		top:600px;
		left:700px;
		background-image:url("http://s19.postimg.org/cgixghoxv/squares.png");
		animation-duration:5s;
	}
	
	#circle1{
		height:110px;
		width:110px;
		top:530px;
		left:1100px;
		background-image:url("http://s19.postimg.org/asf6o3loj/circles.png");
		animation-duration:5s;
	}
	
	#circle2{
		height:60px;
		width:60px;
		top:370px;
		left:425px;
		background-image:url("http://s19.postimg.org/asf6o3loj/circles.png");
		animation-duration:5s;
	}	
	
	#hexas{
		height:60px;
		width:60px;
		top:370px;
		left:825px;
		background-image:url("http://s19.postimg.org/6tmkj0mf7/hexas.png");
		animation-duration:5s;
	}
	
	.elements{
		position:absolute;
		background-size:contain;
	}
		
	#join{
		top:18px;
		left:0px;
		width:100%;
		height:50px;
		background-color:#7BE7D7;
		opacity:0.7;
	}
	
	#join2{
		top:600px;
		left:0px;
		width:100%;
		height:50px;
		background-color:#7BE7D7;
		opacity:0.7;
	}
	
	#main_div{
		top:200px;
		left:330px;
		height:270px;
		width:700px;
		border-radius:10px;
		background:linear-gradient(45deg,#7BE7D7,#7BE7D7,#7ED4DA,#86A7E3);	
		opacity:0.7;
	}
	
	#forma{
		top:60px;
		left:50px;
	}
	
	.field{
		font-size:20px;
		border-radius:2px;
		border:10px;
		font-family:'Pacifico',cursive;
	}
	
	.field_description{
		position:absolute;
		font-family:'Lobster','Pacifico',cursive;
		font-size:20px;
		text-align:center;
	}
	
	#n1{
		top:-48px;
	}
	
	#n2{
		top:24px;
	}
	
	#sub_but{
		position:relative;
		height:35px;
		width:80px;
		background-color:White;
		border-radius:10px;
		border:1px solid White;
		font-size:20px;
		font-family:'Pacifico',cursive;
		left:180px;
	}
	
	.cctext{
		display:inline;
		position:relative;
		font-family:'Pacifico',cursive;
		font-size:30px;
		top:0px;
		left:120px;
		color:White;
	}
	
	.err{
		position:absolute;
		left:515px;
		font-family:'Lobster',serif;
		font-size:11px;
		color:White;
	}
	
	#err3{
		top:58px;
	}
	
	#err4{
		top:126px;
	}
	
	#wlcm{
		position:relative;
		text-align:center;
		top:-50px;
		color:White;
		font-family: 'Lobster', sans-serif;
		font-size:80px;
	}
	
	#wcc{
		position:relative;
		font-family:'Pacifico',cursive;
		font-size:25px;
		top:-120px;
		text-align:center;
		color:White;
	}
	
	#nama{
		position:relative;
		font-family:'Pacifico',cursive;
		font-size:45px;
		top:-150px;
		text-align:center;
		color:White;
	}
</style>
</head>
<body>
<?php
	$fname=".";
	$lname=".";
	$usrname=" ";
	$pass="abcdabcd";
	$err3=null;
	$err4=null;
	$errcount=0;
	$zoop1="inline-block";
	$zoop2="none";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname="spDB";

	$conn = new mysqli($servername, $username, $password,$dbname);

	if ($conn->connect_error) {
    		die("Connection failed: " . $conn->connect_error);
	} 
	
	if($_SERVER["REQUEST_METHOD"]=="POST")	
	{
		$usrname=swipe($_POST["usrname"]);
		$pass=swipe($_POST["pass"]);
	}
	
	if(empty($usrname))
	{
		$err3="field cannot be empty";
		$errcount=1;	
	}
	
	if((preg_match('#[^a-zA-Z0-9]#', $pass)) || strlen($pass)<8)
	{
		$err4="Password must be 8-16 characters long<br>and must not contain special characters";
		$errcount=1;
	}
		
	if(($usrname!==" ")&&($errcount==0))
	{	
		$qry="SELECT * FROM DPpl WHERE username='$usrname' AND password='$pass'";
		$res=$conn->query($qry);
		$count=mysqli_num_rows($res);
		if($count==1)
		{
			$row=$res->fetch_assoc();
			$fname=$row['firstname'];
			$lname=$row['lastname'];
			$zoop1="none";
			$zoop2="block";
		}
		else
		{
			$err3="authentication failure";
			$errcount=1;
		}
	}
	
	function swipe($inpt)
	{
		$inpt=trim($inpt);
		$inpt=stripslashes($inpt);
		$inpt=htmlspecialchars($inpt);
		return $inpt;
	}
	
	$conn->close();
?>
<div id="mega_fade">
<div id="background_major">
	<div class="background_mini" id="triangle1"></div>
	<div class="background_mini" id="triangle2"></div>
	<div class="background_mini" id="smoothies"></div>
	<div class="background_mini" id="shoes"></div>
	<div class="background_mini" id="waves"></div>
	<div class="background_mini" id="squares"></div>
	<div class="background_mini" id="circle1"></div>
	<div class="background_mini" id="circle2"></div>
	<div class="background_mini" id="hexas"></div>	
</div>
<div class="elements" id="join">
<p class="cctext">Its been a while partner! Just log in quick and come back to the gang! We're havin a blast!</p>
</div>
<div class="elements" id="join2">
<p class="cctext">Club Creative</p>
</div>
<div class="elements" id="main_div">
	<div class="elements" id="forma" style="display: <?php echo $zoop1?>">                                                                  
		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post">
			<p class="field_description" id="n1">User Name<br></p>
			<input type="text" name="usrname" class="field" size="43" maxlength="20" required><br><br><br>
			<p class="field_description" id="n2">Password<br></p>
			<input type="password" name="pass" class="field" size="43" maxlength="16" required><br><br><br>
			<input type="submit" value="enter" id="sub_but"><br>
		</form>
	</div>

	<p id="err3" class="err"><?php echo $err3;?></p> 
	<p id="err4" class="err"><?php echo $err4;?></p> 

	<h1 id="wlcm" style="display: <?php echo $zoop2?>">Welcome</h1>
	<p id="wcc" style="display: <?php echo $zoop2?>">back to business!</p>
	<p id="nama" style="display: <?php echo $zoop2?>"><?php echo $fname." ".$lname;?></p>

</div>
</div>
</body>
</html>