<table id="dtBasicExample" class="table table-bordered table-sm" cellspacing="0" width="100%">
  <thead>
    <tr>
      <th class="th-sm">MED_DEPOTLEGAL</th>
      <th class="th-sm">MED_NOMCOMMERCIAL</th>
      <th class="th-sm">FAM_CODE</th>
      <th class="th-sm">MED_COMPOSITION</th>
      <th class="th-sm">MED_EFFETS</th>
      <th class="th-sm">MED_CONTREINDIC</th>
      <th class="th-sm">MED_PRIXECHANTILLON</th>
      <th class="th-sm">MED_PRESENTATION</th>
      <th class="th-sm">FAM_CODE</th>
      <th class="th-sm">FAM_LIBELLE</th>
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
      $presentation = $UnMedicaments['MED_PRESENTATION'];
      $codefamille = $UnMedicaments['FAM_CODE'];
      $libellefamille = $UnMedicaments['FAM_LIBELLE'];
      ?>
      <tr>
        <td><?php echo $depot //ou $UnEleve['CODE'] ?></td>
        <td><?php echo $nom ?></td>
        <td><?php echo $code ?></td>
        <td><?php echo $composition ?></td>
        <td><?php echo $effets ?></td>
        <td><?php echo $contredication ?></td>
        <td><?php echo $prixechantillon ?></td>
        <td><?php echo $presentation ?></td>
        <td><?php echo $codefamille ?></td>
        <td><?php echo $libellefamille ?></td>
      </tr>
      <?php
    }
       ?>
  </tbody>
  <tfoot>
    <tr>
      <th class="th-sm">MED_DEPOTLEGAL
      </th>
      <th class="th-sm">MED_NOMCOMMERCIAL
      </th>
      <th class="th-sm">FAM_CODE
      </th>
      <th class="th-sm">MED_COMPOSITION
      </th>
      <th class="th-sm">MED_EFFETS
      </th>
      <th class="th-sm">MED_CONTREINDIC
      </th>
      <th class="th-sm">MED_PRIXECHANTILLON
      </th>
      <th class="th-sm">MED_PRESENTATION
      </th>
      <th class="th-sm">FAM_CODE
      </th>
      <th class="th-sm">FAM_LIBELLE
      </th>
    </tr>
  </tfoot>
</table>
<!-- 
<script type="text/javascript">
$(document).ready( function () {
    $('#dtBasicExample').DataTable();
} );
</script> -->
