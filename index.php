<!DOCTYPE>
<?php

include("functions/functions.php");

?>

<html>
      <head>
	       <title>My Online store</title>
		   
	  <link rel = "stylesheet" href="styles/style.css"  media="all" />
	  </head>
	  
<body>
     
	 <!-- main wrapper starts from here-->
     <div  class= "main_wrapper">
	     
		  <!-- header wrapper starts from here-->
	     <div  class="header_wrapper">
		 
		     <img id = "logo" src="images/ShuffleWay.jpg" /> 
		 
		 </div>
		 <!-- header wrapper starts from here-->
		 
		 <!-- navigation starts from here-->
		 <div class="menubar">
               <ul id="menu">
			      <li><a href="#"> Home </a></li>
				  <li><a href="#"> All product </a></li>
				  <li><a href="#"> My Account </a></li>
				  <li><a href="#"> Sign up</a></li>
				  <li><a href="#"> Shopping Card</a></li>
				  <li><a href="#"> Contact Us </a></li>
			   
			   
			   <div id="form">
			        <form method="get" action="result.php" enctype="multipart/form-date">
					     <input type="text" name="user_query" placeholder="search a product"/>
						 <input type="submit" name="search" value= "search"/>
					</form>
			   </div>
			  </ul>
		 </div>
		 <!-- navigation end here-->
		 
		 <!-- content wrapper starts from here-->
		 <div class="content_wrapper">
		 
		  <!--sidebar area starts here -->
		  <div id="sidebar">
		     <div id="sidebar_title">Category</div>
			 <ul id="cats">
			    
				<!--get categories information from the database -->
				<?php getCats(); ?>
			 
			 </ul>
			 
		  <div id="sidebar_title">Brands</div>
			 <ul id="cats">
			    
				<li><a href ="#">HP</li>
				<li><a href ="#">Samsung</li>
				<li><a href ="#">SONY </li>
				<li><a href ="#">LG</li>
				<li><a href ="#">Apple</li>
			 
			 </ul>
		  
		  </div>
		  <!--sidebar area starts here -->
		   
		  <div id="content_area">This is content area</div>
		 
		 </div>
		  <!-- content wrapper ends here-->
		 
		
		 
		 <div id="footer">This is footer</div>	 
	 
	 </div>

</body>

</html>