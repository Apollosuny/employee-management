<?php 
class FileController extends Controller {
  public $data = [], $error;
  private $size = 5;
  private $allowExt = ['png', 'jpg', 'jpeg', 'gif', 'svg'];

  public function upload($file) {
    if (empty($file) || $file == '') return;
    
    $fileName = $file['name'];
    $fileName = explode('.', $fileName);
    $ext = end($fileName);
    $newFile = md5(uniqid()).'.'.$ext;

    if (in_array($ext, $this->allowExt)) {
      # change byte to MB
      $size = $file['size'] / 1024 / 1024;
      if ($size <= $this->size) {
        $upload = move_uploaded_file($file['tmp_name'], _FILE_ROOT."/".$newFile);

        if (!$upload) {
          $this->error = 'Upload failed';
        }
        return $newFile;
      } else {
        $this->error = 'The file size has to be small than 5MB';
      }
    } else {
      $this->error = 'Your file is not supported';
    }
    return null;
  }
}