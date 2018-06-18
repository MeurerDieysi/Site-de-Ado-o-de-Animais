<!DOCTYPE html>
<html>
<title>HousePets</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<body id="myPage">

    <!--MENU TOPO-->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="Home.php" class="w3-bar-item w3-button w3-padding-large">HOME</a>
           
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">ADOÃ‡ÃƒO <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <!--SUBMENU--> <a href="cães.php" class="w3-bar-item w3-button">CÃƒES</a>
                     <a href="gatos.php" class="w3-bar-item w3-button">GATOS</a>
                     <a href="filhotes.php" class="w3-bar-item w3-button">FILHOTES</a>
      </div>    
    </div>
    <a href="galeria.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">GALERIA DOS PETS</a>
    <a href="dicas.php" class="w3-bar-item w3-button w3-padding-large w3-hide-small">DICAS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">CONTATO</a>
    
    <div class="w3-dropdown-hover w3-hide-small">
           
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
          <a href="dicas.php" class="w3-bar-item w3-button">Merchandise</a>
        
      </div>
    </div>
    <a href=" Sobre.php" class="w3-padding-large w3-hover-red w3-hide-small w3-right">SOBRE</a>
  </div>
</div>


<!-- Image Header -->
<div class="w3-display-container w3-animate-opacity">
    <img src="/vc (1).jpg" alt="boat" style="width:100%;min-height:350px;max-height:600px;">
  <div class="w3-container w3-display-bottomleft w3-margin-bottom">  
    <button onclick="document.getElementById('id01').style.display='block'" class="w3-button w3-xlarge w3-theme w3-hover-teal" title="Go To W3.CSS">LEARN W3.CSS</button>
  </div>
</div>

<!-- Modal -->
<div id="id01" class="w3-modal">
  <div class="w3-modal-content w3-card-4 w3-animate-top">
    <header class="w3-container w3-teal w3-display-container"> 
      <span onclick="document.getElementById('id01').style.display='none'" class="w3-button w3-teal w3-display-topright"><i class="fa fa-remove"></i></span>
      <h4>Oh snap! We just showed you a modal..</h4>
      <h5>Because we can <i class="fa fa-smile-o"></i></h5>
    </header>
    <div class="w3-container">
      <p>Cool huh? Ok, enough teasing around..</p>
      <p>Go to our <a class="w3-text-teal" href="/w3css/default.asp">W3.CSS Tutorial</a> to learn more!</p>
    </div>
    <footer class="w3-container w3-teal">
      <p>Modal footer</p>
    </footer>
  </div>
</div>

<!-- Team Container -->
<div class="w3-container w3-padding-64 w3-center" id="team">
<h2>GATOS PARA ADOÃ‡ÃƒO</h2>


<div class="w3-row"><br>

<div class="w3-quarter">
    <img src="/gat (1).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>John & Tom</h3>
  <p>EstÃ£o a proura de um lar!!!</p>
</div>

<div class="w3-quarter">
    <img src="/gat (1).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Rebeca</h3>
  <p>Linda gatinha.</p>
</div>

<div class="w3-quarter">
    <img src="/g (2).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Ringo</h3>
  <p>Doce e amavÃ©l.</p>
</div>

<div class="w3-quarter">
    <img src="/gati (1).jpg" alt="Boss" style="width:45%" class="w3-circle w3-hover-opacity">
  <h3>Kaili</h3>
  <p>Esse bebe esto a procura de um lar!</p>
</div>

</div>
</div>

<!-- Work Row -->
<div class="w3-row-padding w3-padding-64 w3-theme-l1" id="work">

<div class="w3-quarter">
<h2>GATOS QUE FORAM ADOTADOS</h2>
<p> Nos da HousePets queremos sempre o melhor para nossos bichanos, sempre estamos de olho se eles estÃ£o sendo bem cidados pelos seus donos ou nÃ£o, pois eles sÃ£o gente como a gente e precisam ser tratados om muito amor e carinho.</p> 
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
    <img src="/me.jpg" alt="vera" style="width:100%">
  <div class="w3-container">
  <h3>Vera</h3>
  <p>Foi adotada pela Julia, que ao visitar nosso abrigo se encantou com o lindo olhar da vera,
  hoje em dia essas duas sÃ£o inseparaveis!</p>
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
    <img src="/de (1).jpg" alt="Cinque Terre" style="width:100%">
  <div class="w3-container">
  <h3>SAIMON</h3>
  <p>Que preguiÃ§a gostosa em sua nova casa!</p>
  
  </div>
  </div>
</div>

<div class="w3-quarter">
<div class="w3-card w3-white">
    <img src="/bb (1).jpg" alt="Monterosso" style="width:100%">
  <div class="w3-container">
  <h3>JIM</h3>
  <p>Adora cuidar do seu irmÃ£zinho!</p>
  </div>
  </div>
</div>

</div>

<!-- Container -->
<div class="w3-container" style="position:relative">
  <a onclick="w3_open()" class="w3-button w3-xlarge w3-circle w3-teal"
  style="position:absolute;top:-28px;right:24px">+</a>
</div>



<!-- Contact Container -->
<div class="w3-container w3-padding-64 w3-theme-l5" id="contact">
  <div class="w3-row">
    <div class="w3-col m5">
    <div class="w3-padding-16"><span class="w3-xlarge w3-border-teal w3-bottombar">Entre em contato</span></div>
      <h3>EndereÃ§o</h3>
      <p><i class="fa fa-map-marker w3-text-teal w3-xlarge"></i>Â Â Santo Ã‚ngelo - RS</p>
      <p><i class="fa fa-phone w3-text-teal w3-xlarge"></i>Â Â (55)33125002</p>
      <p><i class="fa fa-envelope-o w3-text-teal w3-xlarge"></i>Â Â housepets@gmail.com</p>
    </div>
    <div class="w3-col m7">
      <form class="w3-container w3-card-4 w3-padding-16 w3-white" action="/action_page.php" target="_blank">
      <div class="w3-section">      
        <label>Nome</label>
        <input class="w3-input" type="text" name="Nome" required>
      </div>
      <div class="w3-section">      
        <label>Email</label>
        <input class="w3-input" type="text" name="Email" required>
      </div>
      <div class="w3-section">      
        <label>Mensagem</label>
        <input class="w3-input" type="text" name="Mensagem" required>
      </div>  
      <button type="submit" class="w3-button w3-right w3-theme">ENVIAR</button>
      </form>
    </div>
  </div>
</div>

<!-- Google Maps -->
<div id="googleMap" style="width:100%;height:420px;"></div>
<script>
function myMap()
{
  myCenter=new google.maps.LatLng(41.878114, -87.629798);
  var mapOptions= {
    center:myCenter,
    zoom:12, scrollwheel: false, draggable: false,
    mapTypeId:google.maps.MapTypeId.ROADMAP
  };
  var map=new google.maps.Map(document.getElementById("googleMap"),mapOptions);

  var marker = new google.maps.Marker({
    position: myCenter,
  });
  marker.setMap(map);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
<!--
To use this code on your website, get a free API key from Google.
Read more at: https://www.w3schools.com/graphics/google_maps_basic.asp
-->

<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-theme-d1 w3-center">
  <h4>Redes Sociais</h4>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Facebook"><i class="fa fa-facebook"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Twitter"><i class="fa fa-twitter"></i></a>
  <a class="w3-button w3-large w3-teal" href="javascript:void(0)" title="Google +"><i class="fa fa-instagram"></i></a>
  <p>HousePets <a href="https://www.w3schools.com/w3css/default.asp" target="_blank"></a></p>

  <div style="position:relative;bottom:100px;z-index:1;" class="w3-tooltip w3-right">
    <span class="w3-text w3-padding w3-teal w3-hide-small">Voltar ao topo</span>   
    <a class="w3-button w3-theme" href="#myPage"><span class="w3-xlarge">
    <i class="fa fa-chevron-circle-up"></i></span></a>
  </div>
</footer>

<script>
// Script for side navigation
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
