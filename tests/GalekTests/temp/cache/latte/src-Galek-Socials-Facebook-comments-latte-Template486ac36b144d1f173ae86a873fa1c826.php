<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Facebook/comments.latte

class Template486ac36b144d1f173ae86a873fa1c826 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('21c9c266e4', 'html')
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
<div class="fb-comments" data-href="<?php echo Latte\Runtime\Filters::escapeHtml($_presenter->link($link), ENT_COMPAT) ?>
"<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-colorscheme' => $scheme,'data-mobile' => $mobile,'data-width' => $width,'data-numposts'=>$count,'data-order-by'=>$order)) ?>
></div><?php
}}