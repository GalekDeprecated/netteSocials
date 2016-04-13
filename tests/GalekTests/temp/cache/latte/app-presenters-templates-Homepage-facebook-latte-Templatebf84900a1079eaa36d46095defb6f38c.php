<?php
// source: C:\xampp\htdocs\clones\netteSocials\tests\GalekTests\app\presenters/templates/Homepage/facebook.latte

class Templatebf84900a1079eaa36d46095defb6f38c extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('68e1498722', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lb6252f5c50a_content')) { function _lb6252f5c50a_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?><div>
    <a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Homepage:default"), ENT_COMPAT) ?>
"><- back to List</a>
    <h2>Facebook</h2>
    <hr>
    <aside>
	<h3>Page plugin</h3>
<?php $_l->tmp = $_control->getComponent("facebookPage"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
    </aside>
    <section class="share">
        <div>
	    <h3>Share</h3>
<?php $_l->tmp = $_control->getComponent("facebookShare"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
        <div>
	    <h3>Like</h3>
<?php $_l->tmp = $_control->getComponent("facebookLike"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
        <div>
	    <h3>Follow</h3>
<?php $_l->tmp = $_control->getComponent("facebookFollow"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
        <div>
	    <h3>Send</h3>
<?php $_l->tmp = $_control->getComponent("facebookSend"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
	</div>
        <div>
	    <h3>Comments</h3>
<?php $_l->tmp = $_control->getComponent("facebookComments"); if ($_l->tmp instanceof Nette\Application\UI\IRenderable) $_l->tmp->redrawControl(NULL, FALSE); $_l->tmp->render() ?>
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