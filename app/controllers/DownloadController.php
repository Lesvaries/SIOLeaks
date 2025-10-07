<?php
class DownloadController {
    public function download() {
        if (!isset($_GET['file'])) {
            http_response_code(400);
            echo "Fichier non spécifié.";
            exit;
        }

        $filename = basename($_GET['file']);
        $filepath = __DIR__ . '/../../public/uploads/CEJM/' . $filename;

        if (file_exists($filepath)) {
            header('Content-Type: application/pdf');
            header('Content-Disposition: attachment; filename="' . $filename . '"');
            readfile($filepath);
            exit;
        } else {
            http_response_code(404);
            echo "Fichier non trouvé.";
        }
    }
}
?>