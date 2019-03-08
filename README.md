# Scanport
端口扫描源码

演示网址：暂无
上传虚拟主机即可运行


端口自定义修改：
打开`scanPort.php`
找到一下字段一一对应关系：
```
 $port = array(21, 23, 25, 79, 80, 110, 135, 137, 138, 139, 143, 443, 445, 8888,1433, 3306, 3389);
 $msg = array(
            'Ftp',
            'Telnet',
            'Smtp',
            'Finger',
            'Http',
            'Pop3',
            'Location Service',
            'Netbios-NS',
            'Netbios-DGM',
            'Netbios-SSN',
            'IMAP',
            'Https',
            'Microsoft-DS',
	    'BT',
            'MSSQL',
            'MYSQL',
	    'Terminal Services'
        );
```
