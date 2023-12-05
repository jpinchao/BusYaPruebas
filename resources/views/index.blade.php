@extends('templates.main')
@section('title', 'Inicio')
@section('content')

<img src="{{asset('imagenes/img/bodyLogo.png')}}" style="width: 140px; height: 190px;" alt="logo de BusYa completo para inicio de página">
<img src="{{asset('imagenes/img/Manizales.png')}}" style="width: 200px; height: 80px; float: right;" alt="logo de BusYa completo para inicio de página">

<h1>Bienvenido a la sección de noticias de <em>BusYa</em> </h1>
<p>Encuentra horarios y noticias del transporte interno de la ciudad.</p>
<div id="contenedor">
    <h3 style="text-align: center">Noticias destacadas</h3>
    <br>
    <img src="" alt="">
    <div id="slider">
        <ul>
            <li>
                <a
                    href="https://caracol.com.co/2022/12/31/aumento-de-las-tarifas-del-servicio-publico-en-manizales-no-superara-el-ipc/?rel=buscador_noticias">
                    <img src="https://caracol.com.co/resizer/nSw--eQPGBqMbUn4gwjaOibSsak=/768x576/filters:format(png):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/7FEI2W5ZABCGLPMVNFEVFZFJPA.png"
                        alt="">
                </a>
            </li>
            <li><a href="https://caracol.com.co/emisora/2022/06/08/manizales/1654644818_279556.html">
                    <img
                        src="https://caracol.com.co/resizer/mYS9SCFVtQkg5Rl2UcyCjHxq-Ys=/768x576/filters:format(jpg):quality(70)/cloudfront-us-east-1.images.arcpublishing.com/prisaradioco/HCWYCKSSBZIGHARE2XOHIE2ZL4.jpg">
                </a>
            </li>
            <li>
                <a
                    href="https://www.bcnoticias.com.co/piden-mejorar-el-transporte-publico-hacia-la-ciudadela-del-norte/">
                    <img
                        src="https://i0.wp.com/imagenesbc.com/wp-content/uploads/2020/08/WhatsApp-Image-2020-08-25-at-6_opt.jpg?resize=1140%2C641&ssl=1">
                </a>
            </li>
            <li>
                <a href="https://www.eltiempo.com/archivo/documento/MAM-2046276">
                    <img src="https://www.ciudadregion.com/files/2017/04/IMAGEN_1491494616.jpg"></a>
            </li>
        </ul>
    </div>
    <div id="slider">
        <ul>
            <li>
                <p style="font-size: 20px">Nuevas tarifas para el transporte público en Manizales</p>
                <p style="font-size: 14px">El secretario de Movilidad de la capital de Caldas, Cristian Mateo Loaiza,
                    explicó que, de acuerdo con el estudio de la canasta de precios para el transporte público se
                    definieron las nuevas tarifas para Manizales en el 2023, donde a través de cuatro decretos se busca
                    determinar los precios para taxis, transporte público mixto, Cable Aéreo y transporte terrestre
                    colectivo.</p>
            </li>
            <li>
                <p style="font-size: 20px">Conductor de buseta convulsionó atropelló a un peatón en Manizales.
                <p style="font-size: 14px">
                    Los hechos sucedieron cuando el conductor de una buseta de servicio público de la empresa Autolegal
                    convulsionó y perdió el control del automotor, atropellando a una persona que pasaba por el lugar
                    quien murió de inmediato a causa de las heridas.
                    El profesional del volante tenía sus signos vitales estables</p>
            </li>
            <li>
                <p style="font-size: 18px">Piden mejorar el transporte público hacia la Ciudadela del Norte</p>
                <p style="font-size: 14px">La situación del transporte público hacia la Ciudadela del Norte de Manizales
                    se ha vuelto insostenible para sus usuarios. La gran demanda de personas que necesitan trasladarse a
                    esa zona ha generado una larga espera en los puntos de despacho y en las paradas, ya que el número
                    de busetas disponibles para el servicio es insuficiente.</p>
            </li>
            <li>
                <p style="font-size: 20px">Cada día asaltan un bus en Manizales</p>
                <p style="font-size: 16px">Los atracadores de busetas tienen en jaque a la capital caldense. Un total de
                    11 hurtos a mano armada en las últimas dos semanas pusieron contra las cuerdas a las autoridades y
                    sembraron el miedo entre los usuarios</p>
            </li>
        </ul>
    </div>
</div>
<h3>Empresas asociadas</h3>
<div class="slider">
    <div class="slide-track">
        <div class="slide"><img src="http://creerencaldas.lapatria.com/recursos/img/empresas/logo%20unit.jpg" alt="visa">
        </div>
        <div class="slide"><img src="https://expresosideral.com/wp-content/uploads/2023/05/cropped-Logo-sideral-1.png" alt="mastercard">
        </div>
        <div class="slide"><img src="https://pbs.twimg.com/profile_images/883437294191038464/fO17LKvk_400x400.jpg"
                alt="american express">
        </div>
        <div class="slide"><img src="https://www.eje21.com.co/site/wp-content/uploads/2018/02/Cosmobus-Manizales-e1518706410609.jpg"
                alt="american express">
        </div>
        <div class="slide"><img src="https://guiadelgas.com/wp-content/uploads/2018/05/FOTO-1-MANIZALES-1024x766.jpg"
            alt="american express">
        </div>
        <div class="slide"><img src="http://creerencaldas.lapatria.com/recursos/img/empresas/logo%20unit.jpg" alt="visa">
        </div>
        <div class="slide"><img src="https://expresosideral.com/wp-content/uploads/2023/05/cropped-Logo-sideral-1.png" alt="mastercard">
        </div>
        <div class="slide"><img src="https://pbs.twimg.com/profile_images/883437294191038464/fO17LKvk_400x400.jpg"
                alt="american express">
        </div>
        <div class="slide"><img src="https://www.eje21.com.co/site/wp-content/uploads/2018/02/Cosmobus-Manizales-e1518706410609.jpg"
                alt="american express">
        </div>
        <div class="slide"><img src="https://guiadelgas.com/wp-content/uploads/2018/05/FOTO-1-MANIZALES-1024x766.jpg"
            alt="american express">
        </div>
    </div>
</div>
@endsection
