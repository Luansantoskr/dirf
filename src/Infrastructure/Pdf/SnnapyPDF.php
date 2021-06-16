<?php


namespace SRC\Infrastructure\Pdf;

use SRC\Domain\PDF;

class SnnapyPDF implements PDF
{
    private $options;

    private $pdf;

    public function __construct()
    {
        $this->options = [
            'lowquality' => true,
            'minimum-font-size' => 13,
            'encoding' => 'UTF-8',
            'margin-top'    => 5,
            'margin-right'  => 20,
            'margin-bottom' => 5,
        ];
        $pathWkhtmltopdf = __DIR__ . '/../../../vendor/h4cc/wkhtmltopdf-amd64/bin/wkhtmltopdf-amd64';
        $this->pdf = new \Knp\Snappy\Pdf($pathWkhtmltopdf);
        $this->pdf->setOption('encoding', 'UTF-8');
        $this->pdf->setOption('lowquality', true);
        $this->pdf->setOption("footer-spacing", 5);
        $this->pdf->setOption('footer-font-size', 8);
        $this->pdf->setOption('orientation', 'Portrait');
    }


    public function generateWebFile(string $content)
    {
        header("Content-type: application/pdf");
        echo $this->pdf->getOutputFromHtml($content, $this->options);
    }

    public function generateLocalFile(string $content, string $name)
    {
        $output = __DIR__."/../Documents/{$name}.pdf";
        var_dump($output);
        $this->pdf->generateFromHtml($content, $output, $this->options, true);
    }
}