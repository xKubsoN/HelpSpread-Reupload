import * as bootstrap from 'bootstrap'
var sidebar = document.querySelector(".sidebar");
if (sidebar) {
    let image = document.getElementById('sidebar-button-image');
    
    document.getElementById('sidebar-button').addEventListener("click", function() {
        sidebar.classList.toggle("expanded");
        setTimeout(() => {
            
            if (document.querySelector(".sidebar").classList.contains('expanded')) {
                image.style.right = "4rem";
                setTimeout(() => {
                    image.src = "gfx/close.svg";
                    image.style.right = "0";
                }, 300);
            }
            else {
                image.style.right = "4rem";
                setTimeout(() => {
                    image.src = "gfx/open.svg";
                    image.style.right = "0";
                }, 300);
            }
        }, 300);
    });
}
var nextOne = document.querySelector(".next-1");
var nextTwo = document.querySelector(".next-2");
var backOne = document.querySelector(".back-1");
var backTwo = document.querySelector(".back-2");
if (nextOne) {
    nextOne.addEventListener("click", function() {
        if (document.getElementById("email_address").checkValidity() && document.getElementById("name").checkValidity()) {
            document.querySelector(".n-1").classList.remove("active");
            document.querySelector(".n-2").classList.add("active");
        }
        else {
            document.querySelector(".n-1").classList.add("notValid");
        }
    });
    nextTwo.addEventListener("click", function() {
        if (document.getElementById("password").value != document.getElementById("password-confirm").value) {
            document.querySelector(".n-2").classList.add("notSame");

        }
        else if (document.getElementById("password").checkValidity() && document.getElementById("password-confirm").checkValidity()) {
            document.querySelector(".n-2").classList.remove("active");
            document.querySelector(".n-3").classList.add("active");
        }
        else {
            document.querySelector(".n-2").classList.add("notValid");
        }
    });
    backOne.addEventListener("click", function () {
        document.querySelector(".n-2").classList.remove("active");
        document.querySelector(".n-1").classList.add("active");
    });
    document.getElementById("register-form").onkeypress = function(e) {
        var key = e.charCode || e.keyCode || 0;     
        if (key == 13) {
          e.preventDefault();
        }
    }
}


//search bar
(function(){
    var searchTerm, panelContainerId;
    // Create a new contains that is case insensitive
    $.expr[':'].containsCaseInsensitive = function (n, i, m) {
      return jQuery(n).text().toUpperCase().indexOf(m[3].toUpperCase()) >= 0;
    };
    
    $('#accordion_search_bar').on('change keyup paste click', function () {
      searchTerm = $(this).val();
      $('#accordion > .panel').each(function () {
        panelContainerId = '#' + $(this).attr('id');
        $(panelContainerId + ':not(:containsCaseInsensitive(' + searchTerm + '))').hide();
        $(panelContainerId + ':containsCaseInsensitive(' + searchTerm + ')').show();
      });
    });
  }());