<?php 
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["doc_name"])) {
    $targetDirectory = "../../docs/";  // Specify the directory where you want to store uploaded files
    $targetFile = $targetDirectory . basename($_FILES["doc_name"]["name"]);

    if (file_exists($targetFile)) {
        // If the file exists, remove it before moving the new file
        unlink($targetFile);
    }

    // Check if the file is an actual file or a fake file
    if (is_uploaded_file($_FILES["doc_name"]["tmp_name"])) {
        // Move the uploaded file to the specified directory
        if (move_uploaded_file($_FILES["doc_name"]["tmp_name"], $targetFile)) {
            echo "The file " . htmlspecialchars(basename($_FILES["doc_name"]["name"])) . " has been uploaded.";
            echo "<script>alert('Success! Your file has been uploaded!')</script>";
        } else {
            echo "<script>alert('There has been an error lmao! Noob!')</script>";
        }
    } else {
        echo "<script>alert('Invalid type noob!')</script>";
    }
}
?>