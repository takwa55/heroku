 
       <script src="{{asset('admin/js/core/popper.min.js') }}"></script>
       <script src="{{asset('admin/js/core/bootstrap.min.js') }}"></script>
       <script src="{{asset('admin/js/plugins/perfect-scrollbar.min.js') }}"></script>
       <script src="{{asset('admin/js/plugins/smooth-scrollbar.min.js') }}"></script>
       <script src="{{asset('admin/js/plugins/bootstrap.bundle.min.js') }}"></script>
       <script src="{{asset('admin/js/plugins/chartjs.min.js') }}"></script>
       <script src="{{asset('admin/js/plugins/moment.min.js') }}"></script>
     
  <script>
    var ctx1 = document.getElementById("chart-line").getContext("2d");

    var gradientStroke1 = ctx1.createLinearGradient(0, 230, 0, 50);

    gradientStroke1.addColorStop(1, 'rgba(94, 114, 228, 0.2)');
    gradientStroke1.addColorStop(0.2, 'rgba(94, 114, 228, 0.0)');
    gradientStroke1.addColorStop(0, 'rgba(94, 114, 228, 0)');
    new Chart(ctx1, {
      type: "line",
      data: {
        labels: ["Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
        datasets: [{
          label: "Mobile apps",
          tension: 0.4,
          borderWidth: 0,
          pointRadius: 0,
          borderColor: "#5e72e4",
          backgroundColor: gradientStroke1,
          borderWidth: 3,
          fill: true,
          data: [50, 40, 300, 220, 500, 250, 400, 230, 500],
          maxBarThickness: 6

        }],
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        plugins: {
          legend: {
            display: false,
          }
        },
        interaction: {
          intersect: false,
          mode: 'index',
        },
        scales: {
          y: {
            grid: {
              drawBorder: false,
              display: true,
              drawOnChartArea: true,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              padding: 10,
              color: '#fbfbfb',
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
          x: {
            grid: {
              drawBorder: false,
              display: false,
              drawOnChartArea: false,
              drawTicks: false,
              borderDash: [5, 5]
            },
            ticks: {
              display: true,
              color: '#ccc',
              padding: 20,
              font: {
                size: 11,
                family: "Open Sans",
                style: 'normal',
                lineHeight: 2
              },
            }
          },
        },
      },
    });
  </script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script>
    var tabs = document.querySelectorAll(".tabs ul li");
      var tab_wraps = document.querySelectorAll(".tab_wrap");

      tabs.forEach(function(tab, tab_index){
        tab.addEventListener("click", function(){
          tabs.forEach(function(tab){
            tab.classList.remove("active");
          })
          tab.classList.add("active");

          tab_wraps.forEach(function(content, content_index){
            if(content_index == tab_index){
              content.style.display = "block";
            }
            else{
              content.style.display = "none";
            }
          })

        })
      })
  </script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('#example').DataTable({
        dom: 'lBfritp',
        buttons: [
          'copy', 'csv', 'pdf', 'excel', 'print'
        ]
      });
    })  
  </script>


  <script src="{{asset('admin/js/argon-dashboard.min.js') }}"></script>

  @livewireScripts
   @yield('scripts')
    