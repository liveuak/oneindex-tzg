# OneIndex - TZG MD5转换工具 by TheZihanGu
# GitHub: https://github.com/TheZihanGu/oneindex-tzg
# Licensed under the GNU Affero General Public License v3.0.
import hashlib
print ("OneIndex - TZG 密码转换工具")
password = input("请输入您要设置的密码: ")
hash = hashlib.md5(password.encode('utf-8'))
print ("MD5: " + hash.hexdigest())
print ("请将 MD5 值复制到 config/base.php 的 password 中, 然后重新登录即可.")