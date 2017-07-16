<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" src="{$path_base}vista/JS/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="{$path_base}vista/JS/main.js"></script>
    <link rel="stylesheet" href="{$path_base}vista/CSS/estilo.css">
    
    
    <!--Las siguientes sentencias haran que se cargue (si existe) en archivo extra de
    CSS o JS que lleve el mismo nombre que el template; esta info viene de vistaHTML-->
    {if isset($tieneCSS)}
        {assign var="myCss" value="{$path_base}vista/CSS/{$mostrar}.css"}
        <link rel="stylesheet" href="{$myCss}">
    {/if}  
    {if isset($tieneJS)}
        {assign var="myJs" value="{$path_base}vista/JS/{$mostrar}.js"}
        <script type="text/javascript" src="{$myJs}"></script>  
    {/if}
    
    <link href="https://fonts.googleapis.com/css?family=Asap" rel="stylesheet"/>
    
    <title>.:MiViajante:.</title>
    
    <script languaje="JavaScript">var $baseUrl='{$path_base}';</script>
</head>
