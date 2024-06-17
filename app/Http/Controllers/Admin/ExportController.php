<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin\Year;
use Illuminate\Http\Request;
use App\Models\Admin\Category;
use App\Models\Admin\ResearchPaper;

use App\Http\Controllers\Controller;
use Box\Spout\Writer\Common\Creator\WriterEntityFactory;


class ExportController extends Controller
{
    //
    public function export()
    {
        //
        $title = "Research Paper";
        $SelectYear = Year::orderBy('Year', 'desc')->pluck('year', 'id');
        return view('admin.research_papers.export', ['SelectYears' => $SelectYear], compact('title'));
    }


    public function exportToExcel(Request $request)
    {
        $request->validate([
            'year' => 'required', // Validate that 'year' exists in the 'years' table
            'category' => 'required'
        ]);
    
        // Retrieve the input year ID
        $yearId = $request->input('year');
        $categoryId = $request->input('category');
    
        // Retrieve the selected year's research papers
        $data = ResearchPaper::where('year', $yearId)->where('category', $categoryId)->get();
    
        if ($data->isEmpty()) {
            return redirect()->back()->with('error', 'No research papers found for the selected year.');
        }
    
        // Create a writer
        $writer = WriterEntityFactory::createXLSXWriter();
    
        // Load the Year model to get the year value for filename
        $yearModel = Year::findOrFail($yearId);
        $yearValue = $yearModel->year;

         // Load the Year model to get the category value
         $categoryModel = Category::findOrFail($categoryId);
         $categoryValue = $categoryModel->category;
    
        // Create Excel file
        $filename = 'research_papers_' . $yearValue . '.xlsx';
        $writer->openToBrowser($filename); // Specify filename
    
        // Add header row
        $headerRow = WriterEntityFactory::createRowFromArray(['Year', 'Category', 'Description', 'Link']);
        $writer->addRow($headerRow);
    
        // Add data rows
        foreach ($data as $item) {
            $description = strip_tags(html_entity_decode($item->description));
    
            $rowData = [
                $yearValue, // Display the actual 'year' value
                $categoryValue,
                $description,
                $item->link,
            ];
    
            $row = WriterEntityFactory::createRowFromArray($rowData);
            $writer->addRow($row);
        }
    
        // Close the writer
        $writer->close();     
}


    // public function exportToExcel(Request $request)
    // {

    //     $request->validate([
    //         'year' => 'required', // Add validation rules as needed
    //     ]);

    //     // Retrieve the input year
    //     $year = $request->input('year');
    //     // dd($year);

    //     // Validate the input
    //     $data = ResearchPaper::where('year', $year)->get();
    //     //  dd($data);

    //     if ($data->isEmpty()) {
    //         return redirect()->back()->with('error', 'No data found for the selected year.');
    //     }

    //     // Create a writer
    //     $writer = WriterEntityFactory::createXLSXWriter();

    //     // Create Excel file
    //     $filename = 'research_papers_' . $year . '.xlsx';
    //     $writer->openToBrowser($filename); // Specify filename


    //     // Add header row
    //     $headerRow = WriterEntityFactory::createRowFromArray(['Year','Description', 'Link']);
    //     $writer->addRow($headerRow);

    //     // Add data rows
    //     foreach ($data as $item) {
    //         $description = strip_tags(html_entity_decode($item->description));

    //         $rowData = [
    //              $item->year,
    //             $description,
    //             $item->link,
    //         ];

    //         $row = WriterEntityFactory::createRowFromArray($rowData);
    //         $writer->addRow($row);
    //     }
    //     // Close the writer
    //     $writer->close();

    // }
}
