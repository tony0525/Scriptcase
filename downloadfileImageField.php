if({file}=="" || {file}==NULL){
	{download} = '';
	{link} = '<a href="javascript:nm_mostra_doc(\'0\', \''. {file} .'\', \'form_attachment_View\')"></a>';
}else{
	{download} = '<img id="icon" width="20px" src="../_lib/img/download.png">';
	{link} = '<img id="icon" width="20px" src="../PIS/img/bg/download.png">';
	{link} = '<a href="javascript:nm_mostra_doc(\'0\', \''. {file} .'\', \'form_attachment_View\')">123</a>;
}
