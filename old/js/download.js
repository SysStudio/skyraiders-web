$(document).ready(function() {
   $("#download-link-mac").click(function() {
       setActiveTab("mac");
   });
   $("#download-link-windows").click(function() {
       setActiveTab("windows");
   });
   $("#download-link-linux").click(function() {
       setActiveTab("linux");
   })
   switch(getOS()) {
       case "windows":  setActiveTab("windows"); break;
       case "mac":      setActiveTab("mac"); break;
       case "unix":
       case "linux":
       default:         setActiveTab("linux"); break;
   }
});

function resetTabPane() {
   $("#download-tab-mac").removeClass("active");
   $("#download-tab-windows").removeClass("active");
   $("#download-tab-linux").removeClass("active");
   $("#download-content-pane").removeClass("mac").removeClass("windows").removeClass("linux");
}

function setActiveTab(tabName) {
    console.log(tabName);
    resetTabPane();
    $("#download-content-pane").addClass(tabName);
    $("#download-tab-" + tabName).addClass("active");
}

function getOS() {
    var osName="unknown";
    if (navigator.appVersion.indexOf("Win")!=-1) osName="windows";
    if (navigator.appVersion.indexOf("Mac")!=-1) osName="mac";
    if (navigator.appVersion.indexOf("X11")!=-1) osName="unix";
    if (navigator.appVersion.indexOf("Linux")!=-1) osName="linux";
    return osName;
}