<?php 
  $path = '/dir0/dir1/myfile.php';
  // return filename
  echo basename($path).'<br>';
  // w/o file extension
  echo basename($path, '.php').'<br>';
  // return dir name from the path
  echo dirname($path).'<br>';
  // chk to see if a file exists
  echo file_exists('file1.txt').'<br>'; // ret folders as well
// get absolute path 
  echo realpath('file1.txt').'<br>';
// chck to see if file
  echo is_file('file1.txt').'<br>';
// chk if writable
  echo is_writable('file1.txt').'<br>';
// is readable?
  echo is_readable('file1.txt').'<br>';
// get file size
  echo filesize('file1.txt').'<br>';

// to manipulate

// create dir
  mkdir('testing');
  rmdir('testing');
// copy file
  copy('file1.txt', 'file2.txt');
// rename file 
  rename('file2.txt', 'myfile.txt');
// delete file
  unlink('myfile.txt');
// read from file and write to a string
  echo file_get_contents('file1.txt').'<br>';
// write file size back
  echo file_put_contents('file1.txt', 'Goodbye World').'<br>';
// append has to be done manually :(
  $current = file_get_contents('file1.txt');
  $current .= ' after we Welcomed the World!';
  echo file_put_contents('file1.txt', $current).'<br>';

// open file for manipulation
  $handle = fopen('file1.txt', 'r'); // r for reading
  $data = fread($handle, filesize('file1.txt')); // why filesize()?*
  echo $data.'<br>';
  echo $handle.'<br>';
  fclose($handle);

// open file for writing
  $handle = fopen('file1.txt', 'w');
  $txt = "John Doe\n";
  fwrite($handle, $txt);
  $txt = "Steve Smith\n";
  fwrite($handle, $txt);
  fclose($handle); // remember to close the file 
  

?>
























p