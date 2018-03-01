<?php
//Esta funcion toma una fecha de nacimiento 
//desde una base de datos mysql
//en formato aaaa/mm/dd y calcula la edad en números enteros
function edad($fecha_nac){
    

    $dia=date("j");
    $mes=date("n");
    $anno=date("Y");

    //descomponer fecha de nacimiento
    $dia_nac=substr($fecha_nac, 8, 2);
    $mes_nac=substr($fecha_nac, 5, 2);
    $anno_nac=substr($fecha_nac, 0, 4);


    if($mes_nac>$mes){
        $calc_edad= $anno-$anno_nac-1;
    }else{
        if($mes==$mes_nac AND $dia_nac>$dia){
            $calc_edad= $anno-$anno_nac-1; 
        }else{
            $calc_edad= $anno-$anno_nac;
        }
    }
    return $calc_edad;
}

?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
        http://html5up.net/prologue
-->
<html>
    <head>
        <title>Moisés Aguilar - Portfolio</title>
        <meta http-equiv="content-type" content="text/html; charset=utf-8" />
        <meta name="description" content="Portfolio de Moisés Aguilar, Administrador de Sistemas Informáticos y Desarrollador de Aplicaciones Web." />
        <meta name="keywords" content="moisés aguilar miranda, moisés aguilar, administrador, sistemas, desarollo, web, aplicaciones, informática, informático, servidores, portfolio" />
        <!--[if lte IE 8]><script src="css/ie/html5shiv.js"></script><![endif]-->
        <script src="js/jquery.min.js"></script>
        <script src="js/jquery.scrolly.min.js"></script>
        <script src="js/jquery.scrollzer.min.js"></script>
        <script src="js/jquery.validate.js"></script>
        <!-- http://getskel.com/docs -->
        <script src="js/skel.min.js"></script>
        <script src="js/skel-layers.min.js"></script>
        <script src="js/init.js"></script>
        <noscript>
            <link rel="stylesheet" href="css/skel.css" />
            <link rel="stylesheet" href="css/style.css" />
            <link rel="stylesheet" href="css/style-wide.css" />
        </noscript>
        <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon"/>
        <!--[if lte IE 9]><link rel="stylesheet" href="css/ie/v9.css" /><![endif]-->
        <!--[if lte IE 8]><link rel="stylesheet" href="css/ie/v8.css" /><![endif]-->
        <!--Google Analytics-->        
        <script src="js/google_analytics.js"></script>
    </head>
    <body>

        <!-- Header -->
        <div id="header" class="skel-layers-fixed">

            <div class="top">

                <!-- Logo -->
                <div id="logo">
                    <span class="image avatar48"><img src="images/foto-carnet.png" alt="" /></span>
                    <h1 id="title">Moisés Aguilar</h1>
                    <small><?php echo edad('1987/02/02'); ?> años</small>
                    <p>Administrador de Sistemas</p>
                    <p>Desarrollador Web</p>
                </div>

                    <!-- Nav -->
                <nav id="nav">
                <!--

                Prologue's nav expects links in one of two formats:

                1. Hash link (scrolls to a different section within the page)

                   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

                2. Standard link (sends the user to another page/site)

                   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

                Font Awesome Icons
                http://fortawesome.github.io/Font-Awesome/icons/
                -->
                    <ul>
                        <li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Introducción</span></a></li>
                        <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
                        <li><a href="#formacion_academica" id="formacion_academica-link" class="skel-layers-ignoreHref"><span class="icon fa-graduation-cap">Formación académica</span></a></li>
                        <li><a href="#conocimientos" id="conocimientos-link" class="skel-layers-ignoreHref"><span class="icon fa-cogs">Conocimientos técnicos</span></a></li>
                        <li><a href="#experiencia_laboral" id="experiencia_laboral-link" class="skel-layers-ignoreHref"><span class="icon fa-wrench">Experiencia laboral</span></a></li>
                        <li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contacto</span></a></li>
                    </ul>
                </nav>

            </div>

            <div class="bottom">

                <!-- Social Icons -->
                <ul class="icons">
                    <li><a href="mailto:yo@moisesaguilar.net" class="icon fa-envelope"><span class="label">Email</span></a></li>
                    <li><a href="https://github.com/monchito007" class="icon fa-github" target="_BLANK"><span class="label">Github</span></a></li>
                    <li><a href="https://www.linkedin.com/in/mois%C3%A9s-aguilar-b660853b/" class="icon fa-linkedin-square" target="_BLANK"><span class="label">LinkedIn</span></a></li>
                    <li><a href="moisesaguilar.net/docs/CV_Moises_Aguilar.pdf" class="icon fa-file-pdf-o" target="_BLANK"><span class="label">Curriculum en PDF</span></a></li>
                </ul>

            </div>

        </div>
        
        <!-- Main -->
        <div id="main">

            <!-- Intro -->
            <section id="top" class="one dark cover">
                <div class="container">

                    <header>
                        <h2 class="alt text-shadow">Bienvenido, soy <strong>Moisés Aguilar</strong>.</h2>
                        <h3 class="text-shadow">Administrador de Sistemas y Desarrollador de Aplicaciones Web</h3>

                        <p class="text-shadow">Un año de experiencia como <strong>Administrador de Sistemas</strong> en <a href="http://www.grupsoler.com" target="_BLANK">Electromecánica Soler S.L.</a>
                            <br>
                            Seis meses de prácticas como <strong>Desarrollador Web</strong> en <a href="http://www.maknetic.com/" target="_BLANK">Maknetic</a>.
                            <br>
                            Tres meses de experiencia laboral como <strong>Desarrollador Web</strong> en <a href="http://signage.boira.cat" target="_BLANK">Boira Digital</a>.
                            <br>
                            Seis meses de experiencia laboral como <strong>Operador de Control de Procesos</strong> en <a href="https://www.nissan.es/" target="_BLANK">Nissan Motor Iberica S.A.</a>.
                            <br>
                            Dos años de experiencia laboral como <strong>Informático y Administrativo</strong> en <a href="https://www.habitatgestions.es/" target="_BLANK">Habitat Gestions</a>.
                            <br>
                            Experiencia realizando <strong>Proyectos Web</strong> por cuenta propia.
                        </p>
                    </header>

                    <footer>
                            <a href="#portfolio" class="button scrolly">Ver Portfolio</a>
                    </footer>

                </div>
            </section>

            <!-- Portfolio -->
            <section id="portfolio" class="two">
                <div class="container">

                    <header>
                            <h2>Portfolio</h2>
                    </header>

                    <p>Aquí muestro un listado de los proyectos realizados.</p>

                    <div class="row">
                        <div class="4u">
                            <article class="item">
                                <a href="http://blog.leragestion.com/" class="image fit" target="_BLANK"><img src="images/blogeragestion.png" alt="" /></a>
                                <header>
                                        <h3>Blog Lera Gestión</h3>
                                </header>
                            </article>
                        </div>
                        <div class="4u">
                            <article class="item">
                                <a href="http://habitatgestions.com/" class="image fit" target="_BLANK"><img src="images/habitatgestions.png" alt="" /></a>
                                <header>
                                        <h3>Habitat Gestions</h3>
                                </header>
                            </article>
                        </div>
                        <div class="4u">
                            <article class="item">
                                <a href="http://bk-consulting.es/" class="image fit" target="_BLANK"><img src="images/bk-consulting.png" alt="" /></a>
                                <header>
                                        <h3>Bk-Consulting</h3>
                                </header>
                            </article>

                        </div>

                        <!--
                        <div class="4u">
                                <article class="item">
                                        <a href="http://www.publicspaceapp.tk/" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
                                        <header>
                                                <h3>Public Space App</h3>
                                        </header>
                                </article>
                                <article class="item">
                                        <a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
                                        <header>
                                                <h3>Natoque Vitae</h3>
                                        </header>
                                </article>
                        </div>

                        <div class="4u">
                                <article class="item">
                                        <a href="http://www.publicspaceapp.tk/" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
                                        <header>
                                                <h3>Public Space App</h3>
                                        </header>
                                </article>

                                <article class="item">
                                        <a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
                                        <header>
                                                <h3>Orci Convallis</h3>
                                        </header>
                                </article>
                        </div>
                        -->
                    </div>

                </div>
            </section>

            <!-- Formación académica -->
            <section id="formacion_academica" class="three">
                <div class="container">

                    <header>
                            <h2>Formación académica</h2>
                    </header>

                    <!--<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>-->
                    
                    <p>
                        Educación Secundaria Obligatoria (1999-2003)
                        <br>
                        Bachillerato (Tecnológico) (2003-2007)
                        <br>
                        CFGS Administración de Sistemas Informáticos (2007-2009)
                        <br>
                        CFGS Desarrollo de Aplicaciones Web (2012-2013)
                    </p>

                    <h3>Cursos</h3>
                    <p>
                        Título de Ofimática de la A.E.C.E.I. (Office 97)
                        <br>
                        3 Cursos Programación VISUAL BASIC 6.0
                        <br>
                        Curso de Prevención de Riesgos Laborales. (33 horas)
                    </p>

                    <h3>Idiomas</h3>
                    <p>
                        Castellano
                        <br>
                        Catalán
                        <br>
                        Inglés (Medio)
                    </p>

                </div>
            </section>
            
            <!-- Conocimientos técnicos -->
            <section id="conocimientos" class="four">
                <div class="container">

                    <header>
                            <h2>Conocimientos técnicos</h2>
                    </header>

                        <!--<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>-->

                    <div class="bloque">
                        
                        <h3>Administración de Sistemas Informáticos</h3>
                    
                        <p>Administración de Servidores</p>
                        <ul>
                            <li>Ubuntu Server 14.04</li>
                            <li>Windows 2003 Server</li>
                        </ul>

                        <p>Sistemas Operativos</p>
                        <ul>
                            <li>Windows</li>
                            <li>Linux (Ubuntu, Slackware)</li>
                            <li>Mac OS X</li>
                            <li>Android</li>
                        </ul>

                        <p>Redes</p>
                        <ul>
                            <li>Administración LAN</li>
                            <li>Configuración LAN</li>
                            <li>Cableado</li>
                        </ul>

                        <p>Equipos Informáticos</p>
                        <ul>
                            <li>Configuración (PC, Portatil, Tablet y Smartphone)</li>
                            <li>Reparación (PC y Portatil)</li>
                        </ul>

                        <p>Ofimática</p>
                        <ul>
                            <li>Microsoft Office (Word, Excel, Acces y PowerPoint)</li>
                            <li>OppenOffice</li>
                            <li>HelpDesk</li>
                        </ul>
                    
                    </div>
                    
                    <div class="bloque">
                        
                        <h3>Programación</h3>
                    
                        <p>Desarrollo de Aplicaciones</p>
                        <ul>
                            <li>C</li>
                            <li>Python</li>
                            <li>Python QT library</li>
                            <li>Visual Basic .NET 2003 y 2008</li>
                        </ul>

                        <p>Desarrollo de Aplicaciones Web</p>
                        <ul>
                            <li>PHP 5</li>
                            <li>Javascript</li>
                            <li>Ajax</li>
                            <li>API Google Maps</li>
                            <li>YUI 3 Library</li>
                            <li>XML</li>
                            <li>JSON</li>
                            <li>Webservices</li>
                        </ul>
                        
                        <p>Desarrollo de App's</p>
                        <ul>
                            <li>Android</li>
                        </ul>

                        <p>Maquetación Web</p>
                        <ul>
                            <li>HTML5</li>
                            <li>CSS 3</li>
                            <li>Bootstrap</li>
                            <li>Photoshop</li>
                        </ul>

                        <p>Administración de Bases de Datos</p>
                        <ul>
                            <li>MySQL</li>
                            <li>SQL Server</li>
                            <li>XAMPP</li>
                            <li>WAMP</li>
                            <li>LAMP</li>
                            <li>Internet Information Server IIS</li>
                        </ul>

                        <p>Sistemas de Gestión de Contenidos (CMS)</p>
                        <ul>
                            <li>Drupal</li>
                            <li>Prestashop</li>
                            <li>Wordpress</li>
                        </ul>
                        
                        <p>Framework</p>
                        <ul>
                            <li>Yii (PHP)</li>
                            <li>Kumbia (PHP)</li>
                            <li>Pyramid (Python)</li>
                            <li>Django (Python)</li>
                        </ul>
                        
                        <p>Gestion de Repositiorios</p>
                        <ul>
                            <li>Git</li>
                            <li>Team Foundation Server TFS</li>
                        </ul>
                    
                    </div>

                </div>
            </section>
            
            <!-- Experiencia laboral -->
            <section id="experiencia_laboral" class="five">
                <div class="container">

                    <header>
                            <h2>Experiencia laboral</h2>
                    </header>

                        <!--<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>-->

                    <div class="bloque">
                        
                        <h3>Técnico Hardware y Software</h3>
                        <h4>En Electromecánica Soler S.L.</h4>
                        <h5><em>Desde Abril de 2010 hasta Abril de 2011</em></h5>
                    
                        <p>Funciones</p>
                        <ul>
                                                    
                            <li>Entornos Windows y Windows Server 2003.</li>
                            <li>Resolución de incidencias.</li>
                            <li>Asistencia remota (TeamViewer).</li>
                            <li>Mantenimiento y reparación de equipos informáticos.</li>
                            <li>Administración de usuarios con Active Directory.</li>
                            <li>Administración de cuentas de correo con Microsoft Exchange 2003.</li>
                            <li>Configuración y cableado de redes LAN.</li>
                            <li>Instalación y configuración de impresoras.</li>
                            <li>Desarrollo de aplicaciones web con HTML 5, CSS 3.0, PHP 5, MySQL, Javascript.</li>

                        </ul>

                    </div>
                    
                    <div class="bloque">
                        
                        <h3>Desarrollador de Aplicaciones Web</h3>
                        <h4>En Maknetic. (Prácticas)</h4>
                        <h5><em>Desde Octubre de 2013 hasta Marzo de 2014</em></h5>
                    
                        <p>Funciones</p>
                        <ul>
                                                    
                            <li>Gestión de contenidos.</li>
                            <li>Maquetación Web con HTML5.</li>
                            <li>Instalación y configuración de módulos Prestashop.</li>
                            <li>Programación con plantillas Smarty (Prestashop).</li>
                            <li>Programación con JQuery.</li>

                        </ul>

                    </div>
                    
                    <div class="bloque">
                        
                        <h3>Desarrollador de Aplicaciones Web</h3>
                        <h4>En Boira Digital S.L.</h4>
                        <h5><em>Desde Abril de 2014 hasta Julio de 2014</em></h5>
                    
                        <p>Funciones</p>
                        <ul>
                                                    
                            <li>Maquetación Android.</li>
                            <li>Programación con C-Sharp Web Forms (MVC).</li>
                            <li>Documentación de Aplicaciones Web.</li>
                            <li>Servidor de repositorios Team Foundation Server.</li>

                        </ul>

                    </div>
                    
                    <div class="bloque">
                        
                        <h3>Operador de Control de Procesos</h3>
                        <h4>En Nissan Motor Iberica S.A.</h4>
                        <h5><em>Desde Diciembre de 2014 hasta Junio de 2015</em></h5>
                    
                        <p>Funciones</p>
                        <ul>
                            
                            <li>Partes de producción diarios.</li>
                            <li>Gestión del MIX de las unidades.</li>
                            <li>Análisis y resolución de errores en los procesos de montaje.</li>
                            <li>Reedición de documentos.</li>
                            <li>Gestión del correo electrónico del departamento.</li>
                            <li>Consultas SQL.</li>
                            <li>Configuración de equipos.</li>
                            <li>Conexiones remotas con Windows Terminal Server.</li>

                        </ul>

                    </div>
                    
                    <div class="bloque">
                        
                        <h3>Informático y Administrativo</h3>
                        <h4>Habitat Gestions</h4>
                        <h5><em>Desde Noviembre de 2015 hasta la actualidad</em></h5>
                    
                        <p>Tareas Administrativas</p>
                        <ul>
                            
                            <li>Gestión de la documentación de la empresa.</li>
                            <li>Gestión del correo electrónico.</li>
                            <li>Ofimática.</li>
                            
                        </ul>
                        <p>Tareas Informáticas</p>
                        <ul>
                            
                            <li>Mantenimiento y reparación de equipos, móviles, impresoras, escáner. (Hardware y Software).</li>
                            <li>Resolución de incidéncias.</li>
                            <li>Instalación y mantenimiento de la red local.</li>
                            <li>Diseño y gestión de la página web.</li>
                            <li>Programación de Scripts en PHP y JavaScript.</li>
                            <li>Macros VBA.</li>
                            <li>Diseño gráfico para campañas de marketing.</li>
                            
                        </ul>
                        
                    </div>
                    

                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="six">
                <div class="container">

                    <header>
                            <h2>Contacto</h2>
                    </header>


                    <div id="ok" class="row"></div>
                    <form method="post" id="form_contacto">
                        <p>Para contactar conmigo rellena el siguiente formulario o envia un correo electrónico a <a href='mailto:yo@moisesaguilar.net'>yo@moisesaguilar.net</a> y te contestaré lo antes posible.</p>
                        <div class="row half">
                            <div class="6u"><input type="text" id="name" name="name" placeholder="Nombre" /></div>
                            <div class="6u"><input type="text" id="email" name="email" placeholder="Email" /></div>
                        </div>
                        <div class="row half">
                            <div class="12u">
                                <textarea id="message" name="message" placeholder="Mensaje"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="12u">
                                <input type="submit" value="Enviar Mensaje" />
                            </div>
                        </div>
                    </form>

                </div>
            </section>

        </div>

        <!-- Footer -->
        <div id="footer">

            <!-- Copyright -->
            <ul class="copyright">
                <li>&copy; Portfolio de <strong>Moisés Aguilar Miranda</strong> <?php echo date('Y'); ?></li>
            </ul>

        </div>

	</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        
        $("#ok").hide();
        
        $("#form_contacto").validate({
            
            rules: {
                
                name: {required: true, minlength: 2},
                email: {required: true, email: true},
                message: {required: true, minlength: 2},
                
            },
            messages: {
                
                name: "Debe introducir su nombre",
                email: "Debe introducir un email valido",
                message: "El campo mensaje es obligatorio",
                
            },
            submitHandler: function(form){
                var dataString = 'name='+$('#name').val()+'&email='+$('#email').val()+'&message='+$('#message').val();
                $.ajax({
                    type: "POST",
                    url:"send.php",
                    data: dataString,
                    success: function(data){
                        $("#ok").html(data);
                        $("#ok").show();
                        $("#form_contacto").hide();
                    }
                });
            }
            
        });
        
    });    
    
</script>