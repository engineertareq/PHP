<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    try {
        $uploader = new FileUploader("uploads/", ["jpg","png","pdf"], 5000000);
        echo $uploader->upload($_FILES["fileToUpload"]);
    } catch (Exception $e) {
        echo "Upload failed: " . $e->getMessage();
    }
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <label>Select file:</label>
    <input type="file" name="fileToUpload" required>
    <button type="submit">Upload</button>
</form>