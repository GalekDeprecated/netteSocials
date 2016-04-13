<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Google/plus.latte

class Template172057e86504c8b5b54e26aab1f41030 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('ea61ae629f', 'html')
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
<g:plusone<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-href'=>$link,'data-size'=>$size,'data-annotation'=>$layout,'data-width'=>$width,'data-align'=>$align,'data-recommendations'=>$recommendations,'data-count'=>$count)) ?>
></g:plusone><?php
}}