<?php
require_once('tcpdf/tcpdf.php');
// Verificar si se ha enviado el formulario de reserva
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Incluir la biblioteca TCPDF

    // Recibir datos del formulario de reserva
    $nombre_cliente = isset($_POST['nombre_cliente']) ? htmlspecialchars($_POST['nombre_cliente']) : '';
    $email_cliente = isset($_POST['email_cliente']) ? htmlspecialchars($_POST['email_cliente']) : '';
    $telefono_cliente = isset($_POST['telefono_cliente']) ? htmlspecialchars($_POST['telefono_cliente']) : '';
    $servicio = isset($_POST['servicio']) ? htmlspecialchars($_POST['servicio']) : '';
    $fecha_llegada = isset($_POST['fecha_llegada']) ? htmlspecialchars($_POST['fecha_llegada']) : '';
    $hora_reserva = isset($_POST['hora_reserva']) ? htmlspecialchars($_POST['hora_reserva']) : '';

    define('PDF_PAGE_ORIENTATION', 'P');
    define('PDF_UNIT', 'mm');
    define('PDF_PAGE_FORMAT', 'A4');
    define('PDF_CREATOR', 'Hotel Oasis');

    // Crear instancia de TCPDF
    $pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);

    // Establecer información del documento
    $pdf->SetCreator(PDF_CREATOR);
    $pdf->SetAuthor('Hotel Oasis');
    $pdf->SetTitle('Confirmación de Reserva');
    $pdf->SetSubject('Confirmación de Reserva');
    $pdf->SetKeywords('Reserva, Hotel, Confirmación');

    // Agregar una página
    $pdf->AddPage();

    // Escribir el contenido del PDF
    $html = '<h1>Confirmación de Reserva</h1>';
    $html .= '<p>Su reserva ha sido confirmada. A continuación, se muestra la información de su reserva:</p>';
    $html .= '<ul>';
    $html .= '<li><strong>Nombre del titular:</strong> ' . $nombre_cliente . '</li>';
    $html .= '<li><strong>Email:</strong> ' . $email_cliente . '</li>';
    $html .= '<li><strong>Teléfono:</strong> ' . $telefono_cliente . '</li>';
    $html .= '<li><strong>Servicio:</strong> ' . $servicio . '</li>';
    $html .= '<li><strong>Fecha de llegada:</strong> ' . $fecha_llegada . '</li>';
    $html .= '<li><strong>Hora de reserva:</strong> ' . $hora_reserva . '</li>';
    // Agregar más detalles si es necesario
    $html .= '</ul>';

    // Escribir el contenido en el PDF
    $pdf->writeHTML($html, true, false, true, false, '');

    // Finalizar y descargar el PDF
    $pdf->Output('confirmacion_reserva.pdf', 'D');
    exit;
}
?>
