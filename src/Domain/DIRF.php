<?php

namespace SRC\Domain;

class DIRF
{
    private $repository;

    private $pdf;

    public function __construct(
        Repository $repository,
        PDF $pdf
    )
    {
        $this->repository = $repository;
        $this->pdf = $pdf;
    }

    public function generateAll()
    {
        $information = $this->repository->findAll();

        if (!$information) {
            throw new \Exception("Lojista não encontrado!");
        }

        foreach ($information as $data) {
            $data['VL_TOTAL'] = "R$ ".number_format($data['VL_01'] + $data['VL_02'] + $data['VL_03'] + $data['VL_04'] + $data['VL_05'] + $data['VL_06'] + $data['VL_07'] + $data['VL_08'] + $data['VL_09'] + $data['VL_10'] + $data['VL_11'] + $data['VL_12'], 2, ',', '.');
            $data['TX_TOTAL'] = "R$ ".number_format(($data['TX_01'] + $data['TX_02'] + $data['TX_03'] + $data['TX_04'] + $data['TX_05'] + $data['TX_06'] + $data['TX_07'] + $data['TX_08'] + $data['TX_09'] + $data['TX_10'] + $data['TX_11'] + $data['TX_12']) * 0.015, 2, ',', '.');
            $data['VL_01'] = "R$ ".number_format($data['VL_01'], 2, ',', '.');
            $data['VL_02'] = "R$ ".number_format($data['VL_02'], 2, ',', '.');
            $data['VL_03'] = "R$ ".number_format($data['VL_03'], 2, ',', '.');
            $data['VL_04'] = "R$ ".number_format($data['VL_04'], 2, ',', '.');
            $data['VL_05'] = "R$ ".number_format($data['VL_05'], 2, ',', '.');
            $data['VL_06'] = "R$ ".number_format($data['VL_06'], 2, ',', '.');
            $data['VL_07'] = "R$ ".number_format($data['VL_07'], 2, ',', '.');
            $data['VL_08'] = "R$ ".number_format($data['VL_08'], 2, ',', '.');
            $data['VL_09'] = "R$ ".number_format($data['VL_09'], 2, ',', '.');
            $data['VL_10'] = "R$ ".number_format($data['VL_10'], 2, ',', '.');
            $data['VL_11'] = "R$ ".number_format($data['VL_11'], 2, ',', '.');
            $data['VL_12'] = "R$ ".number_format($data['VL_12'], 2, ',', '.');
            $data['TX_01'] = "R$ ".number_format($data['TX_01'] * 0.015, 2, ',', '.');
            $data['TX_02'] = "R$ ".number_format($data['TX_02'] * 0.015, 2, ',', '.');
            $data['TX_03'] = "R$ ".number_format($data['TX_03'] * 0.015, 2, ',', '.');
            $data['TX_04'] = "R$ ".number_format($data['TX_04'] * 0.015, 2, ',', '.');
            $data['TX_05'] = "R$ ".number_format($data['TX_05'] * 0.015, 2, ',', '.');
            $data['TX_06'] = "R$ ".number_format($data['TX_06'] * 0.015, 2, ',', '.');
            $data['TX_07'] = "R$ ".number_format($data['TX_07'] * 0.015, 2, ',', '.');
            $data['TX_08'] = "R$ ".number_format($data['TX_08'] * 0.015, 2, ',', '.');
            $data['TX_09'] = "R$ ".number_format($data['TX_09'] * 0.015, 2, ',', '.');
            $data['TX_10'] = "R$ ".number_format($data['TX_10'] * 0.015, 2, ',', '.');
            $data['TX_11'] = "R$ ".number_format($data['TX_11'] * 0.015, 2, ',', '.');
            $data['TX_12'] = "R$ ".number_format($data['TX_12'] * 0.015, 2, ',', '.');

            $content = require 'report.php';
            $this->pdf->generateLocalFile($content, $data['CNPJ']);
        }
    }

    public function generateByCode($code)
    {
        $data = $this->repository->findByCode($code);

        if (!$data) {
            throw new \Exception("Lojista não encontrado!");
        }
//        var_dump($data);
        $data['VL_TOTAL'] = "R$ ".number_format($data['VL_01'] + $data['VL_02'] + $data['VL_03'] + $data['VL_04'] + $data['VL_05'] + $data['VL_06'] + $data['VL_07'] + $data['VL_08'] + $data['VL_09'] + $data['VL_10'] + $data['VL_11'] + $data['VL_12'], 2, ',', '.');
        $data['TX_TOTAL'] = "R$ ".number_format(($data['TX_01'] + $data['TX_02'] + $data['TX_03'] + $data['TX_04'] + $data['TX_05'] + $data['TX_06'] + $data['TX_07'] + $data['TX_08'] + $data['TX_09'] + $data['TX_10'] + $data['TX_11'] + $data['TX_12']) * 0.015, 2, ',', '.');
        $data['VL_01'] = "R$ ".number_format($data['VL_01'], 2, ',', '.');
        $data['VL_02'] = "R$ ".number_format($data['VL_02'], 2, ',', '.');
        $data['VL_03'] = "R$ ".number_format($data['VL_03'], 2, ',', '.');
        $data['VL_04'] = "R$ ".number_format($data['VL_04'], 2, ',', '.');
        $data['VL_05'] = "R$ ".number_format($data['VL_05'], 2, ',', '.');
        $data['VL_06'] = "R$ ".number_format($data['VL_06'], 2, ',', '.');
        $data['VL_07'] = "R$ ".number_format($data['VL_07'], 2, ',', '.');
        $data['VL_08'] = "R$ ".number_format($data['VL_08'], 2, ',', '.');
        $data['VL_09'] = "R$ ".number_format($data['VL_09'], 2, ',', '.');
        $data['VL_10'] = "R$ ".number_format($data['VL_10'], 2, ',', '.');
        $data['VL_11'] = "R$ ".number_format($data['VL_11'], 2, ',', '.');
        $data['VL_12'] = "R$ ".number_format($data['VL_12'], 2, ',', '.');
        $data['TX_01'] = "R$ ".number_format($data['TX_01'] * 0.015, 2, ',', '.');
        $data['TX_02'] = "R$ ".number_format($data['TX_02'] * 0.015, 2, ',', '.');
        $data['TX_03'] = "R$ ".number_format($data['TX_03'] * 0.015, 2, ',', '.');
        $data['TX_04'] = "R$ ".number_format($data['TX_04'] * 0.015, 2, ',', '.');
        $data['TX_05'] = "R$ ".number_format($data['TX_05'] * 0.015, 2, ',', '.');
        $data['TX_06'] = "R$ ".number_format($data['TX_06'] * 0.015, 2, ',', '.');
        $data['TX_07'] = "R$ ".number_format($data['TX_07'] * 0.015, 2, ',', '.');
        $data['TX_08'] = "R$ ".number_format($data['TX_08'] * 0.015, 2, ',', '.');
        $data['TX_09'] = "R$ ".number_format($data['TX_09'] * 0.015, 2, ',', '.');
        $data['TX_10'] = "R$ ".number_format($data['TX_10'] * 0.015, 2, ',', '.');
        $data['TX_11'] = "R$ ".number_format($data['TX_11'] * 0.015, 2, ',', '.');
        $data['TX_12'] = "R$ ".number_format($data['TX_12'] * 0.015, 2, ',', '.');

//var_dump($data);
        $content = require 'report.php';
        $this->pdf->generateWebFile($content, $code);
    }

    /*public function generateSummarizedReportByIdentifier($identifier)
    {
        $data = $this->repository->findMatriz($identifier.'0001');
        $information = $this->repository->findSummarized($identifier);

        foreach ($information as $info) {
            $data['VL_TOTAL'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_TOTAL']);
            $data['TX_TOTAL'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_TOTAL']);
            $data['VL_01'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_01']);
            $data['VL_02'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_02']);
            $data['VL_03'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_03']);
            $data['VL_04'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_04']);
            $data['VL_05'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_05']);
            $data['VL_06'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_06']);
            $data['VL_07'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_07']);
            $data['VL_08'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_08']);
            $data['VL_09'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_09']);
            $data['VL_10'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_10']);
            $data['VL_11'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_11']);
            $data['VL_12'] += str_replace(['R$ ', ','], ['', '.'], $info['VL_12']);
            $data['TX_01'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_01']);
            $data['TX_02'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_02']);
            $data['TX_03'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_03']);
            $data['TX_04'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_04']);
            $data['TX_05'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_05']);
            $data['TX_06'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_06']);
            $data['TX_07'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_07']);
            $data['TX_08'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_08']);
            $data['TX_09'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_09']);
            $data['TX_10'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_10']);
            $data['TX_11'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_11']);
            $data['TX_12'] += str_replace(['R$ ', ','], ['', '.'], $info['TX_11']);
        }
        $data['VL_TOTAL'] = "R$ ".number_format($data['VL_TOTAL'], 2, ',', '.');
        $data['TX_TOTAL'] = "R$ ".number_format($data['TX_TOTAL'], 2, ',', '.');
        $data['VL_01'] = "R$ ".number_format($data['VL_01'], 2, ',', '.');
        $data['VL_02'] = "R$ ".number_format($data['VL_02'], 2, ',', '.');
        $data['VL_03'] = "R$ ".number_format($data['VL_03'], 2, ',', '.');
        $data['VL_04'] = "R$ ".number_format($data['VL_04'], 2, ',', '.');
        $data['VL_05'] = "R$ ".number_format($data['VL_05'], 2, ',', '.');
        $data['VL_06'] = "R$ ".number_format($data['VL_06'], 2, ',', '.');
        $data['VL_07'] = "R$ ".number_format($data['VL_07'], 2, ',', '.');
        $data['VL_08'] = "R$ ".number_format($data['VL_08'], 2, ',', '.');
        $data['VL_09'] = "R$ ".number_format($data['VL_09'], 2, ',', '.');
        $data['VL_10'] = "R$ ".number_format($data['VL_10'], 2, ',', '.');
        $data['VL_11'] = "R$ ".number_format($data['VL_11'], 2, ',', '.');
        $data['VL_12'] = "R$ ".number_format($data['VL_12'], 2, ',', '.');
        $data['TX_01'] = "R$ ".number_format($data['TX_01'], 2, ',', '.');
        $data['TX_02'] = "R$ ".number_format($data['TX_02'], 2, ',', '.');
        $data['TX_03'] = "R$ ".number_format($data['TX_03'], 2, ',', '.');
        $data['TX_04'] = "R$ ".number_format($data['TX_04'], 2, ',', '.');
        $data['TX_05'] = "R$ ".number_format($data['TX_05'], 2, ',', '.');
        $data['TX_06'] = "R$ ".number_format($data['TX_06'], 2, ',', '.');
        $data['TX_07'] = "R$ ".number_format($data['TX_07'], 2, ',', '.');
        $data['TX_08'] = "R$ ".number_format($data['TX_08'], 2, ',', '.');
        $data['TX_09'] = "R$ ".number_format($data['TX_09'], 2, ',', '.');
        $data['TX_10'] = "R$ ".number_format($data['TX_10'], 2, ',', '.');
        $data['TX_11'] = "R$ ".number_format($data['TX_11'], 2, ',', '.');
        $data['TX_12'] = "R$ ".number_format($data['TX_12'], 2, ',', '.');
        $content = require 'report.php';
//        $this->generateWebFile($content);
        $snappy = $this->getSnappyInstance();
        $snappy->generateFromHtml($content, 'dirfs/'.$identifier.'.pdf', [], true);
    }*/
}