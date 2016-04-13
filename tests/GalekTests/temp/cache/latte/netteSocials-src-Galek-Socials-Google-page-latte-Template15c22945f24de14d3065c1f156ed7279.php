<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Google/page.latte

class Template15c22945f24de14d3065c1f156ed7279 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('81d8ddd510', 'html')
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
<g:<?php echo $badgeType ?> href="<?php echo Latte\Runtime\Filters::escapeHtml(Latte\Runtime\Filters::safeUrl($link), ENT_COMPAT) ?>
" data-rel="author"<?php echo Latte\Runtime\Filters::htmlAttributes(array('data-showcoverphoto'=>$coverphoto,'data-showtagline'=>$tagline,'data-theme'=>$scheme,'data-width'=>$width)) ?>
></g:<?php echo $badgeType ?>><?php
}}