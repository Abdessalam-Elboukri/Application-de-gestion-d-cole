console.log('hi')
function popup(url, width, height) {
    var left = (screen.width/2)-(width/2);
    var top = (screen.height/2)-(height/2);
    return window.open(url, "", "toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=no, resizable=no, copyhistory=no, width="+width+", height="+height+", top="+top+", left="+left);
}
//create a ssidebar button
// var button = document.createElement("button");
// button.innerHTML = "Open Sidebar";
// button.addEventListener("click", function() {
//     popup("http://www.google.com", 500, 500);
// }
// );
document.body.appendChild(button);
//create a sidebar
var sidebar = document.createElement("div");
sidebar.id = "sidebar";
sidebar.innerHTML = "This is a sidebar";
document.body.appendChild(sidebar);
//create a sidebar button
var sidebarButton = document.createElement("button");
sidebarButton.innerHTML = "Close Sidebar";
sidebarButton.addEventListener("click", function() {
    sidebar.style.display = "none";
}
);
sidebar.appendChild(sidebarButton);
//create a sidebar button
var sidebarButton = document.createElement("button");
sidebarButton.innerHTML = "Open Sidebar";
sidebarButton.addEventListener("click", function() {
    sidebar.style.display = "block";
}
);


