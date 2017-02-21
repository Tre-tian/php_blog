fcc1ed6
V1 初始,纯静态页面    
A	delete-1.html
A	delete-2.html
A	delete-3.html
A	edit-1.html
A	edit-2.html
A	edit-3.html
A	index.html
A	new.html
A	show-1.html
A	show-2.html
A	show-3.html

751c488
V2 重构show,引入数据库与$_GET	
M	index.html
D	show-1.html
D	show-2.html
D	show-3.html
A	show.php

0b730be
V3 fixed show.php   
M	show.php

0e76d4e
V4 重构edit        
D	edit-1.html
D	edit-2.html
D	edit-3.html
A	edit.php
M	index.html
A	update.php

aa227d5
V5 redirect_to   
M	update.php

40f3493
V6 引入require机制   
A	inc/common.php
A	inc/db.php
M	update.php

2e54a30
V7 引入require机制   
M	show.php

b609960 
V8 重构new与save   
D	new.html
A	new.php
A	save.php

e688b9f
V9 引入array,示例循环嵌入html    
D	index.html
A	index.php

59a1a77
V10 重构index.php     
M	index.php

92f7f95
V11 重构del动作     
D	delete-1.html
D	delete-2.html
D	delete-3.html
A	delete.php
A	destroy.php

3ae56e7 
V12 增加created_at字段  
M	index.php
M	save.php

5a15c1c
V13 重构使用pdo		
M	destroy.php
M	edit.php
M	inc/db.php
M	index.php
M	save.php
M	show.php
M	update.php

7fe3dc9
V14 重构文件layout		
D	delete.php
D	destroy.php
D	edit.php
M	index.php
D	new.php
A	posts/delete.php
A	posts/destroy.php
A	posts/edit.php
A	posts/index.php
A	posts/new.php
A	posts/save.php
A	posts/show.php
A	posts/update.php
D	save.php
D	show.php
D	update.php

3fe1784 
V15 重构文件layout 		
M	index.php

f4b9dca 
V16 增加评论功能        
A	comments/save.php
M	posts/show.php

73605b6 
V17 增加用户注册功能   
A	users/index.php
A	users/new.php
A	users/save.php

316de3b 
V18 增加会话管理功能    
A	inc/session.php
M	posts/index.php
A	sessions/delete.php
A	sessions/new.php
A	sessions/save.php
M	users/new.php
M	users/save.php

V18-1-2-3 增加调试、文件上传功能

5eaace3 
V19 增加分页功能        
M	posts/index.php

2fbd090 
V20 将分页功能抽离为一个函数    
A	inc/pager.php
M	posts/index.php
M	posts/show.php

7ad59ab 
V21 重构分页函数为一个对象,可支持多个pager'   	
A	inc/pager.func.php
M	inc/pager.php
M	posts/index.php

3524f6b 
V22 演示__autoload自动装载对象的技术          
A	inc/Pager.php
M	inc/common.php
D	inc/pager.php
M	posts/index.php

751f055 
V23 增加composer支持,并安装illuminate orm,解决了与自定义的autoload的冲突    
A	.gitignore
A	composer.json
A	composer.lock
M	inc/common.php
A	inc/orm.php
M	posts/index.php

66c7622
V24 install blade template 			
M	composer.json
M	composer.lock

d18054a 
V25 更改文件布局，模仿MVC，且增加autoload类，以正确加载对应文件 		
A	app/model/post.model.php
M	inc/common.php
M	posts/index.php

517fd25
V26 make pager work with eloquent orm 			
M	inc/Pager.php
M	inc/common.php
M	posts/index.php

2d40469 
V27 fix date timezone warnning and pager.php命名错误
M	inc/common.php

731d912 
V29 blade初体验 			
M	.gitignore
A	app/view/hello.blade.php
A	inc/blade.php
M	posts/index.php

3981c9f 
V30 更多blade例子 			
M	app/view/hello.blade.php

2d401b3 
V31 演示blade控制结构 		
A	app/view/notice.blade.php
M	posts/index.php
M	posts/save.php

4048668 
V32 将代码与模板分离,以posts为例 		
A	app/view/post/index.blade.php
M	posts/index.php

084ec27 
V33 引入layout与section 			
A	app/view/layout/master.blade.php
M	app/view/post/index.blade.php

04206d2
V34 初步演示控制器的重构    
A	app/controller/posts.controller.php
M	inc/common.php
M	index.php
M	posts/index.php
