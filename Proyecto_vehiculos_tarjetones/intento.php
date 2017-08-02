<?php

session_start();
$tp = $_SESSION["tp"];
$tt = $_SESSION["tt"];
$tm = $_SESSION["tm"];
$tmo = $_SESSION["tmo"];
$tpl = $_SESSION["tpl"];
$tc = $_SESSION["tc"];

$content = '
<style type="text/css">
<!--
#tarjeton_img{
width=50%;
}
#tarjeton_titulo{
    text-align: center;
    font-family: Helvetica,Arial,sans-serif;
    color: rgb(0,128,0);
    font-size: 10px;
}
#tarjeton_titulo2 , #tarjeton_titulo3{

    font-family: Helvetica,Arial,sans-serif;
    color: #CF242A;
    font-size: 10px;
    padding-bottom:0;
}

#tarjeton_titulo3{
    text-decoration: underline;
    padding-bottom:0;
}

table{
    margin: 0;
    padding: 0;
    border:1px solid #CF242A;
}

label{
  margin:0;
  padding:0;
  font-size:10px;
}

td{
    float: left;
    display:inline-block;
}


.info_bottom{
    color: gray;
    font-size: 3px;
}

.div_botom{
    font-size: 3px;
}

.span_bottom{
  font-size:3px;
}

.col-md-12{
  font-size:3px;
}

-->
</style>
<table align="center" width="50px" cellpadding="0" cellspacing="0">
  <tr>
    <td align="center"><img src="img/logoT.jpg" id="tarjeton_img"></td>
  </tr>
  <tr>
    <td align="center"><h6s id="tarjeton_titulo"><b>INSTITUTO TECNOLÓGICO <br>DE CELAYA</b></h6>
    <h4 id="tarjeton_titulo2"><b>TARJETON</b></h4>
    <h4 id="tarjeton_titulo3"><b>Propietario</b></h4></td>
  </tr>
  <tr>
    <td align="center"><label id="tarjeton_propietario" align="center">' . $tp . '</label>&nbsp;&nbsp;
        <label id="tarjeton_tipo" align="center">' . $tt . '</label></td>
  </tr>
  <tr>
    <td align="center"><h4 id="tarjeton_titulo3"><b>Veh&iacute;culo</b></h4></td>
  </tr>
  <tr>
    <td align="center">
      <label id="tarjeton_marca" align="center">' . $tm . '</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label id="tarjeton_modelo" align="center">' . $tmo . '</label>
    </td>
  </tr>
  <tr>
    <td align="center">
      <label id="tarjeton_placas" align="center">' . $tpl . '</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      <label id="tarjeton_color" align="center">' . $tc . '</label><br><br>
    </td>
  </tr>
  <tr>
    <td align="center"><span class="span_bottom" style="color:rgb(0,128,0)"> CAMPUS I
          <p class="info_bottom"> Antonio García Cubas Pte #600 esq.<br> Av. Tecnológico. Celaya, Gto. México </p>
          <p class="info_bottom"> Tel.(461)61 17575 </p></span></td>
  </tr>
  <tr>
    <td align="center"><span class="span_bottom" style="color:rgb(0,128,0)"> CAMPUS II
          <p class="info_bottom"> Av. García Cubas 1200, Esquina Ignacio Borunda. Celaya, Gto. México. </p>
          <p class="info_bottom"> Tel.01(461) 617 77 70 </p> </span></td>
  </tr>
  <tr>
    <td align="center"><span class="col-md-12" align="center">
        <a href = "ww.itcelaya.edu.mx">www.itcelaya.edu.mx</a>
        <br><br>
    </span></td>
  </tr>
</table>'
;
    require_once(dirname(__FILE__).'/html2pdf/html2pdf.class.php');
    //$html2pdf = new HTML2PDF('P','A4','fr');
    $html2pdf = new HTML2PDF('P', array("50px","100px"), 'en', true, 'UTF-8', array(0, 0, 0, 0));
    $html2pdf->WriteHTML($content);
    $html2pdf->Output('exemple.pdf');
?>

