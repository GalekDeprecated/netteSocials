<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Facebook/share.latte

class Template99e5d4101f67528f9ed7c692501a2e34 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('06fd2fbfb0', 'html')
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
<div class="fb-share-button" data-href="<?php echo Latte\Runtime\Filters::escapeHtml($_presenter->link($link), ENT_COMPAT) ?>
" data-layout="<?php echo Latte\Runtime\Filters::escapeHtml($layout, ENT_COMPAT) ?>
"></div><?php
}}