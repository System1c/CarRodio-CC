<?php
include_once ('fpdf.php');

class regadreps extends FPDF{
    function header(){

        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'Registered Ads',0,0,'C');
        $this->Ln();
        $this->SetFont('Times','',12);
        $this->Ln(20);
    }
    function footer(){
        $this->SetY(-15);
        $this->SetFont('Arial',);
        $this->Cell(0,10,'Page'.$this->PageNo().'/{nb}',0,0,'C');
    }
    function headerTable(){
        $this->SetFont('Times','B',12);
        $this->Cell(20,10,'ID',1,0,'C');
        $this->Cell(40,10,'Title',1,0,'C');
        $this->Cell(20,10,'Cond',1,0,'C');
        $this->Cell(20,10,'Type',1,0,'C');
        $this->Cell(20,10,'Brand',1,0,'C');
        $this->Cell(30,10,'Price',1,0,'C');
        $this->Cell(20,10,'Sell ID',1,0,'C');
        $this->Cell(40,10,'Posted Date',1,0,'C');
        $this->Cell(30,10,'Mileage',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt= $db->query ('select id, title, vcondition, type, brand, price, sellerid, postdate, mileage from advert where status="v" ');
        while ($data =$stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20,10,$data->id,1,0,'L');
            $this->Cell(40,10,$data->title,1,0,'L');
            $this->Cell(20,10,$data->vcondition,1,0,'L');
            $this->Cell(20,10,$data->type,1,0,'L');
            $this->Cell(20,10,$data->brand,1,0,'L');
            $this->Cell(30,10,$data->price,1,0,'L');
            $this->Cell(20,10,$data->sellerid,1,0,'L');
            $this->Cell(40,10,$data->postdate,1,0,'L');
            $this->Cell(30,10,$data->mileage,1,0,'L');
            $this->Ln();
        }
    }
    function genregadreport(){
        $pdf =new regadreps();
        $pdf->AliasNbPages();
        $pdf ->AddPage('L','A4',0);
        $pdf->headerTable();
        $pdf->viewTable(new PDO('mysql:host=localhost;dbname=carrodio','root',''));
        $pdf->Output();
    }
}
?>
