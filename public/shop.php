<?php require_once("../resources/config.php"); ?>

<?php include(TEMPLATE_FRONT . DS . "header.php") ?>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,200&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@1,200&family=Tajawal&display=swap');
    body{
      background-color:#659dbd;
    }
    
    
    h1{
      font-family: 'Exo 2', sans-serif;

    }

    p{
      font-family: 'Tajawal', sans-serif;
    }
    @import url('https://fonts.googleapis.com/css2?family=Nunito:ital@0;1&display=swap');

body {
  font-family: 'nunito';
  color: white;
  background-color: black;
  line-height: 1.4;
  width: 100%;
  
}
.stretch {
    width:100%;
    height:100%;
}
h1 {
  font-size: 1.4em;
  color: white;
}

h2 {
  font-size: 2em;
  color: white;
}

h3 {
  font-size: 3em;
  color: white;
}

a {
  color: white;
  text-decoration: none;
}

a:hover{ 
  text-decoration: underline;
}

#shop {
  margin-left: 10%;
  margin-top: -30%;
  display: flex; 
  justify-content: space-between;
  width: 75%;
}


#portfolio {
  margin-left: 27%;
  margin-top: 45%;
  display: flex; 
  justify-content: space-between;
  width: 50%;
}
#youtube-logo:hover {
  filter: brightness(150%);
  filter: drop-shadow(8px 8px 10px white);
}

#phone-logo:hover {
  filter: brightness(150%);
  filter: drop-shadow(8px 8px 10px white);
}
#storylayover {
  background-color: black;
  width: 100%;
  opacity: 0.9;
}

#background {
    width: 100%; 
    height: 100%; 
    position: fixed; 
    left: 0px; 
    top: 0px; 
    z-index: -1; /* Ensure div tag stays behind content; -999 might work, too. */
}

.submit { 
  width: 20%;
  padding:0.75em;
  background: royalblue;
  color: white;
  border-radius: 2px;
  cursor: pointer;
}

.email {
    display: block; 
    width: 18.5%;
    height: 2rem;
    padding: 0.25rem 0.75rem;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
  }

.text {
    display: block; 
    width: 18.5%;
    height: 2rem;
    padding: 0.25rem 0.75rem;
    background-color: #fff;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
  }

header {
  position: fixed;
  top: 0px;
  width: 100%;
  height: 19px;
  padding: 25px 0px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: black;
  opacity: 0.7;
  
  z-index:5;
}

@media only screen and (max-width: 500px){
  body {
  flex-wrap: wrap;
  }
  
  #video{
    position:fixed; 
    top:0px; 
    left:0px; 
    height:315;
    width:560;
  }
  
    </style>
<title><h1>Bikes R'us</h1></title>



    <!-- Page Content -->
    <div class="container">
    <div id="background">
  <img src="https://wallpaperaccess.com/full/1947423.jpg" />
</div>
<header id="header">

  <h1> Howlin' Company </h1>

  <img src="https://cdnb.artstation.com/p/assets/images/images/018/618/245/medium/joshua-redican-tw-rugby-ideas2.jpg?1560078775" alt="RHL-logo" border="0" id="header-img" width="100px" ; />
  <nav id="nav-bar">
    <h1> <u> Howlin'co </u> &nbsp; &nbsp; &nbsp;
      <a class="nav-link" href="#shop"> Shop </a> &nbsp; &nbsp; &nbsp;

      <a class="nav-link" href="#portfolio"> Portfolio </a> &nbsp; &nbsp; &nbsp;

      <a class="nav-link" href="#mystory"> Our Story </a> &nbsp; &nbsp;
    </h1>
  </nav>
</header>

<body>
  <div id="shop-text" style="width: 100%; height: auto; overflow: hidden">

    <img src="https://cdn.shopify.com/s/files/1/1003/7610/products/Banksy_Graffiti_Wallpaper_Split_Panel_Canvas_a_1400x.jpg?v=1578613632" alt="iVudang Shop" width="100%" ;>

  </div>

  <section id="shop" style="color: black;">
    <h2 style="color: blue;"> Web Templates </h2>
    <h2> Affiliates </h2>
    <h2 style="color: black;"> Portfolio </h2>
  </section>

  <section id="portfolio">

    <div id="youtube-logo" align="center" style="width: 100%; height: auto; overflow: hidden; align">

      <a id="Nazim_Codepen_a" target="_blank" href="https://codepen.io/nazimhdm">
        <img src="https://blog.codepen.io/wp-content/uploads/2012/06/Button-Fill-Black-Large.png" alt="codepen-logo" width="10%" ;>
      </a>
      <h2> Codepen Profile </h2>
      <p> See my other projects on codepen.io/nazimhdm</p>
    </div>

    <div id="phone-logo" align="center" style="width: 100%; height: auto; overflow: hidden; align">
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>
      <a id="Nazim_GitHub_a" target="_blank" href="https://github.com/ivudang">
        <img src="https://i.imgur.com/6nLiGv3.png" alt="phone-logo" width="10%" ;>
      </a>

      <h2> Webdev Projects </h2>
      <p> See my projects on github.com/Nazimhdm</p>
    </div>
  </section>

  <section id="mystory">
    <div id="storylayover" align="left" style="width: 100%; overflow: hidden">
      <iframe id="video" width="560" height="315" align="right" src="https://www.youtube.com/embed/x1LiSijUwsA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      <h3> Hi my name is Nazim </h3>

      <h2> <i> This is my entry for FCC Product Landing Page <br />
          Oh, and here is a video of a howling wolf, enjoy!</i> </h2>
    </div>
  </section>
</body>
<footer>
  <form id="form" action="https://www.freecodecamp.com/email-submit">
    <input id="text" type="text" name="text" placeholder="Have a question?" class="text" required />
    <br>
    <input id="email" type="email" name="email" placeholder="What email would you like to be responded to?" class="email" required />
    <br>
    <input id="submit" type="submit" value="Ask Now" class="submit" />
  </form>
</footer>
<!--Home-->
<div id="home" class="container-fluid">
	<div class="row home-info">
		<div class="col-md-4 about">
			<img  src="https://seeklogo.com/images/B/bike-store-logo-E13AB4C158-seeklogo.com.png" class="img-fluid" id="wolf-icon" style="width:50%;margin:auto;" alt="Alpha Era Logo">
		</div>
		<div class="col-md-8 about" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;">
  		<h1>Bike Store</h1>
			&nbsp;
			<p class="intro-text">Alpha Era Fitness is a community based gym inspiring a healthy life style through weight training and power lifting ideology. Join the Alpha Era!
</p>
		</div>
	</div>
</div>

<!--About-->
<div id ="about" class="container-fluid"style="margin-top:20%;">
  <div class="row" >
  <div id="about-text" class="col-lg-6 col-md-6 col-sm-12 light-text" style="box-shadow: rgba(0, 0, 0, 0.25) 0px 25px 50px -12px;">
		<h1 style="color:black;">Our Story</h1>
    <p>fhuweac quihdyiq iabhuw jfbhe ksnouaid aba fuieoe ahb abuhceba whbeida foo wowndk gthasn aslpwf aubuf ajdb wjuf boebwfoi abfeibwa coweoa weubwl plwo a duwb r ibiqc jbaubwe jbhcaoboe badbwe uawibeieuf uwenhfeu iowow gruot fenro.</p>
    </div>
    <div class="fill col-lg-6 col-md-6 hidden-phone">
			<img class="abt-pic" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQZS2lJKwUewfvjcBUzG-nvxVq673CZ8OL8IQ&usqp=CAU" style="width:100%;" alt="lifting weights">
    </div>
    </div>
</div>

<!--Body-->
    <!-- Page Features -->
    <div class="row text-center"style="margin-top:10%;">

<?php get_products_with_pagination(); ?>


</div>
<!-- /.row -->


<!--Contact-->


        <!-- Jumbotron Header -->
        <header>
            <h1>Shop</h1>
        </header>

        <hr>
        

        <!-- /.row -->

    

    </div>
    <!-- /.container -->


<?php include(TEMPLATE_FRONT . DS . "footer.php") ?>
