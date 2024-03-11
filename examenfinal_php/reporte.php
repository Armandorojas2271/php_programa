<?php

require 'vendor/autoload.php';
//reference the Dompdf namespace
use Dompdf\Dompdf;

$pagina = "<h1>Mi Pagina Web</h1>
<p>Bienvenidos Al Snpp</p>
<table border=1 width=100%>
<tr><td><h1>La Empresa Tecno service</h1>
<br> Tecno Service es una empresa informática especializada en ofrecer soluciones tecnológicas innovadoras y a la medida para empresas y particulares. Con un equipo altamente capacitado y comprometido con la excelencia, Tecno Service se destaca por su capacidad para adaptarse a las necesidades específicas de cada cliente y brindar soluciones personalizadas que impulsan el crecimiento y la eficiencia de sus operaciones.

En Tecno Service, nos enorgullecemos de nuestra capacidad para estar a la vanguardia de las últimas tecnologías y tendencias del mercado. Nuestros servicios abarcan desde el desarrollo de software a medida, diseño web y móvil, hasta la implementación de soluciones de ciberseguridad y consultoría tecnológica.

La filosofía de Tecno Service se basa en la calidad, la confiabilidad y la atención al detalle en cada proyecto que emprendemos. Nos esforzamos por establecer relaciones sólidas y duraderas con nuestros clientes, brindando un soporte técnico excepcional y un servicio personalizado que garantiza su satisfacción a largo plazo.

En Tecno Service, creemos en el poder transformador de la tecnología y en su capacidad para impulsar el crecimiento y la innovación en las empresas. Nuestro compromiso es ser un aliado estratégico para nuestros clientes, ayudándoles a alcanzar sus objetivos empresariales a través de soluciones tecnológicas eficientes y a la medida de sus necesidades.
</td></tr>
</table>";

//
$dompdf = new Dompdf();
$dompdf->loadHtml($pagina);

//
$dompdf->setPaper('A4', 'landscape');

//
$dompdf->render();

//
$dompdf->stream();