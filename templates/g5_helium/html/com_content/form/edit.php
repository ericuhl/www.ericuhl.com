<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_content
 *
 * @copyright   Copyright (C) 2005 - 2017 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

JHtml::_('behavior.tabstate');
JHtml::_('behavior.keepalive');
JHtml::_('behavior.formvalidator');
JHtml::_('formbehavior.chosen', '#jform_catid', null, array('disable_search_threshold' => 0));
JHtml::_('formbehavior.chosen', 'select');
$this->tab_name = 'com-content-form';
$this->ignore_fieldsets = array('image-intro', 'image-full', 'jmetadata', 'item_associations');

// Create shortcut to parameters.
$params = $this->state->get('params');

// This checks if the editor config options have ever been saved. If they haven't they will fall back to the original settings.
$editoroptions = isset($params->show_publishing_options);

if (!$editoroptions)
{
	$params->show_urls_images_frontend = '0';
}

JFactory::getDocument()->addScriptDeclaration("
	Joomla.submitbutton = function(task)
	{
		if (task == 'article.cancel' || document.formvalidator.isValid(document.getElementById('adminForm')))
		{
			" . $this->form->getField('articletext')->save() . "
			Joomla.submitform(task);
		}
	}
");
?>
<div class="edit item-page<?php echo $this->pageclass_sfx; ?>">
	<?php if ($params->get('show_page_heading')) : ?>
	<div class="page-header">
		<h1>
			<?php echo $this->escape($params->get('page_heading')); ?>
		</h1>
	</div>
	<?php endif; ?>

	<form action="<?php echo JRoute::_('index.php?option=com_content&a_id=' . (int) $this->item->id); ?>" method="post" name="adminForm" id="adminForm" class="form-validate form-vertical">
		<fieldset>

				<?php echo $this->form->renderField('title'); ?>

				<?php if ($this->captchaEnabled) : ?>
					<?php echo $this->form->renderField('captcha'); ?>
				<?php endif; ?>

			<?php if ($params->get('show_urls_images_frontend')) : ?>

			<?php endif; ?>

			<?php echo JLayoutHelper::render('joomla.edit.params', $this); ?>

			<?php echo $this->form->getInput('articletext'); ?>

			<?php if ($params->get('show_publishing_options', 1) == 1) : ?>	
				
			<?php endif; ?>

			<?php echo $this->form->renderField('image_fulltext', 'images'); ?>

			<div style="margin-bottom: 1rem;">
				<?php echo $this->form->renderField('tags'); ?>
				<?php if ($params->get('save_history', 0)) : ?>
					<?php echo $this->form->renderField('version_note'); ?>
				<?php endif; ?>
			</div>

			<div class="row-fluid">
				<div class="span6">
					<?php echo $this->form->renderField('catid'); ?>
					<p>You must select "Recipes" category</p>
				</div>
				<div class="span6">
					<?php if ($this->item->params->get('access-change')) : ?>
						<?php echo $this->form->renderField('state'); ?>
					<?php endif; ?>
					<p>Note: You can choose to share this recipe now or save it later.</p>
				</div>
			</div>

			<input type="hidden" name="task" value="" />
			<input type="hidden" name="return" value="<?php echo $this->return_page; ?>" />
			<?php echo JHtml::_('form.token'); ?>
		</fieldset>
		<div class="btn-toolbar">
			<div class="btn-group">
				<button type="button" class="btn btn-primary" onclick="Joomla.submitbutton('article.save')">
					<span class="icon-ok"></span><?php echo JText::_('JSAVE') ?>
				</button>
			</div>
			<div class="btn-group">
				<button type="button" class="btn" onclick="Joomla.submitbutton('article.cancel')">
					<span class="icon-cancel"></span><?php echo JText::_('JCANCEL') ?>
				</button>
			</div>
			<?php if ($params->get('save_history', 0) && $this->item->id) : ?>
			<div class="btn-group">
				<?php echo $this->form->getInput('contenthistory'); ?>
			</div>
			<?php endif; ?>
		</div>
	</form>
</div>
