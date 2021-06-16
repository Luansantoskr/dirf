<?php

namespace SRC\Infrastructure\Repository;

use SRC\Domain\Repository;

class DirfRepository implements Repository
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function findAll(): array
    {
        $stmt = $this->pdo->query("SELECT
            ISNULL(d.jan, 0) as VL_01,
            ISNULL(d.fev, 0) as VL_02,
            ISNULL(d.mar, 0) as VL_03,
            ISNULL(d.abr, 0) as VL_04,
            ISNULL(d.mai, 0) as VL_05,
            ISNULL(d.jun, 0) as VL_06,
            ISNULL(d.jul, 0) as VL_07,
            ISNULL(d.ago, 0) as VL_08,
            ISNULL(d.setembro, 0) as VL_09,
            ISNULL(d.outubro, 0) as VL_10,
            ISNULL(d.nov, 0) as VL_11,
            ISNULL(d.dez, 0) as VL_12,
            ISNULL(d.jan, 0) as TX_01,
            ISNULL(d.fev, 0) as TX_02,
            ISNULL(d.mar, 0) as TX_03,
            ISNULL(d.abr, 0) as TX_04,
            ISNULL(d.mai, 0) as TX_05,
            ISNULL(d.jun, 0) as TX_06,
            ISNULL(d.jul, 0) as TX_07,
            ISNULL(d.ago, 0) as TX_08,
            ISNULL(d.setembro, 0) as TX_09,
            ISNULL(d.outubro, 0) as TX_10,
            ISNULL(d.nov, 0) as TX_11,
            ISNULL(d.dez, 0) as TX_12,
            c.ENDE,
            c.CEP,
            c.BAIR,
            c.CIDA,
            c.UF,
            c.CNPJ,
            c.RAZAO_SOCIAL
        FROM
            dirf as d
            INNER JOIN FBR_SYS_T_CLIE as c ON d.cnpj = c.CNPJ");
        return $stmt->execute() ? $stmt->fetchAll(\PDO::FETCH_ASSOC) : [];
    }

    public function findByCode($code): array
    {
        $stmt = $this->pdo->prepare("SELECT
    ISNULL(d.jan, 0) as VL_01,
    ISNULL(d.fev, 0) as VL_02,
    ISNULL(d.mar, 0) as VL_03,
    ISNULL(d.abr, 0) as VL_04,
    ISNULL(d.mai, 0) as VL_05,
    ISNULL(d.jun, 0) as VL_06,
    ISNULL(d.jul, 0) as VL_07,S
    ISNULL(d.ago, 0) as VL_08,
    ISNULL(d.setembro, 0) as VL_09,
    ISNULL(d.outubro, 0) as VL_10,
    ISNULL(d.nov, 0) as VL_11,
    ISNULL(d.dez, 0) as VL_12,
    ISNULL(d.jan, 0) as TX_01,
    ISNULL(d.fev, 0) as TX_02,
    ISNULL(d.mar, 0) as TX_03,
    ISNULL(d.abr, 0) as TX_04,
    ISNULL(d.mai, 0) as TX_05,
    ISNULL(d.jun, 0) as TX_06,
    ISNULL(d.jul, 0) as TX_07,
    ISNULL(d.ago, 0) as TX_08,
    ISNULL(d.setembro, 0) as TX_09,
    ISNULL(d.outubro, 0) as TX_10,
    ISNULL(d.nov, 0) as TX_11,
    ISNULL(d.dez, 0) as TX_12,
    c.ENDE,
    c.CEP,
    c.BAIR,
    c.CIDA,
    c.UF,
    c.CNPJ,
    c.RAZAO_SOCIAL
FROM
    FBR_SYS_T_CLIE as c
        LEFT JOIN dirf as d ON d.cnpj = c.CNPJ
WHERE
        c.CNPJ LIKE ?");
        $stmt->bindValue(1, $code.'%');
        $stmt->execute();
        $result = $stmt->fetch(\PDO::FETCH_ASSOC);
        return $result ? $result : [];
    }

    public function findMatriz($code): array
    {
        $stmt = $this->pdo->prepare("SELECT
            c.ENDE,
            c.CEP,
            c.BAIR,
            c.CIDA,
            c.UF,
            c.CNPJ,
            c.RAZAO_SOCIAL
        FROM
            FBR_SYS_T_CLIE as c
        WHERE
            c.CNPJ LIKE ?");
        $stmt->bindValue(1, $code.'%');
        $stmt->execute();
        return $stmt->fetch(\PDO::FETCH_ASSOC);
    }

    public function findSummarized($code): array
    {
        $stmt = $this->pdo->prepare("SELECT
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jan) + CONVERT(NUMERIC, d.fev) + CONVERT(NUMERIC, d.mar) + CONVERT(NUMERIC, d.abr) + CONVERT(NUMERIC, d.mai) + CONVERT(NUMERIC, d.jun) + CONVERT(NUMERIC, d.jul) + CONVERT(NUMERIC, d.ago) + CONVERT(NUMERIC, d.setembro) + CONVERT(NUMERIC, d.outubro) + CONVERT(NUMERIC, d.nov) + CONVERT(NUMERIC, d.dez), 0), 'c', 'pt-br') as VL_TOTAL,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jan) + CONVERT(NUMERIC, d.fev) + CONVERT(NUMERIC, d.mar) + CONVERT(NUMERIC, d.abr) + CONVERT(NUMERIC, d.mai) + CONVERT(NUMERIC, d.jun) + CONVERT(NUMERIC, d.jul) + CONVERT(NUMERIC, d.ago) + CONVERT(NUMERIC, d.setembro) + CONVERT(NUMERIC, d.outubro) + CONVERT(NUMERIC, d.nov) + CONVERT(NUMERIC, d.dez), 0)*0.015, 'c', 'pt-br') as TX_TOTAL,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jan), 0), 'c', 'pt-br') as VL_01,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.fev), 0), 'c', 'pt-br') as VL_02,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.mar), 0), 'c', 'pt-br') as VL_03,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.abr), 0), 'c', 'pt-br') as VL_04,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.mai), 0), 'c', 'pt-br') as VL_05,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jun), 0), 'c', 'pt-br') as VL_06,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jul), 0), 'c', 'pt-br') as VL_07,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.ago), 0), 'c', 'pt-br') as VL_08,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.setembro), 0), 'c', 'pt-br') as VL_09,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.outubro), 0), 'c', 'pt-br') as VL_10,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.nov), 0), 'c', 'pt-br') as VL_11,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.dez), 0), 'c', 'pt-br') as VL_12,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jan), 0)*0.015, 'c', 'pt-br') as TX_01,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.fev), 0)*0.015, 'c', 'pt-br') as TX_02,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.mar), 0)*0.015, 'c', 'pt-br') as TX_03,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.abr), 0)*0.015, 'c', 'pt-br') as TX_04,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.mai), 0)*0.015, 'c', 'pt-br') as TX_05,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jun), 0)*0.015, 'c', 'pt-br') as TX_06,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.jul), 0)*0.015, 'c', 'pt-br') as TX_07,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.ago), 0)*0.015, 'c', 'pt-br') as TX_08,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.setembro), 0)*0.015, 'c', 'pt-br') as TX_09,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.outubro), 0)*0.015, 'c', 'pt-br') as TX_10,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.nov), 0)*0.015, 'c', 'pt-br') as TX_11,
            FORMAT(ISNULL(CONVERT(NUMERIC, d.dez), 0)*0.015, 'c', 'pt-br') as TX_12,
            c.ENDE,
            c.CEP,
            c.BAIR,
            c.CIDA,
            c.UF,
            c.CNPJ,
            c.RAZAO_SOCIAL
        FROM
            FBR_SYS_T_CLIE as c
            LEFT JOIN dirf as d ON d.cnpj = c.CNPJ
        WHERE
            d.CNPJ LIKE ?");
        $stmt->bindValue(1, "{$code}%");
        $stmt->execute();

        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}