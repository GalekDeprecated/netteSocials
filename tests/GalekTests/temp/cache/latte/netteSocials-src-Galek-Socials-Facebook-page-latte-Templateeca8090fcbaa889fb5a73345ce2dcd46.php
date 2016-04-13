<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Facebook/page.latte

class Templateeca8090fcbaa889fb5a73345ce2dcd46 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('143547d1ef', 'html')
;
// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
?>
<div class="fb-page" data-href="<?php echo Latte\Runtime\Filters::escapeHtml($link, ENT_COMPAT) ?>
"<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-width' => $width,'data-height' => $height,'data-tabs'=>$tabs,'data-hide-cover'=>$hide_cover,'data-show-facepile'=>$faces,'data-hide-cta'=>$cta,'data-small-header'=>$small_header,'data-adapt-container-width'=>$adapt_width)) ?>
></div><?php
}}