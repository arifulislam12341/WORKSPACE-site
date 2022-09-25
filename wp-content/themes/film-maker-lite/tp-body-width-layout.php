<?php

	$film_maker_lite_tp_theme_css = "";

	$film_maker_lite_theme_lay = get_theme_mod( 'film_maker_lite_tp_body_layout_settings','Full');
    if($film_maker_lite_theme_lay == 'Container'){
		$film_maker_lite_tp_theme_css .='body{';
			$film_maker_lite_tp_theme_css .='max-width: 1140px; width: 100%; padding-right: 15px; padding-left: 15px; margin-right: auto; margin-left: auto;';
		$film_maker_lite_tp_theme_css .='}';
		$film_maker_lite_tp_theme_css .='.page-template-front-page .menubar{';
			$film_maker_lite_tp_theme_css .='position: static;';
		$film_maker_lite_tp_theme_css .='}';
		$film_maker_lite_tp_theme_css .='.scrolled{';
			$film_maker_lite_tp_theme_css .='width: auto; left:0; right:0;';
		$film_maker_lite_tp_theme_css .='}';
	}else if($film_maker_lite_theme_lay == 'Container Fluid'){
		$film_maker_lite_tp_theme_css .='body{';
			$film_maker_lite_tp_theme_css .='width: 100%;padding-right: 15px;padding-left: 15px;margin-right: auto;margin-left: auto;';
		$film_maker_lite_tp_theme_css .='}';
		$film_maker_lite_tp_theme_css .='.page-template-front-page .menubar{';
			$film_maker_lite_tp_theme_css .='width: 99%';
		$film_maker_lite_tp_theme_css .='}';		
		$film_maker_lite_tp_theme_css .='.scrolled{';
			$film_maker_lite_tp_theme_css .='width: auto; left:0; right:0;';
		$film_maker_lite_tp_theme_css .='}';
	}else if($film_maker_lite_theme_lay == 'Full'){
		$film_maker_lite_tp_theme_css .='body{';
			$film_maker_lite_tp_theme_css .='max-width: 100%;';
		$film_maker_lite_tp_theme_css .='}';
	}

    $film_maker_lite_scroll_position = get_theme_mod( 'film_maker_lite_scroll_top_position','Right');
    if($film_maker_lite_scroll_position == 'Right'){
        $film_maker_lite_tp_theme_css .='#return-to-top{';
            $film_maker_lite_tp_theme_css .='right: 20px;';
        $film_maker_lite_tp_theme_css .='}';
    }else if($film_maker_lite_scroll_position == 'Left'){
        $film_maker_lite_tp_theme_css .='#return-to-top{';
            $film_maker_lite_tp_theme_css .='left: 20px;';
        $film_maker_lite_tp_theme_css .='}';
    }else if($film_maker_lite_scroll_position == 'Center'){
        $film_maker_lite_tp_theme_css .='#return-to-top{';
            $film_maker_lite_tp_theme_css .='right: 50%;left: 50%;';
        $film_maker_lite_tp_theme_css .='}';
    }