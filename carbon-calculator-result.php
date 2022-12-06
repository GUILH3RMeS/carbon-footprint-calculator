<?php
if($_POST){
include 'php/databaseConnection.php';
$email = $_POST['email'];
$birth_date = $_POST['birth_date'];
$generated_carbon_per_year = number_format(intval($_POST['generated_carbon_per_year']),0,'','.');
$family_generated_carbon = number_format(intval($_POST['family_generated_carbon']),0,'','.');
$generated_carbon_per_life = number_format(intval($_POST['generated_carbon_per_life']),0,'','.');
$trees_to_be_planted = $generated_carbon_per_year*6;
$meat_per_week = $_POST['meat_per_week'];
$electricity_use = $_POST['electricity_use'];
$green_sources = $_POST['green_sources'];
$waste_per_week = $_POST['waste_per_week'];
$kilometers_driver_per_week = $_POST['kilometers_driver_per_week'];
$use_of_gasoline = $_POST['use_of_gasoline'];
$collective_travels = $_POST['collective_travels'];
$kilometers_driven_by_bus = $_POST['kilometers_driven_by_bus'];
$kilometers_driven_by_subway = $_POST['kilometers_driven_by_subway'];
$hours_on_plane_per_year = $_POST['hours_on_plane_per_year'];
$peoples_in_your_house = $_POST['peoples_in_your_house'];

if($email != ''){
$result = mysqli_query($mysql, 
"INSERT INTO carbondatas(
email,
birth_date,
generated_carbon_per_year,
generated_carbon_per_life,
family_generated_carbon,
meat_per_week,
electricity_use,
green_sources,
waste_per_week,
kilometers_driver_per_week,
use_of_gasoline,
collective_travels,
kilometers_driven_by_bus,
kilometers_driven_by_subway,
hours_on_plane_per_year,
peoples_in_your_house) 
VALUES (
'$email',
'$birth_date',
'$generated_carbon_per_year',
'$generated_carbon_per_life',
'$family_generated_carbon',
'$meat_per_week',
'$electricity_use',
'$green_sources',
'$waste_per_week',
'$kilometers_driver_per_week',
'$use_of_gasoline',
'$collective_travels',
'$kilometers_driven_by_bus',
'$kilometers_driven_by_subway',
'$hours_on_plane_per_year',
'$peoples_in_your_house')");
}

}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>result calculator</title>
  <link rel="stylesheet" href="css/style_result.css">
  <style>
  @font-face {
    font-family: Agrandir;
    src: url('fonts/Agrandir-Regular.otf');
  }
  
  body {
    margin: 0px;
    font-family: Agrandir;
    text-align: center;
  }
  
  /*-----------------------*/
  
  @media (min-width:0px) {
  footer img{
      max-width: 7rem;
    }
    header{
      padding: 1rem 0rem 0rem 0rem;
      text-align: center;
      background-color: black;
    }
      #logotipo_header{
        max-width: 15rem;
    }
    nav,ul{
      padding: 0px;
      display: inline-flex;
      list-style-type: none;
      color: #fff;
      align-items: center;
      margin:0px;
    }
    li{
      font-size: 6pt;
      margin: 2px;
      white-space: nowrap;
    }
    .li{
      color: #fff;
      text-decoration: none;
    }
    #donate {
    background-color: #F48300;
    color: black;
    border-radius: 2px;
    padding: 0.2rem 1rem;
    font-weight: bolder;
    }
    #tonners_result{
        margin: auto;
        text-align: center;
        margin-top: 3rem;
    }
    .flex{
      display: flex;
  justify-content: center;
  flex-wrap: nowrap;
  flex-direction: column;
  align-content: center;
  width: 100%;
  align-items: center;
  margin-bottom:1rem;
    }
    .container{
      width: 18rem;
      margin: 5px 0px;
    }
    h3{
        margin: 0px 5rem;
        background-color: #ea9000;
        color: #744700;
        font-size: 12pt;
    }
    h1{
        white-space: nowrap;
        font-size: 12pt;
        font-weight: normal;
    }
    h2{
        font-size: 30pt;
        margin: 0px;
    }
    p{
        margin: 0px;
        font-weight: bold;
    }
    span{
        color: #ea9000;
    }
    #button_seemorebelow{
        font-weight: bold;
        border: none;
        background-color: #ea9000;
        color: #744700; 
        height: 3rem;
        margin: 1.5rem 0rem;
      width: 16rem;
      font-size: 16pt;
    }
    #sustain_results{
      display:block;
      margin: 4rem 0rem;
    }
    .flex_2{
    width: 99%;
    display: flex;
    align-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    }
    .img{
      width: 5rem;
    }
    #save_planet{
      border-radius: 30px;
      background-color: black;
      color: white;
      width: 20rem;
        font-size: 12pt;
        text-decoration: none;
        font-weight: bold;
        white-space:nowrap;
        padding: 1.5rem 4rem
    }
    #sustain_title{
      margin: 2rem 0rem;
    }
    .container_2{
      flex: 50%;
      margin: 1rem 0rem;
    }
    #titlelarge{
      white-space: pre-wrap;
      font-size: 14pt;
    }
  }
  
  /*-----------------------*/
  
  @media (min-width:380px) {
      #logotipo_header{
        max-width: 15rem;
    }
    li{
      font-size: 10px;
      margin: 2px;
      white-space: nowrap;
    }
    #donate {
    background-color: #F48300;
    color: black;
    border-radius: 2px;
    padding: 0.2rem 1rem;
    font-weight: bolder;
    }
    #tonners_result{
      margin-top: 2rem;
    }
    .flex{
      display: flex;
  justify-content: center;
  flex-wrap: nowrap;
  flex-direction: column;
  align-content: center;
  width: 100%;
  align-items: center;
  margin-bottom:1rem;
    }
    h3{
        margin: 0px 5rem;
    }
    .container{
      width: 18rem;
      margin: 5px 0px;
    }
    p{
        white-space: nowrap;
    }
    #button_seemorebelow{
      margin: 2.95rem 0rem;
      width: 20rem;
    }
  }
  
  /*-----------------------*/
  
  @media (min-width:480px) {
      #logotipo_header{
        max-width: 18rem;
        
    }
    h3{
        margin: 0px 42%;
    }
    li{
      font-size: 12px;
      margin: 3px;
    }
    #donate {
    background-color: #F48300;
    color: black;
    border-radius: 2px;
    padding: 0.2rem 1.8rem;
    font-weight: bolder;
    }
    .flex{
      display: flex;
  justify-content: center;
  flex-wrap: nowrap;
  flex-direction: column;
  align-content: center;
  width: 100%;
  align-items: center;
  margin-bottom:1rem;
    }
    .container{
      width: 25rem;
      margin: 5px 0px;
    }
    h3{
        margin: 0px 8rem;
    }
    p{
        white-space: nowrap;
    }
    #button_seemorebelow{
      margin: 1.9rem 0rem;
      width: 20rem;
    }
  
  }
  
  /*-----------------------*/
  
  @media (min-width:600px) {
    #logotipo_header{
        max-width: 18rem;
    }
    li{
      font-size: 15.5px;
      margin: 4px;
    }
      .flex{
        display: flex;
    justify-content: center;
    flex-wrap: nowrap;
    flex-direction: column;
    align-content: center;
    width: 100%;
    align-items: center;
    margin-bottom:1rem;
      }
    #donate{
    background-color: #F48300;
    color: black;
    border-radius: 2px;
    padding: 0.2rem 2rem;
    font-weight: bolder;
    }
    .container{
      width: 25rem;
      margin: 5px 0px;
    }
    h3{
        margin: 0px 8rem;
    }
    p{
        white-space: nowrap;
    }
    #button_seemorebelow{
      margin: 1.5rem 0rem;
      width: 20rem;
      font-size: 19pt;
    }
    #sustain_results{
      display: block;
      margin: 2rem 0rem;
    }
    .flex_2{
    width: 99%;
    display: flex;
    align-content: center;
    flex-wrap: wrap;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    }
    .img{
      width: 10rem;
    }
    #save_planet{
      border-radius: 30px;
      background-color: black;
      color: white;
      font-size: 20pt;
        width: 25rem;
        padding: 1rem 4rem;
        text-decoration: none;
        font-weight: bold;
        white-space:nowrap;
    }
    #sustain_title{
      margin: 1rem 0rem;
    }
    .container_2{
      flex: 50%;
      margin: 1rem 0rem;
    }
    #titlelarge{
      white-space: pre-wrap;
      font-size: 30pt;
    }
  }
  
  /*-----------------------*/
  
  @media (min-width:801px) {
    #logotipo_header{
        max-width: 21rem;
    }
    li{
      font-size: 18px;
      margin: 8px;
    }
    #donate {
    background-color: #F48300;
    color: black;
    border-radius: 2px;
    padding: 0.2rem 2rem;
    }
    #tonners_result{
      display: block;
      margin: 2rem 0rem 8rem 0rem;
    }
    #sustain_results{
      display: block;
      margin: 3rem;
    }
    .flex{
      display: flex;
      align-items: flex-end;
      justify-content: space-around;
      flex-wrap: nowrap;
      flex-direction: row;
      align-content: center;
      width: 100%;
      margin-top: 3rem;
    }
    .container{
        margin: 0px 1rem;
        width: 14rem;
    }
    .container_p{
        margin: 0px;
    }
    h1{
      margin-top: 3rem;
    }
    h3{
        margin: 0px 2rem;
        font-size: 16pt;
    }
    h2{
        font-size: 48pt;
    }
    #button_seemorebelow{
        width: 20rem;
        margin-top: 5rem;
        font-size: 18pt;
    }
  .flex_2{
    width: 99%;
    display: flex;
  align-content: center;
  justify-content: center;
  align-items: center;
  flex-wrap: nowrap;
  flex-direction: row;
  margin-bottom: 1.5rem;
  }
  .img{
    width: 10rem;
  }
  #save_planet{
    border-radius: 30px;
    background-color: black;
    color: white;
    width: 20rem;
        margin-top: 5rem;
        font-size: 18pt;
        text-decoration:none;
  }
  #sustain_title{
    margin: 3rem 0rem;
  }
  #stylelarge{
    margin:0rem 9rem 0rem 0rem;
  }
  #titlelarge{
    margin:2rem 0rem; font-weight: bold; font-size: 24pt;
  }
  }
  
  /*-----------------------*/
  
  @media (min-width:1024px) {
    header{
      width: 99.99%;
      display: inline-flex;
      align-items: flex-end;
      justify-content: space-between;
      align-items: flex-end;
    }
    #logotipo_header{
        max-width: 21rem;
    }
    li{
      font-size: 11pt;
      margin: 8px;
    }
    .li{
      color: #fff;
      text-decoration: none;
    }
    .li:hover{
      color: #F48300;
  }
    #donate {
    background-color: #F48300;
    color: black;
    border-radius: 2px;
    padding: 0.2rem 2rem;
    }
    #tonners_result{
      display: block;
      margin: 4rem 0rem 10rem 0rem;
    }
    #sustain_results{
      display: block;
      margin: 5rem 0rem 0rem 0rem;
    }
    footer img{
      max-width: 7rem;
    }
    .flex{
      width: 99%;
      display: flex;
      align-items: flex-end;
      flex-wrap: nowrap;
      flex-direction: row;
      align-content: center;
      justify-content: center;
    }
    .container{
      width: 30rem;
    }
    h3{
        background-color: #ea9000;
        text-align: center;
        margin: 0rem 4rem;
        font-size: 18pt;
    }
    h2{
        font-size: 48pt;
        font-weight: bold;
    }
    h1{
        white-space: nowrap;
        font-size: 18pt;
        font-weight: normal;
    }
    p{
        margin: 0px;
        font-size: 18pt;
        font-weight: bold;
        white-space: nowrap;
    }
    #button_seemorebelow{
      font-size: 24pt;
        width: 25rem;
        padding: 0.5rem 4rem;
    }
    .flex_2{
      width: 99%;
      display: flex;
    align-content: center;
    justify-content: center;
    align-items: center;
    flex-wrap: nowrap;
    flex-direction: row;
    margin-bottom: 1.5rem;
    }
    .img{
      width: 10rem;
    }
    #save_planet{
      border-radius: 30px;
      background-color: black;
      color: white;
      font-size: 24pt;
        width: 25rem;
        padding: 0.5rem 4rem;
        text-decoration: none;
        font-weight: bold;
    }
    #sustain_title{
      margin: 3rem 0rem;
    }
    #stylelarge{
      margin:0rem 0rem 0rem 0rem;
    }
    #titlelarge{
      margin:2rem 0rem; font-weight: bold; font-size: 24pt;
    }
  }
  </style>
</head>
<body>
<header>
    <img src="Materiais calculadora/ pré calculadora - materiais/Header/Logotipo_Hourglass_SemFundo-02.png" alt=""
      srcset="" id="logotipo_header">
    <nav>
      <ul>
          <a href="https://hourglassnow.com/" class="li"><li style="font-weight: bold;" id="home">Home</li></a>
           <a href="https://hourglassnow.com/category/global-warming/" class="li"><li>Global warming</li></a>
           <a href="https://hourglassnow.com/category/news-climate-change/" class="li"><li>NEWS</li></a>
            <a href="https://hourglassnow.com/category/climate-change/" class="li"><li>CLIMATE CHANGE</li></a>
           <a href="https://hourglassnow.com/about-us-hourglass/" class="li"><li>ABOUT US</li></a>
            <a href="https://hourglassnow.com/carbon-footprint-calculator/sales.html" class="li"><li id="donate">Donate</li></a>
        </ul>
    </nav>
  </header>
    <div id="tonners_result">
      <h1>CARBON FOOTPRINT RESULTS</h1>
      <div class="flex">
        <div id="emission_per_year" class="container" style="margin-top: 10px">
            <h2>
                <?php
                    echo($generated_carbon_per_year);
                ?>
            </h2>
            <h3>tonnes</h3>
            <div class="container_p">
            <p style="margin-top: 10px;">Your <span class="co2">Co2</span> emission</p>
            <p>per year</p>
        </div>
        </div>
        <div id="emission_per_life" class="container">
            <h2>
                <?php
                    echo($generated_carbon_per_life);
                ?>
            </h2>
            <h3>tonnes</h3>
            <div class="container_p">
            <p style="margin-top: 10px;">Your projected <span class="co2">Co2</span></p>
            <p>emission during your life</p>
        </div>
        </div>
        <div id="family_emission_per_year" class="container">
            <h2>
                <?php
                    echo($family_generated_carbon);
                ?>
            </h2>
            <h3>tonnes</h3>
            <div class="container_p">
            <p style="margin-top: 10px;">Your family <span class="co2">Co2</span></p>
            <p>emission per year</p>
        </div>
        </div>
        </div>
        <button id="button_seemorebelow" onclick="seebelow()">See more below</button>
    </div>


    <div id="sustain_results">
      <h1 id="sustain_title">CARBON FOOTPRINT RESULTS</h1>
      <p id="titlelarge">To Sustain your lifestyle it would be necessary:</p>
      <div class="flex_2">
      <div class="container_2">
      <div style="width:100%;display:flex;">
      <div class="container_2">
        <img src="Materiais calculadora/página de venda/tree.png" alt="tree" srcset="" class="img">
        </div>
        <div class="container_2">
        <p>To plant</p>
        <h2>
        	<?php 
        		echo($trees_to_be_planted);
        	?>
        </h2>
        <p>Trees per year</p>
      </div>
      </div>
      </div>
      <div class="container_2">
      	<div style="width:100%; display:flex;">
      <div class="container_2">
      <img src="Materiais calculadora/página de venda/planet-earth.png" alt="planet-earth" srcset="" class="img">
      </div>
      <div class="container_2">
        <p>To exist</p>
        <h2>5</h2>
        <p>Planets</p>
        </div>
      </div>
      </div>
      </div>
       <a href="sales.html" id="save_planet">How you can save the planet NOW</a>
       <div style="height:2rem"></div>
    </div>
    <script>
    	function seebelow(){
        	window.scroll(0, 10000)
        }
    </script>
</body>
</html>