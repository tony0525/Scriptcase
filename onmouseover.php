for($j=0;$j<"total record";$j++){
echo "
<script type='text/javascript'>

$(function() {
	$('#idVertRow$j').attr('style', 'cursor: pointer;');
});

function overover(j){

var k = \"hidden_field_data_total_price_\" + j;
var l = \"hidden_field_data_display_remain_\" + j;
var m = \"hidden_field_data_gr_\" + j;
var n = \"hidden_field_data_no_of_gr_\" + j;
var aa = \"hidden_field_data_sc_actions\" + j;
var a = \"hidden_field_data_sc_field_0_\" + j;
var b = \"hidden_field_data_item_no_\" + j;
var c = \"hidden_field_data_section_\" + j;
var d = \"hidden_field_data_ac_code_\" + j;
var e = \"hidden_field_data_description_\" + j;
var f = \"hidden_field_data_end_user_\" + j;
var g = \"hidden_field_data_i_price_\" + j;
var h = \"hidden_field_data_currency_\" + j;
var i = \"hidden_field_data_qty_\" + j;
var j = \"hidden_field_data_unit_\" + j;


$('#' + aa).attr('style', 'background-color: #E1EEFC!important;');
$('#' + a).attr('style', 'background-color: #E1EEFC!important;');
$('#' + b).attr('style', 'background-color: #E1EEFC!important;');
$('#' + c).attr('style', 'background-color: #E1EEFC!important;');
$('#' + d).attr('style', 'background-color: #E1EEFC!important;');
$('#' + e).attr('style', 'background-color: #E1EEFC!important;');
$('#' + f).attr('style', 'background-color: #E1EEFC!important;');
$('#' + g).attr('style', 'background-color: #E1EEFC!important;');
$('#' + h).attr('style', 'background-color: #E1EEFC!important;');
$('#' + i).attr('style', 'background-color: #E1EEFC!important;');
$('#' + j).attr('style', 'background-color: #E1EEFC!important;');
$('#' + k).attr('style', 'background-color: #E1EEFC!important;');
$('#' + l).attr('style', 'background-color: #E1EEFC!important;');
$('#' + m).attr('style', 'background-color: #E1EEFC!important;');
	
}

function overout(j){

var k = \"hidden_field_data_total_price_\" + j;
var l = \"hidden_field_data_display_remain_\" + j;
var m = \"hidden_field_data_gr_\" + j;
var n = \"hidden_field_data_no_of_gr_\" + j;
var aa = \"hidden_field_data_sc_actions\" + j;
var a = \"hidden_field_data_sc_field_0_\" + j;
var b = \"hidden_field_data_item_no_\" + j;
var c = \"hidden_field_data_section_\" + j;
var d = \"hidden_field_data_ac_code_\" + j;
var e = \"hidden_field_data_description_\" + j;
var f = \"hidden_field_data_end_user_\" + j;
var g = \"hidden_field_data_i_price_\" + j;
var h = \"hidden_field_data_currency_\" + j;
var i = \"hidden_field_data_qty_\" + j;
var j = \"hidden_field_data_unit_\" + j;


$('#' + aa).removeAttr('style');
$('#' + a).removeAttr('style');
$('#' + b).removeAttr('style');
$('#' + c).removeAttr('style');
$('#' + d).removeAttr('style');
$('#' + e).removeAttr('style');
$('#' + f).removeAttr('style');
$('#' + g).removeAttr('style');
$('#' + h).removeAttr('style');
$('#' + i).removeAttr('style');
$('#' + j).removeAttr('style');
$('#' + k).removeAttr('style');
$('#' + l).removeAttr('style');
$('#' + m).removeAttr('style');
	
}
</script>

<script>
$(function() {

$('#hidden_field_data_sc_field_0_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_item_no_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_section_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_ac_code_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_description_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_end_user_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_i_price_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_currency_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_qty_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_unit_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_total_price_".$j."').attr('onmouseover', 'overover(\'$j\')');
$('#hidden_field_data_display_remain_".$j."').attr('onmouseover', 'overover(\'$j\')');


$('#hidden_field_data_sc_field_0_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_item_no_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_section_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_ac_code_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_description_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_end_user_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_i_price_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_currency_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_qty_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_unit_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_total_price_".$j."').attr('onmouseout', 'overout(\'$j\')');
$('#hidden_field_data_display_remain_".$j."').attr('onmouseout', 'overout(\'$j\')');

});
</script>

";
}

//////// End of MouseOver Event on 1-70 Record ////////

//////// Start of onClick@tr Event on 1-70 Record ////////
for($i=0; $i<70; $i++){
echo "
<script>
$(function() {
var editfunction = $('#id_imghtml_sc_field_0_".$i." a').attr('href');

$('#hidden_field_data_sc_field_0_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_item_no_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_section_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_ac_code_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_description_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_end_user_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_i_price_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_currency_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_qty_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_unit_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_total_price_".$i."').attr('onclick', editfunction);
$('#hidden_field_data_display_remain_".$i."').attr('onclick', editfunction);


});
</script>
";
}
//////// Start of onClick@tr Event on 1-70 Record ////////
