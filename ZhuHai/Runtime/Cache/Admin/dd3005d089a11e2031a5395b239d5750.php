<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>文章列表</title>
<link href="/ZhuHai/Public/Css/bootstrap.min.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/public.css" rel="stylesheet"/>
<link href="/ZhuHai/Public/Css/picshow.css" rel="stylesheet"/>

</head>

<body>
<div id="bg"></div>		
<nav>
            <a href="/ZhuHai"><img id="home" src="/ZhuHai/Public/Images/位图蜗牛.png" width="50" height="50"></a>
</nav>
<div class="container">
	<div class="row clearfix">
	<div class="col-md-12 column">		
	<ul class="nav nav-tabs">
		<li ><a href="index.html">旅游信息</a></li>
		<li><a href="../Info/info">个人信息修改</a></li>
		<li ><a href="../Login/index">退出登录导航</a></li>	
		</ul>
		
	<div class="row clearfix">
	<div class="col-md-2 column">
		<ul class="nav nav-stacked nav-tabs">
			<li><a href="/ZhuHai/index.php/Admin/Index/index">热门目的地</a></li>
				<li><a href="b2.html">文章列表</a></li>
				<li ><a href="/ZhuHai/index.php/Admin/Index/b3">用户信息管理</a></li>
		</ul></div>
                
	<div class="col-md-10 column">
	            <br>
		<form action="/ZhuHai/index.php/Admin/Index/b2" method="get" >
		<div>
		名称:<input type="text" name="no" value="<?php echo ($no); ?>" id="hide">  

		<input type="submit" value="查询"> 
		<input type="button" id="add" value="添加">
		</div>    	
		</form><br/>

<div id="form">
<br>
<p >旅游信息添加</p>
<hr width="70%" align="left">
<div style="width:530px;position:relative;left:56%;top:20px;margin-left:-215px;">
 <form action="<?php echo U('add2');?>" method="post" >
	名称:<input type="text" name="city1" ><br>
	城市:<select  name="city2" >   
	<option value="珠海" class="maincity">珠海</option>
             <option value="北京" class="maincity">北京</option>
             <option value="上海" class="maincity">上海</option>
             <option value="成都" class="maincity">成都</option>
             <option value="其他" id="othercity">其他</option>
             </select>
             <input type="text" name="city3" id="othertext">
             <br>
             简介:<br><input type="text" name="city4"><br><br> 

             <input type="submit" value="提交" style="margin-left:80px;float: left;">
             <button type="button" id="form-close">
             <a href="#"   style="float: left;">关闭</a> 
             </button> 
            </form>
            </div>
 </div>
               
                        <table class="table"  border="1" cellpadding="0">
                        <thead>
                        <tr>
                        <th>编号</th>
	           <th>名称</th>
                        <th width="80px">城市</th>
                        <th>简介</th>
                        <th></th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php if(is_array($tour)): foreach($tour as $key=>$v): ?><tr class="warming">
		         <td><?php echo ($v["id"]); ?></td>
		         <td><?php echo ($v["name"]); ?></td>
                                    <td><?php echo ($v["city"]); ?></td>
                                    <td><?php echo ($v["text"]); ?></td>
                                    <td><a href="/ZhuHai/index.php/Admin/Index/delete2/id/<?php echo ($v["id"]); ?>">删除</a></td>
                                    </tr><?php endforeach; endif; ?></tbody>
                        </table>
                        <div><?php echo ($page); ?></div>
	</div>

			</div>
		</div>
	</div>
</div>

 
<script src="/ZhuHai/Public/Js/jquery.min.js"></script>
<script src="/ZhuHai/Public/Js/bootstrap.min.js"></script>
<script src="/ZhuHai/Public/Js/show.js"></script>
</body>
</html>