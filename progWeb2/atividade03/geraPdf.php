<?php

require __DIR__.'/vendor/autoload.php';


// Criar uma instância do mPDF
$mpdf = new \Mpdf\Mpdf();

// Adicionar conteúdo ao PDF
$mpdf->WriteHTML('<h1>Teste Gerar PDF</h1>');

// Saída do PDF para o navegador
$mpdf->Output();
