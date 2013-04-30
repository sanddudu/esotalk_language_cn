<?php
setlocale(LC_ALL, 'zh_CN', 'chn');
// Copyright 2013 Klion Xu
// You can edit this file and publish under GPLv2 License.
// This file is part of esoTalk. 

ET::$languageInfo["Chinese(Simplified)"] = array(
	"locale" => "zh-CN",
	"name" => "Chinese(Simplified)",
	"description" => "A Chinese(Simplified) language pack.",
	"version" => ESOTALK_VERSION,
	"author" => "Klion Xu",
	"authorEmail" => "sanddudu@gmail.com",
	"authorURL" => "http://code5light.com",
	"license" => "GPLv2"
);

// Define the character set that this language uses.
$definitions["charset"] = "utf-8";

$definitions["date.full"] = "j M Y, g:ia \G\M\TO"; // see http://au.php.net/manual/en/function.date.php for details

$definitions["%d day ago"] = "昨天";
$definitions["%d days ago"] = "%d 天前";
$definitions["%d hour ago"] = "1 小时前";
$definitions["%d hours ago"] = "%d 小时前";
$definitions["%d minute ago"] = "1 分钟前";
$definitions["%d minutes ago"] = "%d 分钟前";
$definitions["%d month ago"] = "1 月前";
$definitions["%d months ago"] = "%d 月前";
$definitions["%d second ago"] = "1 秒前";
$definitions["%d seconds ago"] = "%d 秒前";
$definitions["%d week ago"] = "上周";
$definitions["%d weeks ago"] = "%d 周前";
$definitions["%d year ago"] = "去年";
$definitions["%d years ago"] = "%d 年前";

$definitions["%s and %s"] = "%s 和 %s";
$definitions["%s can view this conversation."] = "%s 可以查看这个讨论";
$definitions["%s changed %s's group to %s."] = "%s 更改 %s 的群组为 %s.";
$definitions["%s changed your group to %s."] = "%s 把您的群组更改为 %s.";
$definitions["%s conversation"] = "%s 的讨论";
$definitions["%s conversations"] = "%s 的讨论";
$definitions["%s invited you to %s."] = "%s 邀请你去 %s.";
$definitions["%s joined the forum."] = "%s 加入了论坛";
$definitions["%s post"] = "%s 的文章";
$definitions["%s posted %s"] = "%s 发布于 %s";
$definitions["%s posted in %s."] = "%s 发布于 %s.";
$definitions["%s posts"] = "%s 个文章";
$definitions["%s reply"] = "%s 个回复";
$definitions["%s replies"] = "%s 个回复";
$definitions["%s Settings"] = "%s 的设置";
$definitions["%s started the conversation %s."] = "%s 发起了讨论 %s.";
$definitions["%s tagged you in a post."] = "%s 提到了你";
$definitions["%s will be able to view this conversation."] = "%s 被允许查看这个讨论";
$definitions["%s will be able to:"] = "%s 被允许：";

$definitions["Success"] = "成功";
$definitions["A new version of esoTalk (%s) is available."] = "新版本的 esoTalk (%s) 已可用";
$definitions["a private conversation"] = "一个私人讨论";
$definitions["Access the administrator control panel."] = "获得进入管理员控制面板的权限";
$definitions["Account type"] = "账户类型";
$definitions["Activate"] = "激活";
$definitions["Activity"] = "活动";
$definitions["Add"] = "添加";
$definitions["Administration"] = "管理";
$definitions["Administrator email"] = "管理员的邮箱";
$definitions["Administrator password"] = "管理员的密码";
$definitions["Administrator username"] = "管理员的用户名";
$definitions["Advanced options"] = "附加选项";
$definitions["All Channels"] = "所有节点";
$definitions["Already have an account? <a href='%s' class='link-login'>Log in!</a>"] = "已经有一个账户了吗？ <a href='%s' class='link-login'>登录</a>";
$definitions["Appearance"] = "外观";
$definitions["Automatically star conversations that I reply to"] = "自动的跟踪我回复的讨论";
$definitions["Avatar"] = "Avatar头像";

$definitions["Back to channels"] = "返回节点";
$definitions["Back to conversation"] = "返回讨论";
$definitions["Back to member"] = "返回成员资料";
$definitions["Back to members"] = "返回成员列表";
$definitions["Back to search"] = "返回搜索";
$definitions["Base URL"] = "外部链接";
$definitions["Bold"] = "加粗";
$definitions["By %s"] = "来自 %s";

$definitions["Can suspend/unsuspend members"] = "被允许封停/反封停成员";
$definitions["Cancel"] = "取消";
$definitions["Change %s's Permissions"] = "修改 %s 的权限";
$definitions["Change avatar"] = "修改 avatar头像";
$definitions["Change channel"] = "修改节点";
$definitions["Change name"] = "修改名称";
$definitions["Change Password or Email"] = "修改密码或邮箱";
$definitions["Change password"] = "修改密码";
$definitions["Change permissions"] = "修改权限";
$definitions["Change"] = "修改";
$definitions["Channel description"] = "节点描述";
$definitions["Channel List"] = "节点列表";
$definitions["Channel title"] = "节点标题";
$definitions["Channel slug"] = "节点描述";
$definitions["Channels"] = "节点";
$definitions["Choose a secure password of at least %s characters"] = "选择一个足够强大的密码，至少需要 %s 个字符";
$definitions["Choose what people will see when they first visit your forum."] = "选择当人们第一次进入你的论坛时所要看见的";
$definitions["Click on a member's name to remove them."] = "单击一个成员以移除他们";
$definitions["Close registration"] = "关闭注册";
$definitions["Confirm password"] = "确认密码";
$definitions["Context"] = "上下文";
$definitions["Controls"] = "控制";
$definitions["Conversation"] = "讨论";
$definitions["Conversations participated in"] = "参与讨论";
$definitions["Conversations started"] = "讨论开始于";
$definitions["Conversations"] = "讨论";
$definitions["Copy permissions from"] = "复制权限从";
$definitions["Create Channel"] = "添加节点";
$definitions["Create Group"] = "添加群组";
$definitions["Create Member"] = "添加成员";
$definitions["Customize how users can become members of your forum."] = "自定义用户如何成为你论坛的成员";

$definitions["Dashboard"] = "仪表盘";
$definitions["Default forum language"] = "论坛默认语言";
$definitions["<strong>Delete</strong> all conversations forever."] = "<strong>删除所有</strong> 的讨论";
$definitions["Delete Channel"] = "删除节点";
$definitions["Delete conversation"] = "删除讨论";
$definitions["Delete member"] = "删除成员";
$definitions["Delete Member"] = "删除成员";
$definitions["<strong>Delete this member's posts.</strong> All of this member's posts will be marked as deleted, but will be able to be restored manually."] = "<strong>删除这个成员的所有的讨论和回复</strong> 所有关于这个成员的活动将被删除，但是可以手动恢复。";
$definitions["Delete"] = "删除";
$definitions["Deleted %s by %s"] = "删除 %s 被 %s";
$definitions["Disable"] = "禁用";
$definitions["Discard Draft"] = "删除草稿";

$definitions["Edit Channel"] = "编辑节点";
$definitions["Edit Group"] = "编辑群组";
$definitions["Edit member groups"] = "修改用户群组";
$definitions["Edit your profile"] = "修改你的个人资料";
$definitions["Edit"] = "修改";
$definitions["Edited %s by %s"] = "修改 %s 被 %s";
$definitions["Email me when I'm added to a private conversation"] = "当我被加入一个私人讨论时给我发送邮件";
$definitions["Email me when someone posts in a conversation I have starred"] = "当某人在我跟踪的讨论里回复时给我发送邮件";
$definitions["Email"] = "电子邮箱";
$definitions["Enable"] = "Enable";
$definitions["Enter a conversation title"] = "键入一个讨论标题";
$definitions["Error"] = "错误";
$definitions["esoTalk version"] = "esoTalk 版本";
$definitions["Everyone"] = "所有人";

$definitions["Fatal Error"] = "哦不！发生了一个致命错误";
$definitions["Feed"] = "Feed";
$definitions["Filter by name or group..."] = "根据名称或群组过滤";
$definitions["Filter conversations..."] = "Filter conversations...";
$definitions["Find this post"] = "寻找这个回复";
$definitions["First posted"] = "第一次发布";
$definitions["Forgot Password"] = "忘记密码";
$definitions["Forum header"] = "论坛页眉";
$definitions["Forum language"] = "论坛语言";
$definitions["Forum Settings"] = "论坛设置";
$definitions["Forum Statistics"] = "论坛统计";
$definitions["Forum title"] = "论坛标题";
$definitions["forumDescription"] = "%s 是一个网络论坛用来讨论 %s, 和 %s.";

$definitions["Give this group the 'moderate' permission on all existing channels"] = "授予这个群组在所有节点的 '版主' 权限";
$definitions["Global permissions"] = "全局权限";
$definitions["Go to top"] = "回到顶部";
$definitions["Group name"] = "群组名称";
$definitions["group.administrator"] = "管理员";
$definitions["group.administrator.plural"] = "管理员";
$definitions["group.guest"] = "游客";
$definitions["group.guest.plural"] = "游客";
$definitions["group.member"] = "成员";
$definitions["group.member.plural"] = "成员";
$definitions["group.Moderator"] = "版主";
$definitions["group.Moderator.plural"] = "版主";
$definitions["group.suspended"] = "封停";
$definitions["Groups can be used to categorize members and give them certain privileges."] = "群组可以用来给成员分类，并授予他们一定的权限";
$definitions["Groups"] = "群组";

$definitions["Header"] = "页眉";
$definitions["Home page"] = "主页";
$definitions["HTML is allowed."] = "HTML代码被允许使用";

$definitions["If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>."] = "If you run into any other problems or just want some help with the installation, feel free to ask for assistance at the <a href='%s'>esoTalk support forum</a>.";
$definitions["Install esoTalk"] = "Install esoTalk";
$definitions["Install My Forum"] = "Install My Forum";
$definitions["Installed Languages"] = "已安装的语言";
$definitions["Installed Plugins"] = "已安装的插件";
$definitions["Installed plugins"] = "已安装的插件";
$definitions["Installed Skins"] = "已安装的皮肤";
$definitions["Installed skins"] = "已安装的皮肤";
$definitions["is %s"] = "是 %s";

$definitions["Jump to last"] = "跳转到最新";
$definitions["Jump to unread"] = "跳转到未读";
$definitions["just now"] = "刚才";

$definitions["<strong>Keep this member's posts.</strong> All of this member's posts will remain intact, but will show [deleted] as the author."] = "<strong>保留这个成员所有的活动</strong> 这个成员的活动将会被保留, 但是作者将被显示为 [已删除] ";

$definitions["label.draft"] = "草稿";
$definitions["label.locked"] = "已锁定";
$definitions["label.muted"] = "不允许回复";
$definitions["label.private"] = "私人";
$definitions["label.sticky"] = "置顶";
$definitions["Labels"] = "标签";
$definitions["Last active %s"] = "上一次活动为 %s";
$definitions["Latest News"] = "最新更新";
$definitions["Loading..."] = "加载中";
$definitions["Lock"] = "锁定";
$definitions["Log In"] = "登录";
$definitions["Log Out"] = "登出";

$definitions["Make member and online list visible to:"] = "使成员和在线成员列表对该人课件:";
$definitions["Manage Groups"] = "管理群组";
$definitions["Manage Languages"] = "管理语言";
$definitions["Mark as read"] = "标记为已读";
$definitions["Mark all as read"] = "标记所有为已读";
$definitions["Maximum size of %s. %s."] = "Maximum size of %s. %s.";
$definitions["Member groups"] = "成员群组";
$definitions["Member List"] = "成员列表";
$definitions["Member privacy"] = "隐藏成员";
$definitions["Members Allowed to View this Conversation"] = "成员被允许查看这个讨论";
$definitions["Members Online"] = "在线成员";
$definitions["Members"] = "成员";
$definitions["Mobile skin"] = "移动版皮肤";
$definitions["Moderate"] = "版主";
$definitions["<strong>Move</strong> conversations to the following channel:"] = "<strong>移动</strong> 讨论到这个节点:";
$definitions["Mute conversation"] = "禁止讨论";
$definitions["MySQL database"] = "MySQL 数据库";
$definitions["MySQL host address"] = "MySQL 主机地址";
$definitions["MySQL password"] = "MySQL 密码";
$definitions["MySQL queries"] = "MySQL queries";
$definitions["MySQL table prefix"] = "MySQL 表前缀";
$definitions["MySQL username"] = "MySQL 用户名";
$definitions["MySQL version"] = "MySQL 版本";

$definitions["Name"] = "Name";
$definitions["never"] = "never";
$definitions["New Conversation"] = "New Conversation";
$definitions["New conversations in the past week"] = "New conversations in the past week";
$definitions["New email"] = "New email";
$definitions["New members in the past week"] = "New members in the past week";
$definitions["New password"] = "New password";
$definitions["New posts in the past week"] = "New posts in the past week";
$definitions["New username"] = "New username";
$definitions["Next Step"] = "Next Step";
$definitions["Next"] = "Next";
$definitions["No preview"] = "No preview";
$definitions["No"] = "No";
$definitions["Notifications"] = "Notifications";
$definitions["Now"] = "Now";

$definitions["OK"] = "OK";
$definitions["Online"] = "Online";
$definitions["online"] = "online";
$definitions["Open registration"] = "Open registration";
$definitions["optional"] = "optional";
$definitions["Order By:"] = "Order By:";
$definitions["Original Post"] = "Original Post";

$definitions["Page Not Found"] = "Page Not Found";
$definitions["Password"] = "Password";
$definitions["PHP version"] = "PHP version";
$definitions["Plugins"] = "Plugins";
$definitions["Post a Reply"] = "Post a Reply";
$definitions["Post count"] = "Post count";
$definitions["Posts"] = "Posts";
$definitions["Preview"] = "Preview";
$definitions["Previous"] = "Previous";

$definitions["quote"] = "quote";

$definitions["Read more"] = "Read more";
$definitions["Recent posts"] = "Recent posts";
$definitions["Recover Password"] = "Recover Password";
$definitions["Registration"] = "Registration";
$definitions["Remove avatar"] = "Remove avatar";
$definitions["Rename Member"] = "Rename Member";
$definitions["Reply"] = "Reply";
$definitions["Report a bug"] = "Report a bug";
$definitions["Require users to confirm their email address"] = "Require users to confirm their email address";
$definitions["restore"] = "restore";

$definitions["Save Changes"] = "Save Changes";
$definitions["Save Draft"] = "Save Draft";
$definitions["Search conversations..."] = "Search conversations...";
$definitions["Search within this conversation..."] = "Search within this conversation...";
$definitions["Search"] = "Search";
$definitions["See the private conversations I've had with %s"] = "See the private conversations I've had with %s";
$definitions["Settings"] = "Settings";
$definitions["Show an image in the header"] = "Show an image in the header";
$definitions["Show matching posts"] = "Show matching posts";
$definitions["Show the channel list by default"] = "Show the channel list by default";
$definitions["Show the conversation list by default"] = "Show the conversation list by default";
$definitions["Show the forum title in the header"] = "Show the forum title in the header";
$definitions["Sign Up"] = "Sign Up";
$definitions["Skins"] = "Skins";
$definitions["Specify Setup Information"] = "Specify Setup Information";
$definitions["Star to receive notifications"] = "Follow to receive notifications";
$definitions["Starred"] = "Following";
$definitions["Start a conversation"] = "Start a conversation";
$definitions["Start a private conversation with %s"] = "Start a private conversation with %s";
$definitions["Start Conversation"] = "Start Conversation";
$definitions["Starting a conversation"] = "Starting a conversation";
$definitions["Statistics"] = "Statistics";
$definitions["statistic.conversation.plural"] = "%s conversations";
$definitions["statistic.conversation"] = "%s conversation";
$definitions["statistic.member.plural"] = "%s members";
$definitions["statistic.member"] = "%s member";
$definitions["statistic.online.plural"] = "%s online";
$definitions["statistic.online"] = "%s online";
$definitions["statistic.post.plural"] = "%s posts";
$definitions["statistic.post"] = "%s post";
$definitions["Sticky"] = "Sticky";
$definitions["Subscribed"] = "Subscribed";
$definitions["Subscription"] = "Subscription";
$definitions["Suspend member"] = "Suspend member";
$definitions["Suspend members."] = "Suspend members.";
$definitions["Suspend"] = "Suspend";

$definitions["Uninstall"] = "Uninstall";
$definitions["Unlock"] = "Unlock";
$definitions["Unmute conversation"] = "Unmute conversation";
$definitions["Unstarred"] = "Not following";
$definitions["Unsticky"] = "Unsticky";
$definitions["Unsubscribe new users by default"] = "Unsubscribe new users by default";
$definitions["Unsubscribed"] = "Unsubscribed";
$definitions["Unsuspend member"] = "Unsuspend member";
$definitions["Unsuspend"] = "Unsuspend";
$definitions["Untitled conversation"] = "Untitled conversation";
$definitions["Upgrade esoTalk"] = "Upgrade esoTalk";
$definitions["Use for mobile"] = "Use for mobile";
$definitions["Use friendly URLs"] = "Use friendly URLs";
$definitions["Used to verify your account and subscribe to conversations"] = "Used to verify your account and subscribe to conversations";
$definitions["Username"] = "Username";
$definitions["Username or Email"] = "Username or Email";

$definitions["View %s's profile"] = "View %s's profile";
$definitions["View all notifications"] = "View all notifications";
$definitions["View more"] = "View more";
$definitions["View your profile"] = "View your profile";
$definitions["View"] = "View";
$definitions["Viewing: %s"] = "Viewing: %s";
$definitions["viewingPosts"] = "<b>%s-%s</b> of %s posts";

$definitions["Warning"] = "Uh oh, something's not right!";
$definitions["Write a reply..."] = "Write a reply...";

$definitions["Yes"] = "Yes";
$definitions["You can manage channel-specific permissions on the channels page."] = "You can manage channel-specific permissions on the channels page.";
$definitions["Your current password"] = "Your current password";


// Messages.
$definitions["message.404"] = "Oh dear - the page you requested could not be found! Try going back and clicking a different link. Or something else.";
$definitions["message.ajaxDisconnected"] = "Unable to communicate with the server. Wait a few seconds and <a href='javascript:jQuery.ETAjax.resumeAfterDisconnection()'>try again</a>, or <a href='' onclick='window.location.reload();return false'>refresh the page</a>.";
$definitions["message.ajaxRequestPending"] = "Hey! We're still processing some of your stuff! If you navigate away from this page you might lose any recent changes you've made, so wait a few seconds, ok?";
$definitions["message.avatarError"] = "There was a problem uploading your avatar. Make sure you're using a valid image type (like .jpg, .png, or .gif) and the file isn't really really huge.";
$definitions["message.cannotDeleteLastChannel"] = "Hey, wait up, you can't delete the last channel! Where would your conversations go? That's just silly.";
$definitions["message.changesSaved"] = "Your changes were saved.";
$definitions["message.channelsHelp"] = "Channels are used to categorize conversations on your forum. You can create as many channels as needed, and rearrange/nest them by dragging and dropping below.";
$definitions["message.channelSlugTaken"] = "This slug is already in use by another channel.";
$definitions["message.confirmDelete"] = "Are you sure you want to delete this? Seriously, you won't be able to get it back.";
$definitions["message.confirmDiscardReply"] = "You have not saved your reply as a draft. Do you wish to discard it?";
$definitions["message.confirmEmail"] = "Before you can start using your newly-created account, you'll need to confirm your email address. Within the next minute or two you should receive an email from us containing a link to activate your account.";
$definitions["message.confirmLeave"] = "Woah, you haven't saved the stuff you are editing! If you leave this page, you'll lose any changes you've made. Is this ok?";
$definitions["message.connectionError"] = "esoTalk could not connect to the MySQL server. The error returned was:<br/>%s";
$definitions["message.conversationDeleted"] = "The conversation was deleted. Didn't that feel good?";
$definitions["message.conversationNotFound"] = "For some reason this conversation cannot be viewed. Maybe it's been deleted? Or maybe it's a private conversation, in which case you might not be logged in or you might not be invited. Oh man, I hope they're not talking about you behind your back!";
$definitions["message.cookieAuthenticationTheft"] = "For security reasons, we couldn't log you in with your 'remember me' cookie. Please log in manually!";
$definitions["message.deleteChannelHelp"] = "Woah, hold up there! If you delete this channel, there'll be no way to get it back. Unless you build a time machine. But, uh, there'll be no <em>easy</em> way to get it back. All of the conversations in this channel can be moved to another of your choice.";
$definitions["message.emailConfirmed"] = "Cool! Your account has been validated and you can now start participating in conversations. Why not <a href='".URL("conversation/start")."'>start one</a> yourself?";
$definitions["message.emailDoesntExist"] = "That email address doesn't match any members in the database. Did you make a typo?";
$definitions["message.emailNotYetConfirmed"] = "You need to confirm your email before you can log in with it! If you didn't receive the confirmation email, <a href='%s'>click here to get it sent again</a>.";
$definitions["message.emailTaken"] = "Curses, there is already a member with this email!";
$definitions["message.empty"] = "You must fill out this field.";
$definitions["message.emptyPost"] = "Yeah... uh, you should probably type something in your post.";
$definitions["message.emptyTitle"] = "The title of your conversation can't be blank. I mean, how can anyone click on a blank title? Think about it.";
$definitions["message.esoTalkAlreadyInstalled"] = "<strong>esoTalk is already installed.</strong><br/><small>To reinstall esoTalk, you must remove <strong>config/config.php</strong>.</small>";
$definitions["message.esoTalkUpdateAvailable"] = "A new version of esoTalk, %s, is now available.";
$definitions["message.esoTalkUpdateAvailableHelp"] = "It's recommended to always have the latest version of esoTalk installed to reduce security risk. And hey, there might be some cool new features!";
$definitions["message.esoTalkUpToDate"] = "Your version of esoTalk is up-to-date.";
$definitions["message.esoTalkUpToDateHelp"] = "I'm a poor college student who has spent many hundreds of hours developing esoTalk. If you like it, please consider <a href='%s' target='_blank'>donating</a>.";
$definitions["message.fatalError"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li>Go outside, walk the dog, have a coffee... then <strong><a href='%1\$s'>try again</a></strong>!</li>\n<li>If you are the forum administrator, then you can <strong>get help on the <a href='%2\$s'>esoTalk website</a></strong>.</li>\n<li>Try hitting the computer - that sometimes works for me.</li>\n</ul>";
$definitions["message.fatalErrorInstaller"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Go back and check your settings.</strong> In particular, make sure your database information is correct.</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fatalErrorUpgrader"] = "<p>esoTalk has encountered an nasty error which is making it impossible to do whatever it is that you're doing. But don't feel down - <strong>here are a few things you can try</strong>:</p>\n<ul>\n<li><p><strong>Try again.</strong> Everyone makes mistakes - maybe the computer made one this time!</p></li>\n<li><p><strong>Get help.</strong> Go on the <a href='%s'>esoTalk support forum</a> and search to see if anyone else is having the same problem as you are. If not, start a new conversation about your problem, including the error details below.</p></li>\n</ul>";
$definitions["message.fileUploadFailed"] = "Something went wrong and the file you selected could not be uploaded. Perhaps it's too big, or in the wrong format?";
$definitions["message.fileUploadFailedMove"] = "The file you uploaded could not be copied to its destination. Please contact the forum administrator.";
$definitions["message.fileUploadNotImage"] = "The file you uploaded is not an image in an acceptable format.";
$definitions["message.fileUploadTooBig"] = "The file you selected could not be uploaded because it is too big.";
$definitions["message.forgotPasswordHelp"] = "So, you forgot your password! Don't worry, it happens all the time. Simply enter your email address and we'll send you instructions on how to set up a new one.";
$definitions["message.fulltextKeywordWarning"] = "Note that keywords less than 4 characters in length, and common English words such as 'the' and 'for', aren't included in the search criteria.";
$definitions["message.gambitsHelp"] = "Gambits are phrases that describe what you are looking for. Click on a gambit to insert it into the search field. Double-click on a gambit to instantly search for it. Normal search keywords work too!";
$definitions["message.gdNotEnabledWarning"] = "The <strong>GD extension</strong> is not enabled.<br/><small>This is required to resize and save avatars. Get your host or administrator to install/enable it.</small>";
$definitions["message.greaterMySQLVersionRequired"] = "You must have <strong>MySQL 4 or greater</strong> installed and the <a href='http://php.net/manual/en/mysql.installation.php' target='_blank'>MySQL extension enabled in PHP</a>.<br/><small>Please install/upgrade both of these requirements or request that your host or administrator install them.</small>";
$definitions["message.greaterPHPVersionRequired"] = "Your server must have <strong>PHP 5.0.0 or greater</strong> installed to run esoTalk.<br/><small>Please upgrade your PHP installation or request that your host or administrator upgrade the server.</small>";
$definitions["message.incorrectLogin"] = "Your login details were incorrect.";
$definitions["message.incorrectPassword"] = "Your current password is incorrect.";
$definitions["message.installerAdminHelp"] = "esoTalk will use the following information to set up your administrator account on your forum.";
$definitions["message.installerFilesNotWritable"] = "esoTalk cannot write to the following files/folders: <strong>%s</strong>.<br/><small>To resolve this, you must navigate to these files/folders in your FTP client and <strong>chmod</strong> them to <strong>777</strong>.</small>";
$definitions["message.installerMySQLHelp"] = "esoTalk needs access to a MySQL database to store all your forum's data in, such as conversations and posts. If you're unsure of any of these details, you may need to ask your hosting provider.";
$definitions["message.installerWelcome"] = "<p>Welcome to the esoTalk installer! We need a few details from you so we can get your forum set up and ready to go.</p>\n<p>If you have any trouble, get help on the <a href='%s'>esoTalk support forum</a>.</p>";
$definitions["message.invalidChannel"] = "You selected an invalid channel!";
$definitions["message.invalidEmail"] = "Seems this email address isn't valid...";
$definitions["message.invalidUsername"] = "You must choose a username between 3 and 20 alphanumeric characters.";
$definitions["message.javascriptRequired"] = "This page requires JavaScript to function properly. Please enable it!";
$definitions["message.languageUninstalled"] = "The language was uninstalled.";
$definitions["message.locked"] = "Hm, looks like this conversation is <strong>locked</strong>, so you can't reply to it.";
$definitions["message.loginToParticipate"] = "To start conversations or reply to posts, please log in.";
$definitions["message.logInToReply"] = "<a href='%1\$s' class='link-login'>Log In</a> or <a href='%2\$s' class='link-join'>Sign Up</a> to reply!";
$definitions["message.logInToSeeAllConversations"] = "<a href='".URL("user/login")."' class='link-login'>Log in</a> to expose some channels/conversations that may be hidden to guests.";
$definitions["message.memberNotFound"] = "Hm, there doesn't seem to be a member with that name.";
$definitions["message.memberNoPermissionView"] = "That member can't be added because they don't have permission to view the channel that this conversation is in.";
$definitions["message.nameTaken"] = "The name you have entered is taken or is a reserved word.";
$definitions["message.newSearchResults"] = "There has been new activity that has affected your search results. <a href='%s'>Refresh</a>";
$definitions["message.noActivity"] = "%s hasn't done anything on this forum yet!";
$definitions["message.noMembersOnline"] = "No members are currently online.";
$definitions["message.noNotifications"] = "You have no notifications.";
$definitions["message.noPermission"] = "Bad user! You do not have permisssion to perform this action.";
$definitions["message.noPermissionToReplyInChannel"] = "You don't have permission to reply to conversations in this channel.";
$definitions["message.noPluginsInstalled"] = "No plugins are currently installed.";
$definitions["message.noSearchResults"] = "No conversations matching your search were found.";
$definitions["message.noSearchResultsMembers"] = "No members matching your search were found.";
$definitions["message.noSearchResultsPosts"] = "No posts matching your search were found.";
$definitions["message.noSkinsInstalled"] = "No skins are currently installed.";
$definitions["message.notWritable"] = "<code>%s</code> is not writeable. Try <code>chmod</code>ing it to <code>777</code>, or if it doesn't exist, <code>chmod</code> the folder it is contained within.";
$definitions["message.pageNotFound"] = "The page you're looking for could not be found.";
$definitions["message.passwordChanged"] = "Alright, your password has been changed. Now you can log in! Hey, try not to forget it again, OK?";
$definitions["message.passwordEmailSent"] = "Ok, we've sent you an email containing a link to reset your password. Check your spam folder if you don't receive it within the next minute or two. Yeah, some times we get put through to spam - can you believe it?!";
$definitions["message.passwordsDontMatch"] = "Your passwords do not match.";
$definitions["message.passwordTooShort"] = "Your password is too short.";
$definitions["message.pluginCannotBeEnabled"] = "The plugin <em>%s</em> cannot be enabled: %s";
$definitions["message.pluginDependencyNotMet"] = "To enable this plugin, you must have %s version %s installed and enabled.";
$definitions["message.pluginUninstalled"] = "The plugin was uninstalled.";
$definitions["message.postNotFound"] = "The post you're looking for could not be found.";
$definitions["message.postTooLong"] = "Your post is really, really long! Too long! The maximum number of characters allowed is %s. That's really long!";
$definitions["message.preInstallErrors"] = "The following errors were found with your esoTalk setup. They must be resolved before you can continue the installation.";
$definitions["message.preInstallWarnings"] = "The following errors were found with your esoTalk setup. You can continue the esoTalk install without resolving them, but some esoTalk functionality may be limited.";
$definitions["message.reduceNumberOfGambits"] = "Reduce the number of gambits or search keywords you're using to find a broader range of conversations.";
$definitions["message.registerGlobalsWarning"] = "PHP's <strong>register_globals</strong> setting is enabled.<br/><small>While esoTalk can run with this setting on, it is recommended that it be turned off to increase security and to prevent esoTalk from having problems.</small>";
$definitions["message.registrationClosed"] = "Registration on this forum is not open to the public.";
$definitions["message.removeDirectoryWarning"] = "Hey! Looks like you haven't deleted the <code>%s</code> directory like we told you to! You probably should, just to make sure those hackers can't do anything naughty.";
$definitions["message.safeModeWarning"] = "<strong>Safe mode</strong> is enabled.<br/><small>This could potentially cause problems with esoTalk, but you can still proceed if you cannot turn it off.</small>";
$definitions["message.searchAllConversations"] = "Try searching for this term across all conversations.";
$definitions["message.setNewPassword"] = "Alright! Now, what do you want your new password to be?";
$definitions["message.skinUninstalled"] = "The skin was uninstalled.";
$definitions["message.suspended"] = "Ouch! A forum moderator has <strong>suspended</strong> your account. It sucks, but until the suspension is lifted you won't be able to do much around here. Hey, screw them!";
$definitions["message.suspendMemberHelp"] = "Suspending %s will prevent them from replying to conversations, starting conversations, and viewing private conversations. They will effectively have the same permissions as a guest.";
$definitions["message.tablePrefixConflict"] = "The installer has detected that there is another installation of esoTalk in the same MySQL database with the same table prefix.<br/>To overwrite this installation of esoTalk, click 'Install My Forum' again. <strong>All data will be lost.</strong><br/>If you wish to create another esoTalk installation alongside the existing one, <strong>change the table prefix</strong>.";
$definitions["message.unsuspendMemberHelp"] = "Unsuspending %s will enable them to participate in conversations on this forum again.";
$definitions["message.upgradeSuccessful"] = "esoTalk was successfully upgraded.";
$definitions["message.waitToReply"] = "You must wait at least %s seconds between starting or replying to conversations. Take a deep breath and try again.";
$definitions["message.waitToSearch"] = "Woah, slow down! Looks like you're trying to perform a few too many searches. Wait %s seconds and try again.";


// Emails.
$definitions["email.confirmEmail.body"] = "<p>Someone (hopefully you!) has signed up to the forum '%1\$s' with this email address.</p><p>If this was you, simply visit the following link and your account will be activated:<br>%2\$s</p>";
$definitions["email.confirmEmail.subject"] = "%1\$s, please confirm your email address";
$definitions["email.footer"] = "<p>(If you don't want to receive any emails like this again, you can <a href='%s'>change your notification preferences</a>.)</p>";
$definitions["email.forgotPassword.body"] = "<p>Someone (hopefully you!) has submitted a forgotten password request for your account on the forum '%1\$s'. If you do not wish to change your password, just ignore this email and nothing will happen.</p><p>However, if you did forget your password and wish to set a new one, visit the following link:<br>%2\$s</p>";
$definitions["email.forgotPassword.subject"] = "Did you forget your password, %1\$s?";
$definitions["email.header"] = "<p>Hey %s!</p>";
$definitions["email.mention.body"] = "<p><strong>%1\$s</strong> mentioned you in a post in the conversation <strong>%2\$s</strong>.</p><hr>%3\$s<hr><p>To view the post in context, check out the following link:<br>%4\$s</p>";
$definitions["email.mention.subject"] = "%1\$s mentioned you in a post";
$definitions["email.privateAdd.body"] = "<p>You have been added to a private conversation titled <strong>%1\$s</strong>.</p><hr>%2\$s<hr><p>To view this conversation, check out the following link:<br>%3\$s</p>";
$definitions["email.privateAdd.subject"] = "You have been added to a private conversation";
$definitions["email.post.body"] = "<p><strong>%1\$s</strong> has replied to a conversation which you followed: <strong>%2\$s</strong></p><hr>%3\$s<hr><p>To view the new activity, check out the following link:<br>%4\$s</p>";
$definitions["email.post.subject"] = "There is a new reply to '%1\$s'";


// Translating the gambit system can be quite complex, but we'll do our best to get you through it. :)
// Note: Don't use any html entities in these definitions, except for: &lt; &gt; &amp; &#39;

// Simple gambits
// These gambits are pretty much evaluated as-they-are.
// tag:, author:, contributor:, and quoted: are combined with a value after the colon (:).
// For example: tag:video games, author:myself
$definitions["gambit.author:"] = "author:";
$definitions["gambit.contributor:"] = "contributor:";
$definitions["gambit.member"] = "member";
$definitions["gambit.myself"] = "myself";
$definitions["gambit.draft"] = "draft";
$definitions["gambit.locked"] = "locked";
$definitions["gambit.order by newest"] = "order by newest";
$definitions["gambit.order by replies"] = "order by replies";
$definitions["gambit.private"] = "private";
$definitions["gambit.random"] = "random";
$definitions["gambit.reverse"] = "reverse";
$definitions["gambit.starred"] = "followed";
$definitions["gambit.muted"] = "muted";
$definitions["gambit.sticky"] = "sticky";
$definitions["gambit.unread"] = "unread";
$definitions["gambit.more results"] = "more results";

// Aliases
// These are gambits which tell the gambit system to use another gambit.
// In other words, when you type "active today", the gambit system interprets it as if you typed "active 1 day".
// The first of each pair, the alias, can be anything you want.
// The second, however, must fit with the regular expression pattern defined below (more on that later.)
$definitions["gambit.active today"] = "active today"; // what appears in the gambit cloud
$definitions["gambit.active 1 day"] = "active 1 day"; // what it actually evaluates to

$definitions["gambit.has replies"] = "has replies";
$definitions["gambit.has >0 replies"] = "has >0 replies";
$definitions["gambit.has >10 replies"] = "has >10 replies";

$definitions["gambit.has no replies"] = "has no replies";
$definitions["gambit.has 0 replies"] = "has 0 replies";

$definitions["gambit.dead"] = "dead";
$definitions["gambit.active >30 day"] = "active >30 day";

// Units of time
// These are used in the active gambit.
// ex. "[active] [>|<|>=|<=|last] 180 [second|minute|hour|day|week|month|year]"
$definitions["gambit.second"] = "second";
$definitions["gambit.minute"] = "minute";
$definitions["gambit.hour"] = "hour";
$definitions["gambit.day"] = "day";
$definitions["gambit.week"] = "week";
$definitions["gambit.month"] = "month";
$definitions["gambit.year"] = "year";
$definitions["gambit.last"] = "last"; // as in "active last 180 days"
$definitions["gambit.active"] = "active"; // as in "active last 180 days"

// Now the hard bit. This is a regular expression to test for the "active" gambit.
// The group (?<a> ... ) is the comparison operator (>, <, >=, <=, or last).
// The group (?<b> ... ) is the number (ex. 24).
// The group (?<c> ... ) is the unit of time.
// The languages of "last" and the units of time are defined above.
// However, if you need to reorder the groups, do so carefully, and make sure spaces are written as " *".
$definitions["gambit.gambitActive"] = "/^{$definitions["gambit.active"]} *(?<a>>|<|>=|<=|{$definitions["gambit.last"]})? *(?<b>\d+) *(?<c>{$definitions["gambit.second"]}|{$definitions["gambit.minute"]}|{$definitions["gambit.hour"]}|{$definitions["gambit.day"]}|{$definitions["gambit.week"]}|{$definitions["gambit.month"]}|{$definitions["gambit.year"]})/";

// These appear in the tag cloud. They must fit the regular expression pattern where the ? is a number.
// If the regular expression pattern has been reordered, these gambits must also be reordered (as well as the ones in aliases.)
$definitions["gambit.active last ? hours"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.hour"]}s";
$definitions["gambit.active last ? days"] = "{$definitions["gambit.active"]} {$definitions["gambit.last"]} ? {$definitions["gambit.day"]}s";

// This is similar to the regular expression for the active gambit, but for the "has n reply(s)" gambit.
// Usually you just need to change the "has" and "repl".
$definitions["gambit.gambitHasNReplies"] = "/^has *(?<a>>|<|>=|<=)? *(?<b>\d+) *repl/";