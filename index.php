<?php
include 'incl/header.php';
include 'incl/nav.php';
?>
<div class="row">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/mt.jpg" class="mx-auto d-block" alt="Los Angeles" width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="img/ice.jpg" class="mx-auto d-block" alt="Chicago" width="100%" height="500px">
    </div>
    <div class="carousel-item">
      <img src="img/wat.jpg" class="mx-auto d-block" alt="New York" width="100%" height="500px">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

</div>
 <div class="card-columns row" style="margin-top:60px">
  <div class="card bg-white col-md-3" style="margin-bottom: 0px">
    <div class="card-body text-center">
    	<h4 class="card-title">Online Banking</h4>
      	<p class="card-text">A bank is a financial institution that accepts deposits from the public and creates credit. Lending activities can be performed either directly or indirectly through capital markets. Due to their importance in the financial stability of a country.</p>
      	<a href="login.php" class="card-link text-teal">Login here >></a>
    </div>
  </div>
  <div class="card bg-white col-md-3" style="margin-bottom: 0px">
    <div class="card-body text-center">
    	<h4 class="card-title">Registration</h4>
      <p class="card-text">Banking has been defined as “Accepting for the purpose of lending investment, of deposit of money from the public, repayable on demand order or otherwise and withdraw able by cheque, draft or otherwise.” ... The main functions.</p>
      <a href="login.php" class="card-link text-teal">Register here >></a>
    </div>
  </div>
  <div class="card bg-white col-md-3" style="margin-bottom: 0px">
    <div class="card-body text-center">
    	<h4 class="card-title">Personal Banking</h4>
      <p class="card-text">A bank is a financial institution that accepts deposits from the public and creates credit. Lending activities can be performed either directly or indirectly through capital markets. Due to their importance in the financial stability of a country.</p>
      <a href="#" class="card-link text-teal">See more >></a>
    </div>
  </div>
  <div class="card bg-white col-md-3" style="margin-bottom: 0px">
    <div class="card-body text-center">
    	<h4 class="card-title">Cards</h4>
      <p class="card-text">A bank is a financial institution that accepts deposits from the public and creates credit. Lending activities can be performed either directly or indirectly through capital markets. Due to their importance in the financial stability of a country.</p>
       <a href="#" class="card-link text-teal">See more >></a>
    </div>
  </div>
</div>

<div class="row" id="pics">
	<div class="col-md-1"></div>
	<div class="col-md-5 card" style="padding:0px">
		<img src="img/child2.png" width="100%">
	</div>
	<div class="col-md-5 card" style="padding:auto">
		<div class="card-body text-center">
    		<h4 class="card-title" style="margin-top:30px">Our Child Insurance Policy</h4>
      <p class="card-text">Our policy guarantees that accepts deposits from the public and creates credit. Lending activities can be performed either directly or indirectly through capital markets. Due to their importance in the financial stability of a country.</p>
      <a href="#" class="btn btn-primary">See more</a>
  </div>
	</div>
	<div class="col-md-1"></div>
</div>

<div class="row">
	<div class="col-md-3 card spac" style="padding:0px"><img src="img/couple1.png">
		<div class="card-body text-center">
    		<h4 class="card-title">Obtain a loan?</h4>
      		<p class="card-text">Make interest-free loan plans wih us.</p><br>
       		<a href="#" class="btn btn-primary">Apply</a>
       	</div>
	</div>
		<div class="col-md-3 card spac" style="padding:0px"><img src="img/woman1.png">
			<div class="card-body text-center">
	    		<h4 class="card-title">Joint Business Venture</h4>
	      		<p class="card-text">Start a business with friends.</p><br>
	       		<a href="#" class="btn btn-primary">See more</a>
       		</div>
	</div>
	<div class="col-md-3 card spac" style="padding:0px"><img src="img/friends.png">
			<div class="card-body text-center roun">
	    		<h4 class="card-title">Bank Online</h4>
	      		<p class="card-text">Enjoy access to your account at your convenience.</p>
	       		<a href="login.php" class="btn btn-primary">Login</a>
       		</div>
	</div>
</div>

<!-- <div class="row">
	<div class="col-md-6 card">1</div>
	<div class="col-md-6 card">2</div>
	
</div> -->

<?php
include 'incl/footer.php';
?>
