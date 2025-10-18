<?php
class DownloadController {
    public function download() {
        if (!isset($_GET['file'])) {
            http_response_code(400);
            echo "Fichier non spécifié.";
            exit;
        }

        $fileInput = $_GET['file'];

        // Sécurise le chemin pour éviter les traversées de dossiers
        $fileInput = str_replace('../', '', $fileInput);
        $fileInput = str_replace('..\\', '', $fileInput);

        $filename = basename($fileInput); // Nom du fichier
        $folder = dirname($fileInput);   // Dossier (ex: CEJM)

        if ($folder === '.') {
            $folder = ''; // Si pas de dossier
        }

        $filepath = __DIR__ . '/../../public/uploads/' . $folder . '/' . $filename;

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