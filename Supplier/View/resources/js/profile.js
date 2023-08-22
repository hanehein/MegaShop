document.getElementById('shopPhoto').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

    if(FileReader && files && files.length){
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById("shopImg").src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}

document.getElementById('supplierPhoto').onchange = function (evt) {
    var tgt = evt.target || window.event.srcElement,
    files = tgt.files;

    if(FileReader && files && files.length){
        var fr = new FileReader();
        fr.onload = function () {
            document.getElementById("supplierImg").src = fr.result;
        }
        fr.readAsDataURL(files[0]);
    }
}
