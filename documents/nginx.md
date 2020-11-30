# What is nginx server?

**NGINX** is one of a handful of servers written to address the  [C10K problem]([http://www.kegel.com/c10k.html]). Unlike traditional servers, **NGINX** doesn’t rely on threads to handle requests. Instead it uses a much more scalable event-driven (asynchronous) architecture. This architecture uses small, but more importantly, predictable amounts of memory under load. Even if you don’t expect to handle thousands of simultaneous requests, you can still benefit from **NGINX’s** high-performance and small memory footprint. **NGINX** scales in all directions: from the smallest VPS all the way up to large clusters of servers.

**NGINX** powers several high-visibility sites, such as  [Netflix]([https://www.netflix.com/]),  [Hulu]([https://www.hulu.com/]),  [Pinterest]([https://www.pinterest.com/]),  [CloudFlare]([https://www.cloudflare.com/]),  [Airbnb]([https://www.airbnb.com/]),  [WordPress.com]([https://wordpress.com/]),  [GitHub]([https://github.com/]),  [SoundCloud]([https://soundcloud.com/]),  [Zynga]([https://www.zynga.com/]),  [Eventbrite]([https://eventbrite.com/]),  [Zappos]([https://www.zappos.com/]),  [Media Temple]([https://mediatemple.net/]),  [Heroku]([https://www.heroku.com/]),  [RightScale]([http://www.rightscale.com/]),  [Engine Yard]([https://www.engineyard.com/]),  [StackPath]([https://www.stackpath.com/]),  [CDN77]([https://www.cdn77.com/])  and many others.

NGINX is a well known open source project originally written by Igor Sysoev, a Russian engineer. Igor started the project in 2002 and made it public in 2004. Since that time NGINX has become a de‑facto standard for high‑performance, scalable websites. Tens of millions of  [active websites]([https://news.netcraft.com/archives/2019/12/10/december-2019-web-server-survey.html])  use NGINX, including  [the majority of the 100,000 busiest websites]([https://w3techs.com/technologies/cross/web_server/ranking])  in the world. Companies like Airbnb, Box, Dropbox, Netflix, Tumblr, WordPress.com, and many others deploy NGINX for scalability and performance reasons.

NGINX is a high‑performance, highly scalable, highly available web server, reverse proxy server, and web accelerator (combining the features of an HTTP load balancer, content cache, and more). NGINX offers a highly scalable architecture that is very different from that of Apache (and many other open source and commercial products in the same category). NGINX has a modular, event‑driven, asynchronous, single-threaded architecture that scales extremely well on generic server hardware and across multi-processor systems. NGINX uses all of the underlying power of modern operating systems like Linux to optimize the usage of memory, CPU, and network, and extract the maximum performance out of a physical or virtual server. The end result is that NGINX can often serve at least  **10x more**  (and often 100–1000x more)  **requests per server**  compared to Apache – that means more connected users per server, better bandwidth utilization, less CPU and RAM consumed, and a greener environment too!

For more information about the NGINX architecture please refer to a chapter dedicated to NGINX in the “[Architecture of Open Source Applications]([https://www.aosabook.org/en/nginx.html])” book.

**NGINX** is open source software for web serving, reverse proxying, caching, load balancing, media streaming, and more. It started out as a web server designed for maximum performance and stability. In addition to its HTTP server capabilities, NGINX can also function as a proxy server for email (IMAP, POP3, and SMTP) and a reverse proxy and load balancer for HTTP, TCP, and UDP servers.

## Backstory

Igor Sysoev originally wrote NGINX to solve the  [C10K problem]([https://en.wikipedia.org/wiki/C10k_problem]), a term coined in 1999 to describe the difficulty that existing web servers experienced in handling large numbers (the  _10K_) of concurrent connections (the  _C_). With its event-driven, asynchronous architecture,  [NGINX]([https://nginx.org/en])  revolutionized how servers operate in  [high-performance contexts]([https://www.nginx.com/blog/inside-nginx-how-we-designed-for-performance-scale/])  and became the fastest web server available.

After open sourcing the project in 2004 and watching its use grow exponentially, Sysoev co-founded NGINX, Inc. to support continued development of NGINX and to market  [NGINX Plus]([https://www.nginx.com/products/])  as a commercial product with additional features designed for enterprise customers. Today, NGINX and NGINX Plus can handle hundreds of thousands of concurrent connections, and power  [more than 50% of the busiest sites]([https://w3techs.com/technologies/cross/web_server/ranking])  on the web.

## NGINX as a Web Server

The goal behind NGINX was to create the fastest web server around, and maintaining that excellence is still a [central goal of the project]([https://www.nginx.com/blog/nginx-open-source-reflecting-back-and-looking-ahead/]). NGINX consistently beats Apache and other servers in [benchmarks measuring web server performance]([https://www.rootusers.com/linux-web-server-performance-benchmark-2016-results/]). Since the original release of NGINX however, websites have expanded from simple HTML pages to dynamic, multifaceted content. [NGINX has grown along with it]([https://www.nginx.com/blog/nginx-vs-apache-our-view/]) and now supports all the components of the modern Web, including WebSocket, HTTP/2, and streaming of multiple video formats (HDS, HLS, RTMP, and others).

## NGINX Beyond Web Serving

All your files and folders are presented as a tree in the file explorer. You can switch from one to another by clicking a file in the tree.

## What Can NGINX and NGINX Plus Do for You?

NGINX Plus and NGINX are the best-in-class web server and application delivery solutions used by high‑traffic websites such as Dropbox, Netflix, and Zynga. More than  [400 million  websites]([https://news.netcraft.com/archives/2019/12/10/december-2019-web-server-survey.html])  worldwide rely on NGINX Plus and NGINX to deliver their content quickly, reliably, and securely.

-   NGINX makes hardware load balancers obsolete. As a software-only open source load balancer, NGINX is  [less expensive]([https://www.nginx.com/blog/nginx-plus-vs-f5-big-ip-a-price-performance-comparison/])  and more configurable than hardware load balancers, and is designed for modern cloud architectures. NGINX Plus supports  [on-the-fly reconfiguration]([https://www.nginx.com/products/on-the-fly-reconfiguration])  and integrates with modern DevOps tools for easier monitoring.
-   NGINX is a multifunction tool. With NGINX, you can use the same tool as your load balancer, reverse proxy, content cache, and web server, minimizing the amount of tooling and configuration your organization needs to maintain. NGINX offers tutorials, webinars, and a wide array of  [documentation]([https://www.nginx.com/resources/library/])  to get you on your feet. NGINX Plus includes  [rapid-response customer support]([https://www.nginx.com/support/]), so you can easily get help diagnosing any part of your stack that uses NGINX or NGINX Plus.
-   NGINX keeps evolving. For the past decade NGINX has been at the forefront of development of the modern Web, and has helped lead the way on everything from HTTP/2 to microservices support. As development and delivery of web applications continue to evolve, NGINX Plus keeps adding features to enable flawless application delivery, from the recently announced support for configuration using an implementation of  [JavaScript customized for NGINX]([https://www.nginx.com/blog/nginscript-why-our-own-javascript-implementation/]), to support for  [dynamic modules]([https://www.nginx.com/blog/future-nginx-nginx-plus/]). Using NGINX Plus ensures you’ll stay at the cutting edge of web performance.

# What are feature of nginx server?

## nginx

[Basic HTTP server features]([https://nginx.org/en/#basic_http_features])  
[Other HTTP server features]([https://nginx.org/en/#other_http_features])  
[Mail proxy server features]([https://nginx.org/en/#mail_proxy_server_features])  
[TCP/UDP proxy server features]([https://nginx.org/en/#generic_proxy_server_features])  
[Architecture and scalability]([https://nginx.org/en/#architecture_and_scalability])  
[Tested OS and platforms]([https://nginx.org/en/#tested_os_and_platforms])  

nginx [engine x] is an HTTP and reverse proxy server, a mail proxy server, and a generic TCP/UDP proxy server, originally written by  [Igor Sysoev]([http://sysoev.ru/en/]). For a long time, it has been running on many heavily loaded Russian sites including  [Yandex]([http://www.yandex.ru/]),  [Mail.Ru]([http://mail.ru/]),  [VK]([http://vk.com/]), and  [Rambler]([http://www.rambler.ru/]). According to Netcraft, nginx served or proxied  [25.43% busiest sites in June 2020]([https://news.netcraft.com/archives/2020/06/25/june-2020-web-server-survey.html]). Here are some of the success stories:  [Dropbox]([https://blogs.dropbox.com/tech/2017/09/optimizing-web-servers-for-high-throughput-and-low-latency/]),  [Netflix]([https://openconnect.netflix.com/en/software/]),  [Wordpress.com]([https://www.nginx.com/case-studies/nginx-wordpress-com/]),  [FastMail.FM]([http://blog.fastmail.fm/2007/01/04/webimappop-frontend-proxies-changed-to-nginx/]).

The sources and documentation are distributed under the  [2-clause BSD-like license]([https://nginx.org/LICENSE]).

Commercial support is available from  [Nginx, Inc.]([https://www.nginx.com/])

### Basic HTTP server features

-   Serving static and  [index]([https://nginx.org/en/docs/http/ngx_http_index_module.html])  files,  [autoindexing]([https://nginx.org/en/docs/http/ngx_http_autoindex_module.html]);  
[open file descriptor cache]([https://nginx.org/en/docs/http/ngx_http_core_module.html#open_file_cache]);
-   [Accelerated reverse proxying with caching]([https://nginx.org/en/docs/http/ngx_http_proxy_module.html]);  
[load balancing and fault tolerance]([https://nginx.org/en/docs/http/ngx_http_upstream_module.html]);
-   Accelerated support with caching of  [FastCGI]([https://nginx.org/en/docs/http/ngx_http_fastcgi_module.html])),  [uwsgi]([https://nginx.org/en/docs/http/ngx_http_uwsgi_module.html]),  [SCGI]([https://nginx.org/en/docs/http/ngx_http_scgi_module.html]), and  [memcached]([https://nginx.org/en/docs/http/ngx_http_memcached_module.html])  servers;  
[load balancing and fault tolerance]([https://nginx.org/en/docs/http/ngx_http_upstream_module.html]);
-   Modular architecture. Filters include  [gzipping]([https://nginx.org/en/docs/http/ngx_http_gzip_module.html]), byte ranges, chunked responses,  [XSLT]([https://nginx.org/en/docs/http/ngx_http_xslt_module.html]),  [SSI]([https://nginx.org/en/docs/http/ngx_http_ssi_module.html]), and  [image transformation]([https://nginx.org/en/docs/http/ngx_http_image_filter_module.html])  filter. Multiple SSI inclusions within a single page can be processed in parallel if they are handled by proxied or FastCGI/uwsgi/SCGI servers;
-   [SSL and TLS SNI support]([https://nginx.org/en/docs/http/ngx_http_ssl_module.html]);
-   Support for  [HTTP/2]([https://nginx.org/en/docs/http/ngx_http_v2_module.html])  with weighted and dependency-based prioritization.

### Other HTTP server features

-   Name-based and IP-based  [virtual servers]([https://nginx.org/en/docs/http/request_processing.html]);
-   [Keep-alive]([https://nginx.org/en/docs/http/ngx_http_core_module.html#keepalive_timeout])  and pipelined connections support;
-   [Access log formats]([https://nginx.org/en/docs/http/ngx_http_log_module.html#log_format]),  [buffered log writing]([https://nginx.org/en/docs/http/ngx_http_log_module.html#access_log]),  [fast log rotation]([https://nginx.org/en/docs/control.html#logs]), and  [syslog logging]([https://nginx.org/en/docs/syslog.html]);
-   3xx-5xx error codes  [redirection]([https://nginx.org/en/docs/http/ngx_http_core_module.html#error_page]);
-   The rewrite module:  [URI changing using regular expressions]([https://nginx.org/en/docs/http/ngx_http_rewrite_module.html]);
-   [Executing different functions]([https://nginx.org/en/docs/http/ngx_http_rewrite_module.html#if])  depending on the  [client address]([https://nginx.org/en/docs/http/ngx_http_geo_module.html]);
-   Access control based on  [client IP address]([https://nginx.org/en/docs/http/ngx_http_access_module.html]),  [by password (HTTP Basic authentication)]([https://nginx.org/en/docs/http/ngx_http_auth_basic_module.html])  and by the  [result of subrequest]([https://nginx.org/en/docs/http/ngx_http_auth_request_module.html]);
-   Validation of  [HTTP referer]([https://nginx.org/en/docs/http/ngx_http_referer_module.html]);
-   The  [PUT, DELETE, MKCOL, COPY, and MOVE]([https://nginx.org/en/docs/http/ngx_http_dav_module.html])  methods;
-   [FLV]([https://nginx.org/en/docs/http/ngx_http_flv_module.html])  and  [MP4]([https://nginx.org/en/docs/http/ngx_http_mp4_module.html])  streaming;
-   [Response rate limiting]([https://nginx.org/en/docs/http/ngx_http_core_module.html#limit_rate]);
-   Limiting the number of simultaneous  [connections]([https://nginx.org/en/docs/http/ngx_http_limit_conn_module.html])  or  [requests]([https://nginx.org/en/docs/http/ngx_http_limit_req_module.html])  coming from one address;
-   [IP-based geolocation]([https://nginx.org/en/docs/http/ngx_http_geoip_module.html]);
-   [A/B testing]([https://nginx.org/en/docs/http/ngx_http_split_clients_module.html]);
-   [Request mirroring]([https://nginx.org/en/docs/http/ngx_http_mirror_module.html]);
-   Embedded  [Perl]([https://nginx.org/en/docs/http/ngx_http_perl_module.html]);
-   [njs]([https://nginx.org/en/docs/njs/index.html])  scripting language.

### Mail proxy server features

-   User redirection to  [IMAP]([https://nginx.org/en/docs/mail/ngx_mail_imap_module.html])  or  [POP3]([https://nginx.org/en/docs/mail/ngx_mail_pop3_module.html])  server using an external HTTP  [authentication]([https://nginx.org/en/docs/mail/ngx_mail_auth_http_module.html])  server;
-   User authentication using an external HTTP  [authentication]([https://nginx.org/en/docs/mail/ngx_mail_auth_http_module.html])  server and connection redirection to an internal  [SMTP]([https://nginx.org/en/docs/mail/ngx_mail_smtp_module.html])  server;
-   Authentication methods:
    -   [POP3]([https://nginx.org/en/docs/mail/ngx_mail_pop3_module.html#pop3_auth]): USER/PASS, APOP, AUTH LOGIN/PLAIN/CRAM-MD5;
    -   [IMAP]([https://nginx.org/en/docs/mail/ngx_mail_imap_module.html#imap_auth]): LOGIN, AUTH LOGIN/PLAIN/CRAM-MD5;
    -   [SMTP]([https://nginx.org/en/docs/mail/ngx_mail_smtp_module.html#smtp_auth]): AUTH LOGIN/PLAIN/CRAM-MD5;
-   [SSL]([https://nginx.org/en/docs/mail/ngx_mail_ssl_module.html])  support;
-   [STARTTLS and STLS]([https://nginx.org/en/docs/mail/ngx_mail_ssl_module.html#starttls])  support.

### TCP/UDP proxy server features

-   [Generic proxying]([https://nginx.org/en/docs/stream/ngx_stream_proxy_module.html])  of TCP and UDP;
-   [SSL]([https://nginx.org/en/docs/stream/ngx_stream_ssl_module.html])  and TLS  [SNI]([https://nginx.org/en/docs/stream/ngx_stream_ssl_preread_module.html])  support for TCP;
-   [Load balancing and fault tolerance]([https://nginx.org/en/docs/stream/ngx_stream_upstream_module.html]);
-   Access control based on  [client address]([https://nginx.org/en/docs/stream/ngx_stream_access_module.html]);
-   Executing different functions depending on the  [client address]([https://nginx.org/en/docs/stream/ngx_stream_geo_module.html]);
-   Limiting the number of simultaneous  [connections]([https://nginx.org/en/docs/stream/ngx_stream_limit_conn_module.html])  coming from one address;
-   [Access log formats]([https://nginx.org/en/docs/stream/ngx_stream_log_module.html#log_format]),  [buffered log writing]([https://nginx.org/en/docs/stream/ngx_stream_log_module.html#access_log]),  [fast log rotation]([https://nginx.org/en/docs/control.html#logs]), and  [syslog logging]([https://nginx.org/en/docs/syslog.html]);
-   [IP-based geolocation]([https://nginx.org/en/docs/stream/ngx_stream_geoip_module.html]);
-   [A/B testing]([https://nginx.org/en/docs/stream/ngx_stream_split_clients_module.html]);
-   [njs]([https://nginx.org/en/docs/njs/index.html])  scripting language.

### Architecture and scalability

-   One master and several worker processes; worker processes run under an unprivileged user;
-   [Flexible configuration]([https://nginx.org/en/docs/example.html]);
-   [Reconfiguration]([https://nginx.org/en/docs/control.html#reconfiguration])  and  [upgrade of an executable]([https://nginx.org/en/docs/control.html#upgrade])  without interruption of the client servicing;
-   [Support]([https://nginx.org/en/docs/events.html])  for kqueue (FreeBSD 4.1+), epoll (Linux 2.6+), /dev/poll (Solaris 7 11/99+), event ports (Solaris 10), select, and poll;
-   The support of the various kqueue features including EV_CLEAR, EV_DISABLE (to temporarily disable events), NOTE_LOWAT, EV_EOF, number of available data, error codes;
-   The support of various epoll features including EPOLLRDHUP (Linux 2.6.17+, glibc 2.8+) and EPOLLEXCLUSIVE (Linux 4.5+, glibc 2.24+);
-   sendfile (FreeBSD 3.1+, Linux 2.2+, macOS 10.5+), sendfile64 (Linux 2.4.21+), and sendfilev (Solaris 8 7/01+) support;
-   [File AIO]([https://nginx.org/en/docs/http/ngx_http_core_module.html#aio])  (FreeBSD 4.3+, Linux 2.6.22+);
-   [DIRECTIO]([https://nginx.org/en/docs/http/ngx_http_core_module.html#directio])  (FreeBSD 4.4+, Linux 2.4+, Solaris 2.6+, macOS);
-   Accept-filters (FreeBSD 4.1+, NetBSD 5.0+) and TCP_DEFER_ACCEPT (Linux 2.4+)  [support]([https://nginx.org/en/docs/http/ngx_http_core_module.html#listen]);
-   10,000 inactive HTTP keep-alive connections take about 2.5M memory;
-   Data copy operations are kept to a minimum.

### Tested OS and platforms

-   FreeBSD 3 — 12 / i386; FreeBSD 5 — 12 / amd64; FreeBSD 11 / ppc; FreeBSD 12 / ppc64;
-   Linux 2.2 — 4 / i386; Linux 2.6 — 5 / amd64; Linux 3 — 4 / armv6l, armv7l, aarch64, ppc64le;
-   Solaris 9 / i386, sun4u; Solaris 10 / i386, amd64, sun4v; Solaris 11 / x86;
-   AIX 7.1 / powerpc;
-   HP-UX 11.31 / ia64;
-   macOS / ppc, i386, x86_64;
-   Windows XP, Windows Server 2003, Windows 7, Windows 10.
# How to install a nginx server on ubuntu?

## Login to your server using the ssh command

First, login into your server using the ssh command:  
`$ ssh user@server  
$ ssh [vivek@server1.cyberciti.biz](mailto:vivek@server1.cyberciti.biz)`

## [Find out your Ubuntu Linux server IP address]([https://www.cyberciti.biz/faq/bash-shell-command-to-find-get-ip-address/])

Type the following  [ip command](https://www.cyberciti.biz/faq/linux-ip-command-examples-usage-syntax/) "See Linux/Unix ip command examples for more info":  
`$ ip show  
$ ip addr show`  
[![Find out Ubuntu server IP address using IP command]
Note down the IP address 10.105.28.46. You might have a public IPv4 address. It all depends upon your setup.

## Install Nginx on Ubuntu Linux 18.04 LTS

Run the following  [apt command]([https://www.cyberciti.biz/faq/ubuntu-lts-debian-linux-apt-command-examples/]):  
`$ sudo apt update  
$ sudo apt upgrade`  
Sample outputs:

Hit:1 [http://us-east-1.ec2.archive.ubuntu.com/ubuntu](http://us-east-1.ec2.archive.ubuntu.com/ubuntu "http://us-east-1.ec2.archive.ubuntu.com/ubuntu") bionic InRelease

Get:2 [http://us-east-1.ec2.archive.ubuntu.com/ubuntu](http://us-east-1.ec2.archive.ubuntu.com/ubuntu "http://us-east-1.ec2.archive.ubuntu.com/ubuntu") bionic-updates InRelease [88.7 kB]

Get:3 [http://us-east-1.ec2.archive.ubuntu.com/ubuntu](http://us-east-1.ec2.archive.ubuntu.com/ubuntu "http://us-east-1.ec2.archive.ubuntu.com/ubuntu") bionic-backports InRelease [74.6 kB]

Get:4 [http://security.ubuntu.com/ubuntu](http://security.ubuntu.com/ubuntu "http://security.ubuntu.com/ubuntu") bionic-security InRelease [88.7 kB]     
Fetched 252 kB in 1s (503 kB/s)                                
Reading package lists... Done
Building dependency tree       
Reading state information... Done
All packages are up to date.

## How to install Nginx on Ubuntu 18.04

Finally install Nginx weber server:  
`$ sudo apt install nginx`  
[![Install and Configure Nginx on Ubuntu Linux 18.04 LTS]

### [commands to start/stop/restart Nginx server on Ubuntu]([https://www.cyberciti.biz/faq/nginx-restart-ubuntu-linux-command/])

Enable Nginx server at boot time using the systemctl command:  
`$ sudo systemctl enable nginx`  
Start Nginx server using the systemctl command:  
`$ sudo systemctl start nginx`  
Restart Nginx server using the systemctl command:  
`$ sudo systemctl restart nginx`  
Stop Nginx server using the systemctl command:  
`$ sudo systemctl stop nginx`  
Reload Nginx server using the systemctl command:  
`$ sudo systemctl reload nginx`  
Get status of Nginx server using the systemctl command:  
`$ sudo systemctl status nginx`  
[![How to start stop and restart Nginx server on Ubuntu Linux]


# How to config a nginx server?


## Configure Nginx server

Let us set up our public domain (e.g., cms.cyberciti.biz or www.cyberciti.biz and so on ) with a directory.

### Create a user to store web pages

[Add a new Linux user named www-pubcms]([https://www.cyberciti.biz/faq/howto-linux-add-user-use-adduser-command/])  using the useradd command  
`$ sudo useradd -s /usr/sbin/nologin -m -d /home/lighttpd/ -c 'cms.cyberciti.biz user' www-pubcms`  
[Lock down the Linux user account]([https://www.cyberciti.biz/faq/linux-locking-an-account/])  using the passwd command:  
`$ sudo passwd -l www-pubcms  
passwd: password expiry information changed.`

### Make a directory to store web pages using the mkdir command

`$ sudo mkdir -v /home/lighttpd/http/`

### Create a new sample web page

Use a text editor such as nano command or vim command:  
`$ sudo nano /home/lighttpd/http/index.html`  
OR  
`$ sudo vim /home/lighttpd/http/index.html`  
Append the following HTML code:

<html>
        <head>
                <title>CMS.CYBERCITI.BIZ</title>
        </head>
        <body>
                <h1>Example</h1>
                This is a test page for cms.cyberciti.biz.
                <hr>
                <small>Powered by Nginx and Ubuntu 18.04 LTS</small>
        </body>
</html>

Set permission for the dir:  
`$ sudo chown -vR www-pubcms:www-pubcms /home/lighttpd/`

### Create virual domain configuration for your cms.cyberciti.biz domain

`$ sudo vim /etc/nginx/sites-available/http.cms.cyberciti.biz.conf`  
OR  
`$ sudo nano /etc/nginx/sites-available/http.cms.cyberciti.biz.conf`  
Append the config:

## our first viraul host cms.cyberciti.biz
	server {
    listen 80;
	# port
    server_name cms.cyberciti.biz;
	# dns server name
    # log files
    access_log  /var/log/nginx/cms.cyberciti.biz_access.log;
    error_log   /var/log/nginx/cms.cyberciti.biz_error.lg;
    # document root where files stores for cms.cyberciti.biz domain
    root /home/lighttpd/http;
    index index.html index.htm;
}

Save and close the file.  [Create a new soft link using ln command]([https://www.cyberciti.biz/faq/creating-soft-link-or-symbolic-link/])  in the sites-enabled directory to enable cms.cyberciti.biz domain:  
`$ cd /etc/nginx/sites-enabled/  
$ sudo ln -v -s /etc/nginx/sites-available/http.cms.cyberciti.biz.conf .`

### Test and  [gracefully reload nginx server]([https://www.cyberciti.biz/faq/howto-unix-linux-gracefully-reload-restart-nginx-webserver/])

`$ sudo nginx -t`

nginx: the configuration file /etc/nginx/nginx.conf syntax is ok
nginx: configuration file /etc/nginx/nginx.conf test is successful 

`$ sudo systemctl reload nginx`  
Make sure you map domain name to your public IP address such as 104.200.23.232. One can use the  [host command]([https://www.cyberciti.biz/faq/linux-unix-host-command-examples-usage-syntax/]) "See Linux/Unix host command examples for more info")  or  [dig command]([https://www.cyberciti.biz/faq/linux-unix-dig-command-examples-usage-syntax/]) "See Linux/Unix dig command examples for more info")  to verify A record for cms.cyberciti.biz:  
`$ host cms.cyberciti.biz  
cms.cyberciti.biz has address 104.200.23.232  
cms.cyberciti.biz has IPv6 address 2600:3c00:1::68c8:17e8`  
Fire a browser and type your domain name:  
`[http://cms.cyberciti.biz/`](http://cms.cyberciti.biz/%60)  
[![Testing your Nginx server]

## Import Nginx log files

-   /var/log/nginx/  – Nginx server log files.
-   /etc/nginx/  – Nginx server config files directory. All active site config can be found in  
**/etc/nginx/sites-enabled/**  
directory linked from actual config file directory at 

 **/etc/nginx/sites-available/**

-   /etc/nginx/nginx.conf  – Your main nginx config file.

Use the tail command or more command or  [grep command]([https://www.cyberciti.biz/faq/howto-use-grep-command-in-linux-unix/]) "See Linux/Unix grep command examples for more info")  or  [cat command]([https://www.cyberciti.biz/faq/linux-unix-appleosx-bsd-cat-command-examples/]) "See Linux/Unix cat command examples for more info")  to view server log files:  
`$ tail -f /var/log/nginx/access.log  
$ more /var/log/nginx/error.log  
$ grep 'something' /var/log/nginx/cms.cyberciti.biz_access.log  
$ cat /var/log/nginx/cms.cyberciti.biz_access.log`  

[![Check Nginx logs file to make sure everything working properly]

Check Nginx logs file to make sure everything working properly for all domains

  
Verify that Nginx ports are open on Ubuntu Linux with the ss command or netstat command:  
`$ ss -tulpn  
$ ss -tulpn | grep :80  
$ netstat -tulpn`

# Some example configuration for a website?

## Directives, Blocks, and Contexts [Permalink]([https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#directives-blocks-and-contexts])

All NGINX configuration files are located in the  `/etc/nginx/`  directory. The primary configuration file is  `/etc/nginx/nginx.conf`.

Configuration options in NGINX are called  [directives]([https://nginx.org/en/docs/dirindex.html]). Directives are organized into groups known as  **blocks**  or  **contexts**. The two terms are synonymous.

Lines preceded by a  `#`  character are comments and not interpreted by NGINX. Lines containing directives must end with a  `;`  or NGINX will fail to load the configuration and report an error.

Below is a condensed copy of the  `/etc/nginx/nginx.conf`  file that is included with installations from the NGINX repositories. The file starts with 4 directives:  `user`,  `worker_processes`,  `error_log`, and  `pid`. These are outside any specific block or context, so they’re said to exist in the  `main`  context. The  `events`  and  `http`  blocks are areas for additional directives, and they also exist in the  `main`  context.

See  [the NGINX docs]([https://nginx.org/en/docs/ngx_core_module.html])  for explanations of these directives and others available in the  `main`  context.

/etc/nginx/nginx.conf

```bash
user  nginx;
worker_processes  1;

error_log  /var/log/nginx/error.log warn;
pid        /var/run/nginx.pid;

events {
       . . .
}

http {
       . . .
}
```
## The http Block [Permalink](https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#the-http-block "Permalink")

The  `http`  block contains directives for handling web traffic. These directives are often referred to as  _universal_  because they are passed on to all website configurations NGINX serves. See  [the NGINX docs](https://nginx.org/en/docs/http/ngx_http_core_module.html)  for a list of available directives for the  `http`  block.

/etc/nginx/nginx.conf

```nginx
http {
    include       /etc/nginx/mime.types;
    default_type  application/octet-stream;

    log_format  main  '$remote_addr - $remote_user [$time_local] "$request" '
                      '$status $body_bytes_sent "$http_referer" '
                      '"$http_user_agent" "$http_x_forwarded_for"';

    access_log  /var/log/nginx/access.log  main;

    sendfile        on;
    #tcp_nopush     on;

    keepalive_timeout  65;

    #gzip  on;

    include /etc/nginx/conf.d/*.conf;
}
```
## Server Blocks [Permalink]([https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#server-blocks])

The  `http`  block above contains an  `include`  directive which tells NGINX where website configuration files are located.

-   If you installed from the official NGINX repository, this line will say  `include /etc/nginx/conf.d/*.conf;`  as it does in the  `http`  block above. Each website you host with NGINX should have its own configuration file in  `/etc/nginx/conf.d/`, with the name formatted as  `example.com.conf`. Sites which are disabled (not being served by NGINX) should be named  `example.com.conf.disabled`.
    
-   If you installed NGINX from the Debian or Ubuntu repositories, this line will say  `include /etc/nginx/sites-enabled/*;`. The  `../sites-enabled/`  folder contains symlinks to the site configuration files stored in  `/etc/nginx/sites-available/`. Sites in  `sites-available`  can be disabled by removing the symlink to  `sites-enabled`.
    
-   Depending on your installation source, you’ll find an example configuration file at  `/etc/nginx/conf.d/default.conf`  or  `etc/nginx/sites-enabled/default`.
    

Regardless of the installation source, server configuration files will contain a  `server`  block (or blocks) for a website. For example:

/etc/nginx/conf.d/example.com.conf

```nginx
server {
    listen         80 default_server;
    listen         [::]:80 default_server;
    server_name    example.com www.example.com;
    root           /var/www/example.com;
    index          index.html;
    try_files $uri /index.html;
}
```
### Listening Ports [Permalink](https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#listening-ports "Permalink")

The  `listen`  directive tells NGINX the hostname/IP and the TCP port where it should listen for HTTP connections. The argument  `default_server`  means this virtual host will answer requests on port 80 that don’t specifically match another virtual host’s listen statement. The second statement listens over IPv6 and behaves similarly.

### Name-Based Virtual Hosting [Permalink](https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#name-based-virtual-hosting "Permalink")

The  `server_name`  directive allows multiple domains to be served from a single IP address. The server decides which domain to serve based on the request header it receives.

You typically should create one file per domain or site you want to host on your server. Here are some examples:

1.  Process requests for both  `example.com`  and  `www.example.com`:
```ngixn
    /etc/nginx/conf.d/example.com.conf
    server_name   example.com www.example.com;
```

2.  The  `server_name`  directive can also use wildcards.  `*.example.com`  and  `.example.com`  both instruct the server to process requests for all subdomains of  `example.com`:

    /etc/nginx/conf.d/example.com.conf
```ngixn
    server_name   *.example.com;
    server_name   .example.com;
```
3.  Process requests for all domain names beginning with  `example.`:
```ngixn
    /etc/nginx/conf.d/example.com.conf
    server_name   example.*;
```
NGINX allows you to specify server names that are not valid domain names. NGINX uses the name from the HTTP header to answer requests, regardless of whether the domain name is valid or not.

Using non-domain hostnames is useful if your server is on a LAN, or if you already know all of the clients that will be making requests of the server. This includes front-end proxy servers with  `/etc/hosts`  entries configured for the IP address on which NGINX is listening.

## Location Blocks [Permalink](https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#location-blocks "Permalink")

The  `location`  setting lets you configure how NGINX will respond to requests for resources within the server. Just like the  `server_name`  directive tells NGINX how to process requests for the domain,  `location`  directives cover requests for specific files and folders, such as  `http://example.com/blog/`. Here are some examples:

/etc/nginx/sites-available/example.com

```nginx
location / { }
location /images/ { }
location /blog/ { }
location /planet/ { }
location /planet/blog/ { }
```

The locations above are  _literal string_  matches, which match any part of an HTTP request that comes after the host segment:

Assuming that there is a  `server_name`  entry for  `example.com`, the  `location /`  directive will determine what happens with this request.

NGINX always fulfills requests using the most specific match:


`[http://example.com/planet/blog/`]  or  `[http://example.com/planet/blog/about/`]


/etc/nginx/sites-available/example.com

```nginx
location ~ IndexPage\.php$ { }
location ~ ^/BlogPlanet(/|/index\.php)$ { } 
```
When a  `location`  directive is followed by a tilde (**~**), NGINX performs a  _regular expression_  match. These matches are always case-sensitive. So,  `IndexPage.php`  would match the first example above, but  `indexpage.php`  would not. In the second example, the regular expression  `^/BlogPlanet(/|index\.php)$`  will match requests for  `/BlogPlanet/`  and  `/BlogPlanet/index.php`, but  **not**  `/BlogPlanet`,  `/blogplanet/`, or  `/blogplanet/index.php`. NGINX uses  [Perl Compatible Regular Expressions](https://perldoc.perl.org/perlre.html)  (PCRE).

/etc/nginx/sites-available/example.com

```nginx
location ~* \.(pl|cgi|perl|prl)$ { }
location ~* \.(md|mdwn|txt|mkdn)$ { }
```
If you want matches to be case-_insensitive_, use a tilde with an asterisk (**~***). The examples above all specify how nginx should process requests that end in a particular file extension. In the first example, any file ending in:  `.pl`,  `.PL`,  `.cgi`,  `.CGI`,  `.perl`,  `.Perl`,  `.prl`, and  `.PrL`  (among others) will match the request.

/etc/nginx/sites-available/example.com

```nginx
location ^~ /images/IndexPage/ { }
location ^~ /blog/BlogPlanet/ { } 
```
Adding a caret and tilde (**^~**) to your  `location`  directives tells NGINX, if it matches a particular string, to stop searching for more specific matches and use the directives here instead. Other than that, these directives work like the literal string matches in the first group. Even if there’s a more specific match later, if a request matches one of these directives, the settings here will be used. See below for more information about the order and priority of  `location`  directive processing.

/etc/nginx/sites-available/example.com

```nginx
location = / { }
```
Finally, if you add an equals sign (**=**) to the  `location`  setting, this forces an exact match with the path requested and then stops searching for more specific matches. For instance, the final example will match only  `[http://example.com/`,]) not  `[http://example.com/index.html`.]) Using exact matches can speed up request times slightly, which can be useful if you have some requests that are particularly popular.

Directives are processed in the following order:

1.  Exact string matches are processed first. If a match is found, NGINX stops searching and fulfills the request.
2.  Remaining literal string directives are processed next. If NGINX encounters a match where the  **^~**  argument is used, it stops here and fulfills the request. Otherwise, NGINX continues to process location directives.
3.  All location directives with regular expressions (**~**  and  **~***) are processed. If a regular expression matches the request, nginx stops searching and fulfills the request.
4.  If no regular expressions match, the most specific literal string match is used.

Make sure each file and folder under a domain will match at least one  `location`  directive.

> **Note**
> 
> Nested location blocks are not recommended or supported.

### Location Root and Index [Permalink]([https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/#location-root-and-index])

The  `location`  setting is another variable that has its own block of arguments.

Once NGINX has determined which  `location`  directive best matches a given request, the response to this request is determined by the contents of the associated  `location`  directive block. Here’s an example:

/etc/nginx/sites-available/example.com

```nginx
location / {
    root html;
    index index.html index.htm;
}
```
In this example, the document root is located in the  `html/`  directory. Under the default installation prefix for NGINX, the full path to this location is  `/etc/nginx/html/`.

**Request:**  `http://example.com/blog/includes/style.css`

**Returns:**  NGINX will attempt to serve the file located at  `/etc/nginx/html/blog/includes/style.css`

> **Note**
> 
> You can use absolute paths for the  `root`  directive if desired.

The  `index`  variable tells NGINX which file to serve if none is specified. For example:

**Request:**  `http://example.com`

**Returns:**  NGINX will attempt to serve the file located at  `/etc/nginx/html/index.html`.

If multiple files are specified for the  `index`  directive, NGINX will process the list in order and fulfill the request with the first file that exists. If  `index.html`  doesn’t exist in the relevant directory, then  `index.htm`  will be used. If neither exists, a 404 message will be sent.

Here’s a more complex example, showcasing a set of  `location`  directives for a server responding to the domain  `example.com`:

/etc/nginx/sites-available/example.com location directive

```nginx
location / {
    root   /srv/www/example.com/public_html;
    index  index.html index.htm;
}
```
```nginx
location ~ \.pl$ {
    gzip off;
    include /etc/nginx/fastcgi_params;
    fastcgi_pass unix:/var/run/fcgiwrap.socket;
    fastcgi_index index.pl;
    fastcgi_param SCRIPT_FILENAME /srv/www/example.com/public_html$fastcgi_script_name;
}
```

# Reference
##### -  [https://www.linode.com/docs/web-servers/nginx/how-to-configure-nginx/]
##### - [https://www.nginx.com/blog/setting-up-nginx/]
##### - [https://www.cyberciti.biz/faq/install-and-configure-nginx-on-ubuntu-linux-18-04-lts/]
##### - [https://www.nginx.com/faq/what-is-nginx-how-different-is-it-from-e-g-apache/]
##### -  [https://nginx.org/en/#:~:text=from%20Nginx%2C%20Inc.-,Basic%20HTTP%20server%20features,Modular%20architecture.]

# Slide:
##### - [https://docs.google.com/presentation/d/1v_qg8zzcC3rCDXFih_2aJJhI09yHlgb78K4ARWvQsSc/edit#slide=id.g8ebf8c4931_0_318]