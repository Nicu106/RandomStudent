<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class XmlsController extends Controller
{


    public function test()
{
    require_once base_path('vendor/autoload.php'); // Specify the path to the vendor/autoload.php file

    $spreadsheet = new Spreadsheet();
    $activeSheet = $spreadsheet->getActiveSheet();

    // Add data to the Excel file
    $activeSheet->setCellValue('A1', 'Hello');
    $activeSheet->setCellValue('B1', 'World');

    // Save the Excel file to a temporary file
    $tempFile = tempnam(sys_get_temp_dir(), 'example');
    $writer = new Xlsx($spreadsheet);
    $writer->save($tempFile);

    // Set appropriate headers for file download
    return response()->download($tempFile, 'example.xlsx');
}
}
