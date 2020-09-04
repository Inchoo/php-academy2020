<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <input type="file" name="image">
    <button>Submit</button>
</form>

<?php

/**
 * Items uploaded to the current script via the HTTP POST method
 */
var_dump($_FILES);

if (isset($_FILES['image'])) {
    $image = $_FILES['image'];
    move_uploaded_file($image['tmp_name'], 'files' . DIRECTORY_SEPARATOR . $image['name']);
}
