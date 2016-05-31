<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="assets/css/accordion.css">
<style>
    .container{
        height: 100%;
        width: 100%;
        position: absolute;}
    .accordian{
        position: relative;
        z-index: 1}
    .titulo{
        position: relative;
        text-align: center;
        margin-top: -230px;
        z-index: 10}
    h1{color: #fff}
    @media screen and (min-width:320px) {
        .container:{
            display: none;
        }
     }
    @media screen and (min-width:480px) {
        .container:{
            display: none;
        }
     }
    @media screen and (min-width:600px) {
        .container:{
            display: none;
        }
     }
    @media screen and (min-width:768px) { #container:{
            display: visible;
        }
    }
    @media screen and (min-width:992px) { #container:{
            display: visible;
        }
    }
</style>
<div id="container" class="container">
    <div class="accordian" style="z-index:1;">
        <ul>
            <li>
               
                <a href="/jovem">
                    <img src="./img/Perfil1.jpg"/>
                </a>
            </li>
            
            <li>
          
                <a href="/mulher">
                    <img src="./img/Perfil2.jpg"/>
                </a>
            </li>
            <li>
          
                <a href="/geral">
                    <img src="./img/Perfil3.jpg"/>
                </a>
            </li>
            <li>
          
                <a href="/idoso">
                    <img src="./img/Perfil4.jpg"/>
                </a>
            </li>
        </ul>
    </div>
    <div class="titulo">

        <h1 style="font-size: 9em;">#somos<span>sbc</span></h1>
        <!-- <h1 style="font-size: 8em;"><span>na vila sésamo</span>?</h1> -->
    </div>
</div>

