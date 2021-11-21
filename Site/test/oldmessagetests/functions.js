function $(id)
{
	return document.getElementById(id);
}
function insert(f, e, id)
{
	var scroll = $(id).scrollTop;
	if(document.selection)
	{
		$(id).focus();
		sel = document.selection.createRange();
		sel.text = f+sel.text+e;
	}
	else if($(id).selectionStart || $(id).selectionStart == '0')
	{
		var startPos = $(id).selectionStart;
		var endPos = $(id).selectionEnd;
		$(id).value = $(id).value.substring(0, startPos)+f+$(id).value.substring(startPos, endPos)+e+$(id).value.substring(endPos, $(id).value.length);
		$(id).selectionStart = startPos+f.length;
		$(id).selectionEnd = startPos+f.length+(endPos-startPos);
	}
	else
	{
		$(id).value += msg; 
	}
	$(id).scrollTop = scroll;
	$(id).focus();
}