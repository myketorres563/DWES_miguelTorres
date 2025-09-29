<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Cadenas y secuencias de escape en PHP</title>
    <style>
        body { font-family: Arial, sans-serif; padding:20px; line-height:1.5; }
        pre { background:#f4f4f4; padding:10px; border-radius:5px; }
        h2 { margin-top:25px; }
    </style>
</head>
<body>
    <h1>Estudio de cadenas y secuencias de escape en PHP</h1>

    <?php
        $valor = 123;

        // Comillas dobles: interpreta escapes y variables
        $dobles = "Ejemplo con comillas dobles:\n- Salto de línea (\n)\n- Tabulación (\t)\tAquí\n- Comilla doble (\")\n- Barra invertida (\\)\n- Variable: \$valor = $valor";

        // Comillas simples: muestra escapes y variables literalmente
        $simples = 'Ejemplo con comillas simples:\n- Salto de línea (\\n)\n- Tabulación (\\t)\tAquí\n- Comilla simple (\')\n- Barra invertida (\\)\n- Variable: $valor';

        // Unicode y Hex
        $unicode = "Símbolos Unicode: Corazón \u{2665}, Avión \u{2708}";
        $hex     = "Hexadecimal: \x48\x6F\x6C\x61 = Hola";

        // Heredoc: interpreta escapes y variables
        $heredoc = <<<EOT
Ejemplo con heredoc:
- Nueva línea (\n) y tabulación (\t)
- Variable \$valor: $valor
- Unicode: $unicode
EOT;

        // Nowdoc: no interpreta escapes ni variables
        $nowdoc = <<<'EOT'
Ejemplo con nowdoc:
- Nueva línea (\n) y tabulación (\t)
- Variable $valor (no sustituida)
- Unicode: \u{2665} \u{2708}
EOT;
    ?>

    <h2>Comillas dobles</h2>
    <pre><?php echo $dobles; ?></pre>

    <h2>Comillas simples</h2>
    <pre><?php echo $simples; ?></pre>

    <h2>Unicode y Hexadecimal</h2>
    <pre><?php echo $unicode . "\n" . $hex; ?></pre>

    <h2>Heredoc</h2>
    <pre><?php echo $heredoc; ?></pre>

    <h2>Nowdoc</h2>
    <pre><?php echo $nowdoc; ?></pre>
</body>
</html>