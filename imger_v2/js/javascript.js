// A $( document ).ready() block.
$( document ).ready(function() {

    // return home
    if( $("#backHome").length > 0) {
        backHome();
    }

});


// Functions
function backHome() {
        window.setTimeout(function() {
            window.location.href = "http://react-js.local/imger_v2/";
        }, 3000);
}


function myFunction(imageID) {
    var copyText = document.getElementById("myInput_"+imageID);
    copyText.select();
    copyText.setSelectionRange(0, 99999);
    document.execCommand("copy");
    
    var tooltip = document.getElementById("myTooltip_"+imageID);
    tooltip.innerHTML = "URL Copied";
}

function outFunc(imageID) {
    var tooltip = document.getElementById("myTooltip_"+imageID);
    tooltip.innerHTML = "Copy URL";
}

function deleteBtn() {
    var r = confirm("Are you sure you want to delete this image?");
    if (r == true) {
    
    } else {
      event.preventDefault()
    }
  }