<?php

require_once '../../../wp-load.php';
header("Content-Type: text/css");
//require_once '../../../../wp-includes/functions.php';
?>
:root {
	--cor-1:#333333; /* = Cinza Escuro */
	--cor-2:#e2e1e0; /* = Cinza */
	--cor-3:#eeeeee; /* = Cinza claro */
	--cor-4:#ffffff; /* = Branco */
	--cor-5:#01913a; /* = Verde */
	--cor-6:#e00b1c; /* = Vermelho */
	--cor-7:#fdea14; /* = Amarelo */
	--cor-8:#3399cc; /* = Azul (TI) */

	--sombra-box: 0 3px 4px 0px rgba(50, 50, 50, 0.5);
	--sombra-hover: 0 6px 10px 0px rgba(50, 50, 50, 0.75)
}

@charset "utf-8";
/* CSS Document */

@font-face { font-family: Panton-SemiBold; src:url("./fonts/Panton-SemiBold.otf");}
@font-face { font-family: Panton-SemiBold-Italic; src:url("./fonts/Panton-SemiBold-Italic.otf");}
@font-face { font-family: Panton-Bold; src:url("./fonts/Panton-Bold.otf");}
@font-face { font-family: Panton-ExtraBold; src:url("./fonts/Panton-ExtraBold.otf");}
@font-face { font-family: Panton-Black; src:url("./fonts/Panton-Black.otf");}



body {font-family: Panton-SemiBold; color: #333333;background-color: white;}

a, p{font-family: Panton-SemiBold;}

h1, h2{font-family: Panton-Black;}

h3, h4{font-family: Panton-ExtraBold;}

h5, h6{font-family: Panton-Bold;}

/*CSS FOOTER*/

footer p, a{
	color: white;
	font-size: 14px;
	margin: 0px;
	padding: 0px;
	text-decoration: none;
}

footer p, a:hover{
	text-decoration: none;
	color: #e2e1e0;
}