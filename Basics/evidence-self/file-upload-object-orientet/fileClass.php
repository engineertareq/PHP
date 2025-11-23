<?php
class FileUploader {
    private $targetDir;
    private $allowedTypes;
    private $maxSize;

    public function __construct($targetDir = "uploads/", $allowedTypes = ["jpg","png","pdf"], $maxSize = 2000000) {
        $this->targetDir = $targetDir;
        $this->allowedTypes = $allowedTypes;
        $this->maxSize = $maxSize;
    }

    public function upload($file) {
        $fileName = basename($file["name"]);
        $targetFile = $this->targetDir . $fileName;
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // Validate file type
        if (!in_array($fileType, $this->allowedTypes)) {
            throw new Exception("Invalid file type.");
        }

        // Validate file size
        if ($file["size"] > $this->maxSize) {
            throw new Exception("File too large.");
        }

        // Move uploaded file
        if (move_uploaded_file($file["tmp_name"], $targetFile)) {
            return "File uploaded successfully: " . $fileName;
        } else {
            throw new Exception("Error uploading file.");
        }
    }
}
?>