// svg path for target icon
var targetSVG = "M9,0C4.029,0,0,4.029,0,9s4.029,9,9,9s9-4.029,9-9S13.971,0,9,0z M9,15.93 c-3.83,0-6.93-3.1-6.93-6.93S5.17,2.07,9,2.07s6.93,3.1,6.93,6.93S12.83,15.93,9,15.93 M12.5,9c0,1.933-1.567,3.5-3.5,3.5S5.5,10.933,5.5,9S7.067,5.5,9,5.5 S12.5,7.067,12.5,9z";

var map = AmCharts.makeChart("chartdiv", {
   type: "map",
   "theme": "none",

   imagesSettings: {
      rollOverColor: "#089282",
      rollOverScale: 3,
      selectedScale: 3,
      selectedColor: "#089282",
      color: "#13564e"
   },

   areasSettings: {
      unlistedAreasColor: "#15A892",
      outlineThickness: 0.1
   },

   dataProvider: {
      map: "worldLow",
      lines: [{
         id: "Jerusalem-NY",
         arc: -0.85,
         alpha: 5,
         latitudes: [31.76, 40.7127],
         longitudes: [35.17, -74.0059]
      //}, {
      //   id: "line2",
      //   alpha: 0,
      //   color: "#000000",
      //   latitudes: [48.8567, 43.8163, 34.3, 23],
      //   longitudes: [2.3510, -79.4287, -118.15, -82]
      }],
      images: [{
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Vienna",
         latitude: 48.2092,
         longitude: 16.3728
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Minsk",
         latitude: 53.9678,
         longitude: 27.5766
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Brussels",
         latitude: 50.8371,
         longitude: 4.3676
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 1,
         title: "Nicolle law office in Paris<br>Jerome Nicolle +33 1 25 87 66 19<br>http://ec.europa.eu/justice/data-protection/index_en.htm",
         latitude: 48.8567,
         longitude: 2.3510
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Berlin",
         latitude: 52.5235,
         longitude: 13.4115
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Luxembourg",
         latitude: 49.6100,
         longitude: 6.1296
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Moscow",
         latitude: 55.7558,
         longitude: 37.6176
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "London",
         latitude: 51.5002,
         longitude: -0.1262
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Dhaka",
         latitude: 23.7106,
         longitude: 90.3978
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Phnom Penh",
         latitude: 11.5434,
         longitude: 104.8984
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Peking",
         latitude: 39.9056,
         longitude: 116.3958
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 1,
         title: "New Delhi Software Outsourcing<br>Rajabun Jain +91-11-3284-6325<br>http://www.lexology.com/library/detail.aspx?g=5e567142-bd88-4c00-a1ea-71203e02614d",
         latitude: 28.6353,
         longitude: 77.2250
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Jakarta",
         latitude: -6.1862,
         longitude: 106.8063
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Teheran",
         latitude: 35.7061,
         longitude: 51.4358
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 1,
         title: "Jerusalem technologies startup<br>Moshe Yossef +972-52-689-5342<br>http://www.tamas.gov.il/NR/exeres/271F57DC-6A6D-4E57-BA8F-B34D9DA9A08B.htm",
         latitude: 31.76,
         longitude: 35.17
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Kuwait",
         latitude: 29.3721,
         longitude: 47.9824
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Kuala Lumpur",
         latitude: 3.1502,
         longitude: 101.7077
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Manila",
         latitude: 14.5790,
         longitude: 120.9726
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Doha",
         latitude: 25.2948,
         longitude: 51.5082
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Singapore",
         latitude: 1.2894,
         longitude: 103.8500
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Seoul",
         latitude: 37.5139,
         longitude: 126.9828
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Bangkok",
         latitude: 13.7573,
         longitude: 100.5020
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Ankara",
         latitude: 39.9439,
         longitude: 32.8560
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Abu Dhabi",
         latitude: 24.4764,
         longitude: 54.3705
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Hanoi",
         latitude: 21.0341,
         longitude: 105.8372
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Buenos Aires",
         latitude: -34.6118,
         longitude: -58.4173
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Brasilia",
         latitude: -15.7801,
         longitude: -47.9292
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Ottawa",
         latitude: 45.4235,
         longitude: -75.6979
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Havana",
         latitude: 23.1333,
         longitude: -82.3667
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Lima",
         latitude: -12.0931,
         longitude: -77.0465
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Washington",
         latitude: 38.8921,
         longitude: -77.0241
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 1.5,
         title: "New York headquarter<br>John Minz 212-728-2473<br>https://foia.state.gov/Learn/PrivacyAct.aspx",
         latitude: 40.7127, 
         longitude: -74.0059
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Chicago",
         latitude: 41.8369,
         longitude: -87.6847
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 1,
         title: "Los Angeles partner<br>Julios Grabes 310-727-5311<br>https://foia.state.gov/Learn/PrivacyAct.aspx",
         latitude: 34.0500,
         longitude: -118.2500
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 1,
         title: "Intergy Sydney health consulting<br>John Doe +61-1-342-609-595<br>https://www.oaic.gov.au/privacy-law/privacy-act/",
         latitude: -33.8650,
         longitude: 151.2094
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Cairo",
         latitude: 30.0571,
         longitude: 31.2272
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Addis Abeba",
         latitude: 9.0084,
         longitude: 38.7575
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Nairobi",
         latitude: -1.2762,
         longitude: 36.7965
      },  {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Rabat",
         latitude: 33.9905,
         longitude: -6.8704
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Pretoria",
         latitude: -25.7463,
         longitude: 28.1876
      }, {
         svgPath: targetSVG,
         zoomLevel: 5,
         scale: 0.5,
         title: "Tunis",
         latitude: 36.8117,
         longitude: 10.1761
      }]
   },
   "export": {
      "enabled": true
   }
});