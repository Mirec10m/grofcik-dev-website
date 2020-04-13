
/*
 Template Name: Lexa - Responsive Bootstrap 4 Admin Dashboard
 Author: Themesbrand
 File: Dashboard init js
 */

!function($) {
    "use strict";

    var Dashboard = function() {};

    //creates area chart
    Dashboard.prototype.createAreaChart = function (element, pointSize, lineWidth, data, xkey, ykeys, labels, lineColors) {
        Morris.Area({
            element: element,
            pointSize: 0,
            lineWidth: 1,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            labels: labels,
            resize: true,
            gridLineColor: '#eee',
            hideHover: 'auto',
            lineColors: lineColors,
            fillOpacity: .9,
            behaveLikeLine: true
        });
    },

    //creates Donut chart
    Dashboard.prototype.createDonutChart = function (element, data, colors) {
        Morris.Donut({
            element: element,
            data: data,
            resize: true,
            colors: colors
        });
    },

    //creates Stacked chart
    Dashboard.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eee',
            barColors: lineColors
        });
    },

    $('#sparkline').sparkline([8, 6, 4, 7, 10, 12, 7, 4, 9, 12, 13, 11, 12], {
        type: 'bar',
        height: '134',
        barWidth: '10',
        barSpacing: '7',
        barColor: '#ec536c'
    });


    Dashboard.prototype.init = function() {

        //creating area chart
        var $areaData = [
            {y: '2011', a:0},
            {y: '2012', a:15},
            {y: '2013', a:195},
            {y: '2014', a:21},
            {y: '2015', a:360},
            {y: '2016', a:120},
            {y: '2017', a:345},
            {y: '2018', a:390},
            {y: '2019', a:224},
            {y: '2020', a:297},
        ];
        this.createAreaChart('morris-area-example', 0, 0, $areaData, 'y', ['a'], ['Objednávky'], ['#ec536c']);

        //creating donut chart
        var $donutData = [
            {label: "Produkt č. 2", value: 12},
            {label: "Produkt č. 1", value: 30},
            {label: "Produkt č. 3", value: 20}
        ];
        this.createDonutChart('morris-donut-example', $donutData, ['#f0f1f4', '#ec536c', '#fab249']);

        var $stckedData  = [
            { y: '2009', a: 100},
            { y: '2010', a: 75},
            { y: '2011', a: 50},
            { y: '2012', a: 79},
            { y: '2013', a: 50},
            { y: '2014', a: 75},
            { y: '2015', a: 189},
            { y: '2016', a: 80},
            { y: '2017', a: 45},
            { y: '2018', a: 75},
            { y: '2019', a: 110},
            { y: '2020', a: 75},
        ];
        this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a'], ['Príjem'], ['#fab249']);

    },
    //init
    $.Dashboard = new Dashboard, $.Dashboard.Constructor = Dashboard
}(window.jQuery),

//initializing
function($) {
    "use strict";
    $.Dashboard.init();
}(window.jQuery);
