<include file="__PUBLIC__/header.php"/>
	<body>
		<form method="post" class="hd-form" onsubmit="return hd_submit(this,'',function(){top.location.href=top.location.href});">
			<div class="wrap">
				<div class="title-header">
					设置常用菜单
				</div>
				<table class="table1">
					<list from="$data" name="n">
						<list from="$n._data" name="d">
							<tr>
								<th class="w200">
								<div class="level2">
									{$d.title}
								</div></th>
								<td>
								<ul>
									<list from="$d._data" name="m">
										<li>
											<label><input type="checkbox" name="nid[]" value="{$m.nid}" <if value="!empty($m['uid'])">checked=""</if>/> {$m.title}</label>
										</li>
									</list>
								</ul></td>
							</tr>
						</list>
					</list>
				</table>
			</div>
			<div class="position-bottom">
				<input type='submit' class="hd-success" value="确定"/>
			</div>
		</form>
	</body>
<style type="text/css">
    ul li {
        width: 130px;
        float: left;
    }
</style>
</html>