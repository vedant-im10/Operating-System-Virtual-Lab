var dataPoints0 = []; //Main_algo
var dataPoints1 = []; //FCFS
var dataPoints2 = []; //SSTF
var dataPoints3 = []; //SCAN
var dataPoints4 = []; //C-SCAN
var dataPoints5 = []; //LOOK
var dataPoints6 = []; //C-LOOK
var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: "Graph",
  },
  axisX: {
    spacing: "2%",
    interval: 5,
    viewportMinimum: 0,
    viewportMaximum: 100,
    labelAutoFit: true,
  },
  toolTip: {
    shared: false,
    enabled: false,
    content: "{name}<hr/>x:{x} y:{y}<hr/>",
  },
  legend: {
    cursor: "pointer",
    verticalAlign: "top",
    hotizontalAlign: "center",
    dockInsidePlotArea: true,
    itemclick: toogleDataSeries,
  },
  data: [
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints0,
    },
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints1,
    },
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints2,
    },
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints3,
    },
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints4,
    },
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints5,
    },
    {
      type: "line",
      name: "name",
      showInLegend: false,
      dataPoints: dataPoints6,
    },
  ],
});
chart.render();
function toogleDataSeries(e) {
  if (typeof e.dataSeries.visible === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  chart.render();
}
