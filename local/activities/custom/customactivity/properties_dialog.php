<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<tr>
	<td align="right" width="40%"><span class="adm-detail-content-cell-l">ID события:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("string", 'custom_id', $arCurrentValues['custom_id'], Array('size'=> 50))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field">Название события:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("string", 'calendar_name', $arCurrentValues['calendar_name'], Array('size'=> 50))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%" valign="top"> Описание события:</td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("text", 'calendar_desrc', $arCurrentValues['calendar_desrc'], Array('rows'=> 7))?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field">Дата начала::</span></td>
	<td width="60%">
		<span style="white-space:nowrap;"><input type="text" name="calendar_from" id="id_calendar_from" size="30" value="<?= htmlspecialcharsbx($arCurrentValues["calendar_from"]) ?>"><?= CAdminCalendar::Calendar("calendar_from", "", "", true) ?></span>
		<input type="button" value="..." onclick="BPAShowSelector('id_calendar_from', 'datetime');">
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field">Дата окончания:</span></td>
	<td width="60%">
		<span style="white-space:nowrap;"><input type="text" name="calendar_to" id="id_calendar_to" size="30" value="<?= htmlspecialcharsbx($arCurrentValues["calendar_to"]) ?>"><?= CAdminCalendar::Calendar("calendar_to", "", "", true) ?></span>
		<input type="button" value="..." onclick="BPAShowSelector('id_calendar_to', 'datetime');">
	</td>
</tr>


<tr>
	<td align="right" width="40%"><span class="adm-detail-content-cell-l">Напоминание за (количество минут):</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("number", 'custom_alert', $arCurrentValues['custom_alert'])?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-detail-content-cell-l">создавать ICS-файл:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField("bool", 'custom_ics', $arCurrentValues['custom_ics'])?>
	</td>
</tr>
<tr>
	<td align="right" width="40%"><span class="adm-required-field">Свойство содержащее список пользователей:</span></td>
	<td width="60%">
		<?=CBPDocument::ShowParameterField('user', 'calendar_user', $arCurrentValues['calendar_user'], Array('rows' => 1))?>
	</td>
</tr>

