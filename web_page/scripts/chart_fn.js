let data = {};
function setUpChart() {
    console.log("aaa");
    let arr = [];
    // css_root = document.querySelector(':root');
    // // Set the value of variable --blue to another value (in this case "lightblue")
    // css_root.style.setProperty('--bar_hight', 100);
    let chart = document.getElementById("chart1");
    // let columns = chart.rows[0].cells;
    // let col_cnt = chart.rows[0].cells.length;
    // let color_arr = ["red", "green", "blue", "yellow", "purple", "orange", "black", "aqua"];
    // for (let i = 0; i < col_cnt; i++) {
    //     columns[i].firstChild.firstChild.style["height"] = "" + i*14.3 + "%";
    //     columns[i].firstChild.firstChild.style["background-color"] = color_arr[i];
    //     // columns[i].style["background-color"] = "green";
    //     // columns[i].style["hight"] = i*14.3 + "%";
    //     console.log("aaa2");
    // } 
    // Math.floor(Math.random() * 10);
    // --good: #08c915;
    // --nodata: #aaaaaa;
    // --avrg: #ffcc00;
    // --bad: #f10000;
    const cols = 8;
    let html_string = "";
    for (let i = 0; i < cols; i++) {
        let good_percentage = Math.floor(Math.random() * 80) + 1;
        let second_bar = Math.floor(Math.random() * 100) + 1;
        let data_points = Math.floor(Math.random() * 1000);
        html_string +=`
        <th class="cell">
            <div class="chart_cell">
                <div class="bar" style="height: 100%;">
                    <div class="bar_cell" style="
                        --bar_cell_height:` + good_percentage + `%;
                        --bar_cell_cnt: 2;
                        background-color: var(--good);
                    "></div>
                    <div class="bar_cell" style="
                        --bar_cell_height:` + (100 - good_percentage) + `%;
                        --bar_cell_cnt: 2;
                        background-color: var(--bad);
                    "></div>
                </div>
                <div class="bar" style="height: ` + second_bar + `%;">
                    <div class="bar_cell" style="
                        background-color: blue;
                    "></div>
                </div>
            </div>
            <span class="details_info2">Detiled info:<br>Good: ` + good_percentage + `%<br>Bad: ` + (100 - good_percentage) + `%<br>Data2: ` + second_bar + `%<br>Data points: ` + data_points + `</span>
        </th>`;
    }
    chart.rows[0].innerHTML += html_string;
    html_string = "";
    for (let i = 0; i < cols; i++) {
        html_string += "<th class='chart_legend'>col" + (i + 1) + "</th>";
    }
    chart.rows[1].innerHTML += html_string;
    
}
