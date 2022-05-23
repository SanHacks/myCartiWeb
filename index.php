<!DOCTYPE html>
<html>
<?php 
//$page = Index;
//$requested = $GET_[''];
?>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Carti</title>
    <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="fa/css/font-awesome.min.css">
		<link rel="apple-touch-icon" href="f7-icon-square.png">
		<link rel="icon" href="f7-icon.png">
  </head>
  <body>
  <div class="columns" >
  <div class="column" >
    <div class="box">
      <div class="columns is-desktop">
<nav class="navbar" role="navigation" aria-label="main navigation">

  <div id="navbarBasicExample" class="navbar-menu">
   
	<div class="navbar-start">
<div class="card">
  <footer class="card-footer">
    <div class="navbar-brand">
  

    <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
      <span aria-hidden="true"><  <a class="navbar-item" href="index.php">
      <img src="f7-icon-square.png" alt="mycart" >
    </a></span>
      <span aria-hidden="true"><a href="sales.php"  class="card-footer-item"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Sales</a></span>
      <span aria-hidden="true">    <a href="lists.php" class="card-footer-item"> <i class="fa fa-list" aria-hidden="true"></i>Lists</a></span>
      
      <span aria-hidden="true">	  <a href="signup.php" class="navbar-item">
        <div class="buttons">
  <button class="button is-success">Sign up</button>

</div>
      </a></span>
<span aria-hidden="true">	   <a href="login.php" class="navbar-item">
                <div class="buttons">
  <button class="button is-info">Sign in</button>


</div>
      </a></span>
    </a>
  </div>


    


  </footer>
</div>


   
	


    </div>
  <!---  <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-primary">
            <strong>Sign up</strong>
          </a>
          <a class="button is-light">
            Log in
          </a>
        </div>
      </div>
    </div> --->
  </div>
</nav>
<!---

<figure class="image is-30x30">
  <img class="is-rounded" src="https://bulma.io/images/placeholders/64x64.png">
</figure>

-->
</div>
    </div>
  </div>
</div>
<!---
    <section class="hero is-medium is-primary">
      <div class="hero-body">
        <div class="container">
          <div class="columns">
	
            <div class="column is-8-desktop is-offset-2-desktop">
              
              
            </div>
          </div>
        </div>
      </div>
    </section>
---->
	<?php	$strings = ",";
	
		$u = array('0','1', '2','3','4','5');

		$well = $u[rand(0,4)];

    //echo" <p class='buttons-row'>	<input type='submit' class='col button button-outline button-round button-raised ' name='submit' value='Search' style='background-color:$well' ></p>";
	
	?>
 <section class="section" style="background-image:url('background/<?php echo"$well";?>.jpg')">
      <div class="container">
        <div class="columns">
          <div class="column is-8-desktop is-offset-2-desktop">
            <div class="content">
			<?php 
				$strings = ",";
				$stuff = array('Cooking Oil', 'Milk','Diapers','Bread');
				$randomshops = $stuff[rand(0,3)]; ?>
				<form action='search.php' method='GET'>
            <div class="field is-grouped">
  <p class="control is-expanded">
   
	<input class="input is-success is-rounded" type="search"  " name="search" type="text" placeholder="Find a lowest prices e.g. '<?php echo"$randomshops"; ?>'">
  </p>
  <p class="control">
    <a class="button is-info" style="background-color:#8ec630">
      <i class="fa fa-search" aria-hidden="true"></i>
    </a>
  </p>


</div>

   		  <div class="columns is-variable is-0-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
  <div class="column">
      <label class="checkbox">
<img height='32px' width='32px'
		src='https://www.shoprite.co.za/_ui/responsive/theme-shoprite/images/favicon.ico' alt='Shoprite' /></br>
  <input type="checkbox" name='shoprite' value='Shoprite'>
</label>
  </div>
  <div class="column">
      <label class="checkbox">
 
<img height='32px' width='32px' 
		src='https://www.woolworths.co.za/images/static/favicon-32x32.png' alt='WOOLWORTHS' /></br>
  <input type="checkbox" name='WOOLWORTHS' value='WOOLWORTHS'>
 
</label>
  </div>
  <div class="column">
    <label class="checkbox">
<img height='32px' width='32px'
		src='https://www.pnp.co.za/pnpstorefront/_ui/responsive/theme-blue/images/pnp-favicon.ico' alt='Picknpay' /></br>
  <input type="checkbox" name='picknpay' value='Picknpay'>
 
</label>
  </div>
  <div class="column">
    <label class="checkbox">
<img height='32px' width='32px'  alt='Game'  src='https://www.game.co.za/favIcon.png'></br>
  <input type="checkbox" name='Game' value='Game'>
 
</label>
  </div>
  <div class="column">
    <label class="checkbox">
<img height='32px' width='32px'  alt='Checkers'  src='https://www.checkers.co.za/_ui/responsive/theme-checkers/images/favicon.ico'></br>
  <input type="checkbox" name='Checkers' value='Checkers'>
 
</label>
  </div>
   
</div>
<div class="columns is-variable is-0-mobile is-0-tablet is-3-desktop is-8-widescreen is-2-fullhd">
  <div class="column">
   <div class="select is-rounded is-primary">
   <select name='orderby' >
                  <option name='orderby'  value='price'>Price</option>
                  <option name='orderby' value='quality'>Quality</option>
                </select>  
				</div>
  </div>
  <div class="column">

  </div>
  <div class="column">

  </div>
  <div class="column">

  </div>
  <div class="column">
   <div class="select is-rounded is-primary">
<select  name='quantity' >
                  <option>Weight
				  <option value='100g'>100g</option>
				  <option value='250g'>250g</option>
				  <option value='500g'>500g</option>
				   <option value='750g'>750g</option>
				  <option value='1kg'>1kg</option>
				  <option value='2kg'>2kg</option>
				  <option value='2.5kg'>2.5kg</option>
				  <option value='5kg'>5kg</option>
				  <option value='10kg'>10kg</option>
				  <option value='12.5kg'>12.5kg</option>
				  <option value='20kg'>20kg</option>
				  <option value='25kg'>25kg</option>
				  <option value='50kg'>50kg</option>
				  </option>
				  
                  <option><em>Volume</em>
				  <option value='10ml'>10ml</option>
				  <option value='50ml'>50ml</option>
				  <option value='100ml'>100ml</option>
				  <option value='250ml'>250ml</option>
				  <option value='500ml'>500ml</option>
				  <option value='750ml'>750ml</option>
				  <option value='1litre'>1litre</option>
				  <option value='2litre'>2litres</option>
				  <option value='5litres'>5litres</option>
				  <option value='10litres'>10litres</option>
				  <option value='15litres'>15litres</option>
				  <option value='20litres'>20litres</option>
				  <option value='25litres'>25litres</option>
				  </option>
				        <option><em>Total</em>
						 <option value='6'>6</option>
				  <option value='10'>10</option>
				   <option value='10'>12</option>
				   <option value='15'>15</option>
				    <option value='20'>20</option>
					 <option value='24'>24</option>
					  <option value='30'>30</option>
					 <option value='25'>25</option>
				  <option value='50'>50</option>
				   <option value='60'>60</option>
				  <option value='100'>100</option>
				  <option value='250'>250</option>
				  <option value='500'>500</option>
				  <option value='750'>750</option>
		
				  </option>
                </select>
</div>
  </div>
   </form>
</div>
      </div>


        </div>
      </div>
    </section>

	 	  <button class='button  is-danger is-outlined'><span class='icon is-small'><i class='fa fa-cart-plus' aria-hidden=''true' ></i></span> <span>Random Picks</span></button>  
	<div class="box">

<?php
	 $algo=time();
			 	include "connect.php";
		
							$productimages = "SELECT *
                              FROM posts 
                
		ORDER BY Rand() 
		LIMIT  2
                             ";
							 $getimages=mysqli_query($conn,$productimages) or die(mysql_error());
			mysqli_close($conn);		
					
		
		
	if(mysqli_num_rows($getimages)>0){
			
		while ($rows = mysqli_fetch_array($getimages)) {

					$proims = $rows['image'];
					$getthiss = $rows['product'];
					$t_time = $rows['timestamp'];
					$price = $rows['price'];
					$shop = $rows['shop'];
					$oo = $rows['post'];
					$identification = $rows['id'];
					
 
	if($t_time < $algo-1900800){
									}else{
		
							

			echo"  
					<div class='tile is-ancestor'>
  <div class='tile is-parent'>
    <article class='tile is-child box'>
	<figure class='image is-128x128'>
  <img class='is-square' src='$proims'>
</figure>
	
       <a href='product.php?pid=$identification&product=$getthiss&shop=$shop'><span class='tag is-warning is-medium is-rounded'>R$price</span>
       <a href='product.php?pid=$identification&product=$getthiss&shop=$shop'> <p class='subtitle'>$oo</p>
     <a href='savetolists.php?id=$identification&product=$getthiss'> <span class='tag is-info is-rounded'>$shop</span></a></br></br>
     <a href='savetolists.php?id=$identification&product=$getthiss'>  <button class='button is-rounded is-success is-outlined'><span class='icon is-small'><i class='fa fa-plus' aria-hidden=''true' ></i></span> <span>add to list</span></button>  </a>
    </article>
  </div>
		"; 
	
  
									}
		}
		}
			 ?>

</div>
	

</div>
</div>
    <footer class="footer has-text-centered">
      <div class="container">
         <div class="columns">
          <div class="column is-8-desktop is-offset-2-desktop">
            <p>
              <strong class="has-text-weight-semibold">
           In Progress
              </strong>
            </p>
            <p style="margin-top: 1rem;">
             Made with love
            </p>
          </div>
        </div>
      </div>
    </footer>
    <script type="text/javascript" src="lib/main.js"></script>
    <script type="text/javascript" src="_Javascript/carti.js"></script>
  </body>
</html>
