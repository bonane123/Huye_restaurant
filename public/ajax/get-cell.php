<?php

namespace Loadcell;

if (!empty($_POST["sector"])) {

    $sectorId = $_POST["sector"];
    $query = 'SELECT * FROM cells WHERE sector_id = ' . $sectorId;

    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
?>

    <option value="">Select Cell</option>
    <?php
    foreach ($row as $cell) {
    ?>
        <option value="<?php echo $cell["cell_id"]; ?>"><?php echo $cell["cell_name"]; ?></option>
<?php
    }
}
?>