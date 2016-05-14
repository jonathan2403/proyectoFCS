<?php

namespace FCS\Base;


class ExportFiles {

	/**
	 * Exporta query a excel
	 */
	public function createExcel($query, $file_name, $column){
		\Excel::create($file_name, function($excel) use($query, $column){
        $excel->sheet('Index', function($sheet) use($query, $column){
            $sheet->fromModel($query);
            $sheet->cell('A1:'.$column, function($cells){
                $cells->setFont([
                    'family' => 'Comic Sans MS',
                    'size' => '13',
                    'bold' => true,
                    ]);
                $cells->setAlignment('center');
            });
        });
      })->export('xls'); 
	} // cierra función createExcel

	/**
	 * Exporta query a pdf
	 */
	public function createPdf($query, $file_name, $column){
		\Excel::create($file_name, function($excel) use($query, $column){
        $excel->sheet('Index', function($sheet) use($query, $column){
        	$sheet->setOrientation('landscape');
        	$sheet->setAllBorders('thin');
            $sheet->fromModel($query);
            $sheet->setAutoSize(true);
            $sheet->cell('A1:'.$column, function($cells){
                $cells->setFont([
                    'family' => 'Comic Sans MS',
                    'size' => '13',
                    'bold' => true,
                    ]);
                $cells->setAlignment('center');
            });
        });
      })->export('pdf'); 

	} // cierra función createPDF
}