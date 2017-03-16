

$(document).ready(function() {

code = $(".CodeMirror-textarea")[0];
editor = CodeMirror.fromTextArea(code, {mode: "javascript", lineNumbers : true});



})

function submit() {
		console.log(editor.getValue());
		var iframe = document.getElementById("output"), 
		iframeWindow = iframe.contentWindow || iframe,
		iframeDoc = iframe.contentDocument || iframeWin.document;

		iframeDoc.write(editor.getValue());
	}
	