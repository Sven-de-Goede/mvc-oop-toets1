<?php echo $data["title"]; ?>

<table>
  <thead>
    <th>id</th>
    <th>Name</th>
    <th>NetWorth</th>
    <th>Age</th>
    <th>MyCompany</th>
    <th>update</th>
    <th>delete</th>
  </thead>
  <tbody>
    <?=$data['countries']?>
  </tbody>
</table>
<a href="<?=URLROOT;?>/homepages/index">terug</a>

