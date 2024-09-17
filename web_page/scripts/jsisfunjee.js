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
    let data_string = "mehanic.php?";
    for (var key in dynamic_data_map){
        console.log(key, dynamic_data_map[key]);
        data_string += key + "=" + dynamic_data_map[key] + "&";
    }
    data_string += "last_input=" + last_input + "&input_i=" + last_input_i;
    console.log(data_string);
    window.location.href = 'mehanic.php?' + encodeURI(data_string);
}

function SetUpDynamicData(url_data) {
    console.log("hey");
    dynamic_data_map = JSON.parse(url_data);
    dynamic_data_map = JSON.parse(url_data);
    console.log(dynamic_data_map["HP"]);
    // console.log(url_data);
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
