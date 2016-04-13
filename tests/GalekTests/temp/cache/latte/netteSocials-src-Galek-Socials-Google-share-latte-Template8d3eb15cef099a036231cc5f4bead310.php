<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Google/share.latte

class Template8d3eb15cef099a036231cc5f4bead310 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('bab1b42185', 'html')
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
<g:plus action='share'<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-href'=>$link,'data-size'=>$size,'data-annotation'=>$layout,'data-width'=>$width,'data-align'=>$align)) ?>
></g:plus><?php
}}