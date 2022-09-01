<?php

declare(strict_types=1);

class CreditNoteBad implements ExportInterface
{

    /**
     * @throws NotUsedFeatureException
     */
    public function getPDF()
    {
        throw new \NotUsedFeatureException();
    }

    public function getCSV()
    {
        // TODO: Implement getCSV() method.
    }
}