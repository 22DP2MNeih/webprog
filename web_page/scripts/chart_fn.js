let data = {};
function setUpChart() {
    console.log("aaa");
    // css_root = document.querySelector(':root');
    // // Set the value of variable --blue to another value (in this case "lightblue")
    // css_root.style.setProperty('--bar_hight', 100);
    let chart = document.getElementById("chart1");
    let columns = chart.rows[0].cells;
    let col_cnt = chart.rows[0].cells.length;
    let color_arr = ["red", "green", "blue", "yellow", "purple", "orange", "black", "aqua"];
    for (let i = 0; i < col_cnt; i++) {
        columns[i].firstChild.firstChild.style["height"] = "" + i*14.3 + "%";
        columns[i].firstChild.firstChild.style["background-color"] = color_arr[i];
        // columns[i].style["background-color"] = "green";
        // columns[i].style["hight"] = i*14.3 + "%";
        console.log("aaa2");
    } 
}
