

function getAllDataFromAPI() {

    let table1 = "";
    table1 += "<table>";
    table1 += "<tr>";
    table1 += "<td>" + "1" + "</td>";
    table1 += "<td>" + "101" + "</td>";
    table1 += "<td>" + "qui est esse" + "</td>";
    table1 += "<td>" + "et iusto sed quo iure voluptatem occaecati omnis eligendi aut ad voluptatem doloribus vel accusantium quis pariatur molestiae porro eius odio et labore et velit aut" + "</td>";
    table1 += "</tr>";
    table1 += "</table>";

    var xmlHttp = new XMLHttpRequest();
    xmlHttp.open("POST", "https://jsonplaceholder.typicode.com/posts", false); // false for synchronous request
    xmlHttp.send(table1);

    console.log(xmlHttp);
    return xmlHttp.responseText;
}

let allData = JSON.parse(getAllDataFromAPI());

console.log(allData);




