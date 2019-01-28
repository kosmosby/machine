<?php
/**
 * @package	AcyMailing for Joomla
 * @version	6.0.3
 * @author	acyba.com
 * @copyright	(C) 2009-2019 ACYBA S.A.R.L. All rights reserved.
 * @license	GNU/GPLv3 http://www.gnu.org/licenses/gpl-3.0.html
 */

defined('_JEXEC') or die('Restricted access');
?><?php //TODO penser a mettre a jour les liens pour les pages pas encore créé (ex: automation)?>
<div id="acym__dashboard">
    <div class="acym__dashboard__card cell grid-x large-up-3 grid-margin-x grid-margin-y medium-up-2 small-up-1 margin-right-0">
        <div class="cell acym__content acym__dashboard__one-card text-center grid-x">
            <div class="cell acym__dashboard__card__picto__audience acym__dashboard__card__picto"><i class="material-icons acym__dashboard__card__icon__audience">insert_chart</i></div>
            <h1 class="cell acym__dashboard__card__title"><?php echo acym_translation('ACYM_AUDIENCE') ?></h1>
            <hr class="cell small-10">
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('lists') ?>"><?php echo acym_translation('ACYM_VIEW_ALL_LISTS') ?></a>
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('lists&task=edit&step=settings') ?>"><?php echo acym_translation('ACYM_CREATE_LIST') ?></a>
            <a class="acym__dashboard__card__link" href="#"><?php echo acym_tooltip(acym_translation('ACYM_CREATE_SEGMENT'), '<span class="acy_coming_soon"><i class="material-icons acy_coming_soon_icon">new_releases</i>'.acym_translation('ACYM_COMING_SOON').'</span>', 'acym__dashboard__card__link__unclickable'); ?></a>
        </div>
        <div class="cell acym__content acym__dashboard__one-card text-center grid-x">
            <div class="acym__dashboard__card__picto__campaings acym__dashboard__card__picto"><i class="material-icons acym__dashboard__card__icon__campaings">email</i></div>
            <h1 class="acym__dashboard__card__title"><?php echo acym_translation('ACYM_CAMPAIGNS') ?></h1>
            <hr class="cell small-10">
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('campaigns') ?>"><?php echo acym_translation('ACYM_VIEW_ALL_CAMPAIGNS') ?></a>
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('campaigns&task=edit&step=chooseTemplate') ?>"><?php echo acym_translation('ACYM_CREATE_CAMPAIGN') ?></a>
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('mails&task=edit&type_editor=acyEditor') ?>"><?php echo acym_translation('ACYM_CREATE_TEMPLATE') ?></a>
        </div>
        <div class="cell acym__content acym__dashboard__one-card text-center grid-x">
            <?php echo acym_teasing('<i class="material-icons acy_coming_soon_icon">new_releases</i>'.acym_translation('ACYM_COMING_SOON')) ?>
            <div class="acym__dashboard__card__picto__automation acym__dashboard__card__picto"><i class="material-icons acym__dashboard__card__icon__automation">autorenew</i></div>
            <h1 class="acym__dashboard__card__title"><?php echo acym_translation('ACYM_AUTOAMTION') ?></h1>
            <hr class="cell small-10">
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('automation') ?>"><?php echo acym_translation('ACYM_CREATE_EVENT_TRIGGER') ?></a>
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('automation') ?>"><?php echo acym_translation('ACYM_CREATE_PERIODIC_TRIGGER') ?></a>
            <a class="acym__dashboard__card__link" href="<?php echo acym_completeLink('automation') ?>"><?php echo acym_translation('ACYM_CREATE_FOLLOW_UP') ?></a>
        </div>
    </div>
    <div class="cell acym__dashboard__active-campaings acym__content">
        <h1 class="acym__dashboard__active-campaings__title"><?php echo acym_translation('ACYM_CAMPAIGNS_SCHEDULED') ?></h1>
        <div class="acym__dashboard__active-campaings__listing">
            <?php if (empty($data['campaignsScheduled'])) { ?>
                <h1 class="acym__dashboard__active-campaings__none"><?php echo acym_translation('ACYM_NONE_OF_YOUR_CAMPAIGN_SCHEDULED_GO_SCHEDULE_ONE') ?></h1>
            <?php } else { ?>
                <?php
                $nbCampaigns = count($data['campaignsScheduled']);
                $i = 0;
                foreach ($data['campaignsScheduled'] as $campaign) {
                    $i++; ?>
                    <?php //TODO gérer les sending ?>
                    <div class="cell grid-x acym__dashboard__active-campaings__one-campaing">
                        <a class="acym__dashboard__active-campaings__one-campaing__title medium-4 small-12" href="<?php echo acym_completeLink('campaigns&task=edit&step=editEmail&id=').$campaign->id; ?>"><?php echo $campaign->name ?></a>
                        <div class="acym__dashboard__active-campaings__one-campaing__state medium-2 small-12 acym__background-color__blue text-center"><span><?php echo acym_translation('ACYM_SCHEDULED').' : '.acym_getDate($campaign->sending_date, 'M. j, Y') ?></span></div>
                        <p id="<?php echo $campaign->id ?>" class="medium-6 small-12 acym__dashboard__active-campaings__one-campaing__action acym__color__dark-gray"><?php echo acym_translation('ACYM_CANCEL_SCHEDULING') ?></p>
                    </div>
                    <?php if ($i < $nbCampaigns) { ?>
                        <hr class="cell small-12">
                    <?php }
                }
            } ?>
        </div>
    </div>
    <?php include(ACYM_VIEW.'stats'.DS.'tmpl'.DS.'global_stats.php'); ?>
</div>

