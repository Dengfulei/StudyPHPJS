<style type="text/css">
	.textfield3 {
		width: 200;
		height: 26;
	}
	.type-file-button {
		height: 26;
		right: 0;
		 position: absolute; 
	}
	/*去掉input type="file" name="file" 的样式*/
	.hhh {
		height: 26px; position: absolute; 
		top: 0; right: 0;   
       filter:alpha(opacity:0);
       opacity: 0;

	}

</style>

<div style="width: 262px;position: relative;" >
	<form id="uploadfile" method="post" name ="uploadfile" enctype="multipart/form-data" ">
		<input type="hidden" name="form_submit" value="ok">
		<input type="text" name="textfield3" id="textfield3" class="type-file-text"  />
	    <input type="button" name="button3" id="button3" value="选择上传..." class="type-file-button"  />
		<input type="file" name="file" hidefocus="true" size="30" class="hhh">
		<input type="submit" name="submit" value="提交" style="display: block;margin-top: 20px" >
	</form>
</div>
