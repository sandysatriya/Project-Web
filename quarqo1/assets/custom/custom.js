// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
    } else {
        mySidebar.style.display = 'block';
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}

// Inbox script
function myFunc(id) {
    var x = document.getElementById(id);
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
        x.previousElementSibling.className += " w3-red";
    } else {
        x.className = x.className.replace(" w3-show", "");
        x.previousElementSibling.className.replace(" w3-red", "");
    }
}

openMail("Borge")
function openMail(personName) {
    var i;
    var x = document.getElementsByClassName("person");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    x = document.getElementsByClassName("test");
    for (i = 0; i < x.length; i++) {
       x[i].className = x[i].className.replace(" w3-light-grey", "");
    }
    //document.getElementById(personName).style.display = "block";
    //event.currentTarget.className += " w3-light-grey";
}

var openTab = document.getElementById("firstTab");
//openTab.click();// Training pills$(document).ready(function(){    $(".nav-tabs a").click(function(){        $(this).tab('show');    });});

// Training Modal
function training_modal(id, jenis){
    console.log(id+jenis);


    $.ajax({
  method: "GET",
  url: "http://localhost/quarqo1/training/api_training",
  data: { id, jenis }
})
  .done(function( msg ) {
    $('#training_content').html(msg);
    $('#modal-header').html(jenis);
    $('#training_modal').modal('show');
  });
    
    $('.help-block').empty();
    //$('.modal-title').text('Add Person'); // judul modal
    
}

function daftar_training(id, jenis){

    .done(function( msg ) {
    $('#daftar_training_modal').modal('show');
  });
    
    $('.help-block').empty();
    //$('.modal-title').text('Add Person'); // judul modal

}



