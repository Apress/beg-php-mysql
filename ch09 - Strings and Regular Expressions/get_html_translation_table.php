<?php
   $string = "La pasta � il piatto pi� amato in Italia";
   $translate = get_html_translation_table(HTML_ENTITIES);
   echo strtr($string, $translate);
?>