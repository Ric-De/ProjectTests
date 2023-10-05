<?php

namespace Code\Export;

class Export{
    public function makeExport(string $exportType = ''): string{
        return match($exportType){
            'pdf'=> 'PDF gerado...',
            'csv'=> 'CSV gerado...',
            default => 'HTML gerado...'
        };
    }

}


?>