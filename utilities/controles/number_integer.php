<?php
/**
 * Class NumberInteger
 * @author Andres Bravo
 */

 $JSNumberFormatFlag = True;

class NumberInteger extends Textbox
{

  /**
   * Constructor de la Class
   */
  function NumberInteger($field_name = "", $name = "", $is_obligatory = 1, $default = "", $style = "", $size = "", $max_length = "", $on_blur_script = "", $read_only = "", $print_only = "", $range_from = "", $range_to = "")
  {
    Global $JSNumberFormatFlag;

    $this->Textbox($field_name, $name, $is_obligatory, $default, $style, $size, $max_length, "Indexcol_Reformatear_Campo__(this); verificarValorEntero(this); $on_blur_script;", $read_only, $print_only, "javascript: Indexcol_Mascara_Pesos__(this);", "javascript: Indexcol_Mascara_Pesos__(this);");

    $this->ID .= "__CNumeroEntero".($range_from != $range_to?"[$range_from>$range_to]":"")."__".$this->FieldName;
    $this->AddID = 0;

    return $this->genCode();

  }

}

?>