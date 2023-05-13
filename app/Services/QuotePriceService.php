<?php

namespace App\Services;

use App\Models\ProductType;

class QuotePriceService
{
    public static function calculatePrice(int $product_type_id, int $value = 0): array
    {
        $costs = ProductType::find($product_type_id);

        $freight = $costs->freight * $value / 100;
        $import_cost = $costs->import_cost * $value / 100;
        $sure = $costs->sure * $value / 100;
        $tax = $costs->tax * $value / 100;
        $total = ($freight + $import_cost + $sure + $tax);
        $finalPrice = $total + $value;


        return [
            'Flete' => $freight,
            'Gastos de importación' => $import_cost,
            'Seguro' => $sure,
            'Impuestos' => $tax,
            'Costo total importación' => $total,
            'Costo producto + importación' => $finalPrice,
        ];
    }
}
