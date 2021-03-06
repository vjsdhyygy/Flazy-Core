<?php

// Языковые конструкии используемые в profile.php и register.php
$lang_profile = array(

// Navigation and sections
'Profile redirect'			=>	'Profile updated. Redirecting…',
'Instructions'				=>	'You will be redirected back to this page',
'Update profile'			=>	'Update profile',

// Administration stuff
'User delete redirect'		=>	'User deleted. Redirecting…',
'Section admin'				=>	'Administration',
'Delete user'				=>	'Delete user',
'Delete warning'			=>	'<strong>Warning!</strong> Once deleted a user and/or their posts cannot be restored.',
'Delete posts info'			=>	'<strong>Warning!</strong> If you choose not to delete this user\'s posts they can only be deleted manually at a later time.',
'Delete posts'				=>	'Delete posts',
'Delete posts label'		=>	'Delete any posts and topics %s has made.',
'Group membership redirect'	=>	'Group membership updated. Redirecting…',
'Moderate forums redirect'	=>	'Forum moderator rights updated. Redirecting…',
'Ban redirect'				=>	'Redirecting…',
'Ban user'					=>	'Ban user',
'Ban user info'				=>	'Ban this user via the administration console.',
'Delete user info'			=>	'Permanently delete this user and, optionally, all their posts.',
'User management'			=>	'User management',
'Group membership'			=>	'Group membership',
'User group'				=>	'Assign user to group',
'Moderator assignment'		=>	'Moderator assignment',
'Cannot delete admin'		=>	'Administrators cannot be deleted. In order to delete this user, you must first move him/her to a different user group.',
'Update groups'				=>	'Update user group',
'Update forums'				=>	'Update moderator assignment',
'Reputation adm'			=>	'Edit reputation settings',
/*RUS*/'Disable reputation'		=>	'Отключить репутацию',
/*RUS*/'Disable reputation help'	=>	'Если вы отключите систему репутации, то учасник не сможете менять репутацию другим участникам и просматривать её.',

// Avatar stuff
'Avatar welcome'			=>	'Set an avatar image to enhance your forum identity',
'Avatar welcome user'		=>	'Set an avatar image to enhance  %s\'s forum identity',
'Avatar deleted redirect'	=>	'Avatar deleted. Redirecting…',
'Avatars disabled'			=>	'The administrator has disabled avatar support.',
/*RUS*/'Avatar info'				=>	'Avatar — это маленькое изображение, которое будет отображаться под Вашим именем в сообщениях на форуме.',
'No file'					=>	'You did not select a file for upload.',
'Too large ini'				=>	'The selected file was too large to upload. The server didn\'t allow the upload.',
'Partial upload'			=>	'The selected file was only partially uploaded. Please try again.',
'No tmp directory'			=>	'PHP was unable to save the uploaded file to a temporary location.',
'Bad type'					=>	'The file you tried to upload is not of an allowed type. Allowed file types are gif, jpeg and png.',
'Too large'					=>	'The file you tried to upload is larger than the maximum allowed %s bytes.',
'Move failed'				=>	'The server was unable to save the uploaded file. Please contact the forum administrator at %s.',
'Too wide or high'			=>	'The file you tried to upload is wider and/or higher than the maximum allowed %sx%s pixels.',
'Unknown failure'			=>	'An unknown error occurred. Please try again.',
'Avatar'					=>	'Avatar',
'Current avatar'			=>	'Current avatar',
'No avatar info'			=>	'No avatar is currently uploaded.',
'Avatar info replace'		=>	'Uploading a new avatar will replace your existing avatar.',
'Avatar info none'			=>	'To display an avatar you first need to upload one.',
'Avatar info type'			=>	'The allowed image file types are gif, jpeg and png.',
'Avatar info size'			=>	'The maximum image size allowed is %sx%s pixels and %s bytes (%s KB).',
'Delete avatar info'		=>	'Delete avatar to stop displaying any avatar.',
'Upload avatar file'		=>	'Upload avatar file',
'Avatar upload help'		=>	'Select file then update your profile to install.',
'No upload warn'			=>	'<strong>IMPORTANT! </strong> You must choose a file to upload before updating your profile.',

// About and Identity sections
'Users profile'				=>	'%s\'s profile',
'Section about'				=>	'Overview',
'Profile welcome'			=>	'Welcome to your profile',
'Profile welcome user'		=>	'Welcome to %s\'s profile',
'Identity welcome'			=>	'Modify your personal and contact details',
'Identity welcome user'		=>	'Modify %s\'s personal and contact details',
'View your posts'			=>	'View all your posts',
'View your topics'			=>	'View all your topics',
'View user posts'			=>	'View all %s\'s posts',
'View user topics'			=>	'View all %s\'s topics',
'View your subscriptions'	=>	'View all your subscriptions',
'View user subscriptions'	=>	'View all %s\'s subscriptions',
'Realname'					=>	'Real name',
'Sex'						=>	'Sex',
'Male'						=>	'Male',
'Female'					=>	'Female',
'Do not show'				=>	'Do not show',
'Unknown'					=>	'(Unknown)',
'Location'					=>	'Location',
'Country'					=>	'Country',
'From'						=>	'From',
'Registered'				=>	'Joined',
'Website'					=>	'Website',
'OS and Browser'			=>	'OS\Browser',
'IP'						=>	'IP',
'Note'						=>	'Note',
'Posts'						=>	'Posts',
'Posts in day'				=>	'(%s posts per day)',
'Last post'					=>	'Last post',
'Last visit'            	=>	'Last active',
'Send forum e-mail'			=>	'Send forum e-mail',
'Contact info'				=>	'Contact information',
'Jabber'					=>	'Jabber',
'ICQ'						=>	'ICQ',
'MSN'						=>	'MSN Messenger',
'AOL IM'					=>	'AOL IM',
'Yahoo'						=>	'Yahoo! Messenger',
'Skype'						=>	'Skype',
'Mail Agent'				=>	'Mail Agent',
'Vkontakte'			=>	'Vkontakte',
'Сlassmates'			=>	'Classmates',
/*RUS*/'Mirtesen'			=>	'Мир Тесен',
/*RUS*/'Moikrug'			=>	'Мой Круг',
'Facebook'					=> 'Facebook',
'Twitter'					=>	'Twitter',
'Last.fm'					=>	'Last.fm',
'Forbidden title'			=>	'The title you entered contains a forbidden word. You must choose a different title.',
'Bad ICQ'					=>	'You entered an invalid ICQ UIN.',
/*RUS*/'Bad Vkontakt'				=>	'Неверно указан адрес страницы В Контакте.',
/*RUS*/'Bad Сlassmates'			=>	'Неверно указан адрес страницы в Одноклассиках.',
/*RUS*/'Bad Mirtesen'				=>	'Неверно указан адрес страницы в Мир Тесен.',
/*RUS*/'Bad Moikrug'				=>	'Неверно указан адрес страницы в Мой Круг.',
/*RUS*/'Bad Twitter'				=>	'Неверно указан адрес страницы в Twitter.',
/*RUS*/'Bad Last.fm'				=>	'Неверно указан адрес страницы на Last.fm. Адрес должен начинаться с http://last.fm/',
'Posts and topics'			=>	'Posts and topics',
'Private info'				=>	'Private information',
'Current signature'			=>	'Current signature',
'Section identity'			=>	'Identity',
'Section settings'			=>	'Settings',
'Section avatar'			=>	'Avatar',
'Section signature'			=>	'Signature',
'Personal legend'			=>	'Personal details',
'Title'						=>	'Title: ',
'Leave blank'				=>	'Leave blank to use forum default.',
'Edit count'				=>	'Edit post count',
'Admin note'				=>	'Admin note',
'Contact legend'			=>	'Contact details',

// Settings section
'Local settings'			=>	'Local settings',
'Settings welcome'			=>	'Modify your localization, display and e-mail settings',
'Settings welcome user'		=>	'Modify %s\'s localization, display and e-mail settings',
'Timezone info'				=>	'Must be set for correct time display.',
'Time format'				=>  'Time format',
'Default'					=>  'default',
'Date format'				=>  'Date format',
'Display settings'			=>	'Display settings',
'Styles'					=>	'Available styles',
'Image display'				=>	'Image display',
'Show avatars'				=>	'Show user avatars in posts.',
'Show images sigs'			=>	'Show images in user signatures.',
'Show images'				=>	'Show images in posts.',
'Show sigs'					=>	'Show user signatures in posts.',
'Show bb panel'				=>	'Show BB-code panel.',
'Show smilies'				=>	'Show smilies as graphic icons.',
'Signature display'			=>	'Signature display',
'BB panel display'			=>	'BBCode panel',
'Pagination settings'		=>	'Pagination settings',
'Topics per page'			=>	'Topics per page',
'Posts per page'			=>	'Posts per page',
'E-mail and sub settings'	=>	'E-mail and subscription settings',
'Subscription settings'		=>	'Subscription settings',
'Notify full'				=>	'Include a plain text copy of posts in subscription e-mails.',
'Subscribe by default'		=>	'Subscribe to topics by default when posting.',
/*RUS*/'Manage reputation'			=>	'Отображение репутации',
/*RUS*/'Manage reputation label'	=>	'Вы можете отключить систему репутации, тогда никто не сможет вам изменить её. Если вы отключите систему репутации, то вы не сможете менять и просматривать репутацию других участников.',
/*RUS*/'Security level'			=>	'Уровень безопасности',
/*RUS*/'High security'				=>	'Высокий (привязать автоматическую авторизацию к IP адресу).',
/*RUS*/'Medium security'			=>	'Средний (привязать автоматическую авторизацию к подсети IP адреса).',
/*RUS*/'Low security'				=>	'Низкий (IP адрес при автоматической авторизации не проверяется).',
'UTC-12:00'					=>	'(UTC-12:00) International Date Line West',
'UTC-11:00'					=>	'(UTC-11:00) Niue, Samoa',
'UTC-10:00'					=>	'(UTC-10:00) Hawaii-Aleutian, Cook Island',
'UTC-09:30'					=>	'(UTC-09:30) Marquesas Islands',
'UTC-09:00'					=>	'(UTC-09:00) Alaska, Gambier Island',
'UTC-08:00'					=>	'(UTC-08:00) Pacific',
'UTC-07:00'					=>	'(UTC-07:00) Mountain',
'UTC-06:00'					=>	'(UTC-06:00) Central',
'UTC-05:00'					=>	'(UTC-05:00) Eastern',
'UTC-04:00'					=>	'(UTC-04:00) Atlantic',
'UTC-03:30'					=>	'(UTC-03:30) Newfoundland',
'UTC-03:00'					=>	'(UTC-03:00) Amazon, Central Greenland',
'UTC-02:00'					=>	'(UTC-02:00) Mid-Atlantic',
'UTC-01:00'					=>	'(UTC-01:00) Azores, Cape Verde, Eastern Greenland',
'UTC'						=>	'(UTC) Western European, Greenwich',
'UTC+01:00'					=>	'(UTC+01:00) Central European, West African',
'UTC+02:00'					=>	'(UTC+02:00) Eastern European, Central African',
'UTC+03:00'					=>	'(UTC+03:00) Moscow, Eastern African',
'UTC+03:30'					=>	'(UTC+03:30) Iran',
'UTC+04:00'					=>	'(UTC+04:00) Gulf, Samara',
'UTC+04:30'					=>	'(UTC+04:30) Afghanistan',
'UTC+05:00'					=>	'(UTC+05:00) Pakistan, Yekaterinburg',
'UTC+05:30'					=>	'(UTC+05:30) India, Sri Lanka',
'UTC+05:45'					=>	'(UTC+05:45) Nepal',
'UTC+06:00'					=>	'(UTC+06:00) Bangladesh, Bhutan, Novosibirsk',
'UTC+06:30'					=>	'(UTC+06:30) Cocos Islands, Myanmar',
'UTC+07:00'					=>	'(UTC+07:00) Indochina, Krasnoyarsk',
'UTC+08:00'					=>	'(UTC+08:00) Greater China, Australian Western, Irkutsk',
'UTC+08:45'					=>	'(UTC+08:45) Southeastern Western Australia',
'UTC+09:00'					=>	'(UTC+09:00) Japan, Korea, Chita',
'UTC+09:30'					=>	'(UTC+09:30) Australian Central',
'UTC+10:00'					=>	'(UTC+10:00) Australian Eastern, Vladivostok',
'UTC+10:30'					=>	'(UTC+10:30) Lord Howe',
'UTC+11:00'					=>	'(UTC+11:00) Solomon Island, Magadan',
'UTC+11:30'					=>	'(UTC+11:30) Norfolk Island',
'UTC+12:00'					=>	'(UTC+12:00) New Zealand, Fiji, Kamchatka',
'UTC+12:45'					=>	'(UTC+12:45) Chatham Islands',
'UTC+13:00'					=>	'(UTC+13:00) Tonga, Phoenix Islands',
'UTC+14:00'					=>	'(UTC+14:00) Line Islands',

// Личные сообщения
/*RUS*/'Private messages'			=>	'Личные сообщения',
/*RUS*/'Send PM'					=>	'Отправить личное сообщение',
/*RUS*/'Begin message quote'		=>	'Показывать начало личного сообщения в списке сообщений.',
/*RUS*/'Get mail'					=>	'Получать уведомления о новом личном сообщении на электронную почту.',

// Change Password stuff
/*RUS*/'Change pass info'			=>	'В целях безопасности, рекомендуется использовать комбинации букв, цифр и спецсимволов.',
'Change pass errors'		=>	'<strong>Warning!</strong> The following errors must be corrected before your password can be updated:',
'Pass logout'				=>	'A user is currently logged in. Please logout and try again.',
'Pass key bad'				=>	'The specified password activation key was incorrect or has expired. Please re-request a new password. If that fails, contact the forum administrator at %s.',
'Pass updated'				=>	'Password updated. Login with your new password. Redirecting…',
'Change your password'		=>	'Change your password',
'Change user password'		=>	'Change %s\'s password',
'Old password'				=>	'Old password',
'Old password help'			=>	'You must enter your existing password.',
'New password'				=>	'New password',
'Confirm new password'		=>	'Confirm new password',
'Wrong old password'		=>	'The old password you entered was incorrect.',
'Pass updated redirect'		=>	'Password updated. Redirecting…',

// Change E-mail stuff
'Change e-mail errors'		=>	'<strong>Warning!</strong> The following errors must be corrected before your e-mail address can be updated:',
'E-mail key bad'			=>	'The specified e-mail activation key was incorrect or has expired. Please re-request change of e-mail address. If that fails, contact the forum administrator at %s.',
'E-mail updated'			=>	'Your e-mail address has been updated.',
'E-mail updated redirect'	=>	'Your e-mail address has been updated. Redirecting…',
'Wrong password'			=>	'The password you entered was incorrect.',
'Activate e-mail sent'		=>	'An email has been sent to the specified address with instructions on how to activate the new e-mail address. If it doesn\'t arrive you can contact the forum administrator at %s.',
'Change your e-mail'		=>	'Change your e-mail address',
'Change user e-mail'		=>	'Change %s\'s e-mail address',
'New e-mail'				=>	'New e-mail address',

// Signatures
'Sig welcome'				=>	'Create or modify a signature for display in your posts',
'Sig welcome user'			=>	'Create or modify a signature for display in %s\'s posts',
/*RUS*/'Signature info'			=>	'Подпись — это небольшая приписка, прилагаемая к вашим сообщениям. Это может быть все, что вам нравится. Например, ваша любимая цитата или автограф кумира. Решать вам!',
'Signatures disabled'		=>	'The administrator has disabled signatures support.',
'Sig too long'				=>	'Signatures cannot be longer than %1$s characters. Please reduce your signature by %2$s characters.',
'Sig too many lines'		=>	'Signatures cannot have more than %s lines.',
'Signature'					=>	'Signature',
'Compose signature'			=>	'Compose signature',
'Sig max size'				=>	'Maximum size %s characters long and %s lines high.',

// Registration stuff (some of these also used by profile)
'No new regs'				=>	'This forum is not accepting new registrations.',
/*RUS*/'No regs spam'				=>	'Вам отказано в регистрации, так как вы очень похожы на бота. Если это не так, свяжитесь с администрацией',
'Reg cancel redirect'		=>	'Registration cancelled. Redirecting…',
'Agreement'					=>	'Agreement',
'Agreement label'			=>	'I agree to the rules set out above and wish to register.',
'Agree'						=>	'Agree',
/*RUS*/'Reg agree fail'			=>	'Вы должны согласиться с правилами, если вы хотите зарегистрироваться.',
'Registration flood'		=>	'A new user was registered with the same IP address as you within the last hour. To prevent registration flooding, at least an hour has to pass between registrations from the same IP. Sorry for the inconvenience.',
'Pass too short'			=>	'Passwords must be at least 4 characters long. Please choose another (longer) password.',
'Pass not match'			=>	'Passwords do not match.',
'E-mail not match'			=>	'E-mail addresses do not match.',
'Banned e-mail'				=>	'The e-mail address you entered is banned in this forum. Please choose another e-mail address.',
'Dupe e-mail'				=>	'Someone else is already registered with that e-mail address. Please choose another e-mail address.',
/*RUS*/'Blocked e-mail'			=>	'Адрес электронной почты, введённый вами, заблокирован.',
/*RUS*/'Blocked IP'				=>	'Ваш IP адрес заблокирован.',
/*RUS*/'Blocked name'				=>	'Имя, введённое вами, заблокировано.',
/*RUS*/'Blocked mistake'			=>	'Если вы считаете это ошибкой, пожалуйста, посетите <a href="http://www.stopforumspam.com">Stop Forum Spam.com</a>.',
'Reg e-mail'				=>	'Thank you for registering. An email has been sent to the specified address with instructions on how to activate your new account. If it doesn\'t arrive you can contact the forum administrator at %s.',
'Reg complete'				=>	'Registration complete. Logging in and redirecting…',
'Register errors'			=>	'<strong>Warning!</strong> The following errors must be corrected before you can register:',
'E-mail info'				=>	'<strong>Important!</strong> An e-mail will be sent to your new address with an activation link. You must click the link in the e-mail you receive to activate the new address. You must therefore ensure that you enter a valid and current e-mail address.',
'Reg e-mail info'			=>	'<strong>Important!</strong> An e-mail with an activation link will be sent to the address you provide. You must click the link in the e-mail in order to activate your new account. You must therefore ensure that you enter a valid and current e-mail address.',
'Register at'				=>	'Register at %s',
'Register intro'			=>	'Registration enables you to use features not available when browsing the board as a guest. The fields below only make up a small part of all the settings you can alter in your profile. If you have any questions regarding this forum you should ask an administrator. Please complete the form below in order to register.',
'Username'					=>	'Username: ',
'Username help'				=>	'Between 2 and 25 characters.',
'Password'					=>	'Password',
'Password help'				=>	'Minimum 4 characters. Case sensitive.',
'Confirm password'			=>	'Confirm password',
'Confirm password help'		=>	'Re-enter your password exactly as before.',
'E-mail'					=>	'E-mail',
'E-mail help'				=>	'A current valid e-mail address.',
/*RUS*/'E-mail activation help'	=>	'Введите текущий адрес электронной почты. На этот адрес будет выслана ссылка активации, щелкнув по которой вы сможите активировать ваш новый аккаунт.',
'Confirm e-mail'			=>	'Confirm e-mail',
'Confirm e-mail help'		=>	'Re-enter your e-mail address exactly as before.',
'Optional legend'			=>	'Optional settings',
'Language'					=>	'Language',
'Timezone'					=>	'Your timezone',
/*RUS*/'Timezone help'				=>	'Установите свой часовой пояс для коректного отображения времени на форуме. Вы сможете изменить его позже в своём профиле.',
'Adjust for DST'			=>	'Adjust for DST',
'DST label'					=>	'Daylight savings is in effect (advance times by 1 hour).',
'E-mail settings'			=>	'E-mail settings',
'E-mail setting 1'			=>	'Display your e-mail address to other users.',
'E-mail setting 2'			=>	'Hide your e-mail address but allow e-mail via the forum.',
'E-mail setting 3'			=>	'Hide your e-mail address and disallow e-mail via the forum.',
'Reg rules head'			=>	'You must agree to the forum rules set out below in order to register.',
'Register'					=>	'Register', // Registration button text

// Form validation stuff
'Profile update errors'		=>	'<strong>Warning!</strong> The following errors must be corrected before your profile can be updated:',
'Username BBCode'			=>	'Usernames may not contain any of the text formatting tags (BBCode) that the forum uses. Please choose another username.',
'Username IP'				=>	'Usernames may not be in the form of an IP address. Please choose another username.',
'Username censor'			=>	'The username you entered contains one or more censored words. Please choose a different username.',
'Username dupe'				=>	'Someone is already registered with the username %s. The username you entered is too similar. The username must differ from that by at least one alphanumerical character (a-z or 0-9). Please choose another username.',
'Username guest'			=>	'The username guest is reserved. Please choose another username.',
'Username reserved chars'	=>	'Usernames may not contain all the characters \', " and [ or ] at once. Please choose another username.',
'Username too long'			=>	'Usernames must not be more than 25 characters long. Please choose another (shorter) username.',
'Username too short'		=>	'Usernames must be at least 2 characters long. Please choose another (longer) username.',
'Signature quote/code'		=>	'The quote and code BBCodes are not allowed in signatures.',
'Invalid e-mail'			=>	'The e-mail address you entered is invalid.',

);
