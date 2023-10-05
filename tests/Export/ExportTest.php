<?php

namespace Code\Tests\Export;

use Code\Export\Export;
use PHPUnit\Framework\TestCase;

class ExportTest extends TestCase{
//Isso se chama notation e permite que se retire esta palavra junto do arroba da frente da funcao. O objetivo e encurtar o nome e escrever menso.

    /**
     * @test
     */
    public function ExportShouldReturnAPdf(){
        $export = new Export();

        $result = $export->makeExport('pdf');

        $this->assertEquals('PDF gerado...', $result);
    }

     /**
     * @test
     */
    public function ExportShouldReturnACsv(){
        $export = new Export();

        $result = $export->makeExport('csv');

        $this->assertEquals('CSV gerado...', $result);
    }

     /**
     * @test
     */
    public function ExportShouldReturnAHtml(){
        $export = new Export();

        $result = $export->makeExport('html');

        $this->assertEquals('HTML gerado...', $result);
    }
}

?>