<?php
// source: C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\app\presenters/templates/Homepage/google.latte

class Templatec0a677f9d934aec59613522b14662565 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('c623010806', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb304b71ba4b_content')) { function _lb304b71ba4b_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div>
    <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
"><- back to List</a>
    <h2>Google</h2>
    <hr>
    <aside>
	<h3>Page plugin</h3>
<?php $_l->tmp = $_control->getComponent("googlePage"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
    </aside>
    <section class="share">
        <div>
	    <h3>Plus</h3>
<?php $_l->tmp = $_control->getComponent("googlePlus"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
        <div>
	    <h3>Follow</h3>
<?php $_l->tmp = $_control->getComponent("googleFollow"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
        <div>
	    <h3>Share</h3>
<?php $_l->tmp = $_control->getComponent("googleShare"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
    </section>
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