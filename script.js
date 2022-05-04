console.log('hi')
//function o sidebar
const side_btn = document.querySelector('.side-btn');
const side_menu = document.querySelector('.side-menu');
const main = document.querySelector('.content');
// const sidebar_responsive = document.querySelector('.sidebar_responsive');
// let sidebar_width = side_menu.offsetWidth;

side_btn.addEventListener('click', function(){
    side_menu.classList.toggle('d-none')
})

const p_infos = document.querySelectorAll(".profile-info");
p_infos.forEach(info => {
  info.addEventListener('click', function(){
  let copy_text = inf.previousElementSibling.textContent;
    let textarea = document.createElement('textarea');
    textarea.value = copy_text;
    document.body.appendChild(textarea);
    textarea.select();
    document.execCommand('copy');
    textarea.remove();
  })
});























































































  //create a chart using chart.js
  var ctx = document.getElementById('myChart'); 
  var chart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
      datasets: [{
        label: 'New Students',
        backgroundColor: 'rgb(36, 175, 255)',
        borderColor: 'rgb(36, 175, 255)',
        data: [5, 10, 5, 2, 20, 30, 45, 12, 10, 5, 2, 20]
      },
      {
        label: 'New Courses',
        backgroundColor: 'rgb(255, 58, 186)',
        borderColor: 'rgb(255, 58, 186)',
        data: [20, 30, 25, 5, 22, 30, 45, 33, 15, 17, 10, 5]
      }]
    },
  });

  // //create a chart using chart.js
  // var ctx = document.getElementById('myChart2');
  // var chart = new Chart(ctx, {
  //   type: 'bar',
  //   data: {
  //     labels: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
  //     datasets: [{
  //       label: 'New Students',
  //       backgroundColor: 'rgb(36, 175, 255)',
  //       borderColor: 'rgb(36, 175, 240)',
  //       data: [5, 10, 5, 2, 20, 30, 45, 12, 10, 5, 2, 20]
  //     }]
  //   },
  // });
//create a circle chart using chart.js
var ctx = document.getElementById('myChart2');
var chart = new Chart(ctx, {
  type: 'doughnut',
  data: {
    labels: ['jan', 'feb', 'mar', 'apr', 'may', 'jun', 'jul', 'aug', 'sep', 'oct', 'nov', 'dec'],
    datasets: [{
      label: 'New Students',
      hoverBackgroundColor: ['rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)', 'rgb(36, 175, 255)'],
      backgroundColor: ['rgb(36, 175, 255)', 'red', 'orange', 'pink', 'purple', 'green', 'yellow', 'cyan', 'gray', 'darkgreen', 'violet', 'blue'],
      borderColor: ['rgb(36, 175, 255)', 'red', 'orange', 'pink', 'purple', 'green', 'yellow', 'cyan', 'gray', 'darkgreen', 'violet', 'blue'],
      data: [5, 10, 5, 2, 20, 30, 45, 12, 10, 5, 2, 20]
    }]
  },
});

  