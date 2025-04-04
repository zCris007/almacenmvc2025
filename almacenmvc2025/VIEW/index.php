<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ASSETS/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="ASSETS/CSS/estilos.css">
    <title>ALMACENMVC 1025</title>
</head>
<body> 
    <header id="inicio">
        <img src="ASSETS/IMG/logosus.jpg">
        <br><br>   
    
    <nav>
        <ul >
            <li><a href="#seccion1">Misión y visión</a>
            <li><a href="#seccion2">Nuestro Equipo</a>           
            <li><a href="#seccion3">Servicios</a>
            <li><a href="#seccion4">Ubicación</a>
            <li><a href="#seccion5">Contáctenos</a>
            <li><a href="VIEW/empresa.php">Empresa</a></li>    
        </ul>
    </nav>
    </header>
    <main>
        
    <section id="seccion1">
        <center>
    <div class="cuadro">
         <h2>Misión</h2>
        <p>La empresa Modecode está comprometida con la sociedad porque queremos hacer de nuestro trabajo algo mejor con el mayor desempeño y calidad posible, para poder crear páginas y diseños web para toda la comunidad del sector Ciudad Bolívar , ya sean empresas, microempresas u otras, teniendo en cuenta la competencia.</p>
            </div>
    <div class="cuadro">
        <h2>Visión</h2>
        <p>Queremos tener el mayor alcance y crecimiento rentable para mejorar los servicios que ofrecemos y conocimientos, además de centrarnos en la atención al cliente y ser reconocidos a nivel nacional para luego ser reconocido a nivel mundial </p>
    </div>
            </center>
        </section>

       <section id="seccion2">
             <a href="#inicio"><img style="border-radius: 100%;" src="ASSETS/IMG/logosus.jpg" width="40" height="40"></a>
            <CENTER><h2>EQUIPO TEAM</h2>
            <div class="container">
            <div class="image">
            <img src="ASSETS/IMG/user1.png" alt="Imagen 1">
            <div class="overlay"></div>
            <p class="p"  align="center"> Juan Esteban Correa Arenas</p>
            </div>
            <div class="image">
            <img src="ASSETS/IMG/user2.png" alt="Imagen 2">
            <div class="overlay"></div>
            <p class="p" align="center"> Edwin David Carranza Bejarano</p>
            </div></CENTER>
            

        </section>

         <section id="seccion3">

            <a href="#inicio"><img style="border-radius: 100%;" src="ASSETS/IMG/logosus.jpg" width="40" height="40"></a>
            
        <center> 
            <h2>SERVICIOS</h2>
        <div class="cuadro2">
            <div class="servicio">
                <img class="img-ser" src="ASSETS/IMG/ima8.jpg" alt="Imagen 1">
                <p class="descrip">Asesoria y consultoria Web</p>
            </div>
            <div class="servicio">
                <img class="img-ser" src="ASSETS/IMG/ima2.jpg" alt="Imagen 2">
                <p class="descrip">Mantenimiento web</p>
            </div>
            <div class="servicio">
                <img class="img-ser" src="ASSETS/IMG/ima7.jpg" alt="Imagen 3">
                <p class="descrip">Web para moviles</p>
            </div> 
            <div class="servicio">
                <img class="img-ser" src="ASSETS/IMG/ima4.jpg" alt="Imagen 4">
                <p class="descrip">Maquetación Web</p>
            </div> 
                        
        </div>
        </center> 
        </section>

        <section id="seccion4">
            <a href="#inicio"><img style="border-radius: 100%;" src="ASSETS/IMG/logosus.jpg" width="40" height="40"></a>
            <h2>Dónde nos ubicamos?</h2>
            <center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3977.028208160238!2d-74.08651422587681!3d4.588960642617899!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3f9902384ca15f%3A0xed0041b26906c77c!2sUniminuto%20San%20Camilo!5e0!3m2!1ses!2sco!4v1694098502820!5m2!1ses!2sco" width="800" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></center>
        </section>


         <section id="seccion5">
        <a href="#inicio"><img style="border-radius: 100%;" src="ASSETS/IMG/logosus.jpg" width="40" height="40"></a>
        <form class="formlog1" action="procesar.php" method="post"> 
           <center> <img style="border-radius: " src="ASSETS/IMG/contactenos.jpg" ></center>
            <br><br>
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required>
        
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>
        
             <label for="mensaje">Mensaje:</label>
             <textarea id="mensaje" name="mensaje" required></textarea>
        
            <input type="submit" value="Enviar">
         </form>
        </section>
    </main>
    
    <footer>
        <p> SOFTORE &copy; 2023 Derechos reservados</p>
    </footer>
</body>
</html>
