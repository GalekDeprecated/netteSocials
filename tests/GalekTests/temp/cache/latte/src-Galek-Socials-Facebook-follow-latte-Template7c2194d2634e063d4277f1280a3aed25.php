<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Facebook/follow.latte

class Template7c2194d2634e063d4277f1280a3aed25 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('d046f72c9b', 'html')
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
<div class="fb-follow" data-href="<?php echo Latte\Runtime\Filters::escapeHtml($link, ENT_COMPAT) ?>
"<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-colorscheme' => $scheme,'data-kid-directed-site' => $kid_directed,'data-width' => $width,'data-height' => $height,'data-layout'=>$layout,'data-show-faces'=>$faces)) ?>
></div><?php
}}