<!DOCTYPE html>
<html>
<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	/*<dl>元素横向排列*/
	.div_line dl.row {
		  background-color: #FFF;
		  display:table;
	}
	.div_line dt.tit {
		 display: inline-block;
  959  *zoom:1/*IE7*/
	}
	.div_line dd.opt {
		 display: inline-block;
	}
	.test li {
		color: red;
	}

	</style>
</head>

<body>
	<div class="div_line">
		<dl class="row">
			<dt class="tit">
				<label>左边label</label>
			</dt>
			<dd class="opt">
				<input type="text" name="ap_name" id="ap_name" class="input-txt" value="你好--hellow">
			</dd>
		</dl>
		<dl class="row">
			<dt class="tit">
				<label>左边label</label>
			</dt>
			<dd class="opt">
				<input type="text" name="ap_name" id="ap_name" class="input-txt" value="你好--hellow">
			</dd>
		</dl>
		<dl class="row">
			<dt class="tit">
				<label>左边label</label>
			</dt>
			<dd class="opt">
				<input type="text" name="ap_name" id="ap_name" class="input-txt" value="你好--hellow">
			</dd>
		</dl>
	</div>
	<div class="test">
		<ul>
			<li>hhhhh</li>
		</ul>
	</div>

</body>
<script type="text/javascript">
// $(document).ready(function(){
// 	var textButton = "<button>hellow</button>";
// 	$(textButton).insertBefore('label');
// });
	
</script>
</html>