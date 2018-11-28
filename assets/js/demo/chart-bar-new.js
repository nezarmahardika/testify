/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
new Chart(document.getElementById("bar-chart"), {
    type: 'bar',
    data: {
        labels: ["Passed", "Retest", "Failed", "Untested"],
        datasets: [
            {
                label: "Number of test cases:",
                backgroundColor: ['#8bc34a', '#ffeb3b', '#ff5252', '#6c757d'],
                data: [2478, 1500, 734, 784]
            }
        ]
    },
    options: {
        legend: {display: false},
        title: {
            display: true,
            text: 'Another bar chart'
        }
    }
});

