function upDate(previewPic){
  console.log(previewPic.src);
 document.getElementById('image').style.backgroundImage = "url("+previewPic.src+")";
document.getElementById('image').innerHTML = previewPic.alt;

	}

	function unDo(){
     	document.getElementById('image').style.backgroundImage = "url('')";
    document.getElementById('image').innerHTML = "Hover over an image bellow to display here";
	}