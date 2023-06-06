<?php

/*
class UsuarioType {
    const SOCIO = 'Socio';
    const ADMINISTRADOR = 'Administrador';
}

$userType = UsuarioType::SOCIO;

if ($userType === UsuarioType::ADMINISTRADOR) {
    return true;
} elseif ($userType === UsuarioType::SOCIO) {
    return false;
}*/
//---------------------------------------------------

enum UsuarioType {
    case Socio;
    case Administrador;
}
/*
function selectEnum ($userType) {}

selectEnum ($userType::Socio);

*/


/*----------------------------------------------------
enum UsuarioType {
    case Socio;
    case Administrador;

    public const SOCIO = self::Socio;
    public const ADMINISTRADOR = self::Administrador;
}
*/

?>
