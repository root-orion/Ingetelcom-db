//Project:	Alpino - Responsive Bootstrap 4 Template
//Primary use:	Alpino - Responsive Bootstrap 4 Template
$(function() {
    "use strict";	
	MorrisArea();
});

$(function () {   
    $('.sparkline-pie').sparkline('html', {
        type: 'pie',
        offset: 90,
        width: '138px',
        height: '138px',
        sliceColors: ['#454c56', '#61ccb7', '#5589cd']
    })

    $("#sparkline14").sparkline([8,2,3,7,6,5,2,1,4,8], {
        type: 'line',
        width: '100%',
        height: '28',
        lineColor: '#3f7dc5',
        fillColor: 'transparent',
        spotColor: '#000',
        lineWidth: 1,
        spotRadius: 2,        

    });
    $("#sparkline15").sparkline([2,3,9,1,2,5,4,7,8,2], {
        type: 'line',
        width: '100%',
        height: '28',
        lineColor: '#e66990',
        fillColor: 'transparent',
        spotColor: '#000',
        lineWidth: 1,
        spotRadius: 2,
    });
   
    $('.sparkbar').sparkline('html', {
        type: 'bar',
        height: '100',
        width: '100%',        
        barSpacing: '20',
        barColor: '#e56590',
        negBarColor: '#4ac2ae',
        responsive: true,
    });
});

// Morris-chart
function MorrisArea() {
    Morris.Area({
        element: 'm_area_chart',
        data: [{
                period: '2011',
                iphone: 45,
                ipad: 75,
                itouch: 18
            }, {
                period: '2012',
                iphone: 130,
                ipad: 110,
                itouch: 82
            }, {
                period: '2013',
                iphone: 80,
                ipad: 60,
                itouch: 85
            }, {
                period: '2014',
                iphone: 78,
                ipad: 205,
                itouch: 135
            }, {
                period: '2015',
                iphone: 180,
                ipad: 124,
                itouch: 140
            }, {
                period: '2016',
                iphone: 105,
                ipad: 100,
                itouch: 85
            },
            {
                period: '2017',
                iphone: 210,
                ipad: 180,
                itouch: 120
            }
        ],
        xkey: 'period',
        ykeys: ['iphone', 'ipad', 'itouch'],
        labels: ['iPhone', 'iPad', 'iPod Touch'],
        pointSize: 3,
        fillOpacity: 0,
        pointStrokeColors: ['#222222', '#cccccc', '#f96332'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 2,
        hideHover: 'auto',
        lineColors: ['#222222', '#cccccc', '#f96332'],
        resize: true

    });
    Morris.Area({
        element: 'm_area_chart2',
        data: [{
                period: '2012',
                SiteA: 10,
                SiteB: 0,

            }, {
                period: '2013',
                SiteA: 126,
                SiteB: 78,

            }, {
                period: '2014',
                SiteA: 78,
                SiteB: 58,

            }, {
                period: '2015',
                SiteA: 89,
                SiteB: 185,

            }, {
                period: '2016',
                SiteA: 175,
                SiteB: 124,

            }, {
                period: '2017',
                SiteA: 126,
                SiteB: 102  ,

            }
        ],
        xkey: 'period',
        ykeys: ['SiteA', 'SiteB'],
        labels: ['Site A', 'Site B'],
        pointSize: 0,
        fillOpacity: 0.4,
        pointStrokeColors: ['#9e9e9e', '#457fca'],
        behaveLikeLine: true,
        gridLineColor: '#e0e0e0',
        lineWidth: 0,
        smooth: false,
        hideHover: 'auto',
        lineColors: ['#9e9e9e', '#457fca'],
        resize: true

    });
}

//======
$(window).on('scroll',function() {
    $('.card .sparkline').each(function() {
        var imagePos = $(this).offset().top;

        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow + 400) {
            $(this).addClass("pullUp");
        }
    });
});



