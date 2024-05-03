<?php 
$core_css = '<link href="bos/core/css/construct.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;

/* CORE COMPONENTS */
$default_css = '<link href="bos/core/css/default.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$bfx_css = '<link href="bos/core/css/bfx.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$bicons_css = '<link href="bos/core/css/bicons.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$blueprintgrid_css = '<link href="bos/core/css/blueprintgrid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$buff_css = '<link href="bos/core/css/buff.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$buix_css = '<link href="bos/core/css/buix.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$butch_css = '<link href="bos/core/css/butch.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$flavors_css = '<link href="bos/core/css/flavors.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$fux_css = '<link href="bos/core/css/fux.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$rebar_css = '<link href="bos/core/css/rebar.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$animate_css = '<link href="bos/core/css/animate.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$filetypes_css = '<link href="bos/core/css/filetypes.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$fonts_css = '<link href="bos/core/css/fonts/construct-fonts.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;

/* Blueprint Grid Breakdown */
$b3grid_css = '<link href="bos/core/css/grids/b3grid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$b3grid_css .= '<link href="bos/core/css/grids/media-queries.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$cssgrid_css = '<link href="bos/core/css/grids/css-grid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$bootstrapgrid_css = '<link href="bos/core/css/grids/b3grid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$printgrid_css = '<link href="bos/core/css/grids/printgrid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$bentogrid_css = '<link href="bos/core/css/grids/bento-grid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$chaosgrid_css = '<link href="bos/core/css/grids/chaos-grid.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$polygrids_css = '<link href="bos/core/css/grids/polygrids.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;

/* MOLDS Breakdown */
$shapes_css = '<link href="bos/core/css/molds/shapes.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$presenter_css = '<link href="bos/core/css/molds/presenter.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$multimedia_css = '<link href="bos/core/css/molds/multimedia.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;
$uiux_css = '<link href="bos/core/css/grids/uiux.css" type="text/css" rel="stylesheet" media="all" />'.PHP_EOL;

/* Deconstruct Mode */
$grids_css = $b3grid_css . $bootstrapgrid_css . $cssgrid_css . $printgrid_css . $bentogrid_css . $chaosgrid_css . $polygrids_css;
$deconstruct_css = $default_css . $grids_css . $bfx_css . $bicons_css . $buff_css . $buix_css . $butch_css . $flavors_css . $fux_css . $rebar_css;
$deconstruct_css .= $animate_css . $filetypes_css. $fonts_css . $shapes_css . $presenter_css . $multimedia_css . $uiux_css;
?>