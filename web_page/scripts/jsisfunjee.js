let page_refresh_timout;
let dynamic_data_map = {};
let last_input = "part_type";
let last_input_i = 0;

function delay(time) {
    return new Promise(resolve => setTimeout(resolve, time));
}
  
async function test() {
    console.log('start timer');
    await delay(1000);
    console.log('after 1 second');
}

function SendDataWhenNotTyping(input_text, elem_id, instant) {
    last_input = elem_id;
    dynamic_data_map[elem_id] = input_text;

    if (instant) {
        last_input_i = document.getElementById(elem_id).value.length;
        refreshPage();

    } else {
        last_input_i = document.getElementById(elem_id).selectionStart;
    
        clearTimeout(page_refresh_timout);
        page_refresh_timout = setTimeout(refreshPage, 380);

        console.log("Refreshing in 380ms!");
    }

    console.log(dynamic_data_map);
    console.log(last_input);
    console.log(last_input_i);
    // refreshPage();
    
}

function refreshPage() {
    
    let data_string = "mehanic.php?";
    for (var key in dynamic_data_map){
        console.log(key, dynamic_data_map[key]);
        data_string += key + "=" + dynamic_data_map[key] + "&";
    }
    data_string += "last_input=" + last_input + "&input_i=" + last_input_i;
    console.log(data_string);
    // await delay(10000);
    window.location.href = encodeURI(data_string);
}

function focusInput() {
    const input = document.getElementById(last_input);
    // input.focus();  // Focus on the input
    // input.setSelectionRange(last_input_i, last_input_i);  // Set the cursor to the end
    const length = input.value.length;
    input.focus();  // Focus on the input
    console.log("i: " + last_input_i + " " + length);
    input.setSelectionRange(last_input_i, last_input_i);  // Set the cursor to the end
    console.log("focused");
}

function strEmtyOrNull(str) {
    if (typeof str === "string" && str.length === 0) {
        console.log("The string is empty");
        return true;
    }

    if (str === null) {
        console.log("The string is null");
        return true;
    }

    console.log("The string is not empty or null");
    return false;
}

function SetUpDynamicData(part_type, last, last_i) {
    console.log(dynamic_data_map);

    let table = document.getElementById('search_table');
    let num_columns = table.rows[1].cells.length;
    for (let i = 1; i < num_columns; i++) {
    
        
        let cell = table.rows[1].cells[i];
        let input_val = cell.firstChild.value;
        let input_id = cell.firstChild.id;

        // let cell = table.rows[Math.floor(cellIndex/num_columns)].cells[cellIndex % num_columns];
        console.log(input_id + "=" + input_val);
        if (strEmtyOrNull(input_val)) continue;
        
        dynamic_data_map[input_id] = input_val;
        
    }
    if (!strEmtyOrNull(part_type)) {
        dynamic_data_map["part_type"] = part_type;
    }

    if (!strEmtyOrNull(last)) {
        last_input = last;
    }

    if (!strEmtyOrNull(last_i)) {
        last_input_i = last_i;
    }
    console.log(dynamic_data_map);
    console.log(last_input);
    console.log(last);
    console.log(last_input_i);

    focusInput();
}

// function SetUpDynamicData2(url_data) {
//     console.log("hey");
//     dynamic_data_map = JSON.parse(url_data);
//     console.log(dynamic_data_map);
//     console.log(url_data);
// }

function sayF() {
    document.getElementById('link_to_someware2').value = "fuck";
    console.log('fuck');
    
}

function RetriveParts() {
    
}
