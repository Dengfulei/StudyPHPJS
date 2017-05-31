<?php 
/*php中{}内的变量可以在{}外使用*/
	echo "我只是测试数据";
	for ($i=0; $i < 3; $i++) { 
		if ($i == 1) {
		 $test_array[$i] = $i;
		 continue;
		}
	}
	print_r($test_array);
?>
<style type="text/css">
	.test {
		width: 1200px;
		margin: auto;
	}
	
	.hhh {
		list-style:none;
		width: 1220px;
		display:table;  /* 调教webkit 去掉<li>标签里display: inline-block;产生的间隙*/
	}
	
	.item {
		/*float: left;*/
		display: inline-block;
		/*background-color: red;*/
		width: 305px;
		margin-bottom: 20px;


	/*	margin-left: 0;
		margin-top: 0;
		margin-right: 0;*/
	}
	
	.item img {
		width: 285px;
		height: 175px;
		background-color: yellow;
	}

</style>
<div class="test">
	<ul class="hhh">
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
	<li class="item"><img src=""></li>
</ul>

</div>
