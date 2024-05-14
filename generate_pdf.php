<?php
if (isset($_GET['username'], $_GET['email'], $_GET['password'])) {
    $username = $_GET['username'];
    $email = $_GET['email'];
    $password = $_GET['password'];

    require("fpdf/fpdf.php");

    $pdf = new FPDF();
    $pdf->AddPage();

    $pdf->SetFont("Arial", "B", 17);
    $pdf->Cell(0, 10, "Registration Details", 1, 1, 'C');

    $pdf->SetFont("Arial", "", 13);
    $pdf->Cell(0, 10, "Username  :   $username", 1, 1);
    $pdf->Cell(0, 10, "Email   :   $email", 1, 1);
    $pdf->Cell(0, 10, "Password      :   $password", 1, 1);

    $pdf->Cell(0, 50, "Thanks", 1, 1, 'C');

    $pdf->Output();
} else {
    echo "Error: Required parameters are missing.";
}
?>