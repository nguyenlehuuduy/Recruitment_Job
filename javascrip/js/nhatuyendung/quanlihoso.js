am4core.ready(function() {

    // Themes begin
    am4core.useTheme(am4themes_animated);
    // Themes end

    var chart = am4core.create("chartdiv", am4charts.SlicedChart);
    chart.hiddenState.properties.opacity = 0; // this makes initial fade in effect

    chart.data = [{
        "name": "Chưa Có",
        "value": 400
    }, {
        "name": "1 Năm",
        "value": 300
    }, {
        "name": "3 Năm",
        "value": 200
    }, {
        "name": "5 Năm",
        "value": 180
    }, {
        "name": "Trên 5 Năm",
        "value": 50
    }, ];

    var series = chart.series.push(new am4charts.FunnelSeries());
    series.colors.step = 2;
    series.dataFields.value = "value";
    series.dataFields.category = "name";
    series.alignLabels = true;

    series.labelsContainer.paddingLeft = 15;
    series.labelsContainer.width = 200;

    //series.orientation = "horizontal";
    //series.bottomRatio = 1;

    chart.legend = new am4charts.Legend();
    chart.legend.position = "left";
    chart.legend.valign = "bottom";
    chart.legend.margin(5, 5, 20, 5);

}); // end am4core.ready()