<?php

$user = '';
$password = '';
$host = ' 172.20.10.14';
$domain = 'ou=DomaineGAT';
$basedn = 'DC=gat21,DC=com,DC=tn';
$port='389';


$ad = ldap_connect("ldap://{$host}.{$domain}:{$port}") or die('Could not connect to LDAP server.');
ldap_set_option($ad, LDAP_OPT_PROTOCOL_VERSION, 3);
ldap_set_option($ad, LDAP_OPT_REFERRALS, 0);

?>

<?php
    $ldaprdn  = $_POST["login"];
    $ldappass = $_POST["pass"];
    $ldapconn = ldap_connect("ldap server name") or die("Could not connect to LDAP server.");

if ($ldapconn) 
{
    $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);
    if ($ldapbind) 
    {
        echo "LDAP bind successful...";
    }
    else 
    {
        echo "LDAP bind failed...";
    }
}
$Result = ldap_search($ldapconn, "ou=DomaineGAT,DC=gat21,DC=com,DC=tn", "(samaccountname=$ldaprdn)", array("dn"));
$data = ldap_get_entries($ldapconn, $Result);
print_r($data);
?>