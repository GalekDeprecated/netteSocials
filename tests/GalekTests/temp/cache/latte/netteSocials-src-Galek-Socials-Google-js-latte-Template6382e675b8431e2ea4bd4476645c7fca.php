<?php
// source: C:\xampp\htdocs\clones\netteSocials\src\Galek\Socials\Google/js.latte

class Template6382e675b8431e2ea4bd4476645c7fca extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('752cfec725', 'html')
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
<script >
  window.___gcfg = {
    lang: <?php echo Latte\Runtime\Filters::escapeJs($lang) ?>,
    parsetags: <?php echo Latte\Runtime\Filters::escapeJs($parse) ?>

  };
</script>
<script src="https://apis.google.com/js/platform.js" async defer></script><?php
}}