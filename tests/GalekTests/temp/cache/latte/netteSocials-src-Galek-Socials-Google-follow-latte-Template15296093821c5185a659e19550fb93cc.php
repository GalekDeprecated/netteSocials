<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Google/follow.latte

class Template15296093821c5185a659e19550fb93cc extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('e2af76ea0b', 'html')
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
<g:follow<?php echo Latte\Runtime\Filters::htmlAttributes(array('href'=>$link,'data-height'=>$size,'data-annotation'=>$layout)) ?>
></g:follow><?php
}}