<?php
session_start(); // Iniciar la sesión
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asesorías de Ingeniería en Sistemas</title>
</head>
<body>
    <div class="sidebar">
        <h2>Menú</h2>
        <a href="#">Inicio</a>
        <a href="Perfil.php">Perfil del <?php echo $_SESSION['Rol']; ?></a>
        <a href="pruebas.html">Pruebas</a>
        <a href="login.php">Cerrar sesion</a>
    </div>
<header>
</header>
    <div class="container">
        <!--Primer Semestre-->
        <div class="semester">
            <h2 class="title">Primer Semestre</h2>
            <button class="subject-button" onclick="showSubjectInfo('subject1_1')">Fundamentos de Programación</button>
            <div class="subject-info" id="subject1_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Fundamentos de Programación</h3>
                <p>Esta materia introduce a los estudiantes a la lógica de programación y la resolución de problemas computacionales. 
                    Se aprende el uso de lenguajes como Python, C o JavaScript para escribir algoritmos básicos, entender 
                    estructuras de control (condicionales, bucles) y trabajar con datos básicos. Es el pilar para el 
                    desarrollo de aplicaciones en el futuro.
                </p>
                <a href="Prueba2.php?subject=Fundamentos de Programacion&Enlace=https://nlaredo.tecnm.mx/takeyas/Apuntes/Fundamentos%20de%20Programacion/index.htm">Fundamentos de Programación</a>    
            </div>
        </div>
        <!--Segundo Semestre-->
        <div class="semester">
            <h2 class="title">Segundo Semestre</h2>     
            <button class="subject-button" onclick="showSubjectInfo('subject2_1')">Programación Orientada a Objetos</button>
            <!-- Contenedor de información de cada materia -->
            <div class="subject-info" id="subject2_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Programación Orientada a Objetos</h3>
                <p>Profundización en técnicas de programación a través del paradigma orientado a objetos. 
                    Se abordan conceptos como encapsulamiento, herencia, polimorfismo y reutilización de código. 
                    Incluye el diseño de clases y el manejo de excepciones.</p>
                    <li><a href="https://nlaredo.tecnm.mx/takeyas/Apuntes/POO/index.htm">Programación Orientada a Objetos</a></li>
                </div>
        </div>
        <!--Tercer Semestre-->
        <div class="semester">
            <h2 class="title">Tercer Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject3_1')">Estructuras de Datos</button>
            <div class="subject-info" id="subject3_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Estructuras de Datos</h3>
                <p>Estudio y aplicación de estructuras fundamentales como listas enlazadas, pilas, colas, árboles y grafos. 
                    Se exploran sus implementaciones, usos prácticos y análisis de eficiencia en algoritmos.</p>
                    <li><a href="https://nlaredo.tecnm.mx/takeyas/Apuntes/Estructura%20de%20Datos/index.htm">Estructuras de Datos</a></li>
                </div>   
        </div>
        <!--Cuarto Semestre-->
        <div class="semester">
            <h2 class="title">Cuarto Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject4_1')">Fundamentos de Bases de Datos</button>
            <button class="subject-button" onclick="showSubjectInfo('subject4_2')">Principios Eléctricos y Aplicaciones Digitales</button>
            <button class="subject-button" onclick="showSubjectInfo('subject4_3')">Fundamentos de Ingeniería de Software</button>
            <div class="subject-info" id="subject4_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Fundamentos de Bases de Datos</h3>
                <p>Introducción al diseño, modelado y gestión de bases de datos. Incluye el estudio de modelos relacionales, 
                    creación de diagramas entidad-relación y lenguaje SQL para consultas y manipulación de datos.</p>
                    <li><a href="http://itpn.mx/estudiantes/funddebd.html">Fundamentos de Bases de Datos</a></li>
                </div>   
            <div class="subject-info" id="subject4_2">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Principios Eléctricos y Aplicaciones Digitales</h3>
                <p>Conceptos básicos de electricidad aplicados a sistemas digitales. Incluye análisis de circuitos eléctricos, 
                    uso de componentes como resistencias y condensadores, y fundamentos de lógica digital.</p>
                    <li><a href="http://itpn.mx/estudiantes/princelectyaplicdig.html">Principios Eléctricos y Aplicaciones Digitales</a></li>
                </div> 
            <div class="subject-info" id="subject4_3">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Fundamentos de Ingeniería de Software</h3>
                <p>Conceptos esenciales del desarrollo de software, incluyendo análisis de requerimientos, diseño, 
                    implementación y pruebas. Se introducen metodologías como cascada o ágil.</p>
                    <li><a href="http://itpn.mx/estudiantes/fundamdeis.html">Fundamentos de Ingeniería de Software</a></li>
                </div> 
        </div>
        <!--Quinto Semestre-->
        <div class="semester">
            <h2 class="title">Quinto Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject5_1')">Sistemas Operativos</button>
            <button class="subject-button" onclick="showSubjectInfo('subject5_2')">Fundamentos de Telecomunicaciones</button>
            <button class="subject-button" onclick="showSubjectInfo('subject5_3')">Taller de Bases de Datos</button>
            <button class="subject-button" onclick="showSubjectInfo('subject5_4')">Arquitectura de Computadoras</button>
            <button class="subject-button" onclick="showSubjectInfo('subject5_5')">Programación Web</button>
            <button class="subject-button" onclick="showSubjectInfo('subject5_6')">Graficación</button>
            <button class="subject-button" onclick="showSubjectInfo('subject5_7')">Ingeniería de Software</button>
            <div class="subject-info" id="subject5_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Sistemas Operativos</h3>
                <p>Funcionamiento interno de los sistemas operativos, incluyendo manejo de procesos, memoria, 
                    sistemas de archivos y concurrencia. Se analizan ejemplos como Linux y Windows.</p>
                    <li><a href="http://itpn.mx/estudiantes/sistemasop.html">Sistemas Operativos</a></li>
                </div>   
            <div class="subject-info" id="subject5_2">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Fundamentos de Telecomunicaciones</h3>
                <p>Principios básicos de transmisión de datos, medios de comunicación, y protocolos de red. 
                    Incluye señales análogas y digitales, modulación y multiplexación.</p>
                    <li><a href="http://itpn.mx/estudiantes/funddetelecom.html">Fundamentos de Telecomunicaciones</a></li>
                </div> 
            <div class="subject-info" id="subject5_3">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Taller de Bases de Datos</h3>
                <p>Práctica intensiva en diseño, implementación y administración de bases de datos. 
                    Se incluye optimización de consultas y manejo de transacciones.</p>
                    <li><a href="http://itpn.mx/estudiantes/tallerdebd.html">Taller de Bases de Datos</a></li>
                </div> 
            <div class="subject-info" id="subject5_4">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Arquitectura de Computadoras</h3>
                <p>Estudio de la estructura interna de los computadores, incluyendo procesadores, memoria, buses y 
                    sistemas de almacenamiento.</p>
                    <li><a href="http://itpn.mx/estudiantes/arquitecturadecomp.html">Arquitectura de Computadoras</a></li>
                </div> 
            <div class="subject-info" id="subject5_5">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Programación Web</h3>
                <p>Introducción al desarrollo web, incluyendo lenguajes como HTML, CSS y JavaScript. 
                    Se abordan principios de diseño responsivo y front-end.</p>
                    <li><a href="http://itpn.mx/estudiantes/programacionweb.html">Programación Web</a></li>
                </div> 
            <div class="subject-info" id="subject5_6">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Graficación</h3>
                <p>Fundamentos de gráficos por computadora, modelado 2D/3D, transformaciones geométricas y renderizado.</p>
                <li><a href="http://itpn.mx/estudiantes/graficacion.html">Graficación</a></li>
            </div> 
            <div class="subject-info" id="subject5_7">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Ingeniería de Software</h3>
                <p>Desarrollo de habilidades avanzadas en la gestión de proyectos de software, incluyendo 
                    modelos de desarrollo, gestión de riesgos y documentación.</p>
                    <li><a href="https://www.studocu.com/es-mx/document/instituto-tecnologico-de-zacatecas/ingenieria-economica/unidad-1-modelo-de-analisis/49556605">Unidad 1</a></li>
                    <li><a href="https://es.scribd.com/document/408356417/INGENIERIA-DE-SOFTWARE-UNIDAD-2-DISENO">Unidad 2</a></li>
                    <li><a href="https://es.scribd.com/document/508799426/UNIDAD-3-Proceso-de-Desarrollo-del-Software-convertido">Unidad 3</a></li>
                    <li><a href="http://www.ptolomeo.unam.mx:8080/jspui/bitstream/132.248.52.100/212/7/A7.pdf">Unidad 4</a></li>
            </div> 
        </div>
        <!--Sexto Semestre-->
        <div class="semester">
            <h2 class="title">Sexto Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject6_1')">Taller de Sistemas Operativos</button>
            <button class="subject-button" onclick="showSubjectInfo('subject6_2')">Redes de Computadoras</button>
            <button class="subject-button" onclick="showSubjectInfo('subject6_3')">Lenguajes y Autómatas I</button>
            <button class="subject-button" onclick="showSubjectInfo('subject6_4')">Lenguajes de Interfaz</button>
            <button class="subject-button" onclick="showSubjectInfo('subject6_5')">Tópicos Avanzados de Programación</button>
            <button class="subject-button" onclick="showSubjectInfo('subject6_6')">Gestión de Proyectos de Software</button>
            <div class="subject-info" id="subject6_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Taller de Sistemas Operativos</h3>
                <p>Aplicación práctica del diseño y uso de sistemas operativos, gestión de procesos, sincronización y 
                    comunicación entre ellos.</p>
                    <li><a href="https://tallerdesistemasoperativosblog.wordpress.com/2017/05/02/unidad-1/">Unidad 1</a></li>
                    <li><a href="https://tallerdesistemasoperativosblog.wordpress.com/2017/05/02/unidad-2/">Unidad 2</a></li>
                    <li><a href="https://tallerdesistemasoperativosblog.wordpress.com/2017/05/02/unidad-3/">Unidad 3</a></li>
                    <li><a href="https://tallerdesistemasoperativosblog.wordpress.com/2017/05/02/unidad-4-interoperabilidad-entre-sistemas-operativos/">Unidad 4</a></li>
            </div>  
            <div class="subject-info" id="subject6_2">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Redes de Computadoras</h3>
                <p>Conceptos y arquitectura de redes, protocolos como TCP/IP, enrutamiento y seguridad en redes.</p>
                <li><a href="http://itpn.mx/estudiantes/redesdecomp.html">Redes de Computadoras</a></li>
            </div> 
            <div class="subject-info" id="subject6_3">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Lenguajes y Autómatas I</h3>
                <p> Introducción a los fundamentos teóricos de la computación, lenguajes formales, gramáticas y autómatas.</p>
                <li><a href="http://itpn.mx/estudiantes/lenguahesyautomaras1.html">Lenguajes y Autómatas I</a></li>
            </div> 
            <div class="subject-info" id="subject6_4">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Lenguajes de Interfaz</h3>
                <p>Diseño e implementación de interfaces gráficas, interacción humano-computadora y experiencia de usuario.</p>
                <li><a href="http://itpn.mx/estudiantes/lenguajesdeinterfaz.html">Lenguajes de Interfaz</a></li>
            </div> 
            <div class="subject-info" id="subject6_5">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Tópicos Avanzados de Programación</h3>
                <p> Abordaje de temas avanzados como programación concurrente, funcional o en tiempo real.</p>
                <li><a href="http://itpn.mx/estudiantes/topicosdeprog.html">Tópicos Avanzados de Programación</a></li>
            </div> 
            <div class="subject-info" id="subject6_6">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Gestión de Proyectos de Software</h3>
                <p>Planeación, control y seguimiento de proyectos, manejo de equipos de trabajo, 
                    y uso de herramientas para gestión ágil y tradicional.</p>
                    <li><a href="http://itpn.mx/estudiantes/gestiondeproyectos.html">Gestión de Proyectos de Software</a></li>
                </div> 
        </div>


        <script>
            function toggleUnits(event, unitsId) {
                event.preventDefault(); // Evita que el enlace recargue la página
                var unitsList = document.getElementById(unitsId);
                unitsList.style.display = unitsList.style.display === "none" ? "block" : "none";
            }
        </script>




        <!--Sevtimo Semestre-->
        <div class="semester">
            <h2 class="title">Sevtimo Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject7_1')">Conmutación y Enrutamiento de Redes de Datos</button>
            <button class="subject-button" onclick="showSubjectInfo('subject7_2')">Administración de Base de Datos</button>
            <button class="subject-button" onclick="showSubjectInfo('subject7_3')">Sistemas Programables</button>
            <button class="subject-button" onclick="showSubjectInfo('subject7_4')">Lenguajes y Autómatas II</button>
            <div class="subject-info" id="subject7_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Conmutación y Enrutamiento de Redes de Datos</h3>
                <p>Configuración y mantenimiento de redes, conmutación de paquetes y protocolos de enrutamiento como OSPF y BGP.</p>
                <li><a href="http://itpn.mx/estudiantes/conmutacionenredes.html">Conmutación y Enrutamiento de Redes de Datos</a></li>
            </div>   
            <div class="subject-info" id="subject7_2">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Administración de Base de Datos</h3>
                <p>Gestión avanzada de bases de datos, incluyendo seguridad, replicación, recuperación ante desastres 
                    y optimización de consultas.</p>
                    <li><a href="http://itpn.mx/estudiantes/admondebd.html">Administración de Base de Datos</a></li>
                </div>   
            <div class="subject-info" id="subject7_3">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Sistemas Programables</h3>
                <p>Diseño y programación de sistemas embebidos y microcontroladores, con aplicaciones prácticas.</p>
                <li><a href="http://itpn.mx/estudiantes/sistemasprogramables.html">Sistemas Programables</a></li>
            </div>   
            <div class="subject-info" id="subject7_4">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Lenguajes y Autómatas II</h3>
                <p>Continuación de la teoría de la computación, incluyendo máquinas de Turing, decidibilidad y complejidad computacional.</p>
                <li><a href="http://itpn.mx/estudiantes/lenguajesyautomatas2.html">Lenguajes y Autómatas II</a></li>
            </div>   
        </div>
        <!--Octavo Semestre-->
        <div class="semester">
            <h2 class="title">Octavo Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject8_1')">Administración de Redes</button>
            <div class="subject-info" id="subject8_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Administración de Redes</h3>
                <p>Configuración, administración y mantenimiento de redes empresariales. 
                    Incluye estrategias de seguridad, monitoreo y resolución de problemas.</p>
                    <li><a href="http://itpn.mx/estudiantes/admonderedes.html">Administracion de Redes</a></li>
                </div>   
        </div>
        <!--Noveno Semestre-->
        <div class="semester">
            <h2 class="title">Noveno Semestre</h2>      
            <button class="subject-button" onclick="showSubjectInfo('subject9_1')">Recidencias</button>
            <div class="subject-info" id="subject9_1">
                <button class="back-button" onclick="showAllSubjects()">Regresar</button>
                <h3>Recidencias</h3>
                <p>Periodo en el que el estudiante aplica los conocimientos adquiridos para desarrollar un proyecto real 
                    en colaboración con una empresa o institución. Se enfoca en resolver problemas prácticos, implementando 
                    soluciones tecnológicas y generando experiencia profesional.</p>
            </div>   
        </div>

        <script>
            function toggleUnits(event, unitsId) {
                event.preventDefault(); // Evita que el enlace recargue la página
                var unitsList = document.getElementById(unitsId);
                unitsList.style.display = unitsList.style.display === "none" ? "block" : "none";
            }
        </script>
    </div>
<footer>
    <p>Tecnológico Nacional de México - Asesorías de Ingeniería en Sistemas Computacionales</p>
</footer>
</body>
    <link rel="stylesheet" href="style.css">
    <script src="animation-ret.js"></script>
</html>