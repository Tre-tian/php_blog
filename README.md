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


V2 重构show,引入数据库与$_GET	
M	index.html
D	show-1.html
D	show-2.html
D	show-3.html
A	show.php



V3 重构edit        
D	edit-1.html
D	edit-2.html
D	edit-3.html
A	edit.php
M	index.html
A	update.php


V4 redirect_to   
M	update.php


V5 引入require机制   
A	inc/common.php
A	inc/db.php
M	update.php
M	show.php


V6 重构new与save   
D	new.html
A	new.php
A	save.php


V7 使用array,示例循环嵌入html    
D	index.html
A	index.php


V8 使用数据库，重构index.php     
M	index.php


V9 重构del动作     
D	delete-1.html
D	delete-2.html
D	delete-3.html
A	delete.php
A	destroy.php


V10 增加created_at字段  
M	index.php
M	save.php


V11 重构使用pdo		
M	destroy.php
M	edit.php
M	inc/db.php
M	index.php
M	save.php
M	show.php
M	update.php


V12 重构文件layout
M   index.php
D	delete.php
D	destroy.php
D	edit.php
D	new.php
D	save.php
D	show.php
D	update.php
A   posts/delete.php
A   posts/destroy.php
A   posts/edit.php
A   posts/index.php
A   posts/new.php
A   posts/save.php
A   posts/show.php
A   posts/update.php

V12-1 增加调试
A   inc/ChromePhp.php
M   inc/common.php


V13 增加评论功能        
A	comments/save.php
M	posts/show.php


V14 增加用户注册功能   
A	users/index.php
A	users/new.php
A	users/save.php


V15 增加会话管理功能    
A	inc/session.php
M	posts/index.php
A	sessions/delete.php
A	sessions/new.php
A	sessions/save.php
M	users/new.php
M	users/save.php

V16 ...

V17 文件上传功能
A  assets/index.php
A  assets/new.php
A  assets/save.php
A  assets/delete.php
A  assets/destroy.php


V19 增加分页功能        
M	posts/index.php


V20 将分页功能抽离为一个函数    
A	inc/pager.php
M	posts/index.php
M	posts/show.php


V21 重构分页函数为一个对象,可支持多个pager'   	
A	inc/pager.func.php
M	inc/pager.php
M	posts/index.php


V22 演示__autoload自动装载对象的技术          
A	inc/Pager.php
M	inc/common.php
D	inc/pager.php
M	posts/index.php


V23 增加composer支持,并安装illuminate orm,解决了与自定义的autoload的冲突    
A	.gitignore
A	composer.json
A	composer.lock
M	inc/common.php
A	inc/orm.php
M	posts/index.php


V24 install blade template 			
M	composer.json
M	composer.lock


V25 更改文件布局，模仿MVC，且增加autoload类，以正确加载对应文件 		
A	app/model/post.model.php
M	inc/common.php
M	posts/index.php


V26 make pager work with eloquent orm 			
M	inc/Pager.php
M	inc/common.php
M	posts/index.php


V27 fix date timezone warnning and pager.php命名错误
M	inc/common.php


V29 blade初体验 			
M	.gitignore
A	app/view/hello.blade.php
A	inc/blade.php
M	posts/index.php


V30 更多blade例子 			
M	app/view/hello.blade.php


V31 演示blade控制结构 		
A	app/view/notice.blade.php
M	posts/index.php
M	posts/save.php


V32 将代码与模板分离,以posts为例 		
A	app/view/post/index.blade.php
M	posts/index.php


V33 引入layout与section 			
A	app/view/layout/master.blade.php
M	app/view/post/index.blade.php


V34 初步演示控制器的重构    
A	app/controller/posts.controller.php
M	inc/common.php
M	index.php
M	posts/index.php
