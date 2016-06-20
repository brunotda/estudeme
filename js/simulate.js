$(document).ready(function() {

	$("#addTag").click(function(){
        var str1 = "<div class='chip'>";
		var str2 = document.getElementsByName('tags')[0].value;
		var str3 = "<i class='material-icons'>close</i></div>";
        var str1 = "<div class='chip'>";
		$("#tags").append(str1.concat(str2,str3)); 
		document.getElementsByName('tags')[0].value="";
		return false;
    });

})