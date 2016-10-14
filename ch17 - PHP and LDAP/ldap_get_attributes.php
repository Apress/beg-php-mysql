    $dn = "OU=People,OU=facstf,DC=ad,DC=example,DC=com";

    $attributes = array("sn","telephonenumber");

    $filter = "memberof=CN=staff,OU=Groups,DC=ad,DC=example,DC=com";
    $result = ldap_search($ad, $dn, $filter, $attributes);

    $entry = ldap_first_entry($ad, $result);

    while($entry) {

       $attrs = ldap_get_attributes($ad, $entry);
       for ($i=0; $i<$attrs["count"]; $i++)
       {
          $attrName = $attrs[$i];
          $values = ldap_get_values($ad,$entry,$attrName);
          for ($j=0; $j < $values["count"]; $j++)
          {
             echo "$attrName: ".$values[$j]."<br />";
          }
       }
       $entry = ldap_next_entry($ad,$entry);
    }