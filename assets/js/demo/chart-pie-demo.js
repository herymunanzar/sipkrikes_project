// Set new default font family and font color to mimic Bootstrap's default styling
Chart.defaults.global.defaultFontFamily = 'Nunito', '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
Chart.defaults.global.defaultFontColor = '#858796';

// get data from database
var getRepair_Accepted;
var getRepair_Part_Replacement_Process;
var getRepair_Product_Replacement_Process;
var getRepair_Part_Replacement_Finish;
var getRepair_Product_Replacement_Finish;
var getRepair_Reassembly_Finish;
var getRepair_Give_Up_Repair_Finish;
var getRepair_Instruction_for_Operation_Finish;
var getRepair_Device_Breakdown_Finish;
var getRepair_Sistem_Recovery_Finish;
var getRepair_Software_Update_Finish;

$.ajax({
  type: "POST",
  url: location.origin+"/Home/ajax_chart",
  dataType: "json",
  success: function(get_data) {
    getRepair_Accepted                         = get_data.getRepair_Accepted;
    getRepair_Part_Replacement_Process         = get_data.getRepair_Part_Replacement_Process;
    getRepair_Product_Replacement_Process      = get_data.getRepair_Product_Replacement_Process;
    getRepair_Part_Replacement_Finish          = get_data.getRepair_Part_Replacement_Finish;
    getRepair_Product_Replacement_Finish       = get_data.getRepair_Product_Replacement_Finish;
    getRepair_Reassembly_Finish                = get_data.getRepair_Reassembly_Finish;
    getRepair_Give_Up_Repair_Finish            = get_data.getRepair_Give_Up_Repair_Finish;
    getRepair_Instruction_for_Operation_Finish = get_data.getRepair_Instruction_for_Operation_Finish;
    getRepair_Device_Breakdown_Process          = get_data.getRepair_Device_Breakdown_Process;
    getRepair_Sistem_Recovery_Finish           = get_data.getRepair_Sistem_Recovery_Finish;
    getRepair_Software_Update_Finish           = get_data.getRepair_Software_Update_Finish; 
    var ctx = document.getElementById("myPieChart");
    var myPieChart = new Chart(ctx, {
      type: 'doughnut',
      data: {
        labels: ["Accepted", 
                "Part Replacement Process", 
                "Product Replacement Process", 
                "Part Replacement Finish", 
                "Product Replacement Finish", 
                "Reassembly Finish", 
                "Give Up Repair Finish", 
                "Instruction for Operation Finish",
                "Device Breakdown Process",
                "Sistem Recovery Finish",
                "Software Update Finish"],
        datasets: [{
          data: [getRepair_Accepted,
                 getRepair_Part_Replacement_Process,
                 getRepair_Product_Replacement_Process,
                 getRepair_Part_Replacement_Finish,
                 getRepair_Product_Replacement_Finish,
                 getRepair_Reassembly_Finish,
                 getRepair_Give_Up_Repair_Finish,
                 getRepair_Instruction_for_Operation_Finish,
                 getRepair_Device_Breakdown_Process,
                 getRepair_Sistem_Recovery_Finish,
                 getRepair_Software_Update_Finish],
          backgroundColor: ['#7CFC00',  //untuk warna Accepted
                            '#F0E68C',  //untuk warna Part Replacement Process
                            '#FFE4C4',  //untuk warna Product Replacement Process
                            '#ADD8E6',  //untuk warna Part Replacement Finish
                            '#98FB98',  //untuk warna Product Replacement Finish
                            '#EEE8AA',  //untuk warna Reassembly Finish
                            '#AEAA00',  //untuk warna Give Up Repair Finish
                            '#FAF0E6',  //untuk warna Instruction for Operation Finish
                            '#E6E6FA',  //untuk warna Device Breakdown Process
                            '#FAF099',  //untuk warna Sistem Recovery Finish
                            '#E6E699'], //untuk warna Software Update Finish
          hoverBackgroundColor: ['#00FF00',
                                 '#FFD700',
                                 '#FF7F50',
                                 '#1E90FF',
                                 '#2E8B57',
                                 '#CD853F',
                                 '#FF0000',
                                 '#BA55D3',
                                 '#20B2AA',
                                 '#BA5588',
                                 '#20B288'],
          hoverBorderColor: "rgba(234, 236, 244, 1)",
        }],
      },
      options: {
        maintainAspectRatio: false,
        tooltips: {
          backgroundColor: "rgb(255,255,255)",
          bodyFontColor: "#858796",
          borderColor: '#dddfeb',
          borderWidth: 1,
          xPadding: 15,
          yPadding: 15,
          displayColors: false,
          caretPadding: 10,
        },
        legend: {
          display: false
        },
        cutoutPercentage: 80,
      },
    });
  },
  error: function(error) {
    alert(error);
  } 
});



// Pie Chart Example

