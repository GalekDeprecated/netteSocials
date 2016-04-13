<?php
// source: C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\app\presenters/templates/Homepage/default.latte

class Templateabd9a4a0f43d9046befc7394d2a21881 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('dcb3679e42', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb626d0a87f2_content')) { function _lb626d0a87f2_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div>
    <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:facebook"), ENT_COMPAT) ?>
">Facebook</a> | 
    <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:google"), ENT_COMPAT) ?>
">Google</a>
</div>

<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}