<?php 
header("Pragma: public");
header("Expires: 0");
header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
header("Content-Type: application/force-download");
header("Content-Type: application/octet-stream");
header("Content-Type: application/download");
header("Content-Disposition: attachment; filename=export_excel_example.xls"); 

print "<html xmlns:x=\"urn:schemas-microsoft-com:office:excel\">

<style>

@page
    {margin:1.0in .75in 1.0in .75in;
    mso-header-margin:.5in;
    mso-footer-margin:.5in;}
tr
    {mso-height-source:auto;}
col
    {mso-width-source:auto;}
br
    {mso-data-placement:same-cell;
    }

.style0
    {mso-number-format:General;
    text-align:general;
    vertical-align:bottom;
    white-space:nowrap;
    mso-rotate:0;
    mso-background-source:auto;
    mso-pattern:auto;
    color:windowtext;
    font-size:10.0pt;
    font-weight:400;
    font-style:normal;
    text-decoration:none;
    font-family:Arial;
    mso-generic-font-family:auto;
    mso-font-charset:0;
    border:none;
    mso-protection:locked visible;
    mso-style-name:Normal;
    mso-style-id:0;}
td
    {mso-style-parent:style0;
    padding-top:1px;
    padding-right:1px;
    padding-left:1px;
    mso-ignore:padding;
    color:windowtext;
    font-size:10.0pt;
    font-weight:400;
    font-style:normal;
    text-decoration:none;
    font-family:Arial;
    mso-generic-font-family:auto;
    mso-font-charset:0;
    mso-number-format:General;
    text-align:general;
    vertical-align:bottom;
    border:none;
    mso-background-source:auto;
    mso-pattern:auto;
    mso-protection:locked visible;
    white-space:nowrap;
    mso-rotate:0;}
.grids
    {mso-style-parent:style0;
    border:.5pt solid windowtext;}.head{
    font-weight:bold;
}

</style>
<head>
<!--[if gte mso 9]><xml>
<x:ExcelWorkbook>
<x:ExcelWorksheets>
<x:ExcelWorksheet>
<x:Name>DATA USER</x:Name>
<x:WorksheetOptions>
<x:Print>
</x:Print>
</x:WorksheetOptions>
</x:ExcelWorksheet>
</x:ExcelWorksheets>
</x:ExcelWorkbook> 
</xml>
<![endif]--> 
</head>
<body>";  
?>
<html>
<table width="100%" border="1" style="font-size:16px">
   <tr>
    <td colspan="8">
      <center>
      <strong>EXAMPLE EXPORT EXCEL</strong>
      </center>

    </td>
  </tr>
        <th><strong>No </strong></th>
        <th><strong>Nama</strong></th>
        <th><strong>Tempat/Tanggal Lahir</strong></th>
        <th><strong>Jenis Kelamin</strong></th>
        <th><strong>Agama</strong></th>
        <th><strong>No Telephone</strong></th>
        <th><strong>Email</strong></th>
        <th><strong>Alamat</strong></th>  
  </tr>
<?php 
$no = 0;

foreach($query as $list) {     
$no++;
        echo "<tr>";
        echo "<td style='width: 2%'>$no</td>";
        echo "<td style='width: 10%'>$list->nama</td>";
        echo "<td style='width: 10%'>$list->tempat_lahir/$list->tanggal_lahir</td>";
        echo "<td style='width: 10%'>$list->jenis_kelamin</td>";
        echo "<td style='width: 10%'>$list->agama</td>";
        echo "<td style='width: 10%'>$list->no_telephone</td>";
        echo "<td style='width: 10%'>$list->email</td>";
        echo "<td style='width: 10%'>$list->alamat</td>";
        echo "</tr>";
  ?>
  <?php }  ?>
</table>
</html>
