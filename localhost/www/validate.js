
var req;
var isIE;

function init() {
    completeField = document.getElementById("complete-field");
}

function doCompletion() {
        var url = "autocomplete?action=complete&amp;id=" + escape(completeField.value);
        req = initRequest();
        req.open("GET", url, true);
        req.onreadystatechange = callback;
        req.send(null);
}

function initRequest() {
    if (window.XMLHttpRequest) {
        if (navigator.userAgent.indexOf('MSIE') != -1) {
            isIE = true;
        }
        return new XMLHttpRequest();
    } else if (window.ActiveXObject) {
        isIE = true;
        return new ActiveXObject("Microsoft.XMLHTTP");
    }
}
$('#btn_reg').click(function(){

	var serializeFormData = $('register').serialize();

	$.ajax({

		type:'POST',
		url:'/get-form-data',
		data: serializeFormData,
		success: function(data){
			console.log.(data);
		},
		error: function(data){
			console.log('Произошла ошибка:'+data);
		}

	}) ;

});