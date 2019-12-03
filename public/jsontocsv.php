<?php

$json_string = file_get_contents('CompanyUpdateTotal.json');
echo $json_string;


//$filename='orderexcel';
//header("Content-type: application/vnd.ms-excel; charset=gbk");
//header("Content-Disposition: attachment; filename=$filename.xls");
////$list为数据库查询结果，既二维数组。利用循环出表格，直接输出，既在线生成execl文件
//foreach($list as $key => $val)
//{
//$data .= "<table border='1'>";
//    $data .= "<tr><td colspan='2'>订单号：".$val['order_sn']."</td><td>用户名：".$val['user_name']."</td><td colspan='2'>收货人：".$val['consignee']."</td><td colspan='2'>联系电话：".$val['tel']."</td></tr>";
//    $data .= "<tr><td colspan='5'>送货地址：".$val['address']."</td><td colspan='2'>下单时间：".$val['add_time']."</td></tr>";
//    $data .= "<tr bgcolor='#999999'><th>序号</th><th>货号</th><th>商品名称</th><th>市场价</th><th>本店价</th><th>购买数量</th><th>小计</th></tr>";
//    $data .= "<tr><th>1</th><th>".$val['goods_sn']."</th><th>".$val['goods_name']."</th><th>".$val['market_price']."</th><th>".$val['goods_price']."</th><th>".$val['goods_number']."</th><th>".$val['money']."</th></tr>";
//    $data .= "</table>";
//$data .= "<br>";
//}
//$data.='</table>';
//if (EC_CHARSET != 'gbk')
//{
//echo yzy_iconv(EC_CHARSET, 'gbk', $data) . "\t";
//}
//else
//{
//echo $data. "\t";
//}