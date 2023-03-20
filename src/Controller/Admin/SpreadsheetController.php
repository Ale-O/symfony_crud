<?php

namespace App\Controller\Admin;

use App\Entity\Element;
use App\Repository\ElementRepository;
use App\Repository\SubelementRepository;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/spreadsheet")
 * @IsGranted("ROLE_ADMIN")
 */
class SpreadsheetController extends AbstractController
{
    /**
     * @Route("/getAllElement", methods="GET", name="admin_spreadsheet_get_all_element")
     */
    public function getAllElement(ElementRepository $elements): Response
    {
        $spreadsheet = new Spreadsheet();

        $sheet = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Title');
        $sheet->setCellValue('C1', 'Summary');
        $sheet->setCellValue('D1', 'Content');
        $sheet->setCellValue('E1', 'Date for activation');
        $sheet->setCellValue('F1', 'Author');

        $columnsNumber = 5;
        $linesNumber = 0;

        $allElements = $elements->findAll();

        if (count($allElements) > 0) {
            foreach ($allElements as $key => $element) {
                $key = $key + 2;
                $id = $element->getId();
                $sheet->setCellValue('A'.$key, $id);
                $title = $element->getTitle();
                $sheet->setCellValue('B'.$key, $title);
                $summary = $element->getSummary();
                $sheet->setCellValue('C'.$key, $summary);
                $content = $element->getContent();
                $sheet->setCellValue('D'.$key, $content);
                $publishedAt = $element->getPublishedAt();
                $sheet->setCellValue('E'.$key, $publishedAt);
                $author = $element->getAuthor()->getFullName();
                $sheet->setCellValue('F'.$key, $author);
                $linesNumber = $key - 1;
            }
        }

        $sheet->setTitle('export_elements');

        // Create your Office 2007 Excel (XLSX Format)
        $writer = new Xlsx($spreadsheet);

        // In this case, we want to write the file in the public directory
        $publicDirectory = $this->getParameter('kernel.project_dir').'/public/export_xlsx';
        // e.g /var/www/project/public/my_first_excel_symfony4.xlsx
        $excelFilepath = $publicDirectory.'/export_elements.xlsx';

        // Create the file
        $writer->save($excelFilepath);

        return $this->render('admin/spreadsheet/spreadsheet_element.html.twig', [
            'columnsNumber' => $columnsNumber,
            'linesNumber' => $linesNumber,
        ]);
    }

    /**
     * @Route("/getAllSubelement/{id<\d+>}", methods="GET", name="admin_spreadsheet_get_all_subelement")
     */
    public function getAllSubelement(Element $element, SubelementRepository $subelements): Response
    {
        // Create array of titles-columns references
        $xlswColumn = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        $newXlswColumn = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
        foreach ($xlswColumn as $column) {
            $xlswColumnCopy = [];
            foreach ($xlswColumn as $column1) {
                $newColumn = $column.$column1;
                array_push($xlswColumnCopy, $newColumn);
            }
            $newXlswColumn = array_merge($newXlswColumn, $xlswColumnCopy);
        }

        $spreadsheet = new Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();

        // Construct titles
        $sheet->setCellValue('A1', 'Id');
        $sheet->setCellValue('B1', 'Title');
        $sheet->setCellValue('C1', 'Content');
        $sheet->setCellValue('D1', 'Date for activation');
        $sheet->setCellValue('E1', 'Author');
        $indexColumnMasterFields = 5;

        $allMasterTextFields = $element->getTextFields();
        if (count($allMasterTextFields) > 0) {
            foreach ($allMasterTextFields as $keyMasterTextFields => $MasterTextFields) {
                $indexColumnMasterFields = $indexColumnMasterFields + $keyMasterTextFields;
                $column = $xlswColumn[$indexColumnMasterFields];
                $title = $MasterTextFields->getTitle();
                $sheet->setCellValue($column.'1', $title);
            }
            $indexColumnMasterFields = $indexColumnMasterFields + 1;
        }

        $allMasterDateFields = $element->getDateFields();
        if (count($allMasterDateFields) > 0) {
            foreach ($allMasterDateFields as $keyMasterDateFields => $MasterDateFields) {
                $indexColumnMasterFields = $indexColumnMasterFields + $keyMasterDateFields;
                $column = $xlswColumn[$indexColumnMasterFields];
                $title = $MasterDateFields->getTitle();
                $sheet->setCellValue($column.'1', $title);
            }
            $indexColumnMasterFields = $indexColumnMasterFields + 1;
        }

        $allMasterNumberFields = $element->getNumberFields();
        if (count($allMasterNumberFields) > 0) {
            foreach ($allMasterNumberFields as $keyMasterNumberFields => $MasterNumberFields) {
                $indexColumnMasterFields = $indexColumnMasterFields + $keyMasterNumberFields;
                $column = $xlswColumn[$indexColumnMasterFields];
                $title = $MasterNumberFields->getTitle();
                $sheet->setCellValue($column.'1', $title);
            }
            $indexColumnMasterFields = $indexColumnMasterFields + 1;
        }

        $allMasterFileFields = $element->getFileFields();
        if (count($allMasterFileFields) > 0) {
            foreach ($allMasterFileFields as $keyMasterFileFields => $MasterFileFields) {
                $indexColumnMasterFields = $indexColumnMasterFields + $keyMasterFileFields;
                $column = $xlswColumn[$indexColumnMasterFields];
                $title = $MasterFileFields->getTitle();
                $sheet->setCellValue($column.'1', $title);
            }
            $indexColumnMasterFields = $indexColumnMasterFields + 1;
        }

        $allMasterSubelementFields = $element->getSubelementFields();
        if (count($allMasterSubelementFields) > 0) {
            foreach ($allMasterSubelementFields as $keyMasterSubelementFields => $MasterSubelementFields) {
                $indexColumnMasterFields = $indexColumnMasterFields + $keyMasterSubelementFields;
                $column = $xlswColumn[$indexColumnMasterFields];
                $title = $MasterSubelementFields->getTitle();
                $sheet->setCellValue($column.'1', $title);
            }
            $indexColumnMasterFields = $indexColumnMasterFields + 1;
        }

        // Construct lines
        $linesNumber = 0;
        $allSubelements = $element->getSubelements();
        if (count($allSubelements) > 0) {
            foreach ($allSubelements as $key => $subelement) {
                $key = $key + 2;
                $id = $subelement->getId();
                $sheet->setCellValue('A'.$key, $id);
                $title = $subelement->getTitle();
                $sheet->setCellValue('B'.$key, $title);
                $content = $subelement->getContent();
                $sheet->setCellValue('C'.$key, $content);
                $publishedAt = $subelement->getPublishedAt();
                $sheet->setCellValue('D'.$key, $publishedAt);
                $author = $subelement->getAuthor()->getFullName();
                $sheet->setCellValue('E'.$key, $author);
                $indexColumnFields = 5;
                $linesNumber = $key - 1;

                $allTextFields = $subelement->getTextFields();
                if (count($allTextFields) > 0) {
                    foreach ($allTextFields as $keyTextFields => $textFields) {
                        $indexColumnFields = $indexColumnFields + $keyTextFields;
                        $column = $xlswColumn[$indexColumnFields];
                        $content = $textFields->getContent();
                        $sheet->setCellValue($column.$key, $content);
                    }
                    $indexColumnFields = $indexColumnFields + 1;
                }

                $allDateFields = $subelement->getDateFields();
                if (count($allDateFields) > 0) {
                    foreach ($allDateFields as $keyDateFields => $dateFields) {
                        $indexColumnFields = $indexColumnFields + $keyDateFields;
                        $column = $xlswColumn[$indexColumnFields];
                        $content = $dateFields->getContent();
                        $sheet->setCellValue($column.$key, $content);
                    }
                    $indexColumnFields = $indexColumnFields + 1;
                }

                $allNumberFields = $subelement->getNumberFields();
                if (count($allNumberFields) > 0) {
                    foreach ($allNumberFields as $keyNumberFields => $numberFields) {
                        $indexColumnFields = $indexColumnFields + $keyNumberFields;
                        $column = $xlswColumn[$indexColumnFields];
                        $content = $numberFields->getContent();
                        $sheet->setCellValue($column.$key, $content);
                    }
                    $indexColumnFields = $indexColumnFields + 1;
                }

                $allFileFields = $subelement->getFileFields();
                if (count($allFileFields) > 0) {
                    foreach ($allFileFields as $keyFileFields => $fileFields) {
                        $indexColumnFields = $indexColumnFields + $keyFileFields;
                        $column = $xlswColumn[$indexColumnFields];
                        $content = $fileFields->getContent();
                        $sheet->setCellValue($column.$key, $content);
                    }
                    $indexColumnFields = $indexColumnFields + 1;
                }

                $allSubelementFields = $subelement->getSubelementFields();
                if (count($allSubelementFields) > 0) {
                    foreach ($allSubelementFields as $keySubelementFields => $subelementFields) {
                        $indexColumnFields = $indexColumnFields + $keySubelementFields;
                        $column = $xlswColumn[$indexColumnFields];
                        $idContent = $subelementFields->getContent();
                        $objectContent = $subelements->find($idContent);
                        $content = $objectContent->getTitle();
                        $sheet->setCellValue($column.$key, $content);
                    }
                    $indexColumnFields = $indexColumnFields + 1;
                }
            }
        }

        // Define title
        $sheet->setTitle('export');

        // Create XLSX Format
        $writer = new Xlsx($spreadsheet);

        // Write the file in the public directory
        $publicDirectory = $this->getParameter('kernel.project_dir').'/public/export_xlsx';
        $excelFilepath = $publicDirectory.'/export.xlsx';

        // Create the file
        $writer->save($excelFilepath);

        return $this->render('admin/spreadsheet/spreadsheet_subelement.html.twig', [
            'idElement' => $element->getId(),
            'columnsNumber' => $indexColumnMasterFields,
            'linesNumber' => $linesNumber,
        ]);
    }
}
