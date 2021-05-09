<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DocumentType;

class DocumentTypeSeeder extends Seeder
{
    const DOCUMENT_TYPES = [
        'Nota fiscal',
        'Fatura',
        'Duplicatas',
        'Recibo',
        'Vales',
        'Nota promissória',
        'Aval',
        'Fiança'
    ];
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        foreach (self::DOCUMENT_TYPES as $typeName) {
            DocumentType::create([
                'type_name' => $typeName
            ]);
        }
    }
}
