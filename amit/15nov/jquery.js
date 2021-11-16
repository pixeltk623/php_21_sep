$(document).ready(function () {

    let allItems = [
        { pname: "Product1", price: 1000 },
        { pname: "Product1", price: 1200 },
        { pname: "Product1", price: 1400 },
        { pname: "Product1", price: 1450 },
        { pname: "Product1", price: 1600 },
        { pname: "Product1", price: 1700 },
        { pname: "Product1", price: 1750 },
        { pname: "Product1", price: 1800 },
        { pname: "Product1", price: 1950 },
        { pname: "Product1", price: 2000 },
    ]

    console.log(allItems[2].price);

    htmlOptionMin = '';
    for (let priceMin = 1000; priceMin <= 2000;) {

        htmlOptionMin += "<option value='" + priceMin + "'>" + priceMin + "</option>";

        priceMin = priceMin + 200;
    }

    //console.log(htmlOptionMax);
    $("#min").html(htmlOptionMin);



    htmlOptionMax = '';
    for (let priceMax = 1000; priceMax <= 2000;) {

        if (priceMax == 2000) {
            var selected = "selected";
        } else {
            selected = '';
        }

        htmlOptionMax += "<option value='" + priceMax + "' " + selected + ">" + priceMax + "</option>";

        priceMax = priceMax + 200;
    }

    //console.log(htmlOptionMax);
    $("#max").html(htmlOptionMax);

    let html = '';

    html += "<table border='1' style='border-collapse: collapse;' width='100%'>";
    html += "<tr>";
    html += "<th>Name</th>";
    html += "<th>Price</th>";
    html += "</tr>";

    for (var i = 0; i < allItems.length; i++) {
        html += "<tr>";
        html += "<td>" + allItems[i].pname + "</td>";
        html += "<td>" + allItems[i].price + "</td>";
        html += "</tr>";
    }
    html += "</table>";

    $("#myTable").html(html);


    $(document).on("change", "#range", function () {

        var priceSelected = $(this).val()

        console.log(priceSelected);

        $("#max").val(priceSelected);

        // htmlOptionMaxChange = '';
        // for (let priceMaxChange = 1000; priceMaxChange <= priceSelected;) {

        //     if (priceMaxChange == priceSelected) {
        //         var selected = "selected";
        //     } else {
        //         selected = '';
        //     }

        //     htmlOptionMaxChange += "<option value='" + priceMaxChange + "' " + selected + ">" + priceMaxChange + "</option>";

        //     priceMaxChange = priceMaxChange + 200;
        // }

        // //console.log(htmlOptionMax);
        // $("#max").html(htmlOptionMaxChange);

        let html = '';

        html += "<table border='1' style='border-collapse: collapse;' width='100%'>";
        html += "<tr>";
        html += "<th>Name</th>";
        html += "<th>Price</th>";
        html += "</tr>";

        for (var i = 0; i < allItems.length; i++) {
            html += "<tr>";
            
            if (allItems[i].price <= priceSelected) {
                html += "<td>" + allItems[i].pname + "</td>";
                html += "<td>" + allItems[i].price + "</td>";
            }
            html += "</tr>";
        }
        html += "</table>";

        $("#myTable").html(html);



        htmlOptionMinChange = '';
        for (let priceMinChange = 1000; priceMinChange < priceSelected;) {

            htmlOptionMinChange += "<option value='" + priceMinChange + "'>" + priceMinChange + "</option>";

            priceMinChange = priceMinChange + 200;
        }

        // console.log(htmlOptionMax);
        $("#min").html(htmlOptionMinChange);



        let maxPrice = priceSelected;
        let minPrice = $("#min").val()

        console.log(maxPrice, minPrice);


    });

    $(document).on("change", "#max", function () {
        var priceSelected = $(this).val()

        console.log(priceSelected);
        $("#range").val(priceSelected)


        htmlOptionMinChange = '';
        for (let priceMinChange = 1000; priceMinChange < priceSelected;) {

            htmlOptionMinChange += "<option value='" + priceMinChange + "'>" + priceMinChange + "</option>";

            priceMinChange = priceMinChange + 200;
        }

        // console.log(htmlOptionMax);
        $("#min").html(htmlOptionMinChange);

        let html = '';

        html += "<table border='1' style='border-collapse: collapse;' width='100%'>";
        html += "<tr>";
        html += "<th>Name</th>";
        html += "<th>Price</th>";
        html += "</tr>";

        for (var i = 0; i < allItems.length; i++) {
            html += "<tr>";
            
            if (allItems[i].price <= priceSelected) {
                html += "<td>" + allItems[i].pname + "</td>";
                html += "<td>" + allItems[i].price + "</td>";
            }
            html += "</tr>";
        }
        html += "</table>";

        $("#myTable").html(html);
    });


    $(document).on("click", "button", function () {
        //$("#test").text("Hello This is Kumar");
        //$("#test").html("<h1>Hello This is Kumar</h1>");

        //console.log( $("#name").val() );

        //console.log( $("#name").val(5) );
    });
});