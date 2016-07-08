<?php
/**
 * Регулярные выражения используемые в соответствии с SEF URL и его URL.
 *
 * @copyright Copyright (C) 2008-2015 PunBB, partially based on code copyright (C) 2008 FluxBB.org
 * @modified Copyright (C) 2013-2015 Flazy.us
 * @license http://www.gnu.org/licenses/gpl.html GPL version 2 or higher
 * @package Flazy
 */

$rewrite_rules = array(
'/^\/?$/i'	=> 'index.php',
'/^category[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'index.php?cid=$1',
'/^topic[\/_-]?([0-9]+).*(new|last)[\/_-]?(posts?)(\.html?|\/)?$/i'	=> 'viewtopic.php?id=$1&action=$2',
'/^print[\/_-]?([0-9]+).*(\.html?|\/)?$/i'	=> 'viewtopic.php?id=$1&action=print',
'/^poll[\/_-]?([0-9]+).*(\.html?|\/)?$/i'	=> 'viewpoll.php?id=$1',
'/^post[\/_-]?([0-9]+)(\.html?|\/)?$/i'		=> 'viewtopic.php?pid=$1',

'/^(forum|topic)[\/_-]?([0-9]+).*[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'view$1.php?id=$2&p=$4',
'/^(forum|topic)[\/_-]?([0-9]+).*(\.html?|\/)?$/i'	=> 'view$1.php?id=$2',

'/^feed[\/_-]?(rss|atom)[\/_-]?(f|t)(orum|opic)[\/_-]?([0-9]+)[\/_-]?(last_post|posted)?(\.xml?|\/)?$/i'	=> 'extern.php?action=feed&$2id=$4&order=$5&type=$1',
'/^feed[\/_-]?(rss|atom)[\/_-]?forum[\/_-]?(topics|posts)[\/_-]?([0-9]+)[\/_-]?(last_post|posted)?(\.xml?|\/)?$/i'		=> 'extern.php?action=feed&content=$2&fid=$3&order=$4&type=$1',

'/^new[\/_-]?reply[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'post.php?tid=$1',
'/^new[\/_-]?reply[\/_-]?([0-9]+)[\/_-]?quote[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'post.php?tid=$1&qid=$2',
'/^new[\/_-]?topic[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'post.php?fid=$1',

'/^(delete|edit)[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> '$1.php?id=$2',
'/^(login|online|pm|register|search|statistic)(\.html?|\/)?$/i'		=> '$1.php',

'/^logout[\/_-]?([0-9]+)[\/_-]([a-z0-9]+)(\.html?|\/)?$/i'	=> 'login.php?action=out&id=$1&csrf_token=$2',
'/^request[\/_-]?password(\.html?|\/)?$/i'	=> 'login.php?action=forget',

'/^user[\/_-]?([0-9]+)[\/_-]?(reputation|positive)(\.html?|\/)?$/i'		=> 'reputation.php?section=$2&id=$1',
'/^user[\/_-]?([0-9]+)[\/_-]?(reputation|positive)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'		=> 'reputation.php?section=$2&id=$1&p=$3',
'/^user[\/_-]?([0-9]+)[\/_-]post[\/_-]?([0-9]+)[\/_-](positive|negative)(\.html?|\/)?$/i'		=> 'reputation.php?id=$1&pid=$2&method=$3',
'/^profile[\/_-]?([0-9]+)(\.html?|\/)?$/i'		=> 'profile.php?id=$1',
'/^profile[\/_-]?([0-9]+)[\/_-]?([a-z]+)(\.html?|\/)?$/i'		=> 'profile.php?section=$2&id=$1',

'/^pm[\/_-]?([a-z]+)(\.html?|\/)?$/i'	=> 'pm.php?section=$1',
'/^pm[\/_-]?([a-z]+)[\/_-]?(p|page\/)([0-9]+)(\.html?|\/)?$/i'	=> 'pm.php?section=$1&p=$2',
'/^pm[\/_-]?(message|edit|write|delete)[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'pm.php?section=$1&id=$2',

'/^(delete)[\/_-]?(avatar|user)?[\/_-]?([0-9]+)[\/_-]?([a-z0-9]+)?(\.html?|\/)?$/i'	=> 'profile.php?action=$1_$2&id=$3&csrf_token=$4',

'/^change[\/_-]?(email|pass)(word)?[\/_-]?([0-9]+)[\/_-]([a-zA-Z0-9]+)(\.html?|\/)?$/i'		=> 'profile.php?action=change_$1&id=$3&key=$4',
'/^change[\/_-]?(email|pass)(word)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'profile.php?action=change_$1&id=$3',

'/^search[\/_-]?(new)[\/_-]([0-9-]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_new&forum=$2',
'/^search[\/_-]?(new)[\/_-]([0-9-]+)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_new&forum=$2&p=$4',
'/^search[\/_-]?(recent)[\/_-]([0-9]+)(\.html?|\/)?$/i'		=>	'search.php?action=show_recent&value=$2',
'/^search[\/_-]?(recent)[\/_-]([0-9]+)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_recent&value=$2&p=$4',
'/^search[\/_-]?(new|recent|unanswered)(\.html?|\/)?$/i'	=> 'search.php?action=show_$1',
'/^search[\/_-]?(new|recent|unanswered)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_$1&p=$3',
'/^search[\/_-]?subscriptions[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_subscriptions&user_id=$1',
'/^search[\/_-]?subscriptions[\/_-]?([0-9]+)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_subscriptions&user_id=$1&p=$3',
'/^search[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?search_id=$1',
'/^search[\/_-]?([0-9]+)[\/_-]?p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'		=> 'search.php?search_id=$1&p=$3',
'/^search[\/_-]?(posts|topics)[\/_-]?user[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'search.php?action=show_user_$1&user_id=$2',
'/^search[\/_-]?(posts|topics)[\/_-]?user[\/_-]?([0-9]+)[\/_-]?p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'		=> 'search.php?action=show_user_$1&user_id=$2&p=$4',
'/^search\/k(.*)\/([0-9-]+)\/a(.*)\/(message|subject|all)\/([0-9]+)\/(ASC|DESC)\/(posts|topics)\/?$/i'		=> 'search.php?action=search&keywords=$1&author=$3&forum=$2&search_in=$4&sort_by=$5&sort_dir=$6&show_as=$7',
'/^search\/k(.*)\/([0-9-]+)\/a(.*)\/(message|subject|all)\/([0-9]+)\/(ASC|DESC)\/(posts|topics)\/page\/([0-9]+)\/?$/i'	=> 'search.php?action=search&keywords=$1&author=$3&forum=$2&search_in=$4&sort_by=$5&sort_dir=$6&show_as=$7&p=$8',
'/^search-k(.*)-([0-9-]+)-a(.*)-(message|subject|all)-([0-9]+)-(ASC|DESC)-(posts|topics).html?$/i'	=> 'search.php?action=search&keywords=$1&author=$3&forum=$2&search_in=$4&sort_by=$5&sort_dir=$6&show_as=$7',
'/^search-k(.*)-(message|subject|all)-a(.*)-([0-9]+)-(ASC|DESC)-([0-9-]+)-(posts|topics)-p([0-9]+).html?$/i'	=> 'search.php?action=search&keywords=$1&author=$3&forum=$6&search_in=$2&sort_by=$4&sort_dir=$5&show_as=$7&p=$8',

'/^users(\.html?|\/)?$/i'	=> 'userlist.php',
'/^users\/(.*)\/([0-9-]+)\/?([a-z_]+)[\/_-]([a-zA-Z]+)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'userlist.php?username=$1&show_group=$2&sort_by=$3&sort_dir=$4&p=$6',
'/^users\/(.*)\/([0-9-]+)\/?([a-z_]+)[\/_-]([a-zA-Z]+)(\.html?|\/)?$/i'		=> 'userlist.php?username=$1&show_group=$2&sort_by=$3&sort_dir=$4',

'/^report[\/_-]?([0-9]+)[\/_-]?(post|pm)?(\.html?|\/)?$/i'	=> 'misc.php?report=$1&action=$2',
'/^(email|subscribe|unsubscribe)[\/_-]?([0-9]+)[\/_-]?([a-z0-9]+)?(\.html?|\/)?$/i'	=> 'misc.php?$1=$2&csrf_token=$3',
'/^(mark|rules|smilies)[\/_-]?(read)?[\/_-]?([a-z0-9]+)?(\.html?|\/)?$/i'	=>	'misc.php?action=$1$2&csrf_token=$3',
'/^mark[\/_-](forum)[\/_-]?([0-9]+)[\/_-](read)[\/_-]([a-z0-9]+)(\.html?|\/)?$/i'	=>	'misc.php?action=markforumread&fid=$2&csrf_token=$4',
'/^help[\/_-]([a-z]+)(\.html?|\/)?$/i'		=> 'help.php?section=$1',

'/^moderate[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'moderate.php?fid=$1',
'/^move_topics[\/_-]?([0-9]+)[\/_-]([0-9]+)(\.html?|\/)?$/i'	=> 'moderate.php?fid=$1&move_topics=$2',
'/^(open|close|stick|unstick)[\/_-]?([0-9]+)[\/_-]([0-9]+)[\/_-]([a-z0-9]+)(\.html?|\/)?$/i'	=> 'moderate.php?fid=$2&$1=$3&csrf_token=$4',

'/^moderate[\/_-]?([0-9]+)[\/_-]?p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'moderate.php?fid=$1&p=$3',
'/^moderate[\/_-]?([0-9]+)[\/_-]([0-9]+)(\.html?|\/)?$/i'	=> 'moderate.php?fid=$1&tid=$2',
'/^moderate[\/_-]?([0-9]+)[\/_-]([0-9]+)[\/_-]?p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'moderate.php?fid=$1&tid=$2&p=$4',
'/^get_host[\/_-]?([0-9]+|[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3})(\.html?|\/)?$/i'	=> 'moderate.php?get_host=$1',

'/^feed[\/_-]?(rss|atom)(\.xml?|\/)?$/i'	=> 'extern.php?action=feed&type=$1',

'/^statistic[\/_-]([a-z]+)(\.html?|\/)?$/i'	=> 'statistic.php?section=$1',
'/^statistic[\/_-]([a-z]+)[\/_-]p(age)?[\/_-]?([0-9]+)(\.html?|\/)?$/i'	=> 'statistic.php?section=$1&p=$3',
'/^(add-karma|remove-karma)[\/_-]?([0-9]+)(\.html?|\/)?$/i' => 'misc.php?action=$1&uid=$2',
'/^(add-post-karma|remove-post-karma)[\/_-]?([0-9]+)(\.html?|\/)?$/i' => 'misc.php?action=$1&pid=$2',
);
