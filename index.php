<?php 
include('header.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="es-ES" xml:lang="es-ES">
    <head>
        <title>Ñande Cine</title>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />      
        <link rel="stylesheet" href="css/sidebar.css" type="text/css" />		
        <link rel="stylesheet" href="css/rightSidebar.css" type="text/css" />	
        <link rel="stylesheet" href="css/azul_marino.css" type="text/css" />
        <link rel="stylesheet" href="css/jquery.ui.tabs.css" type="text/css" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Belanosima&display=swap" rel="stylesheet">

        <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+TC:wght@700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:wght@700&display=swap" rel="stylesheet">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="css/common.css" type="text/css" />
    <style>
        .textoPrincipal{
            font-family: 'Belanosima', sans-serif;
        }

        .btnRedes{
            font-family: 'Oswald', sans-serif;
        }
        .btnRedesFac:hover{
            background-color: blue;
            border:solid 2px red;
            color:red;
        }
        .txtBarraNav{
            color:white;
            font-family: 'Noto Sans TC', sans-serif;
        }

    </style>
    </head>
    
    <body>
        <div id="container">           
            <div id="body">
                <div id="sidebar">
                    <div id="rightSidebar">                                        
                        <div class="block custom" id="customblock-Redes-sociales" style="display:flex;justify-content: center;text-align: center;border:none;background-color:white;" >
                            <div class="d-grid gap-2 col-6 mx-auto">
                                <button class="btn btn-primary" type="button" style="background: #3b5998;border:none;"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                    </svg>Facebook</button>
                                <button class="btn btn-primary" type="button" style="background-color:  #00acee;border:none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
                                    <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"/>
                                    </svg>Twitter</button>
                                <button class="btn btn-primary" type="button" style="background-color:#DD2A7B;border:none;">Instagram</button>
                              </div>
                                                        
                        </div>	 
                        <span>Buscador de Google:</span>
                        <div class="divinput" style="border-color: #00cc00; margin-left: 16px">					     
                            <script async src="https://cse.google.com/cse.js?cx=017322060444985110371:0flnd3xrqqk" ></script>    
                        </div>
                        <br><br><br>

                        <div class="card">
                            <div class="card-header" style="font-size:15px;background-color: #00249a;font-family: 'Noto Sans TC', sans-serif;text-align:center;color:white;">
                                Vota por tu favorita:
                            </div>
                            <div class="card-body">
                                <ul>
                                    <li><span style="font-size: small;"><input type="radio" name="directores" value="7cajas" style="justify-content: center;"/>7 Cajas</span></li>
                                    <li><span style="font-size: small;"><input type="radio" name="directores" value="losbuscadores" />Los Buscadores</span></li>
                                    <li><span style="font-size: small;"><input type="radio" name="directores" value="hamaca" />Hamaca Paraguaya</span></li>
                                    <li><span style="font-size: small;"><input type="radio" name="directores" value="latas" />Latas Vacias</span></li>   
                                    <li><span style="font-size: small;"><input type="radio" name="directores" value="guarani" />Guaraní</span></li> 
                                    <li style="text-align: center"></li>
                                </ul>
                              <a href="#" class="btn btn-primary" onclick="alert ('Gracias por votar.')" style="display:flex;color:white;text-align: center;justify-content: center;" >Votar</a>
                            </div>
                        </div>

                       <br><br>	 <br><br>	 <br><br>	 <br><br>	
                        <div class="block custom" id="customblock-Indexados-en" style="border:none">
                            <div id="sidebarIndexadaen"><span class="blockTitle" style="background-color: #00249a;font-family: 'Noto Sans TC', sans-serif;text-align:center">Recomendadas:</span>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><a href="https://www.youtube.com/watch?v=tPSLRgKpF_Q" title="Leal" target="_blank"><img  style="padding:3px" src="img/leal.jpg" alt="scholar"  /></a></td>
                                            <td><a href="https://www.youtube.com/watch?v=rt04RzIWMFc" title="Ore Ru" target="_blank"><img style="padding:3px" src="img/oreru.png" alt="bvs"  /></a></td>
                                            <td><a href="https://vimeo.com/210929769" title="Un Suelo Lejano" target="_blank"><img style="padding:3px" src="img/unsuelolejano.jpg" alt="scielo"  /></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.youtube.com/watch?v=T3_ivPpobLI" title="Los Buscadores" target="_blank"><img style="padding:3px" src="img/losbuscadores.jpg" alt="latindex1" /></a></td>
                                            <td><a href="https://www.youtube.com/watch?v=t1ax_XInBLE" title="7 Cajas" target="_blank"><img style="padding:3px" src="img/7cajas.jpg" alt="secimed"  /></a></td>
                                            <td><a href="https://www.youtube.com/watch?v=9S5ijb0Kbpg" title="Luna de Cigarras" target="_blank"><img style="padding:3px" src="img/lunadecigarras.jpg" alt="medigraphic"  /></a></td>
                                        </tr>
                                        <tr>
                                            <td><a href="https://www.youtube.com/watch?v=bHXlZ5P3hRc" title="Mangoré" target="_blank"><img style="padding:3px"  src="img/mangore.jpg" alt="imbiomed"  /></a></td>
                                            <td><a href="https://www.youtube.com/watch?v=5GPy6rWfBP0" title="Cerro Corá" target="_blank"><img style="padding:3px" src="img/cerrocora.jpg" alt="gfmer"  /></a></td>
                                            <td><a href="https://www.youtube.com/watch?v=XGjuCbQ-gd4" title="Felices los que Llorán" target="_blank"><img style="padding:3px" src="img/feliceslosquelloran.jpg" alt="WorldCat"  /></a></td>
                                        </tr>   
                                    </tbody>
                                </table>
                            </div>
                        </div>	
                        <div class="block" id="sidebarRTArticleTools" style="border:none">
                            <span class="blockTitle" style="background-color: #00249a;font-family: 'Noto Sans TC', sans-serif;text-align:center">Entrevistas</span>
                            <div class="articleToolItem">
                                <iframe width="320" height="240" src="https://www.youtube.com/embed/hxYRdTmUtS8" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>                                                    
                            </div>                                            
                        </div>
                        <div class="block custom" id="customblock-Sitios-de-Inter-s" style="border:none">
                            <div id="sidebarInformation">
                                <span class="blockTitle" style="background-color: #00249a;font-family: 'Noto Sans TC', sans-serif;text-align:center">Sitios De Streaming Oficiales</span>
                            </div>
                                <p><a href="https://www.netflix.com/py/" target="_blank"><span style="font-size: x-small;"><img style="display: block; margin-left: auto; margin-right: auto;" src="img/netflix.jpg"  width="180" height="75" /></span></a></p>
                                <p><a href="https://www.primevideo.com/?ref_=dvm_pds_amz_PY_kc_s_g|m_4ubLxYmkc_c292950245963" target="_blank"><span style="font-size: x-small;"><img style="display: block; margin-left: auto; margin-right: auto;" src="img/amazonprimevideo.jpg"  width="180" height="80" /></span></a></p>
                                <p><a href="https://www.hbolatam.com/hbogo" target="_blank"><span style="font-size: x-small;"><img style="display: block; margin-left: auto; margin-right: auto;" src="img/hbogo.png"  width="180" height="80" /></span></a></p>
                        </div>                       
                    </div>
                    <div id="main">
                        <div id="breadcrumb">
                            <a href="#" target="_parent"></a>
                            <a href="#" target="_parent"></a>	                                               
                        </div>
                        <div id="content">
                            <h1 class="textoPrincipal" style="color: #000; text-align: center;font-family: 'Belanosima', sans-serif;font-size: 30px;" >Bienvenidos a Ñande Cine</h1>                                               
                            <h1 style="color: #000; text-align: center;font-family: 'Belanosima', sans-serif;font-size: 30px;">Breve Historia del Cine en Paraguay</h1>                                          
                            <div>
                                <p style="font-size:15px;line-height: 1.5em;  text-align: justify;">
                                    Un lluvioso sábado 2 de junio de 1900 por primera vez un cinematógrafo proyectó imágenes en movimiento ante un público paraguayo. El periódico El Paraguayo registra este histórico acontecimiento, en su sección Sociales, que tuvo lugar en el Teatro Nacional, ubicado en el predio donde actualmente se encuentra el Teatro Municipal de Asunción.
                                    “El aparato que esta noche exhibirá el señor Parravicini pudo funcionar antes de ahora, si se hubiese limitado a la luz, sistema Drumont, que él trae consigo. Más habiendo conseguido aquí, un dínamo de luz eléctrica, cuyo poder luminoso alcanza a 120 volts, el doble que el primero, fue menester postergar unos días”, reporta el anuncio de la función inaugural.
                                    El Paraguayo informa que esa noche se iban a proyectar las vistas, que entonces eran grabaciones breves de diversas situaciones cotidianas principalmente de Francia, tituladas: “Juego de niños”, “Artistas de circo”, “Jardín de plantas en París”, “Un taller de carpintería”, “Entrada humorística por célebres payasos”, “El transformista Casthor”, “Los baños de Diana en Milán”, “Coraceros cruzando el río Saone”, “Una domada en México”, “Maniobra de la artillería española”.                                               
                                    El programa incluyó la comedia “En las garras de mi suegra”, a cargo de la compañía teatral del argentino Florencio Parravicini (1876-1941), que vivió en París (Francia), y que se convertiría en un popular actor en las películas porteñas de las primeras décadas del siglo pasado. Al respecto, en el libro biográfico “Mangoré - Vida y obra de Agustín Barrios” (1994), de Sila Godoy y Luis Szarán, se lee: “Barrios se vinculó también al célebre actor Parravicini, a quien conoció en mayo de 1900 cuando la compañía que dirigía el actor se presentó en el Teatro Nacional de Asunción.”
                                    En lo que podría considerarse como la primera reseña de cine en Paraguay, en su edición del 3 de junio de 1900, El Paraguayo describe: “A pesar de la lluvia, que vino a sorprender a última hora, numerosa concurrencia asistió anoche al teatro, atraída, más que todo, por la novedad del cinematógrafo, que venía anunciándose desde el comienzo de la temporada”.
                                    “La réplica de la chistosa comedia, titulada ‘En las garras de mi suegra’, proporcionó merecidos aplausos a todos los artistas, que la desempeñaron con éxito halagüeño en todas sus partes”, continúa. “Después, hubo un intervalo para probar la fuerza de la luz eléctrica, durante el cual la policía estacionada en la galería, demostró estar demás, pues no supo impedir el escándalo que aquel público insolente promoviera con sus gritos y silbidos. Silbidos y gritos que rayaban en alaridos salvajes, cada vez que se extinguía la luz. De desear fuera que tales bochinches no se repitan en lo sucesivo, porque, sobre ser molesto al restante público, habla muy poco en favor del servicio policial”.
                                    “Al fin, apareció aquello. Es decir, el cinematógrafo. Las vistas son bonitas, pero no muy distintas por la poca luz que se les da. Es de suponer que este pequeño inconveniente podrá obviarse fácilmente, porque, claro está, la primera vez, no podrá exigirse mirabilia. Por lo demás, bien”, concluye la publicación.
                                    En el continente, Asunción tuvo una tardía llegada del cine. El libro “El nuevo cine argentino (1995-2010): Vinculación con la industria cinematográfica local e internacional y la sociocultura contemporánea”, de Osvaldo Mario Daicich”, señala: “Luego de la primera proyección de los hermanos Lumière, en diciembre de 1895 en París, y de su inmediata expansión cinematográfica por diferentes países, a la ciudad de Buenos Aires llegan por vía marítima los rollos fílmicos para la primera proyección pública el 18 de julio de 1896, en el desaparecido Teatro Odeón de Buenos Aires con la programación de ‘L’arrivée d’un train à La Ciotat’ (El arribo del tren a La Ciotat), entre otros cortometrajes”.
                                    La primera proyección de cine en Latinoamérica ocurrió en Rio de Janeiro (Brasil), el 8 de julio de 1896. Siguieron Buenos Aires y Montevideo (18 de julio), México (14 de agosto), Santiago de Chile (25 de agosto), Guatemala (26 de setiembre). El libro mencionado agrega que en 1897, el cine debutó en Lima (2 de enero), La Habana (24 de enero), Maracaibo (28 de enero), La Paz (21 de junio) y Bogotá (1 de setiembre); y, tres años más tarde, en Asunción.
                                    No obstante, existe un curioso antecedente sobre la utilización de un artefacto precursor del cinematógrafo, en pleno Chaco paraguayo: la “linterna mágica”. En el libro “Manufacturing Otherness: Missions and Indigenous Cultures in Latin America”, Sergio Botta relata que en la primera misión anglicana establecida en el Chaco, en setiembre de 1888, a la altura de Concepción, los religiosos británicos se dieron cuenta que los libros ilustrados atraían a los nativos como herramienta para su evangelización y que la fotografía etnográfica se convirtió en el gran interés para sus publicaciones.
                                    En marzo de 1895 se reporta la llegada de una linterna mágica y una serie de fotogramas, con temática bíblica. El misionero y lingüista Richard James Hunt (1874-1938) comentó que en aquella “primera función”, a cargo del misionero Wilfrid Barbrooke Grubb, los indígenas se impresionaron, creyendo que las imágenes del libro habían cobrado vida en la pantalla.   
                                    Ciertamente, se atribuyó a Grubb la autoría de unas filmaciones, las más antiguas grabadas en Paraguay que se conserven; pero, en 2017, la investigación de los realizadores belgas Grace Winter y Luc Plantier verificó que pertenecen al marqués Robert de Wavrin (1888-1971), quien en 1913 inició un recorrido por la región y pasó por la misión anglicana. El resultado derivó en el documental “El Marqués de Wavrin, del castillo a la selva”, estrenado en el Festival Internacional de Cine de Paraguay.
                                    Tras la primera proyección de 1900, las primeras filmaciones en territorio paraguayo se hicieron en 1905, por el argentino Ernesto Gunche, refiere el periodista e investigador Manuel Cuenca en “Historia del audiovisual en el Paraguay” (2009). Hacia 1925 se producen las primeras grabaciones paraguayas, con escenas captadas por Hipólito Carrón. El cine nacional despega con las coproducciones del argentino Armando Bo, a partir de “El trueno entre las hojas” (1958). En 1969 se estrena el emblemático mediometraje “El pueblo”, de Carlos Saguier; al que sigue el largometraje “Cerro Corá” (1978), de Guillermo Vera, producido por el régimen de Stroessner.
                                    Desde la década de 1960, se expanden las salas en varias ciudades del país, así como los cines de barrio; y en 1973 aparece el primer autocine en Paraguay, formato que dura hasta mediados de los 80, pero que ahora, en próximas semanas, anuncia su retorno en tres proyectos, debido a que los cines cerraron desde el 10 de marzo pasado, con la cuarentena total.
                                </p>
                            </div>
                            
                            <div style="margin:20px;">
                                <label style="background-color: #131a4e;width: 100%;font-family: 'Roboto Condensed', sans-serif; font-size:30px;text-align: center;"> 
                                    <h1 style="color:white"> Cortometraje de la semana</h1>
                                </label>
                                <br><br>
                                <iframe style="justify-content:center; margin: 0 auto;display: block;width: 500px;
                                height: 300px;" src="https://www.youtube.com/embed/unFPPxL7I7o?autohide=0" allowfullscreen></iframe>
                            </div>
                            <div style="margin: 20px;">
                                <label style="background-color: #131a4e;width: 100%;font-family: 'Roboto Condensed', sans-serif; font-size:30px;text-align: center;" >
                                    <h1 style="color:white"> Biografia diaria:</h1>
                                </label>
                                <div class="card mb-3" style="max-width: 540px;margin-top: 20px;">
                                    <div class="row g-0">
                                      <div class="col-md-4">
                                        <img src="img/juancarlosmaneglia.jpg" class="img-fluid rounded-start" alt="...">
                                      </div>
                                      <div class="col-md-8">
                                        <div class="card-body">
                                          <h3 class="card-title">Juan Carlos Maneglia</h3>
                                          <p class="card-text" style="font-size:10px;line-height:1.5em;text-align: justify;">Nació el 9 de junio de 1966. Terminó sus estudios secundarios en el Colegio Cristo Rey. En 1999 fue becado por la UNESCO para un workshop intensivo en cinematografía en la prestigiosa NYFA.Durante 14 años trabajó en el Plan D.E.N.I Paraguay, Plan de Educación Audiovisual, Fundado por la Organización Católica Internacional de Cine y desarrolló un trabajo educativo con niños, niñas y jóvenes.En esa misma línea, durante más de 8 años fue profesor del "Cine Club" del Colegio Cristo Rey, donde el mismo se iniciara en el campo audiovisual.Fue titular de la cátedra de audiovisuales en la Universidad Católica de Asunción durante los años 1990 al '92. Fue titular de la Cátedra de Dirección en el IPAC (Instituto Paraguayo de Artes y Ciencias de la Comunicación), en la carrera de televisión durante los años 1991 a 1994. Actualmente ejerce la docencia el TIA (Taller Integral de Actuación), escuela de actuación con énfasis en audiovisual creada por Maneglia-Schémbori.</p>                             
                                        </div>
                                      </div>
                                    </div>
                                </div>  
                            </div>             
                        <script type="text/javascript">
                            var addthis_pub = 'brian';
                        </script>
                    </div>
                </div>
            </div>   
        </div>
        <?php 
            include('footer.php');
        ?>
              
    </body>
</html>