let calculateBtn = document.getElementById('calculateBtn')
calculateBtn.addEventListener('click', function(){
    let delMatrix = "";
    let inputContent = document.getElementById('inputContent').value;
    let inputArr = inputContent.split(",")
    for (var x = 0; x < inputArr.length; x++ ){
        for (var j = 0; j < inputArr[x].length; j++){
            document.write(inputArr[x][j]);
        }
        document.write("<br/>");
    }

   });