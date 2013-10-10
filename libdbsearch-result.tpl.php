<?php
/*
 * @file
 * Libdbsearch search result template.
 * 
 * $theader_x   Headers for result table
 * $result_rows Result data rows
 */
?>

<table>
  <thead>
    <tr>
      <th><?php if(isset($theader_0)) { print $theader_0; } ?></th>
      <th><?php if(isset($theader_1)) { print $theader_1; } ?></th>
      <?php if(isset($theader_2)): ?>
        <th> <?php print $theader_2; ?></th>
      <?php endif; ?>
      <?php if(isset($theader_3)): ?>
        <th> <?php print $theader_3; ?></th>
      <?php endif; ?>
      <?php if(isset($theader_4)): ?>
        <th> <?php print $theader_4; ?></th>
      <?php endif; ?>
    </tr>
  </thead>
  <tbody><?php print $result_rows; ?></tbody>
</table>
