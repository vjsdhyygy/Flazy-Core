<?php
/**
 * Русский языковой пакет.
 * @package Flazy_Russian
 */

/** Языковые конструкции используемые  в post.php и edit.php */
$lang_post = array(

// Post validation stuff (many are similar to those in edit.php)
'No subject'			=>	'Темите трябва да имат заглавие.',
'Too long subject'		=>	'Заглавията не могат да са по-дъли от 70 знака.',
'Too long description'	=>	'Описанието не може да бъде по-дълго от 100 символа.',
'All caps subject'		=>	'Заглавията не могат да са изцяло с главни букви.',
'All caps description'	=>	'Описанието не може да се състои само от главни букви.',
'No message'			=>	'Трябва да въведете мнение.',
'Too long message'		=>	'Мнението ви е по-голямо от %s bytes. Това надвишава лимита от %s bytes.',
'All caps message'		=>	'Мненията не могат да са изцяло с главни букви.',
'Max count options'		=>	'Броят на опциите не могат да бъдат по-големи %s.',
'Min count options'		=>	'Броят на опции не могат да бъдат по-малко от 2.',
'Days limit'			=>	'Броят на дни на анкетата не може да бъде по-голям от 90 и по-малко от 1.',
'Votes count'			=>	'Броят на гласовете не може да бъде по-голям от 1000 и по-малко от 10.',
'Input error'			=>	'Трябва да въведете броя на дните за главуване или броя на гласовете.',
'CSRF token mismatch'	=>	'Вероятно е минало известно време от отварянето на тази страница. Моля кликнете бутона за изпращане още въднъж.',
'Invalid e-mail'		=>	'Невалиден e-mail адрес.',
'Banned e-mail'			=>	'Е-мейл адреса, който сте въвели, е блокиран на този форум. Моля изберете друг имейл.',
'Blocked spamer'		=>	'Анализът на данните показва, че вие сте спамер, ако мислите, че това е грешка, моля, посетете <a href="http://www.stopforumspam.com">Stop Forum Spam.com</a>.',

// Сообщения
'Compose your reply'	=>	'Публикувайте своето ново мнение',
'Compose your topic'	=>	'Публикувайте своята нова тема',
'Compose edited reply'	=>	'Публикувайте редактирания отговор',
'Compose edited topic'	=>	'Публикувайте редактираната тема',
'Guest post legend'		=>	'Задължителна инфомрация за гости',
'Post errors'			=>	'<strong>Внимание!</strong> Следните грешки трябва да се коригират преди да се публикува мнението:',
'Guest name'			=>	'Име на госта',	// For guests (instead of Username)
'Guest e-mail'			=>	'E-mail на госта',
'Post redirect'			=>	'Мнението е въведено. Пренасочване …',
'Post reply'			=>	'Нов отговор',
'Post new topic'		=>	'Нова тема',
'Topic subject'			=>	'Заглавие на темата',
'Topic description'		=>	'Описание',
'Write message'			=>	'Напиши съобщение',
'Added'					=>	'Пуснато от ',
'Hide smilies'			=>	'Не показвай имотикони за това мнение.',
'Merge posts'			=>	'Сливане с предишно съобщение, ако това е ваше.',
'Subscribe'				=>	'Абонирай се за тази тема.',
'Stay subscribed'		=>	'Остани абониран за тази тема.',
'Topic review'			=>	'Преглед на теми (новите отгоре)',
'Flood'					=>	'Най-малко %s секунди трябва да изминат между публикуването на мнения. Моля изчакайте известно време и опитайте отново.',
'Permalink post'		=>	'Линк към това мнение',
'Post settings'			=>	'Допълнителни настройки на мнението',
'Poll question'			=>	'Въпросът за гласуването',
'Poll question info'	=>	'Дължината на въпрос не може да бъде по-малко от 5 знака.',
'Voting answer'			=>	'Вариант отговора',
'Summary count'			=>	'Брой на отговорите',
'Count'					=>	'Брой',
'Button note'			=>	'Актуализация на анкета',
'Show poll'				=>	'Показване на резултатите',
'Show poll info'		=>	'Участниците ще могат да видят резултатите от анкетата без право на глас.',
'Allow revote'			=>	'Повторение',
'Allow revote info'		=>	'Разреши участниците да променят своя глас.',
'Allow days'			=>	'Продължителността на анкетата',
'Allow days info'		=>	'Продължителността на анкетата (в дни), 0 — неограничен.',
'Maximum votes'			=>	'Количество на гласуване',
'Reset res'				=>	'Проучване резултатите',
'Reset res info'		=>	'Забележка, нулиране на резултатите от гласуването.',
'Remove'				=>	'Премахване на анкета',
'Remove info'			=>	'Забележка, искате ли да изтриете анкетата.',
'Empty question'		=>	'Трябва да въведете въпрос.',
'Maximum votes info'	=>	'Максимален брой на гласовете в анкета.',
'Preview reply'			=>	'Преглед на вашия отговор',
'Preview new topic'		=>	'Преглед на вашата тема',
'Preview reply'			=>	'Преглед на отговора', // For preview button
'Preview topic'			=>	'Преглед на темата', // For preview button
'Submit reply'			=>	'Публикувай отговора', // For submit button
'Submit topic'			=>	'Публикувай темата', // For submit button
'Post byline'			=>	'<span>Мнение от </span>%s',
'Topic byline'			=>	'<span>Тема от </span>%s',
'Reply byline'			=>	'<span>Отговор от </span>%s',
'Post posted'			=>	'<span>Публикувано </span>%s',

// Редактирование сообщения
'Edit post legend'		=>	'Редактирай мнението',
'Edit topic'			=>	'Редактирай темата',
'Edit reply'			=>	'Редактирай отговора',
'Silent edit'			=>	'Не показвай, че мнението е редактирано.',
'Mail send'				=>	'Изпрати съобщение за редактиране на автора.',
'Preview edited topic'	=>	'Преглед на редактираната тема',
'Preview edited reply'	=>	'Преглед на редактирания отговор',
'Edit redirect'			=>	'Мнението е обновено. Пренасочване …'

);