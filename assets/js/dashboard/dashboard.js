"use strict";

// Class definition
var KTWidgets = function() {

    // Private functions
    var _daterangepickerInit = function() {
        if ($('#kt_dashboard_daterangepicker').length == 0) {
            return;
        }

        var picker = $('#kt_dashboard_daterangepicker');
        var start = moment();
        var end = moment();

        function cb(start, end, label) {
            var title = '';
            var range = '';

            if ((end - start) < 100 || label == 'Today') {
                title = 'Today:';
                range = start.format('MMM D');
            } else if (label == 'Yesterday') {
                title = 'Yesterday:';
                range = start.format('MMM D');
            } else {
                range = start.format('MMM D') + ' - ' + end.format('MMM D');
            }

            picker.find('#kt_dashboard_daterangepicker_date').html(range);
            picker.find('#kt_dashboard_daterangepicker_title').html(title);
        }

        picker.daterangepicker({
            direction: KTUtil.isRTL(),
            startDate: start,
            endDate: end,
            opens: 'left',
            applyClass: "btn btn-sm btn-primary",
            cancelClass: "btn btn-sm btn-secondary",
            ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
            }
        }, cb);

        cb(start, end, '');
    }

    // Stats widgets
    var _initStatsWidget2 = function() {
        var element = document.getElementById("kt_stats_widget_2_chart");
        if (!element) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data:investChannelsData ,
                    backgroundColor: [
                        KTApp.getSettings()['colors']['theme']['base']['danger'],
                        KTApp.getSettings()['colors']['theme']['base']['info'],
                        KTApp.getSettings()['colors']['theme']['base']['primary']
                    ]
                }],
                labels: investChannelsName
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: true,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: true,
                    backgroundColor: KTApp.getSettings()['colors']['theme']['base']['primary'],
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }
// Stats widgets
    var _kt_stats_widget_view_chart = function() {
        var element = document.getElementById("kt_stats_widget_view_chart");
        if (!element) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data:investChannelsData ,
                    backgroundColor: [
                        KTApp.getSettings()['colors']['theme']['base']['danger'],
                        KTApp.getSettings()['colors']['theme']['base']['info'],
                        KTApp.getSettings()['colors']['theme']['base']['primary']
                    ]
                }],
                labels: investChannelsName
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: true,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: true,
                    backgroundColor: KTApp.getSettings()['colors']['theme']['base']['primary'],
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }

    // COMMISSION
    // Stats widgets
    var commission  = function() {
        var element = document.getElementById("kt_stats_widget_commission_chart");

        if (!element) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'bar',
            data: {
                datasets: [{
                    data: commissionData,
                    backgroundColor: backgroundColors
                }],
                labels: labels
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: true,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: true,
                    backgroundColor: KTApp.getSettings()['colors']['theme']['base']['primary'],
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }


    // COMMISSION END

    // COMMISSION
    // Stats widgets
    var revenue = function() {
        var element = document.getElementById("kt_stats_widget_revenue_chart");

        if (!element) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'bar',
            data: {
                datasets: [{
                    data: revenueData,
                    backgroundColor: backgroundColors
                }],
                labels: labels
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: true,
                    mode: 'nearest',
                    bodySpacing: 10,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: true,
                    backgroundColor: KTApp.getSettings()['colors']['theme']['base']['primary'],
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                },
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }  
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }


    // COMMISSION END

    // Stats widgets
    var _initStatsWidgetSubs = function() {
        var element = document.getElementById("kt_stats_widget_3_chartsubs");

        if (!element) {
            return;
        }

        var randomScalingFactor = function() {
            return Math.round(Math.random() * 100);
        };

        var config = {
            type: 'doughnut',
            data: {
                datasets: [{
                    data: investChannelsDataSub,
                    backgroundColor: [
                        KTApp.getSettings()['colors']['theme']['base']['danger'],
                        KTApp.getSettings()['colors']['theme']['base']['info'],
                        KTApp.getSettings()['colors']['theme']['base']['primary']
                    ]
                }],
                labels: investChannelsNameSub
            },
            options: {
                cutoutPercentage: 75,
                responsive: true,
                maintainAspectRatio: true,
                legend: {
                    display: false,
                    position: 'top',
                },
                title: {
                    display: false,
                    text: 'Technology'
                },
                animation: {
                    animateScale: true,
                    animateRotate: true
                },
                tooltips: {
                    enabled: true,
                    intersect: true,
                    mode: 'nearest',
                    bodySpacing: 5,
                    yPadding: 10,
                    xPadding: 10,
                    caretPadding: 0,
                    displayColors: true,
                    backgroundColor: KTApp.getSettings()['colors']['theme']['base']['primary'],
                    titleFontColor: '#ffffff',
                    cornerRadius: 4,
                    footerSpacing: 0,
                    titleSpacing: 0
                }
            }
        };

        var ctx = element.getContext('2d');
        var myDoughnut = new Chart(ctx, config);
    }



    var _initChartsWidget2 = function() {
        var element = document.getElementById("kt_charts_widget_2_chart");

        if (!element) {
            return;
        }

        var options = {
            series: [{
                name: 'Net Profit',
                data: [30, 40, 60, 50, 70, 50, 70]
            }, {
                name: 'Revenue',
                data: [35, 45, 65, 55, 75, 55, 75]
            }],
            chart: {
                type: 'bar',
                height: 350,
                toolbar: {
                    show: false
                }
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: ['30%'],
                    endingShape: 'rounded'
                },
            },
            legend: {
                show: false
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                show: true,
                width: 2,
                colors: ['transparent']
            },
            xaxis: {
                categories: ['1 Aug', '2 Aug', '3 Aug', '4 Aug', '5 Aug', '6 Aug', '7 Aug'],
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false
                },
                labels: {
                    style: {
                        colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                        fontSize: '12px',
                        fontFamily: KTApp.getSettings()['font-family']
                    }
                }
            },
            yaxis: {
                labels: {
                    style: {
                        colors: KTApp.getSettings()['colors']['gray']['gray-500'],
                        fontSize: '12px',
                        fontFamily: KTApp.getSettings()['font-family']
                    }
                }
            },
            fill: {
                opacity: 1
            },
            states: {
                normal: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                hover: {
                    filter: {
                        type: 'none',
                        value: 0
                    }
                },
                active: {
                    allowMultipleDataPointsSelection: false,
                    filter: {
                        type: 'none',
                        value: 0
                    }
                }
            },
            tooltip: {
                style: {
                    fontSize: '12px',
                    fontFamily: KTApp.getSettings()['font-family']
                },
                y: {
                    formatter: function(val) {
                        return "$" + val + " thousands"
                    }
                }
            },
            colors: [KTApp.getSettings()['colors']['theme']['base']['primary'], KTApp.getSettings()['colors']['theme']['light']['primary']],
            grid: {
                borderColor: KTApp.getSettings()['colors']['gray']['gray-200'],
                strokeDashArray: 4,
                yaxis: {
                    lines: {
                        show: true
                    }
                }
            }
        };

        var chart = new ApexCharts(element, options);
        chart.render();
    }
    // Public functions
    return {
        init: function() {
            // Init Daterangepicker
            _daterangepickerInit();

            // Init Stats Widgets
            _initStatsWidget2();
             revenue();
             commission();
            _initStatsWidgetSubs();

            // Init MIxed Widgets

            // Init Charts Widgets
            _initChartsWidget2();
        }
    }
}();

// Webpack support
if (typeof module !== 'undefined') {
    module.exports = KTWidgets;
}

jQuery(document).ready(function() {
    KTWidgets.init();
});
