{* $Id: notification_subject.tpl 58620 2016-05-18 13:09:06Z jonnybradley $ *}{if isset($forumId)}{tr}Reply Notification: {/tr} {$prefs.mail_template_custom_text}{$mail_topic}{else}{tr}{$prefs.mail_template_custom_text}Email Notification{/tr}{/if}