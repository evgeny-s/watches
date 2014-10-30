document.addEventListener('DOMContentLoaded', function() {
    var elements = document.getElementsByClassName("input_attr");
    var form = document.getElementById('attribute_form')

    /* simple onclick functionality to submit form when attribute checked*/
    for (var i=0; i < elements.length; i++) {
        elements[i].onclick = function() {
            form.submit();
        }
    }
}, false);