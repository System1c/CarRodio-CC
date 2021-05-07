<?php
require "fpdf.php";




class reports extends FPDF{
    function header(){
        $this->SetFont('Arial','B',14);
        $this->Cell(276,5,'Seller Details',0,0,'C');
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
        $this->Cell(40,10,'First Name',1,0,'C');
        $this->Cell(40,10,'Last Name',1,0,'C');
        $this->Cell(40,10,'Email',1,0,'C');
        $this->Ln();
    }
    function viewTable($db){
        $this->SetFont('Times','',12);
        $stmt= $db->query('select * from users');
        while ($data =$stmt->fetch(PDO::FETCH_OBJ)){
            $this->Cell(20,10,$data->id,1,0,'L');
            $this->Cell(40,10,$data->firstname,1,0,'L');
            $this->Cell(40,10,$data->lastname,1,0,'L');
            $this->Cell(40,10,$data->email,1,0,'L');
            $this->Ln();
        }
    }
    function genReport(){
        $pdf =new reports();
        $pdf->AliasNbPages();
        $pdf ->AddPage('L','A4',0);
        $pdf->headerTable();
        $pdf->viewTable(new PDO('mysql:host=localhost;dbname=carrodio','root',''));
        $pdf->Output();
    }

}

?>