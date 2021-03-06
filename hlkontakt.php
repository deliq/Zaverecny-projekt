<head>
    <meta charset="UTF-8">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css.css">
</head>

<body style="background-image: url('rybnik.jpg');">
    
<div class="btn-group" role="group" aria-label="Basic example">
 <a href="login.php"><button type="button" class="btn btn-secondary" >PRIHLASIŤ</button>  </a>

</div>
    
    <h1>Oblastný rybársky zväz Projekt WD2
    <?php
    $_SESSION["datumDnes"] = date(" d.m.Y");
    echo "<br>" . $_SESSION["datumDnes"];
    ?>
    </h1>
    <div class="row">
		<ul class="nav nav-pills nav-fill col-md-12 mb-3">
			<li class="nav-item"><a class="nav-link" href="index.php">Domov</a></li>
			<li class="nav-item"><a class="nav-link" href="hlcenik.php">Ceník</a></li>
			<li class="nav-item"><a class="nav-link" href="hlclenovia.php">Členovia</a></li>
			<li class="nav-item"><a class="nav-link" href="hlkontakt.php">Kontakt</a></li>
		</ul>
	</div>

    <div class="ziadost">
        <div class="btn-group" role="group" aria-label="Basic example">
 <a href="formular.php"><button type="button" class="btn btn-secondary" >Žiadosť prihlásenia člena</button>  </a>

</div>
</div>



    <div id="nahrada_txt">
        <div>     
            <div v-if="jazyk" >
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input"   v-on:click="moznost=true" checked>
                <label class="custom-control-label" for="customRadioInline1">Prepinanie jazyka kliknutim</label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input"   v-on:click="moznost=false">
                <label class="custom-control-label" for="customRadioInline2">Prepinanie jazyka iba ukazanim kurzora</label>
                </div>
                </div>   
                <div v-else>
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline1" name="customRadioInline1" class="custom-control-input" v-on:click="moznost=true" checked>
                <label class="custom-control-label" for="customRadioInline1">Switch language by click </label>
                </div>
                <div class="custom-control custom-radio custom-control-inline">
                <input type="radio" id="customRadioInline2" name="customRadioInline1" class="custom-control-input" v-on:click="moznost=false" >
                <label class="custom-control-label" for="customRadioInline2">Switch language move of cursor </label>
                </div>
                </div>
        </div>
        <div>
             <div class="vlajky" v-if="moznost">
            <button  v-on:click="jazyk=true" > <img v-bind:src="svk" width="160" height="80" border="1px"> </button>
            <button  v-on:click="jazyk=false"> <img v-bind:src="eng"  width="160" height="80"> </button>
             </div>
            <div class="vlajky" v-else>
            <button  @mouseover="jazyk=true" v-on:click="nadpis=true"> <img  width="160" height="80" border="1px" v-bind:src="svk"> </button>
            <button  @mouseover="jazyk=false" v-on:click="nadpis=false" > <img   width="160" height="80" v-bind:src="eng"> </button>
            </div>
        </div>
        <div>
            <h1 class="nahrada_nadpis" style="font-size:20px" v-if="jazyk" > {{nadpis1}} </h1>
            <h1 class="nahrada_nadpis" style="font-size:20px" v-else> {{nadpis2}} </h1>
            <p class="nahrada_txt" v-if="jazyk">{{text}} </p>
            <p class="nahrada_txt" v-else>{{text1}}</p>
        </div>
        

    </div>



    
    
    <div class="kontakt_uprava">

    
  <div class="ramcek">
      <a class="samotny_text"> OBRZ wd2 Hurbanovo </a>
      <br />
    <a class="samotny_text"> Kostolná 24 </a>
      <br />
      <a class="samotny_text"> 947 01 Hurbanovo </a>
    <br />
      <a class="samotny_text"> Telefónne číslo : +421 123 456 789<br />
      Email : vavro7@gmail.sk</a>
    </div>
    </div>
    


    

    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>
<script src="vue.js"></script>
</body>
