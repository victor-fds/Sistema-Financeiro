<?php

    require_once '../private/Init.php';
    
    require_once TPL.'header.tpl.php';
    
    switch($_GET['page']){
        case 'index': require_once TPL.'index.tpl.php'; break;
        case 'cadclientes': require_once TPLCAD.'cadClientes.tpl.php'; break;
        case 'cadfornecedores': require_once TPLCAD.'cadFornecedores.tpl.php'; break;
        default: require_once TPL.'login.tpl.php'; break;
    }
    
    require_once TPL.'footer.tpl.php';