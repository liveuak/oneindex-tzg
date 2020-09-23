<h1 align="center"><a href="https://github.com/TheZihanGu/oneindex-tzg">OneIndex - TZG</a></h1>

一个 OneIndex 分支改进版，保留原版的简洁。
> 原项目: [donwa/oneindex](https://github.com/donwa/oneindex)
> Demo: [TZG OneDrive](https://tzg6.app)

## 功能：
不占用服务器空间，不走服务器流量，   
直接列出 OneDrive 目录，文件直链下载。  

## 安装与配置
您的环境要求需要至少达到以下条件。
* PHP版本 > 5.6
* 已安装 PHP-cURL
* 拥有正常的网络连接

### 配置
如果您在配置时在获取应用 ID 和密钥时遇到了困难，可以查看这篇文章: [OneIndex – 如何获取应用 ID 和密钥](https://zihangu.com/?p=718).

## 遇到了问题和 Bug?
请在此项目提交 [Issues](https://github.com/TheZihanGu/oneindex-tzg/issues) 以便我们进行跟进。如果您有一些想要实现的需求，也可以提交 [Issues](https://github.com/TheZihanGu/oneindex-tzg/issues) 来扔给我们。

## 计划任务  
[可选]**推荐配置**，非必需。后台定时刷新缓存，可增加前台访问的速度。  
```
# 每小时刷新一次 token
0 * * * * /具体路径/php /程序具体路径/one.php token:refresh

# 每十分钟后台刷新一遍缓存
*/10 * * * * /具体路径/php /程序具体路径/one.php cache:refresh
```

## 特殊文件实现功能  
```README.md```, ```HEAD.md```, ```.password``` 特殊文件的使用.

**在文件夹底部添加说明:**  
>在 OneDrive 的文件夹中添加 ```README.md``` 文件，使用 Markdown 语法。  

**在文件夹头部添加说明:**  
>在 OneDrive 的文件夹中添加 ```HEAD.md``` 文件，使用 Markdown 语法。  

**加密文件夹:**  
>在 OneDrive 的文件夹中添加 ```.password``` 文件，填入密码，密码不能为空。  

**直接输出网页:**  
>在 OneDrive 的文件夹中添加 ```index.html``` 文件，程序会直接输出网页而不列目录。  
>配合 文件展示设置-直接输出 效果更佳。  

## 命令行功能  
仅能在 PHP CLI 模式下运行  

**清除缓存:**  
```
php one.php cache:clear
```
**刷新缓存:**  
```
php one.php cache:refresh
```
**刷新令牌:**  
```
php one.php token:refresh
```
**上传文件:**  
```
php one.php upload:file 本地文件 [OneDrive文件]
```


**上传文件夹:**  
```
php one.php upload:folder 本地文件夹 [OneDrive文件夹]
```

例如：  
```
//上传 demo.zip 到 OneDrive 根目录  
php one.php upload:file demo.zip  

//上传 demo.zip 到 OneDrive /test/目录  
php one.php upload:file demo.zip /test/  

//上传 demo.zip 到 OneDrive /test/目录并将其命名为 d.zip  
php one.php upload:file demo.zip /test/d.zip  

//上传 up/ 到 OneDrive /test/ 目录  
php one.php upload:file up/ /test/
```
