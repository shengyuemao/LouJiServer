$(function() {
	var photoUrl = "";
	$("#goodphoto").uploadify({
		swf : "/first/Public/uploadify/uploadify.swf",//引入uploadify核心Flash文件
		uploader:"ajax_goods_photo",//php处理脚本地址
		width:120,//上传按钮宽度
		height:30,//上传按钮高度
		fileObjName: 'Filedata',
		fileTypeDesc : 'Image File', //选择文件提示文字
		fileTypeExts : '*.jpeg;*.jpg;*.png;*.gif', //允许选择的文件类型
		onUploadSuccess : function(file,data,response){
			var data=jQuery.parseJSON(data);
						
			photoUrl = data.yt;
			
			alert(photoUrl);
			
			$("#image").attr("src","/first/"+photoUrl);
		}
		
	});
	
	$("#btn_submit").click(function() {
		alert(photoUrl);
		var goodname = $("#goodname").val();
		var goodcontent = $("#goodcontent").val();
		var goodaction = $("#goodaction").val();
		var goodlocation = $("#goodlocation").val();
		var goodprice = $("#goodprice").val();
		var goodphoto = photoUrl;
		
			$.getJSON(
				"ajax_goods_updata?goodname="+goodname+"&goodcontent="+goodcontent+"&goodaction="+goodaction+"&goodlocation="+goodlocation+"&goodprice="+goodprice+"&goodphoto="+goodphoto,
				function(data) {
					if(data.code == 1) {
						alert(data.desc);
						return;
					}
					$("#center-column").load("/first/Public/simple/admin_templates/goods_list.html?random=" + Math.random());
				}
			);
	
	
});
	});