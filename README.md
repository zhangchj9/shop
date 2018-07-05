# shop
借鉴于summerblue ("https://github.com/summerblue/laravel-shop") 与 baijunyao ("https://github.com/baijunyao/laravel-bjyblog") 的开源项目，一个综合电商与博客的综合性购物网站

前言
	Laravel 是一套简洁、优雅的 PHP Web 开发框架。“可让开发者从面条一般杂乱的代码中解脱出来，使每行代码都可以简洁、富于表达力，构建一个完美的 web APP”。鉴于项目所用的Laravel框架为5.5版本，它要求PHP至少满足7.0及以上版本。对于仍在使用Ubuntu 16.04及以下版本操作系统的用户而言，我们建议对您的操作系统进行更新，否则通过apt将默认安装PHP 5.6，在后续手动安装PHP 7.x版本及配置Composer过程中可能会存在不可预知的麻烦。另外，我们也不建议您在Windows操作系统或应用IIS作为Web服务器对本项目进行配置。 接下来，本文将介绍如何在Ubuntu 18.04逐步搭建本购物网站的运行环境。本项目运行环境依赖一览如下表1所示：
表1 OnlineShop 运行环境一览
Dependencies	Details
OS	Ubuntu 18.04 LTS (GNU/Linux 4.15.0-22-generic x86_64)
Server	Apache/2.4.29 (Ubuntu)
PHP version	PHP/7.2.5-0ubuntu0.18.04.1
Laravel version	5.5.40
MySQL version	5.7.22-0ubuntu18.04.1
Timezone	PRC
Env	local
Locale	zh-CN
1. 准备工作（可选）
	在一切开始前，推荐使用如下指令更新一波服务器的软件及资源包：
	① sudo apt-get upgrade
	② sudo apt-get update
2. Apache的安装与配置
	① 安装：sudo apt-get install apache2
	② 配置：
2.1 修改Apache的配置文件
	sudo vi /etc/apache2/apache2.conf
	确定待发布购物网站的物理地址后，在<Directory>标签板块补充如下内容：
	<Directory /var/www/html/shop/>
        	Options Indexes FollowSymLinks
        	AllowOverride All
        	Require all granted
	</Directory>
	此处，我们设定购物网站的物理地址为“/var/www/html/shop/”，同时，打开Apache服务器在该目录的文件读写权限等。
	
	通常，当下进行服务器资源包或软件的更新后，都会让本机已有的PHP（或者接下来通过apt安装的PHP）达到7.1或以上版本。所以，为了让Apache支持PHP，此处可以先在apache2.conf文末再加上如下内容：
	LoadModule php7_module        /usr/lib/apache2/modules/libphp7.2.so
	AddType application/x-httpd-php .php
	AddType application/x-httpd-php-source .phps

2.2（可选）购买域名
	我们推荐通过大学的校园邮箱薅一个“GitHub Student Pack”，里边包含DigitalOcean的50美元优惠券（相当于可免费租用欧美地区5美元的服务器10个月，这也是本项目所运行的VPS）外加Namecheap一年的“.me”后缀域名。Pay Pal申请注册及服务器、域名的购买流程请自行百度。此处为新人介绍域名与服务器绑定的几个要点：
	① 域名与服务器的绑定是双方相互的。即：你不仅需要在VPS的Web服务器上对你所购买的域名做相关设定；还需要在你所购买域名的提供商管理面板将你买下的域名接解析到服务器。以Namecheap为例：（校园网访问Namecheap并不是很稳定，可能需要用到Shadowsocks或者VPN）
 
图1 点击您所购买的域名并进入管理面板

 
图2 点击Advanced DNS进入DNS解析设定面板
	经过如上图1与图2的操作后，在图2对应页面找到 ，Type需要设定为“A Record”，Host对应子域名（以我的网站为例，域名为blmyx.me，理论上可以声明无数个子域名），如果我在Host处填“shop”，那我这个网站就对应http://shop.blmyx.me，如果我还有一个A Record在Host处填“blog”，那么我就又有一个新网站叫http://blog.blmyx.me， 你可以理解为“我购买了一个域名，我就可以有很多个不同名字的网站”。Value填写你在Digitalocean或其它服务器商租用的VPS的IP地址，TTL设定为Automatic就行。
	② 域名与服务器的绑定后，需要差不多半小时后才能正式生效，所以你在经过如上设定后并不是马上就能访问测试的。
	③ 你需要留意你的VPS IP地址是否能够ping通，只要你的服务器能够ping通，就不需要考虑域名商的网站难以访问是否会导致校园网或内网对你服务器的访问问题。
2.3 将域名与Apache服务器进行绑定
	sudo vim /etc/apache2/sites-available/000-default.conf 
	或者也可在sites-availavle创建其它配置文件，比如shop.conf，然后copy如下内容：
<VirtualHost *:80>
	ServerName shop.blmyx.me  # 这里对应你在域名商那里设定的(子域名).域名
	ServerAdmin webmaster@localhost  # 随意，使用浏览器的开发者工具可以看到这个，用来给其它开发者联系站长的时候用
DocumentRoot /var/www/html/shop/public  # 对应网站的物理地址，这个地址要和apache2.conf中<Directory>设置的路径相同
ErrorLog ${APACHE_LOG_DIR}/error.log
CustomLog ${APACHE_LOG_DIR}/access.log combined
</VirtualHost>
	
	编辑完成并保存退出，接下来通过ln -s建立软链接：
ln -s /etc/apache2/sites-available/shop.conf /etc/apache2/sites- enabled /shop.conf
2.4 重启Apache服务器使如上配置修改生效
	sudo /etc/init.d/apache2 restart
3. PHP的安装与配置
	sudo apt-get install php  // 若操作系统在16.04，一般会安装7.0，我们建议更新操作系统到18.04，届时会自动安装PHP 7.2，方便配置。
	sudo apt-get install libapache2-mod-php7.2
	然后，本项目必须会用到如下模块扩展，需要如下指令：
	sudo -y apt-get install php7.2-mysql php7.2-curl php7.2-sqlite3
	不同操作系统所安装的PHP自带扩展可能会略有区别，请自行前往该博客链接寻找相应安装指令：https://blog.csdn.net/qq_16885135/article/details/79747045 
	sudo vim /etc/php/7.2/apache2/php.ini  // 这里php.ini的地址可能会不太一样，请自行进入/etc/php目录进行确认
	一般的操作请自行百度，本项目需要在php.ini中特别作出的修改如下：
	short_open_tag = On
	date.timezone = Asia/Shanghai
 
图3 需要打开的php扩展
	最后，重启Apahce服务器即完成PHP的安装与配置：
	sudo /etc/init.d/apache2 restart
4. MySQL的安装与配置
	sudo apt install mysql-server mysql-client
	在更新资源包后，执行以上指令将自动安装MySQL 5.7版本。记住自己所设置的密码即可。数据库登陆的指令为 mysql -u root -p，接着输入密码。
	进入到MySQL交互操作界面后，执行指令：
	create database onlineshop; // 该数据库用于存放购物网站相关的数据表

（如果需要用到phpmyadmin以可视化方式远程操作MySQL数据库，可另外执行如下指令：
	① sudo apt install php-mbstring php7.2-mbstring php-gettext
	② sudo systemctl restart apache2.service
	③ sudo apt install phpmyadmin
	④ 将phpmyadmin从安装目录通过ln -s链接到网站的根目录，即如上Apache所对应的<Directory>目录。如sudo ln -s /root/phpmyadmin /var/www/html/shop
	⑤ 重启Apache服务
	⑥ 通过http://域名/phpmyadmin访问数据库）
	
	我们建议使用Navicat（本地Windows环境）对数据库进行可视化的增删查改操作，不过，使用Navicat的话需要创建远程用户并授权。
	① 以root身份进入MySQL的交互式界面
	② create user test identified by '123456';
	③ grant all privileges on *.* to 'test'@'%'identified by '123456' with grant option;
	④ flush privileges ;
	⑤ sudo vim /etc/mysql/mysql.conf.d/ mysqld.cnf，定位到 bind-address = 127.0.0.1，注释该行。
	⑥ service mysql restart，重启MySQL。
5. node.js及npm的安装
	我们的购物网站分为前端和后台两大部分，网页前端的动态效果、插件生效等需要用到JavaScript，其中node.js提供Javascript的运行环境（类似于JRE对于Java的意义）。同时，为了便于开发，我们还需要JavaScript的包管理工具npm，使用它安装项目前端正常显示、运行所必备的JavaScript扩展。
	注意先查看您服务器的npm与node版本，首先我们不建议使用过旧的npm与node进行扩展的安装（如Ubuntu16.04默认自带的npm版本为3.5.2，但最新的npm已经是6.1版本了），但我们无法保证接下来的配置过程是否会出现难以预料的错误（如cross-env出问题等）。如果服务器中原先存在两者的旧版本，直接通过apt安装并不会将其覆盖，需要通过配置环境变量手动将其进行替换。为此这里建议干脆直接删除现存的node与npm：
	sudo apt remove npm  //卸载npm
	sudo apt remove node  //卸载node
	cd /usr/local/bin   //进入该目录中，若有node或者npm文件，将他删除删除
	接下来，通过wget获取Node.js的安装压缩包（如果没有wget请执行apt install），一系列指令如下：
	① wget https://nodejs.org/dist/v8.11.3/node-v8.11.3-linux-x64.tar.xz
	② tar -xJf node-v8.11.3-linux-x64.tar.xz
	③ mv node-v8.11.3-linux-x64 /opt/
	④ sudo ln -s /opt/node-v8.11.3-linux-x64/bin/node /usr/local/bin/node
	⑤ sudo ln -s /opt/node-v8.11.3-linux-x64/bin/npm /usr/bin/npm  // 最新的node.js安装包自带了npm管理软件
	至此，node.js与npm安装完毕，可通过node -v与npm -v查看版本号。
6. Composer及Laravel框架的安装配置
	“Composer是 PHP 用来管理依赖（dependency）关系的工具。你可以在自己的项目中声明所依赖的外部工具库（libraries），Composer 会帮你安装这些依赖的库文件”，它就相当于Python中的pip、Java中的Maven、JavaScript中的npm。Laravel框架本身可以通过Composer进行安装，项目需要的其余模块/框架同样也可以通过composer进行安装。
6.1 Composer的全局安装
	composer的全局安装（即在终端的任何路径输入composer都能使用）方式如下：
	① curl -sS https://getcomposer.org/installer | php
	② mv composer.phar /usr/local/bin/composer
6.2 添加Swap虚拟内存
	安装到这里，如果您的Ubuntu操作系统内存小（比如VPS的情况），在执行composer相关指令的过程中很可能会出现进程“killed”的情况。
	执行“free”指令查看系统内存使用情况：
 
图4 Swap分区空间情况

	Swap分区，即交换区，Swap空间的作用可简单描述为：“当系统的物理内存不够用的时候，就需要将物理内存中的一部分空间释放出来，以供当前运行的程序使用。那些被释放的空间可能来自一些很长时间没有什么操作的程序，这些被释放的空间被临时保存到Swap空间中，等到那些程序要运行时，再从Swap中恢复保存的数据到内存中。”
	既然物理内存不够用，那可以通过执行如下指令分配虚拟内存：
	① /bin/dd if=/dev/zero of=/var/swap.1 bs=1M count=1024
	② /sbin/mkswap /var/swap.1
	③ /sbin/swapon /var/swap.1
6.3 全局安装Laravel框架
	确保完成6.1及6.2步骤后，通过如下指令安装Laravel框架：
	composer global require "laravel/installer=~1.1"
7. 项目部署及配置
	我们已经将项目代码上传到GitHub。项目部署只需确保其物理路径与Apache的配置目录<Directory>相同即可。以 “/var/www/html/shop/” 为例：
	① cd /var/www/html/
	② git clone https://github.com/zhangchj9/shop
	③ cd shop
	④ composer install
	⑤ cp .env.example .env
			vi .env
须按情况修改的字段：APP_NAME（项目名称）、APP_URL（项目IP/域名）、DB_DATABASE（数据库名称）、DB_USERNAME及DB_PASSWORD（MySQL用户名和密码）、MAIL相关的一切字段（为便于通过测试不建议使用QQ邮箱、MAIL_ENCRYPTION建议设置为ssl、MAIL_PORT建议设置为994）
	⑥ php artisan key:generate
	⑦ mysql -u root -p
		> enter your password
		> create database onlineshop;
		> use onlineshop;
		> source /var/www/html/shop/onlineshop.sql
	⑧ npm install
	⑨ npm run dev 或 npm run production
	⑩ npm run watch-poll
	⑪ php artisan serve
	⑫ php artisan scout:import "App\Models\Article"  // 对所有博客文章记录建立索引
	⑬ php artisan Config:cache
	至此，可以在浏览器通过域名访问您所部署的Laravel项目。
	由于本项目包含一系列第三方开放平台，如支付宝支付、微博第三方登陆等，为了您自己的安全与使用，相应的账户请自行实名注册，且本项目所使用的id与secret key很可能已经过期。在“.env”文件完成相应的设置，分别为：
	GEETEST_ID与GEETEST_KEY：
		注册链接：http://www.geetest.com/ 用于用户注册界面的滑动验证码。
	WEIBO_KEY与client_secret：
		注册链接：http://open.weibo.com/index.php 用于用户第三方登陆以及每一条博客文末的微博点赞与分享功能。
	ALGOLIA_APP_ID与ALGOLIA_SECRET
		注册链接：https://www.algolia.com/ 用于对博客标题及内容的全文检索。两者分别对应注册登陆后API Keys面板的Application ID与Admin API Key。
	.env文件的其余内容可维持不变。
