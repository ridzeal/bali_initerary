<?php
require('includes/fpdf.php');
$param = $_GET;

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$width = $pdf->GetPageWidth();

// Images
$pdf->Image("images/background2.jpg", 0, 0, $width, 88);
$pdf->Image("images/circle-orange.png", $width - 40, 72);
$pdf->Image("images/calendar.png", 10, 95, 40, 35);
$pdf->Image("images/logo.png", $width - 40, 10, 30, 20);
$pdf->Image("images/circle-blue.png", $width - 30, 110);
$pdf->Image("images/circle-blue.png", $width - 30, 127);
$pdf->Image("images/circle-blue.png", $width - 30, 144);
$pdf->Image("images/icon1.png", $width - 26.5, 113, 8, 8);
$pdf->Image("images/icon2.png", $width - 26.5, 130, 8, 8);
$pdf->Image("images/icon3.png", $width - 26.5, 147, 8, 8);

// White Label
$pdf->SetTextColor(255,255,255);

$pdf->SetXY(5,5);
$pdf->SetFont('Arial','',12);
$pdf->Cell(40,10, $param['header1']);

$pdf->SetXY(5,75);
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10, $param['header2']);

$pdf->SetXY($width - 43,80);
$pdf->SetFont('Arial','',16);
$pdf->Cell(40,10, '4 days', 0, 0, 'C');
$pdf->SetXY($width - 43, 87);
$pdf->Cell(40,10, '3 nights', 0, 0, 'C');

// Red Label
$pdf->SetTextColor(255,11,19);
$pdf->SetXY(55,100);
$pdf->SetFont('Arial','',24);
$pdf->Cell(40,10, '4 Day', 0, 0, 'L');
$pdf->SetXY(55,115);
$pdf->SetFont('Arial','',42);
$pdf->Cell(40,10, 'Trip Planner', 0, 0, 'L');

// Orange Label
$pdf->SetTextColor(224,96,3);
$pdf->SetFont('Arial','',24);
$pdf->SetXY(30,150);
$pdf->MultiCell(20,10, 'Day 01', 0, 'C');
$pdf->SetXY(30,185);
$pdf->MultiCell(20,10, 'Day 02', 0, 'C');
$pdf->SetXY(30,220);
$pdf->MultiCell(20,10, 'Day 03', 0, 'C');
$pdf->SetXY(30,255);
$pdf->MultiCell(20,10, 'Day 04', 0, 'C');

// Black Plan Text Area
$pdf->SetTextColor(0,0,0);
$pdf->SetDrawColor(200,200,200);
$pdf->SetFont('Arial','',12);
$pdf->SetXY(60,150);
$pdf->MultiCell(110,20, $param['day1'], 'L');
$pdf->SetXY(60,185);
$pdf->MultiCell(110,20, $param['day2'], 'L');
$pdf->SetXY(60,220);
$pdf->MultiCell(110,20, $param['day3'], 'L');
$pdf->SetXY(60,255);
$pdf->MultiCell(110,20, $param['day4'], 'L');


$pdf->Output();
