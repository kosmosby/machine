<?php
/**
 * @package	AcyMailing for Joomla
 * @version	6.0.3
 * @author	acyba.com
 * @copyright	(C) 2009-2019 ACYBA S.A.R.L. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');
?><div id="acym__users__import__cms_users" class="grid-x acym_area padding-vertical-2 padding-horizontal-2">
	<div class="cell large-3"></div>
	<div class="cell large-6">
		<div class="text-center">
			<h6><?php echo acym_translation_sprintf('ACYM_IMPORT_NB_WEBSITE_USERS', $data['nbUsersCMS'])?></h6>
			<h6><?php echo acym_translation_sprintf('ACYM_IMPORT_NB_ACYM_USERS', $data['nbUsersAcymailing'])?></h6>
		</div>
		<br>
		<div class="text-left">
            <?php echo acym_translation('ACYM_IMPORT_CMS_1'); ?>
			<ol>
				<li><?php echo acym_translation_sprintf('ACYM_IMPORT_CMS_2', ACYM_CMS); ?></li>
				<li><?php echo acym_translation_sprintf('ACYM_IMPORT_CMS_3', ACYM_CMS); ?></li>
				<li><?php echo acym_translation_sprintf('ACYM_IMPORT_CMS_4', ACYM_CMS); ?></li>
				<li><?php echo acym_translation_sprintf('ACYM_IMPORT_CMS_5', ACYM_CMS); ?></li>
			</ol>
		</div>

		<div class="cell grid-x text-right">
			<div class="cell medium-auto"></div>
			<button id="submit_import_cms" type="button" class="button acym__import__submit cell medium-shrink is-hidden" data-from="cms"><?php echo acym_translation('ACYM_IMPORT')?></button>
			<?php
			echo acym_modal_pagination_lists_import(
				acym_translation('ACYM_IMPORT'),
				'',
				acym_translation('ACYM_IMPORT_IN_THESE_LISTS'),
				'acym__user__import__add-subscription__modal',
				'data-toggle="add_subscription"',
				'acym__cms__users__import__button'
			);
			?>
		</div>
	</div>
	<div class="cell large-3"></div>
    <input type="hidden" name="new_list" id="acym__import__new-list" value=""/>
</div>

