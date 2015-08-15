<div class="search">
  <?php echo form_open('admin/search/results'); ?>  
  <table border="0" cellspacing="5">
    <tr>
      <td>Search by</td>
      <td>
        <select name="searchby">
          <option value="user">User</option>
          <option value="album">Album</option>
          <option value="photo">Photo</option>
        </select>
      </td>
    </tr>
    <tr>
      <td>Keyword</td>
      <td><?php echo form_input('q', '', 'class=txt'); ?></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><?php echo form_submit('search', 'Search'); ?></td>
    </tr>
  </table>
  <?php form_close(); ?>
</div>
