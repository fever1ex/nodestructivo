<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="icon" href="../images/logo.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NoDestructivo</title>
</head>
<body>
    <header>
        <nav>
            <ul>
                <li class="title"><a href="#servicio">SERVICIO</a></li>
                <li class="title"><a href="#somos">SOMOS</a></li>
                <li><a href="../index.php"><img src="../images/logo-shiny.png" class="logo-nav"></a></li>
                <li class="title"><a href="#contacto">CONTACTO</a></li>
                <li class="title"><a href="../check-certificate/ingresa.php">INGRESA</a></li>
               </ul>
        </nav>
    </header>
    <section class="carousel-section">
        <div class="carousel">
            <p>APRENDIZAJE<br>DESARROLLO<br>Y CONTINUIDAD<br>EN NDT</p>
            <a href="#contacto">CONTÁCTANOS</a>
        </div>
    </section>
    <section id="servicio" class="info">
        <div class="metodos">
            <h1>MÉTODOS Y TÉCNICAS</h1>
            <p>Cursos PRESENCIALES, EN LÍNEA O HÍBRIDOS Niveles I y II bajo<br>ASNT/SNT-TC-1A/CP-105</p>
            <div class="tecnicas">
                <div class="tecnica">
                    <img class="tecnica-img" src="../images/ET_2.png" alt="">
                    <p>CORRIENTES<br>ELECTROMAGNÉTICAS</p>
                </div>
                <div class="tecnica">
                    <img class="tecnica-img" src="../images/MT.png" alt="">
                    <p>PARTÍCULAS<br>MAGNÉTICAS</p>
                </div>
                <div class="tecnica">
                    <img class="tecnica-img" src="../images/PT.png" alt="">
                    <p>LÍQUIDOS<br>PENETRANTES</p>
                </div>
                <div class="tecnica">
                    <img class="tecnica-img" src="../images/VT.png" alt="">
                    <p>INSPECCIÓN<br>VISUAL</p>
                </div>
                <div class="tecnica">
                    <img class="tecnica-img" src="../images/UT.png" alt="">
                    <p>ULTRASONIDO<br>CONVENCIONAL</p>
                </div>
                <div class="tecnica">
                    <img class="tecnica-img" src="../images/UPA.png" alt="">
                    <p>ARREGLO<br>DE FASE</p>
                </div>
            </div>
        </div>
        <div class="cap-ase">
            <div class="capacitaciones">
                <h1>CAPACITACIONES</h1>
                <h2>USO Y MANEJO DE EQUIPOS DE ULTRASONIDO</h2>
                <ul>
                    <li>ARREGLO DE FASES (UPA)</li>
                    <li>DIFRACCIÓN POR TIEMPO DE VUELO (TOFD)</li>
                    <li>DETECTOR DE FALLAS</li>
                    <li>MEDIDOR DE ESPESOR</li>
                    <li>EQUIPOS DE INSPECCIÓN</li>
                    <li>VISUAL REMOTO <span class="numero-aj">3</span>D</li>
                    <li>LÁSER COMPARACIÓN SOMBRA</li>
                </ul>
                <p class="adiestramiento">ADIESTRAMIENTO: BAJO PROCEDIMIENTOS, CÓDIGOS,<br>NORMAS Y ESPECIFICACIONES APLICABLES</p>
            </div>
            <div class="asesorias">
                <h1>ASESORÍAS</h1>
                <h2>ELABORACIÓN DE PROCEDIMIENTOS</h2>
                <p>Documento a la medida y paso a paso del ENSAYO NO DESTRUCTIVO aplicable para cumplir con los requerimientos del cliente para así garantizar la calidad y/o sanidad de los componentes inspeccionados.</p>
                <h2>DESARROLLO DE APLICACIONES</h2>
                <p>Estudio del componente, la inspección ideal, documentos aplicables, costo-beneficio, velocidad y cantidad, análisis de fallas y herramientas ideales.</p>
            </div>
        </div>
    </section>
    <section class="cita-sec">
        <div class="cita">
            <p>CUALQUIER DÍA A CUALQUIER HORA, ONLINE O PRESENCIAL. <br> EN NODESTRUCTIVO NOS ADAPTAMOS A TUS NECESIDADES</p>
            <a href="#contacto">AGENDA TU CITA</a>
        </div>
    </section>
    <section id="#shop" class="shop">
        <div>
            <img src="../images/shop-nd.png" alt="">
        </div>
    </section>
    <section class="somos-contacto">
        <div id="somos" class="somos">
            <h1>SOMOS</h1>
            <p>Desde el 2011 somos un grupo de trabajo dedicado a los Ensayos NODESTRUCTIVOS (NDT). <br><br>Como formadores, desarrolladores y colaboradores activos de las industrias más exigentes, como: Aeroespacial, Aeronáutica, Aero-Naval, Petroquímica-Petrolera, Automotrices, Estructuras Metálicas, Fundidoras, Mineras, Ingenios Azucareros, Metal, Mecánica, Recipientes a Presión, Maquinaria pesada, Ferrocarriles, entre otras. <br><br>Lo cual nos ha dado la fortuna de contar con una gran cantidad de clientes y por ende, aprender de ellos, evolucionar y diseñar nuestros servicios a la medida, personalidad, carácter, retos y tiempos de cada uno de ellos. <br><br>Somos un grupo de trabajo con el PROPÓSITO de crecer desde el interior de nuestra estructura, y a la par de la de nuestros clientes, colaboradores y amigos. Por ende, tenemos como OBJETIVO, apoyar a la mejora continua profesional, económica y personal, como HERRAMIENTAS, el conocimiento, el intelecto y el profesionalismo aplicado, como IDEAL, generar conciencia en la causa de lo que hacemos y sus efectos, pero también generar conciencia de lo que valemos y sus efectos, porque en nuestra FILOSOFÍA <br><br><br><span class="nodestructivos">¡TODOS SOMOS NO DESTRUCTIVOS!</span></p>
        </div>
        <div id="contacto" class="contacto">
            <h1>CONTÁCTANOS</h1>
            <form action="form.php" method="POST">
                <input type="text" name="nombre" placeholder="Nombre" required>
                <input type="email" name="email" placeholder="Tu correo" required>
                <input type="text" name="asunto" placeholder="Asunto" required>
                <textarea name="mensaje" placeholder="Mensaje" required></textarea>
                <button type="submit" name="submit">ENVIAR</button>
            </form>
            <?php if (isset($_GET['mailsend'])): ?>
                <p class="success">Mensaje enviado correctamente!</p>
            <?php endif; ?>
        </div>
    </section>
    <section class="p-frecuentes">
        <div>
            <h1>PREGUNTAS FRECUENTES</h1>
            <p>
                ¿Qué documentación se me entrega?:
                <br><br>
                Diploma de participación del curso con las horas especificadas por ASNT/SNT-TC-1A/CP-105, acta de calificaciones firmada por un Nivel III, credencial y un registro digital en nuestra base de datos, la cual podrás verificar (próximamente) en esta misma página con el código asignado en tus documentos.
                <br><br>
                ¿Qué es el DC3 de la STPS?:
                <br><br>
                Este formato sirve para acreditar la capacitación que recibe un colaborador después de haber aprobado un curso o capacitación. El formato es necesario para todas las empresas al impartir una capacitación a su fuerza laboral y al entregar una constancia. Cuando buscamos cursos siempre procuramos que tenga algún respaldo, por ASNT y buscamos la validez curricular, pero también puedes obtener una Constancia de Competencias o Habilidades Laborales (formato DC3) y es emitido por un agente capacitador con registro ante la STPS. De forma clara y simple el DC3 es el documento que acreditará que posees conocimientos teóricos y prácticos en alguna disciplina laboral específica. Este documento es oficial ante la STPS y funciona como un respaldo a tus habilidades laborales adquiridas a través de un curso. Te preguntarás ¿cómo una constancia DC3 puede ayudarme? Con la constancia DC3, a nivel profesional, ayudas a demostrar que cuentas con las habilidades técnicas y la capacidad para desempeñar la disciplina específica dentro de algún puesto laboral, PERO NO SUSTITUYE LOS REQUISITOS DEL PROCESO de certificación que requieran los documentos aplicables de NDT.
                <br><br>
                ¿Cuándo estará disponible la tienda en línea?:
                <br><br>
                Este año estará disponible, mientras tanto puedes contactarnos vía correo electrónico así como WhatsApp para consultar nuestro catálogo y mercancía disponible.
                <br><br>
                ¿Cómo consultar una certificación?
                <br><br>
                En la sección <a href="../check-certificate/ingresa.php">INGRESA</a> encontrarás el buscador que te proporcionará la información relevante respecto a nuestras certificaciones.
            </p>
        </div>
    </section>
    <footer>
        <div class="footer">
            <div class="footer-left">
                <ul>
                    <li>Celular: <a href="tel:5564904919">5564904919</a></li>
                    <li>Telefono: <a href="tel:3296885962">3296885962</a></li>
                    <li>Correo: <a href="mailto:contacto@nodestructivo.com">contacto@nodestructivo.com</a></li>
                </ul>
            </div>
            <div class="footer-center">
                <ul>
                    <li>TikTok: <a href="https://www.tiktok.com/@nodestructivo">@nodestructivo</a></li>
                    <li>Facebook: <a href="https://www.facebook.com/people/No-Destructivo/100063693472334/">No Destructivo</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/nodestructivo_">nodestructivo_</a></li>
                </ul>
            </div>
            <div class="footer-right">
                <ul class="footer-logo">
                    <li><a href="../index.php"><img src="../images/logo.png" alt=""></a></li>
                </ul>
            </div>
        </div>
        <p>&copy; 2025 Nodestructivo&reg; Todos los derechos reservados.</p>
    </footer>
    <!--<script src="/js/script.js"></script>-->
</body>
</html>