# skPHP
从零打造自己的PHP框架

# 安装使用
1、搭建php运行环境，apache/nginx + php + mysql

2、利用native等工具连接到本地数据库，创建数据库skphp，字符集选择`utf8 -- UTF-8 Unicode`，排序方式选择`utf8_general_ci`

3、导入skphp项目中的skphp.sql文件

4、更改app/smarty/templates_c文件夹权限
```

cd app/smarty/
chmod -R 777 templates_c
```
