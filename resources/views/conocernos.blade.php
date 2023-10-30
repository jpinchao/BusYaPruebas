@extends('templates.main')
@section('title', 'Conocernos')
@section('content')
    <h1 style="text-align: center;">Nuestra Empresa</h1>
    <br>
    <div class="container text-center">
        
            <div class="col" id="DivMision">
                <h3>MISIÓN</h3>
                <p style="font-size: 20px;"> En <em>BusYa</em>, nuestra misión es facilitar la vida de las
                    personas al proporcionar acceso inmediato y confiable a la información esencial del
                    transporte público. Nos dedicamos a mejorar la movilidad urbana al ofrecer a
                    nuestros usuarios datos precisos y actualizados sobre las rutas de los autobuses,
                    los horarios y los posibles retrasos, todo en tiempo real. Estamos comprometidos con
                    la creación de una experiencia de viaje sin complicaciones y eficiente para todos,
                    fomentando así un mayor uso del transporte público y contribuyendo positivamente al
                    desarrollo de comunidades más conectadas y sostenibles.</p>
            </div>
            <br>
            <div class="col" id="DivVision">
                <h3>VISIÓN</h3>
                <p style="font-size: 20px;">En <em>BusYa</em>, imaginamos un mundo donde el transporte público es sinónimo de
                        eficiencia, comodidad y confiabilidad. Nos esforzamos por crear una experiencia de viaje perfecta
                        para todos los ciudadanos, proporcionando acceso instantáneo y en tiempo real a información precisa
                        sobre rutas de buses, horarios, y posibles retrasos. Nuestra visión es transformar la forma en que
                        las personas se mueven en la ciudad, haciendo que el transporte público sea la opción preferida para
                        todos.</p>
            </div>
            <br>
            <div class="col" id="DivValores" >
                <h3>VALORES CORPORATIVOS</h3>
                <li style="font-size: 20px;">Innovación: Nos dedicamos a la continua búsqueda de soluciones
                    tecnológicas avanzadas para mejorar la experiencia de viaje de nuestros usuarios y optimizar
                    la eficiencia del transporte público. </li>
                <li style="font-size: 20px;">Confianza: Construimos relaciones sólidas y confiables con nuestros
                    usuarios, socios y comunidades, basadas en la transparencia y la integridad.</li>
                <li style="font-size: 20px;">Accesibilidad: Creemos en un transporte público accesible para todos.
                    Nos esforzamos por hacer que la información y los servicios de BusYa estén disponibles para
                    personas de todas las edades y habilidades. </li>
                <li style="font-size: 20px;">Colaboración: Trabajamos en estrecha colaboración con las autoridades
                    locales, operadores de transporte y la comunidad para mejorar continuamente nuestras soluciones
                    y hacer que el transporte público sea más eficiente y amigable para el medio ambiente.</li>
            </div>
            <br>
            <div id="DivPolitica">
                <h3>POLIÍTICAS DE BUSYA</h3>
                <li style="font-size: 20px;">Privacidad y Seguridad de los Datos: Garantizamos la privacidad y seguridad
                    de los datos de nuestros usuarios. La información personal y de viaje se maneja con total
                    confidencialidad y se protege mediante medidas de seguridad avanzadas para prevenir accesos
                    no autorizados. </li>
                <li style="font-size: 20px; list-style-position: inside;">Exactitud y Actualización de la Información: Nos comprometemos a proporcionar
                    información precisa y actualizada sobre rutas, horarios y retrasos. Nos esforzamos por mantener
                    nuestra base de datos constantemente actualizada para ofrecer a nuestros usuarios datos fiables en
                    tiempo real.</li>
                
            </div>
        
    </div>
@endsection
