{*<!--
/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
* ("License"); You may not use this file except in compliance with the License
* The Original Code is:  vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*
********************************************************************************/
-->*}
{strip}
	<div id="sendEmailContainer" class="modelContainer modal fade" tabindex="-1">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header contentsBackground">
					<button data-dismiss="modal" class="close" title="{vtranslate('LBL_CLOSE')}">&times;</button>
					<h3 class="modal-title">{vtranslate('LBL_SELECT_EMAIL_IDS', $MODULE)}</h3>
				</div>
				<form class="form-horizontal" id="SendEmailFormStep1" method="post" action="index.php">
					<input type="hidden" name="selected_ids" value={\App\Json::encode($SELECTED_IDS)} />
					<input type="hidden" name="excluded_ids" value={\App\Json::encode($EXCLUDED_IDS)} />
					<input type="hidden" name="viewname" value="{$VIEWNAME}" />
					<input type="hidden" name="module" value="{$MODULE}"/>
					<input type="hidden" name="view" value="ComposeEmail"/>
					<input type="hidden" name="search_key" value= "{$SEARCH_KEY}" />
					<input type="hidden" name="operator" value="{$OPERATOR}" />
					<input type="hidden" name="search_value" value="{$ALPHABET_VALUE}" />
					<input type="hidden" name="search_params" value='{\App\Json::encode($SEARCH_PARAMS)}' />
					<input type="hidden" name="fieldModule" value={$SOURCE_MODULE} />
					<input type="hidden" name="to" value='{\App\Json::encode($TO)}' />
					{if !empty($PARENT_MODULE)}
						<input type="hidden" name="sourceModule" value="{$PARENT_MODULE}" />
						<input type="hidden" name="sourceRecord" value="{$PARENT_RECORD}" />
						<input type="hidden" name="parentModule" value="{$RELATED_MODULE}" />
					{/if}
						<div class='padding20'>
							<h4>{vtranslate('LBL_MUTIPLE_EMAIL_SELECT_ONE', $SOURCE_MODULE)}</h4>
						</div>
						<div id="multiEmailContainer">
							<div class='padding20'>
								{assign var=EMAIL_FIELD_LIST value=array()}
								{foreach item=EMAIL_FIELD from=$EMAIL_FIELDS}
									{if $EMAIL_FIELD->isViewEnabled()}
										{$EMAIL_FIELD_LIST[$EMAIL_FIELD->get('name')] = vtranslate($EMAIL_FIELD->get('label'), $SOURCE_MODULE)}
									{/if}
								{/foreach}
								<div>
									<label>
										<input id="selectAllEmails" type="radio" name="selectedFields" value='{\App\Json::encode(array_keys($EMAIL_FIELD_LIST))}' />
										&nbsp; {vtranslate('LBL_ALL_EMAILS', $SOURCE_MODULE)}
									</label>
								</div>
								{foreach item=EMAIL_FIELD_LABEL key=EMAIL_FIELD_NAME from=$EMAIL_FIELD_LIST name=emailFieldIterator}
									<div>
										<label>
											<input type="radio" class="emailField" name="selectedFields" value='{\App\Json::encode(array($EMAIL_FIELD_NAME))}' {if $smarty.foreach.emailFieldIterator.iteration eq 1} checked="checked" {/if}/>
											&nbsp; {$EMAIL_FIELD_LABEL}
										</label>
									</div>
								{/foreach}
							</div>
						</div>
					<div class='modal-footer'>
						<div class=" pull-right cancelLinkContainer">
							<button class="cancelLink btn btn-warning" type="button" data-dismiss="modal">{vtranslate('LBL_CANCEL', $MODULE)}</button>
						</div>
						<button class="btn btn-success addButton" type="submit" name="selectfield"><strong>{vtranslate('LBL_SELECT', $MODULE)}</strong></button>
					</div>
					{if $RELATED_LOAD eq true}
						<input type="hidden" name="relatedLoad" value={$RELATED_LOAD} />
					{/if}
				</form>
			</div>
		</div>
    </div>
{/strip}
