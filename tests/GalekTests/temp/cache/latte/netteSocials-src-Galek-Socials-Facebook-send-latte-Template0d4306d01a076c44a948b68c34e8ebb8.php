<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Facebook/send.latte

class Template0d4306d01a076c44a948b68c34e8ebb8 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('a37755ffe8', 'html')
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
<div class="fb-send" data-href="<?php echo Latte\Runtime\Filters::escapeHtml($_presenter->link($link), ENT_COMPAT) ?>
"<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-colorscheme' => $scheme,'data-kid-directed-site' => $kid_directed)) ?>
></div><?php
}}