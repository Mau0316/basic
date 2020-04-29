
//var preview = document.querySelector('.preview');

function cargarPreview(id) {
  /*while(preview.firstChild) {
    preview.removeChild(preview.firstChild);
  }*/
  contNum=1;
  var auxImg=id.split("-");
  var idImg="art"+auxImg[1];
  var idDiv="div"+auxImg[1];
  var idNum="num"+auxImg[1];
  var input = document.getElementById(id);
  var curFiles = input.files;
  if(curFiles.length === 0) {
    /*var para = document.createElement('p');
    para.textContent = 'No files currently selected for upload';
    preview.appendChild(para);*/
    alert("Se canceló la selección");
  } 
  else 
  {
  //var list = document.createElement('ol');
  //preview.appendChild(list);
  for(var i = 0; i < curFiles.length; i++) {
    //var listItem = document.createElement('li');
    //var para = document.createElement('p');
    if(validFileType(curFiles[i])) {
      //para.textContent = 'File name ' + curFiles[i].name + ', file size ' + returnFileSize(curFiles[i].size) + '.';
      //var image = document.createElement('img');
      
      var image = document.createElement('img');
      image.src = window.URL.createObjectURL(curFiles[i]);
      image.className = "img_articulo";
      //$("#idImg").attr("src", window.URL.createObjectURL(curFiles[i]));
      //alert(idImg+"-"+window.URL.createObjectURL(curFiles[i]));
      //idDiv.append(image);
      $("#"+idImg).empty();
      $("#"+idImg).append(image);
      $("#"+idNum).val(contNum);
      contNum++;
      //listItem.appendChild(para);

    } 
    else 
    {
      /*para.textContent = 'File name ' + curFiles[i].name + ': Not a valid file type. Update your selection.';
      listItem.appendChild(para);*/
      alert("No se seleccionó una imagen");
    }

    //list.appendChild(listItem);
  }
  }
}var fileTypes = [
  'image/jpeg',
  'image/pjpeg',
  'image/png'
]

function validFileType(file) {
  for(var i = 0; i < fileTypes.length; i++) {
    if(file.type === fileTypes[i]) {
      return true;
    }
  }

  return false;
}
function returnFileSize(number) {
  if(number < 1024) {
    return number + 'bytes';
  } else if(number > 1024 && number < 1048576) {
    return (number/1024).toFixed(1) + 'KB';
  } else if(number > 1048576) {
    return (number/1048576).toFixed(1) + 'MB';
  }
}