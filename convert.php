<?php
require('fpdf.php');

// Check if a file was uploaded
if (isset($_FILES['text_file'])) {
    $file_name = $_FILES['text_file']['name'];
    $file_tmp = $_FILES['text_file']['tmp_name'];

    // Check if the file is a text file
    $file_ext = strtolower(end(explode('.', $file_name)));
    if ($file_ext == 'txt') {
        // Read the contents of the text file
        $content = file_get_contents($file_tmp);

        // Create a new PDF instance
        $pdf = new FPDF();

        // Add a new page
        $pdf->AddPage();

        // Set the font and size
        $pdf->SetFont('Arial', '', 12);

        // Write the contents of the text file to the PDF
        $pdf->MultiCell(0, 5, $content);

        // Output the PDF file
        ob_clean();
        $finalname = explode('.', $file_name);
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $finalname[0] . '.pdf"');
        $pdf->Output('', $finalname[0] . '.pdf', true);
    } else {
        echo "Error: Only text files are allowed";
    }
}
