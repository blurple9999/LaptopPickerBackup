<?php

session_start();

if (isset($_SESSION["user_id"])) {
    
    $mysqli = require __DIR__ . "/database.php";
    
    $sql = "SELECT * FROM user
            WHERE id = {$_SESSION["user_id"]}";
            
    $result = $mysqli->query($sql);
    
    $user = $result->fetch_assoc();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <meta charset="UTF-8">
    <link rel="stylesheet"  href= "style.css" />
</head>
<body><header>
		<a href= "#" class= "logo">logo</a>
        
<ul>
<?php if (isset($user)): ?>
        
        
        
        <li><a href="logout.php">Log out</a></li>

	<li><a href="index.html" class="active">Home</a></li>
	<li><a href="product.php">Product</a></li>
	<li><a href="about.html">About</a></li>
	<li><a href="contact.html">Contact</a></li>
</ul>
<?php else: ?>
        
        <p><a href="login.php">Log in</a> or <a href="signup.html">sign up</a></p>
        
    <?php endif; ?>

</header>
	<section>
		<img src="img/circuit.png" id="circuit" />
		<img src="img/bluesmoke.png" id="bluesmoke" />
		<h2 id="text"> Laptop Picker</h2>
		<a href="product.html" id="button">Product</a>
	</section>
	<script>
		Let .bluesmoke = document.getElementById('bluesmoke');
		Let .button = document.getElementById('button');
		Let .text = document.getElementById('text');
		window.addEventListener('scroll', function ())
		{
			Let .value = window.scrollY;
			bluesmoke.style.top = value * 1.25 + 'px';
			text.style.marginRight = value * 5 + 'px';
        }
	</script>

	<section>
	
		<div class="Pic">
			<span style="--i:1;"><img src="img/acer.png" alt="" /></span>
			<span style="--i:2;"><img src="img/alien.png" alt="" /></span>
			<span style="--i:3;"><img src="img/asus.png" alt="" /></span>
			<span style="--i:4;"><img src="img/microsoft.png" alt="" /></span>
			<span style="--i:5;"><img src="img/dell.png" alt="" /></span>
			<span style="--i:6;"><img src="img/hp.png" alt="" /></span>
			<span style="--i:7;"><img src="img/lenovo.png" alt="" /></span>
			<span style="--i:8;"><img src="img/razer.png" alt="" /></span>
			<span style="--i:9;"><img src="img/samsung.png" alt="" /></span>

			<hr />EXPLORE<hr />
		</div>
	</section>	

	<section class="service">
		<div class="row">
			<div class="service-col">
				<img src="img/laptops.png" />
				<div class="layer">
					<h3>ENDLESS POSSIBILITIES</h3>
				</div>
			</div>
			<div class="service-col">
				<img src="img/search.png" />
				<div class="layer">
					<h3>CUSTOM FILTERING</h3>
				</div>
			</div>
			<div class="service-col">
				<img src="img/laptop.png" />
				<div class="layer">
					<h3>ENHANCED EXPERIENCE</h3>
				</div>
			</div>
		</div>
	
	</section>
    

    
</body>
</html>
    
    
    
    
    
    
    
    
    
    
    