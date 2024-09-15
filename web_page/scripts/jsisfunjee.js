let page_refresh_timout;

function SendDataWhenNotTyping(input_text, elem_id) {
    let dynamic_input = elem_id + "=" + input_text;
    clearTimeout(page_refresh_timout);
    page_refresh_timout = setTimeout(refreshPage, 300, dynamic_input);
    
}

function refreshPage(dynamic_link_input) {
    window.location.href = 'mehanic.php?' + encodeURI(dynamic_link_input);
}

function focusInput(input_id) {
    document.getElementById(input_id).focus();
}

function sayF() {
    document.getElementById('link_to_someware2').value = "fuck";
    console.log('fuck');
    
}

function RetriveParts() {
    
}
