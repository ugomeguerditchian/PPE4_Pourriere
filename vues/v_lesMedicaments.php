<table id="dtBasicExample" class="table table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">DEPOT LEGAL:</th>
      <th class="th-sm">NOM COMMERCIAL:</th>
      <th class="th-sm">FAMILLE:</th>
      <th class="th-sm">COMPOSITION:</th>
      <th class="th-sm">EFFETS:</th>
      <th class="th-sm">CONTRE INDIC:</th>
      <th class="th-sm">PRIX ECHANTILLON:</th>
    </tr>
  </thead>
  <tbody>
    <?php
    foreach($ConsulterMedicaments as $UnMedicaments)
    {
      $depot = $UnMedicaments['MED_DEPOTLEGAL'];
      $nom = $UnMedicaments['MED_NOMCOMMERCIAL'];
      $code = $UnMedicaments['FAM_CODE'];
      $composition = $UnMedicaments['MED_COMPOSITION'];
      $effets = $UnMedicaments['MED_EFFETS'];
      $contredication = $UnMedicaments['MED_CONTREINDIC'];
      $prixechantillon = $UnMedicaments['MED_PRIXECHANTILLON'];
      ?>
      <tr>
        <td><?php echo $depot //ou $UnEleve['CODE'] ?></td>
        <td><?php echo $nom ?></td>
        <td><?php echo $code ?></td>
        <td><?php echo $composition ?></td>
        <td><?php echo $effets ?></td>
        <td><?php echo $contredication ?></td>
        <td><?php echo $prixechantillon ?></td>
      </tr>
      <?php
    }
       ?>
  </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">DEPOT LEGAL:</th>
      <th class="th-sm">NOM COMMERCIAL:</th>
      <th class="th-sm">FAMILLE:</th>
      <th class="th-sm">COMPOSITION:</th>
      <th class="th-sm">EFFETS:</th>
      <th class="th-sm">CONTRE INDIC:</th>
      <th class="th-sm">PRIX ECHANTILLON:</th>
    </tr>
  </tfoot>
</table>
<!--
<script type="text/javascript">
$(document).ready( function () {
    $('#dtBasicExample').DataTable();
} );
</script> -->
