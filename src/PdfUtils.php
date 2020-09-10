<?php

namespace Ypa\Jigsaw\Pdf;


class PdfUtils
{
    public static function download($pUrl, $pFilename)
    {
        $file = $pUrl;
        header('Content-type: application/pdf');
        header('Content-Disposition: attachment; filename="' . $pFilename . '.pdf"');
        readfile($file);
    }
}
