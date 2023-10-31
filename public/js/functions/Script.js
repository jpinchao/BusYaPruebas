function abrirVentanaEmergente(imagenUrl) {
    var anchoVentana = 600;
    var altoVentana = 400; 
    var left = (screen.width - anchoVentana) / 2;
    var top = (screen.height - altoVentana) / 2;
    var ventana = window.open("", "ventanaEmergente", "width=" + anchoVentana + ",height=" + altoVentana + ",left=" + left + ",top=" + top);
    ventana.document.write("<img src='" + imagenUrl + "' width='600' height='150'>");
    ventana.document.write("<p> Los datos personales aquí recolectados serán recolectados, almacenados, procesados, usados, compilados, transmitidos, transferidos, actualizados y dispuestos conforme lo establece la Ley 1581 de 2012, el Decreto 1377 de 2013, compilado en el capítulo 25 del Decreto 1074 de 2015 (Único Reglamentario del Sector Comercio, industria y Turismo) y la Política de Tratamiento y Protección de Datos Personales del Ministerio de Justicia y del Derecho </p>");
    ventana.document.write("<p> El Ministerio de Justicia y el Derecho como responsable del tratamiento de los datos personales aquí consignados, en cumplimiento de la Ley 1581 de 2012 y del Decreto 1377 de 2013, informa al titular de los datos personales que le asisten los siguientes derechos: acceder a sus datos personales; conocer, actualizar y rectificar sus datos personales; solicitar prueba de la autorización otorgada; revocar la autorización y/o solicitar la supresión del dato; presentar quejas ante la Superintendencia de Industria y Comercio y en general todos los derechos consignados en el artículo 8 de la Ley 1581 de 2012. </p>");
}