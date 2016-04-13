<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Google/plus.latte

class Template7aafb54fc51c914e6e786ddc1b23ceef extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('024da985f2', 'html')
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