let page_refresh_timout;
let dynamic_data_map = {};
let last_input = "part";
let last_input_i = 0;

function SendDataWhenNotTyping(input_text, elem_id) {
    last_input = elem_id;
    dynamic_data_map[elem_id] = input_text;
    clearTimeout(page_refresh_timout);
    page_refresh_timout = setTimeout(refreshPage, 300);
    console.log("Refreshing in 300ms!");
    
}

function refreshPage() {
    let data_string;
    for (var key in dynamic_data_map){
        console.log(key, dynamic_data_map[key]);
        data_string += key + "=" + dynamic_data_map[key] + "&";
    }
    data_string + "last=" + last_input + "&input_i=" + last_input;
    console.log(data_string);
    // window.location.href = 'mehanic.php?' + encodeURI(data_string);
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