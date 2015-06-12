var curr_page = 1; //当前页
var request_data = true; //这个变量是为了防止请求完数据后，更新分页导航数据时反复请求数据

function show_data(list) {
	$(".listing > tbody").empty();

	//title部分
	var item_str = '<tr>';
	item_str += '<th class="first" width="20%">商品种类编号</th>';
	item_str += '<th width="20%">商品种类名</th>';
	item_str += '<th width="40%">商品种类图片</th>'
	item_str += '<th class="last" width="20%">操作</th>';
	item_str += '</tr>';
	$(".listing > tbody").append(item_str);
	
	for(var i in list) {
		var item = list[i];		
		item_str = '<tr class="bg">';
		item_str += '<td class="first style1">' + item.gtypeid + '</td>';
		item_str += '<td>' + item.goodtype + '</td>';
		item_str += '<td><img src ="'+ '/first/'+item.goodtypephoto+'"/>' + '</td>';
		item_str += '<td class="last">'+'<a href="#" class="btn_search" id="btn_search_' + item.gtypeid + '"> 查看</a>'+'</td>';
		item_str += '</tr>';
		$(".listing > tbody").append(item_str);
	}
	
	//查看按钮
	$(".btn_search").click(function() {
		var id = $(this).attr("id").split("_")[2];
		
		$.getJSON(
				"ajax_goods_list?gtypeid=" + id + "&random=" + Math.random(),
				function(data) {
					
					alert(data.data.gtypeid);
					
					$("#center-column").load("/first/Public/simple/admin_templates/goods_list.html?gtypeid="+id+"&random=" + Math.random());
				}
			);
		
		return false;
	});
	
}

function update_page_nav(data) {
	
	var opt = {
		callback: function(page_index, jq) {
			curr_page = page_index + 1;
			if(request_data) {
				request_data = false;
				do_page();
			}
			else
				request_data = true;
			return false;
		},
		items_per_page: data.page_size,
		current_page: curr_page - 1,
		num_edge_entries: 1
	};
	
	$("#Pagination").pagination(data.total, opt);
}

function do_page() {
	$.getJSON(
		"ajax_goods_type_list?page=" + curr_page + "&random=" + Math.random(),
		function(data) {
			show_data(data.data.list);
			update_page_nav(data.data);			
		}
	);
}

$(function() {

	$.getJSON(
		"ajax_goods_type_list?random=" + Math.random(),
		function(data) {
			if(data.data.page_count == 1) {
				$(".pagetable").hide(); //只有一页的话就不显示分页导航
				
				show_data(data.data.list);
			}
			else {
				show_data(data.data.list);				
				update_page_nav(data.data);
			}
		}
	);
	
	//添加按钮
	$("#add_btn").click(function() {
		$("#center-column").load("/first/Public/simple/admin_templates/goods_type_add.html?random=" + Math.random());
		return false;
	});
	
});
