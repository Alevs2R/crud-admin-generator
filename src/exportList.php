<?php
/**
 * Created by Alexey Evlampev
 * Date: 04.01.17
 * Time: 0:19
 */
use Symfony\Component\HttpFoundation\Response;

function exportXls($headers, $data)
{
    $objPHPExcel = new PHPExcel();

    // Set document properties
    $objPHPExcel->getProperties()->setCreator("Intelligence Retail")
        ->setTitle("Экспорт таблицы");

    $letters = range('A','Z');
// Add some data


    $sheet1 = $objPHPExcel->setActiveSheetIndex(0);
    foreach ($headers as $i=>$header) {
        $sheet1->setCellValue($letters[$i].'1', $header);
    }
    foreach ($data as $row_num=>$row) {
        $count = 0;
        foreach($row as $value) {
            $cell = $letters[$count] . ($row_num+2);
            $sheet1->setCellValue($cell, $value);
            $sheet1
                ->getStyle($cell)
                ->getAlignment()
                ->setHorizontal(PHPExcel_Style_Alignment::HORIZONTAL_LEFT);

            $sheet1->getColumnDimension($letters[$count])
                ->setAutoSize(true);

            $count++;
        }
    }
    $objPHPExcel->getActiveSheet()->getStyle('A1:'.$letters[$count].'1')->getFont()->setBold(true);


// Rename worksheet
    $objPHPExcel->getActiveSheet()->setTitle('Страница 1');


// Set active sheet index to the first sheet, so Excel opens this as the first sheet
    $objPHPExcel->setActiveSheetIndex(0);
    $objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel);
    $path = str_replace('.php', '.xlsx', __FILE__);
    $objWriter->save($path);
    return $path;

}

