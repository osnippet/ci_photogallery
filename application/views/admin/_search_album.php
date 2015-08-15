<h1 class="title">Search results:</h1>
<table width="100%" border="0" class="table1" >
  <tr>
    <th width="66%">Album Name</th>
    <th width="12%">Created</th>
    <th width="5%">&nbsp;</th>
    <th width="5%">&nbsp;</th>
  </tr>
<?php
if ( $results )
{
  for( $i=0 ; $i < count( $results ); $i++ ) {
    $id = $results[$i]['id'];
?>
  <tr>
    <td><?php echo $results[$i]['album_name'];?></td>
    <td><?php echo date('m/d/Y',strtotime($results[$i]['created_at']))  ?></a></td>
    <td><a href="<?= site_url("admin/album/form_album/$id") ?>"  class="btn" >Edit</a></td>
    <td><a href="<?= site_url("admin/album/form_delete/$id") ?>"  class="btn" >Delete</a></td>
  </tr>
<?php } ?>
<?php } else {  ?>
  <tr>
  <td colspan="5" >No record found.</td>
  </tr>
<?php } ?>
</table>

<div class="pager" ><?= $pagination ?></div>
