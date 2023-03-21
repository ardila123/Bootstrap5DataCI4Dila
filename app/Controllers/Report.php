<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MData;
use Dompdf\Dompdf;

class Report extends BaseController
{
    public function __construct()
    {
        $this->mahasiswa =  new MData;
    }

    public function index()
    {
        $data = $this->mahasiswa->getData();
        $array = array(
            'hasil' => $data,
        );
        //var_dump($data);
        $tampil = view('V_pdfTabel',$array);

        //
                // instantiate and use the dompdf class
        $dompdf = new Dompdf();
        $dompdf->loadHtml($tampil);

        // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'Portrait');

        // Render the HTML as PDF
        $dompdf->render();

        // Output the generated PDF to Browser
        $dompdf->stream('percobaan.pdf',array("Attachment" =>false));
    }

}