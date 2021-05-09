<?php
include_once('fpdf.php');

class highrads extends FPDF
{
    function header()
    {

        $this->SetFont('Arial', 'B', 14);
        $this->Cell(276, 5, 'Highest Reached Adverts', 0, 0, 'C');
        $this->Ln();
        $this->SetFont('Times', '', 12);
        $this->Ln(20);
    }

    function footer()
    {
        $this->SetY(-15);
        $this->SetFont('Arial',);
        $this->Cell(0, 10, 'Page' . $this->PageNo() . '/{nb}', 0, 0, 'C');
    }

    function headerTable()
    {
        $this->SetFont('Times', 'B', 12);
        $this->Cell(20, 10, 'ID', 1, 0, 'C');
        $this->Cell(40, 10, 'Title', 1, 0, 'C');
        $this->Cell(20, 10, 'Seller ID', 1, 0, 'C');
        $this->Cell(20, 10, 'Rating', 1, 0, 'C');

        $this->Ln();
    }

    function viewTable($db)
    {
        $this->SetFont('Times', '', 12);
        $stmt = $db->query('select advert.id, advert.title, advert.sellerid, adrate.rate from advert inner join adrate on advert.id=adrate.adid where adrate.rate>=3 ');
        while ($data = $stmt->fetch(PDO::FETCH_OBJ)) {
            $this->Cell(20, 10, $data->id, 1, 0, 'L');
            $this->Cell(40, 10, $data->title, 1, 0, 'L');
            $this->Cell(20, 10, $data->sellerid, 1, 0, 'L');
            $this->Cell(20, 10, $data->rate, 1, 0, 'L');

            $this->Ln();
        }
    }

    function genhighrads()
    {
        $pdf = new highrads();
        $pdf->AliasNbPages();
        $pdf->AddPage('L', 'A4', 0);
        $pdf->headerTable();
        $pdf->viewTable(new PDO('mysql:host=localhost;dbname=carrodio', 'root', ''));
        $pdf->Output();
    }
}

?>