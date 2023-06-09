function getChartColorsArray(e) {
    if (null !== document.getElementById(e)) {
        var o = document.getElementById(e).getAttribute("data-colors");
        if (o) return (o = JSON.parse(o)).map(function(e) {
            var o = e.replace(" ", "");
            return -1 === o.indexOf(",") ? getComputedStyle(document.documentElement).getPropertyValue(o) || o : 2 == (e = e.split(",")).length ? "rgba(" + getComputedStyle(document.documentElement).getPropertyValue(e[0]) + "," + e[1] + ")" : o
        });
        console.warn("data-colors atributes not found on", e)
    }
}
var options, chart, worldemapmarkers, overlay, linechartcustomerColors = getChartColorsArray("customer_impression_charts"),
    chartDonutBasicColors = (linechartcustomerColors && (options = {

        series: [{
            name: "Objednávky",
            type: "area",
            data: [34, 65, 46, 68, 49, 61, 42, 44, 78, 52, 63, 67]
        }, {
            name: "Zárobky",
            type: "bar",
            data: [89250, 98580, 68740, 108870, 77540, 84030, 51240, 28570, 92570, 42360, 88510, 36570]
        }, {
            name: "Vrátenie peňazí",
            type: "line",
            data: [8, 12, 7, 17, 21, 11, 5, 9, 7, 29, 12, 35]
        }],
        chart: {
            height: 370,
            type: "line",
            toolbar: {
                show: !1
            }
        },
        stroke: {
            curve: "straight",
            dashArray: [0, 0, 8],
            width: [2, 0, 2.2]
        },
        fill: {
            opacity: [.1, .9, 1]
        },
        markers: {
            size: [0, 0, 0],
            strokeWidth: 2,
            hover: {
                size: 4
            }
        },
        xaxis: {
            categories: ["Jan", "Feb", "Mar", "Apr", "Máj", "Jún", "Júl", "Aug", "Sep", "Okt", "Nov", "Dec"],
            axisTicks: {
                show: !1
            },
            axisBorder: {
                show: !1
            },
        },
        yaxis: {
            labels: {
                formatter: e => formatNumber(e),
            }
        },
        grid: {
            show: !0,
            xaxis: {
                lines: {
                    show: !0
                }
            },
            yaxis: {
                lines: {
                    show: !1
                }
            },
            padding: {
                top: 0,
                right: -2,
                bottom: 15,
                left: 10
            }
        },
        legend: {
            show: !0,
            horizontalAlign: "center",
            offsetX: 0,
            offsetY: -5,
            markers: {
                width: 9,
                height: 9,
                radius: 6
            },
            itemMargin: {
                horizontal: 10,
                vertical: 0
            }
        },
        plotOptions: {
            bar: {
                columnWidth: "30%",
                barHeight: "70%"
            }
        },
        colors: linechartcustomerColors,
        tooltip: {
            shared: !0,
            y: [{
                formatter: function(e) {
                    return void 0 !== e ? formatNumber(e) : e
                }
            }, {
                formatter: function(e) {
                    return void 0 !== e ? formatNumber(e, 2) + " €" : e
                }
            }, {
                formatter: function(e) {
                    return void 0 !== e ? formatNumber(e) + " predajov" : e
                }
            }]
        }
    }, (chart = new ApexCharts(document.querySelector("#customer_impression_charts"), options)).render()), getChartColorsArray("store-visits-source")),
    vectorMapWorldMarkersColors = (chartDonutBasicColors && (options = {
        series: [44, 55, 41, 17, 15],
        labels: ["Priame", "Socialne sieťe", "Email", "Ostatné", "Referencie"],
        chart: {
            height: 333,
            type: "donut"
        },
        legend: {
            position: "bottom"
        },
        stroke: {
            show: !1
        },
        dataLabels: {
            dropShadow: {
                enabled: !1
            }
        },
        colors: chartDonutBasicColors
    }, (chart = new ApexCharts(document.querySelector("#store-visits-source"), options)).render()), getChartColorsArray("sales-by-locations")),
    swiper = (vectorMapWorldMarkersColors && (worldemapmarkers = new jsVectorMap({
        map: "world_merc",
        selector: "#sales-by-locations",
        zoomOnScroll: !1,
        zoomButtons: !1,
        selectedMarkers: [0, 5],
        regionStyle: {
            initial: {
                stroke: "#9599ad",
                strokeWidth: .25,
                fill: vectorMapWorldMarkersColors[0],
                fillOpacity: 1
            }
        },
        markersSelectable: !0,
        markers: [{
            name: "Palestína",
            coords: [31.9474, 35.2272]
        }, {
            name: "Rusko",
            coords: [61.524, 105.3188]
        }, {
            name: "Kanada",
            coords: [56.1304, -106.3468]
        }, {
            name: "Grónsko",
            coords: [71.7069, -42.6043]
        }],
        markerStyle: {
            initial: {
                fill: vectorMapWorldMarkersColors[1]
            },
            selected: {
                fill: vectorMapWorldMarkersColors[2]
            }
        },
        labels: {
            markers: {
                render: function(e) {
                    return e.name;
                }
            }
        },
        onRegionTooltipShow(event, tooltip) {
            let translator = new Intl.DisplayNames(['sk'], { type: 'region' });

            event.getElement().innerHTML = translator.of(tooltip);
        }
    })), new Swiper(".vertical-swiper", {
        slidesPerView: 2,
        spaceBetween: 10,
        mousewheel: !0,
        loop: !0,
        direction: "vertical",
        autoplay: {
            delay: 2500,
            disableOnInteraction: !1
        }
    })),
    layoutRightSideBtn = document.querySelector(".layout-rightside-btn");
layoutRightSideBtn && (Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function(e) {
    var o = document.querySelector(".layout-rightside-col");
    e.addEventListener("click", function() {
        o.classList.contains("d-block") ? (o.classList.remove("d-block"), o.classList.add("d-none")) : (o.classList.remove("d-none"), o.classList.add("d-block"))
    })
}), window.addEventListener("resize", function() {
    var e = document.querySelector(".layout-rightside-col");
    e && Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function() {
        window.outerWidth < 1699 || 3440 < window.outerWidth ? e.classList.remove("d-block") : 1699 < window.outerWidth && e.classList.add("d-block")
    })
}), overlay = document.querySelector(".overlay")) && document.querySelector(".overlay").addEventListener("click", function() {
    1 == document.querySelector(".layout-rightside-col").classList.contains("d-block") && document.querySelector(".layout-rightside-col").classList.remove("d-block")
}), window.addEventListener("load", function() {
    var e = document.querySelector(".layout-rightside-col");
    e && Array.from(document.querySelectorAll(".layout-rightside-btn")).forEach(function() {
        window.outerWidth < 1699 || 3440 < window.outerWidth ? e.classList.remove("d-block") : 1699 < window.outerWidth && e.classList.add("d-block")
    })
});
