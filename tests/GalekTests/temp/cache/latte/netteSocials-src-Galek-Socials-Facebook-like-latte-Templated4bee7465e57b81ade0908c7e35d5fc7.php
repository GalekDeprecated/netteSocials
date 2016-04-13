<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Facebook/like.latte

class Templated4bee7465e57b81ade0908c7e35d5fc7 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('1b2f2105e2', 'html')
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
<div class="fb-like" data-href="<?php echo Latte\Runtime\Filters::escapeHtml($_presenter->link($link), ENT_COMPAT) ?>
"<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-colorscheme' => $scheme,'data-kid-directed-site' => $kid_directed,'data-width' => $width,'data-layout'=>$layout,'data-action'=>$type,'data-show-faces'=>$faces,'data-share'=>$share)) ?>
></div><?php
}}